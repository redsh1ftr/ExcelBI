<?php

class CertController extends BaseController {

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

	public function cert_listShow()
	{
		return View::make('certifications.certification_list', array())
			->with('pagetitle', 'Qualification List')
			->with('lics', CertMain::where('type', '=', 'License')->orderBy('name')->get())
			->with('certs', CertMain::where('type', '=', 'Certificate')->orderBy('name')->get());
	}


	public function cert_profileShow($id){
	$certificate = CertMain::where('id', '=', $id)->first();
		return View::make('certifications.certification_profile', array())
		->with('pagetitle', $certificate->name)
		->with('certs', $certificate);
	}


	public function make_certShow(){
		return View::make('certifications.make_cert', array())
		->with('pagetitle', 'Add Qualifications')
		->with('lics', CertMain::where('type', '=', 'License')->orderBy('name')->get())
		->with('certs', CertMain::where('type', '=', 'Certificate')->orderBy('name')->get());
	}


	public function make_certDo(){
		CertMain::create(array(
			'name' => Input::get('name'),
			'type' => Input::get('type'),
			'term' => Input::get('term'),
			'term_' => Input::get('term_'),
			'reminder_term' => Input::get('reminder_term'),
			'reminder_term_' => Input::get('reminder_term_'),
			'desc' => Input::get('desc'),
			));
		return Redirect::route('cert_listShow');
	}

	public function make_user_certShow($id){
		return View::make('certifications.make_user_cert', array())
		->with('pagetitle', 'Add a Qualification')
		->with('id', $id)
		->with('user', UserPr::where('id', '=', $id)->first())
		->with('user_certs', UserCertMain::where('uid', '=', $id)->get())
		->with('cert_list', CertMain::get());
	}


	public function make_user_certDo(){
		$userid = Input::get('id');
		$newtime = Input::get('cert_recd');

		$r_term = CertMain::where('id', '=', Input::get('cert_id'))->pluck('reminder_term'); //get the certification expiration number
		$r_term_ = CertMain::where('id', '=', Input::get('cert_id'))->pluck('reminder_term_'); //get the certification expiration value (addyears, addmonths)

		$cert_term = CertMain::where('id', '=', Input::get('cert_id'))->pluck('term'); //get the certification expiration number
		$cert_term_ = CertMain::where('id', '=', Input::get('cert_id'))->pluck('term_'); //get the certification expiration value (addyears, addmonths)


		$expires = Carbon::parse($newtime); //make a new time for carbon to play with
		$expires->$cert_term_($cert_term);

		$reminder = Carbon::parse($newtime); //make a new time for carbon to play with
		$reminder->$cert_term_($cert_term);
		$reminder->$r_term_($r_term);
		
		
//HANDLE IMAGES		
	if(Input::file('certificate')){
				$newfile = str_random(124);
				$file = Input::file('certificate'); // your file upload input field in the form should be named 'file'
				$destinationPath = 'uploads/';
				$filename = $file->getClientOriginalExtension($file);
				//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
				$uploadSuccess = Input::file('certificate')->move($destinationPath, "$newfile.$filename");

		UserCertMain::create(array(
			'uid' => Input::get('uid'),
			'cert_id' => Input::get('cert_id'),
			'cert_recd' => Carbon::parse(Input::get('cert_recd')),
			'cert_exp' => $expires,
			'reminder' => $reminder,
			'type' => CertMain::where('id', '=', Input::get('cert_id'))->pluck('type'),
			'certificate' => "$newfile.$filename",
			));
		return Redirect::route('user_profile')
		->with('_cert_id', json_encode(array('id',
			'id' => $userid,
			'sort' => 'created_at',
			'updown' => 'desc',
			)));

	}else{

		UserCertMain::create(array(
			'uid' => Input::get('uid'),
			'cert_id' => Input::get('cert_id'),
			'cert_recd' => Carbon::parse(Input::get('cert_recd')),
			'cert_exp' => $expires,
			'reminder' => $reminder,
			'type' => CertMain::where('id', '=', Input::get('cert_id'))->pluck('type'),
			));

		return Redirect::route('user_profile')
		->with('_cert_id', json_encode(array('id',
			'id' => $userid,
			'sort' => 'created_at',
			'updown' => 'desc',
			)));


	}}


	public function user_certShow($id){
		$user_cert = UserCertMain::where('id', '=', $id)->first();
		return View::make('certifications.user_cert_profile', array())
		->with('pagetitle', 'Detail')
		->with('id', $id)
		->with('user', UserPr::where('id', '=', $user_cert->uid)->first())
		->with('cert', $user_cert);
	}

	public function user_cert_updateDo(){
		$cert = UserCertMain::where('id', '=', Input::get('cert_id'))->first();
		

		if($cert->certificate && Input::file('certificate')){
				$destinationPath = 'uploads/';
				//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
				$uploadSuccess = Input::file('certificate')->move($destinationPath, $cert->certificate);

		} elseif(Input::file('certificate')){
				$newfile = str_random(124);
				$file = Input::file('certificate'); // your file upload input field in the form should be named 'file'
				$destinationPath = 'uploads/';
				$filename = $file->getClientOriginalExtension($file);
				//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
				$uploadSuccess = Input::file('certificate')->move($destinationPath, "$newfile.$filename");
		$cert->certificate = "$newfile.$filename";

		}

		$cert->cert_recd = Carbon::parse(Input::get('cert_recd'));
		$cert->cert_exp = Carbon::parse(Input::get('cert_exp'));
		$cert->reminder = Carbon::parse(Input::get('reminder'));

		$cert->save();

		return Redirect::back();
	}



		public function update_certDo(){

		$cert = CertMain::where('id', '=', Input::get('cert_id'))->first();


			$cert->name = Input::get('name');
			$cert->term = Input::get('term');
			$cert->term_ = Input::get('term_');
			$cert->reminder_term = Input::get('reminder_term');
			$cert->reminder_term_ = Input::get('reminder_term_');
			$cert->desc = Input::get('desc');


		$cert->save();

		return Redirect::back();
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
			return View::make('user.user_profile', array())
			->with('pagetitle', "$username Profile")
			->with('user', UserPr::where('uid', '=', Session::get('uid'))->first())
			->with('certs', CertMain::where('uid', '=', $uid)->get());

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