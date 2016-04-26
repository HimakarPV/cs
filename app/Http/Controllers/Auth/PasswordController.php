<?php

namespace cs\Http\Controllers\Auth;

use cs\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use cs\Logic\User\UserRepository;
use cs\Models\User;
use cs\Models\Password;
use Validator;
use Illuminate\Support\Facades\Request;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function getPasswordReset(){
        return view('auth.passwords.reset');
    }

    public function postPasswordReset(UserRepository $userRepository){
        $rules=['email'=>'email|required'];

        $validator=Validator::make(Request::all(),$rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withRequest();
        }

        $email = Request::get('email');
        $user = User::where('email','=',$email)->first();

        if (empty($user)) {
            return redirect()->back()->withErrors(['User with email does not exist']);
        }

        $userRepository->resetPassword($user);

        return redirect()->back()->with('status','success')->with('message','Check Your Inbox!');
    }

    public function getPasswordResetForm($token){

        return view('auth.passwords.form', compact('token'));
    }

    public function postPasswordResetForm($token){
        $rules=[
        'password'=>'required|min:6',
        'password_confirmation'=>'required|same:password'
        ];

        $validator = Validator::make(Request::all(), $rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $password = Password::where('token','=',$token)->first();
        if(empty($password)){
            return view('pages.status')->with('error','Reset token is invalid');
        }

        $user = User::where('email','=',$password->email)->first();
        $user->password = bcrypt(Request::get('password'));
        $user->save();

        $password->delete();

        return redirect()->route('auth.login')->with('status','success')->with('message','Password changed successfully..');
    }
}
