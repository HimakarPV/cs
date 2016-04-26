<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
		return view('frontend.index');
	});
	Route::get('/form', 'PublicController@index');
	Route::post('/form','PublicController@show');
	Route::post('/index1','PublicController@show');

	Route::get('/index1', 'PublicController@index1');
	Route::get('/index1data', 'PublicController@index1data');

	Route::get('contact', function () {
		return view('frontend.contact');
	});
	Route::get('/display','PublicController@show');
	Route::get('test','PublicController@test');
	Route::post('/form-data', 'PublicController@formdata');
});

Route::get('/sample',function(){return view('sample');});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => 'web'], function () {

	$a='auth.';
	Route::get('/login', ['as'=>$a.'login','uses'=>'Auth\AuthController@getLogin']);
	Route::post('login',['as'=>$a.'login-post','uses'=>'Auth\AuthController@postLogin']);
	Route::get('/register', ['as'=>$a.'register','uses'=>'Auth\AuthController@getRegister']);
	Route::post('/register', ['as'=>$a.'register-post','uses'=>'Auth\AuthController@postRegister']);
	Route::get('/password',['as'=>$a.'password','uses'=>'Auth\PasswordController@getPasswordReset']);
	Route::post('/password',['as'=>$a.'password-post','uses'=>'Auth\PasswordController@postPasswordReset']);
	Route::get('/password/{token}',['as'=>$a.'reset','uses'=>'Auth\PasswordController@getPasswordResetForm']);
	Route::post('/password/{token}',['as'=>$a.'reset-post','uses'=>'Auth\PasswordController@postPasswordResetForm']);

	$s='public.';
	Route::get('/public',['as'=>$s.'home','uses'=>'PagesController@getHome']);
	Route::get('/home', 'HomeController@index');

	Route::group(['prefix'=>'admin','middleware'=>'auth:administrator'], function(){
		$a="admin.";
		Route::get('/',['as'=>$a.'index','uses'=>'Admin\AdminController@index']);
		Route::get('/adminData','Admin\AdminController@adminData');
		Route::post('/poststep', ['as'=>$a.'poststep', 'uses'=>'Admin\AdminController@step']);
		Route::post('/',['as'=>$a.'crimetype','uses'=>'Admin\AdminController@crimetype']);
		Route::post('/question',['as'=>$a.'question','uses'=>'Admin\AdminController@question']);
	});

	Route::group(['prefix'=>'user','middleware'=>'auth:user'], function(){
		$a="user.";
		Route::get('/',['as'=>$a.'home','uses'=>'UserController@getHome']);
	});

	Route::group(['middleware'=>'auth:all'],function(){
		$a='authenticated.';
		Route::get('/logout',['as'=>$a.'logout','uses'=>'Auth\AuthController@getLogout']);
	});

	
});

Route::group(['middleware'=>'web'],function()	{
	$s='social.';
	Route::get('/social/redirect/{provider}', ['as'=>$s.'redirect','uses'=>'Auth\AuthController@getSocialRedirect']);
	Route::get('/social/handle/{provider}', ['as'=>$s.'handle','uses'=>'Auth\AuthController@getSocialHandle']);
});