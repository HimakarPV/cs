<?php
namespace cs\Logic\User;

use cs\Models\Role;
use cs\Models\User;
use cs\Logic\Mailers\UserMailer;
use cs\Models\Password;
use Carbon\Carbon;

class UserRepository{

	protected $userMailer;

	public function __construct(UserMailer $userMailer){
		$this->userMailer = $userMailer;
	}

	public function register($data){

		$user = new User;
		$user->email = $data['email'];
		$user->name = ucfirst($data['name']);
		$user->password = bcrypt($data['password']);
		$user->save();

		//Assign Role

		$role=Role::whereName('user')->first();
		$user->assignRole($role);
		
	}

	public function resetPassword(User $user){
		$token = sha1(mt_rand());
		$password = new Password;
		$password->email = $user->email;
		$password->token = $token;
		$password->created_at = Carbon::now();
		$password->save();

		$data = [
		'name'=>$user->name,
		'token'=>$token,
		'subject'=>'Example.com: Password Reset Link',
		'email'=>$user->email
		];

		$this->userMailer->passwordReset($user->email, $data);
	}
}