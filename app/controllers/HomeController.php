<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function logout()
	{
		Session::forget('uid');
		return Redirect::route('login');
	}


	public function showLogin(){
		return View::make('main.login');
	}

	public function doLogin(){
		//Validator Start
		$rules = array(
			'username' => 'required',
			'password' => 'required|min:3'
		);

		//run on input
		$validator = Validator::make(Input::all(), $rules);


		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
				$username = Input::get('username');
				$password = Input::get('password');

			// attempt to do the login
			if (User::where('username', '=', $username)->where('password', '=', $password)->first())
			{
				$uid = User::where('username', '=', $username)->where('password', '=', $password)->pluck('id');
				Session::put('uid', $uid);
			return View::make('user.list', array())
			->with('pagetitle', 'Employee List')
			->with('users', UserPr::where('active', '!=', 1)->get())
			->with('deusers', UserPr::where('active', '=', 1)->get());

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
		

			} else {	 	

				// validation not successful, send back to form	

			return Redirect::route('login');

		}
	}
}
}