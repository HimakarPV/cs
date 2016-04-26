<?php

namespace cs\Http\Controllers\Auth;

use cs\Models\User;
use Validator;
use cs\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use cs\Logic\User\UserRepository;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Contracts\Auth\Guard;
use cs\Models\Social;
use cs\Models\Role;
use Illuminate\Http\Request;
use Auth;
use Config;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */


    protected $auth;
    protected $userRepository;
    // /**
    //  * Where to redirect users after login / registration.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';

    // /**
    //  * Create a new authentication controller instance.
    //  *
    //  * @return void
    //  */
    public function __construct(Guard $auth, UserRepository $userRepository)
    {
        $this->auth = $auth;
        $this->userRepository = $userRepository;
    }

    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|max:255',
    //         'email' => 'required|email|max:255|unique:users',
    //         'password' => 'required|confirmed|min:6',
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return User
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }

    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');

        if ($this->auth->attempt([
            'email'=>$email,
            'password'=>$password
            ], $remember == 1 ? true : false)) {

            if ($this->auth->user()->hasRole('user')) {
                return redirect()->route('user.home');
            }

            if ($this->auth->user()->hasRole('administrator')) {
                return redirect()->route('admin.index');
            }
        }

        else{
            return redirect()->back()->with('message','Incorrect email or password')->with('status','danger')->withInput();
        }
    }

    public function getLogout(){
        Auth::logout();

        return redirect()->route('auth.login')->with('status','success')->with('message','Logged Out');
    }

    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        $input = $request->all();
        $this->validate($request, User::$rules, User::$messages);

        // if ($this->validate()->fails()) {
        //     return redirect()->back()->withErrors('info', 'Could not signin with those credentials...!')->withInput();
        // }
        // dd($request->input('email'));

        $data = [
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'password'=>$request->input('password')
        ];

        $this->userRepository->register($data);

        return redirect()->route('auth.login')->with('status','success')->with('message','You are registered successfully. Please Login..');
    }

    public function getSocialRedirect($provider){

        $providerKey = config('services.'.$provider);
        if(empty($providerKey)){
            return view('pages.status')->with('error','No Such Provider');
        }

        return Socialite::driver($provider)->redirect();
    }

    public function getSocialHandle(Request $request, $provider){

        $user = Socialite::driver($provider)->user();        
        
        // $code = $request->input('code');
        // if (!$code) {
        //     return redirect()->route('auth.login')->with('status','danger')->with('message','You did not share your profile data with our social app..');
        // }
        // // if(!$provider=='twitter'){
        // //     if (!$user->email) {
        // //         return redirect()->route('auth.login')->with('status','danger')->with('message','You did not share your email with our social app..');
        // //     }
        // // }
        $socialUser = null;

        //Check is this email present
        $userCheck = User::where('email','=',$user->email)->where('name','=',$user->name)->first();
        if(!empty($userCheck)){
            $socialUser = $userCheck;
        }
        else{
            $sameSocialId = Social::where('social_id','=',$user->id)->where('provider','=',$provider)->first();

            if(empty($sameSocialId)){
                //There is no combination of this social id and provider so create new one
                $newSocialUser = new User;
                $newSocialUser->email = $user->email;
                $newSocialUser->name = $user->name;
                $newSocialUser->save();

                $socialData = new Social;
                $socialData->social_id = $user->id;
                $socialData->provider=$provider;
                $newSocialUser->social()->save($socialData);

                //Add role
                $role = Role::whereName('user')->first();
                $newSocialUser->assignRole($role);

                $socialUser = $newSocialUser;

            }
            else{
                //Load this existing social user
                $socialUser = $sameSocialId->user;
            }
        }



        $this->auth->login($socialUser, true);

        if($this->auth->user()->hasRole('user')){
            return redirect()->route('user.home');
        }

        if($this->auth->user()->hasRole('administrator')){
            return redirect()->route('admin.index');
        }

        return App::abort(500);
    }
}
