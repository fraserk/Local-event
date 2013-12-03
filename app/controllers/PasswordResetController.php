<?php
	class PasswordResetController extends BaseController {


	public function create(){

		return View::make('password_reset.create');

	}
	public function store(){
		$input = Input::all();
		$rules =  ['email'=> 'required|email'];

		$v =  Validator::make($input, $rules);

		if ($v->fails())
		{
			return Redirect::route('password_reset.create')->witherrors($v)->withInput();
		}

		$credentials = array('email' => Input::get('email'));
		Password::remind($credentials);
		return Redirect::route('password_reset.create')->withSuccess(true);
	}
	public function reset($token){

		return View::make('password_reset.reset')->withToken($token);
	}

	public function PostReset()
	{
		 $credentials = array(
        'email' => Input::get('email'),
        'password' => Input::get('password'),
        'password_confirmation' => Input::get('password_confirmation')
    );
		 return Password::reset($credentials, function($user,$password)
		 {
		 	$user->password = Hash::make($password);
		 	$user->save();

		 	return Redirect::route('login');
		 });

	}

}