<?php

namespace cs\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use Authenticatable, CanResetPassword;
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsToMany('cs\Models\Role')->withTimestamps();
    }

    public function hasRole($name){
        foreach ($this->roles as $role) {
            if ($role->name == $name) {
                return true;
            }
        }
        return false;
    }

    public function assignRole($role){
        return $this->roles()->attach($role);
    }

    public function removeRole($role){
        return $this->roles()->detach($role);
    }

    public static $rules = [
    'name'=>'required',
    'email'=>'required|email|unique:users',
    'password'=>'required|min:6',
    'password_confirmation'=>'required|same:password'
    ];

    public static $messages = [
    'name.required'=>'First Name is required',
    'email.required'=>'Email is required',
    'email.email'=>'Email is invalid',
    'password.required'=>'Password is required',
    'password.min'=>'Password needs to have atleast 6 characters'
    ];

    public function social(){
        return $this->hasMany('cs\Models\Social');
    }
}
