<?php

class UserController extends BaseController {

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


	public function showProfile($id){
			if(Session::get('_cert_id')){$id = Session::get('_cert_id');}
		$jid = json_decode($id);
		return View::make('user.user_profile')
		->with('pagetitle', 'Home')
		->with('user', UserPr::where('id', '=', $jid->id)->first())
		->with('lic', UserCertMain::where('type', '=', 'License')->where('cert_exp', '>', Carbon::now())->where('uid', '=', $jid->id)->orderBy($jid->sort, $jid->updown)->get())
		->with('exp_lic', UserCertMain::where('type', '=', 'License')->where('cert_exp', '<', Carbon::now())->where('uid', '=', $jid->id)->orderBy($jid->sort, $jid->updown)->get())
		->with('certs', UserCertMain::where('type', '=', 'Certificate')->where('cert_exp', '>', Carbon::now())->where('uid', '=', $jid->id)->orderBy($jid->sort, $jid->updown)->get())
		->with('exp_certs', UserCertMain::where('type', '=', 'Certificate')->where('cert_exp', '<', Carbon::now())->where('uid', '=', $jid->id)->get())
		->with('id', $jid);
	}
	

	public function showHistory(){
		$id = Session::get('uid');
		return View::make('user.cert_history')
		->with('pagetitle', 'Home')
		->with('user', UserPr::where('uid', '=', $id)->first())
		->with('certs', CertMain::get());
	}

	public function admin_profile()
	{
		return View::make('user.admin_tools', array())
		->with('pagetitle', 'Administration');
	}


	public function make_userShow(){
		return View::make('user.make_user', array())
		->with('pagetitle', 'New Employees')
		->with('ssize', ShirtSize::lists('size'));
	}








	public function make_userDo(){


		$user = new UserPr;

			$user->f_name = Input::get('f_name');
			$user->m_name = Input::get('m_name');
			$user->l_name = Input::get('l_name');
			$user->street1 = Input::get('street1');
			$user->street2 = Input::get('street2');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip = Input::get('zip');
			$user->phone = Input::get('phone');
			$user->email = Input::get('email');
			$user->dob = Carbon::parse(Input::get('dob'));
			$user->hire_date = Carbon::parse(Input::get('hire_date'));
			$user->shirt_size = Input::get('shirt_size');
			$user->jacket_size = Input::get('jacket_size');

		$user->save();

		return Redirect::route('user_profile')
		->with('_cert_id', json_encode(array('id',
			'id' => $insertedId = $user->id,
			'sort' => 'created_at',
			'updown' => 'desc',
			)));
	}

	public function user_updateShow($id){
		return View::make('user.user_update')
		->with('pagetitle', 'Update Employee')
		->with('user', UserPr::where('id', '=', $id)->first())
		->with('ssize', ShirtSize::lists('size'));
	}

	public function update_userDo(){
		$user = UserPr::where('id', '=', Input::get('uid'))->first();


			$user->f_name = Input::get('f_name');
			$user->m_name = Input::get('m_name');
			$user->l_name = Input::get('l_name');
			$user->street1 = Input::get('street1');
			$user->street2 = Input::get('street2');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip = Input::get('zip');
			$user->phone = Input::get('phone');
			$user->email = Input::get('email');
			$user->dob = Carbon::parse(Input::get('dob'));
			$user->hire_date = Carbon::parse(Input::get('hire_date'));
			$user->active = Input::get('active');
			$user->shirt_size = Input::get('shirt_size');
			$user->jacket_size = Input::get('jacket_size');
		$user->save();

		return Redirect::back();

	}

	public function user_listShow(){
		return View::make('user.list', array())
		->with('pagetitle', 'Employee List')
		->with('users', UserPr::where('active', '!=', 1)->get())
		->with('deusers', UserPr::where('active', '=', 1)->get());
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
				Session::put('uid', User::where('username', '=', $username)->where('password', '=', $password)->pluck('id'));
			return View::make('user.create_users', array())
			->with('pagetitle', "$username Profile")
			->with('user', UserPr::where('uid', '=', Session::get('uid'))->first())
			->with('certs', CertMain::get());

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