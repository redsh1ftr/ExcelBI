<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('main.login');
});



//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//LOGIN//LOGIN//LOGIN//LOGIN//LOGIN
//LOGIN//LOGIN//LOGIN//LOGIN//LOGIN//LOGIN OUT
//LOGIN//LOGIN//LOGIN//LOGIN//LOGIN//LOGIN//LOGIN
//LOGIN//LOGIN//LOGIN//LOGIN
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/login', array('as' => 'login', 'uses' => 'HomeController@showLogin'));

Route::post('/login', array('as' => 'login', 'uses' => 'HomeController@doLogin'));

Route::get('/logout', array('as' => 'logout', 'uses' => 'HomeController@logout'));
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//USERS//USERS//USERS//USERS//USERS//USERS
//USERS//USERS//USERS//USERS//USERS//USERS//USERS//USERS
//USERS//USERS//USERS//USERS//USERS//USERS//USERS//USERS//USERS
//USERS//USERS//USERS//USERS//USERS
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//profiles
Route::get('/user/profile/{id}', array('as' => 'user_profile', 'uses' => 'UserController@showProfile'));

Route::get('/user/history/{id}', array('as' => 'cert_historyShow', 'uses' => 'UserController@showHistory'));

Route::get('user/admin/settings', array('as' => 'admin_profile', 'uses' => 'UserController@admin_profile'));

Route::get('/user/new/make', array('as' => 'make_user', 'uses' => 'UserController@make_userShow'));

Route::get('/user/list/all', array('as' => 'user_list', 'uses' => 'UserController@user_listShow'));

Route::post('/user/new/make', array('as' => 'make_user', 'uses' => 'UserController@make_userDo'));

Route::get('/user/update/{id}', array('as' => 'user_updateShow', 'uses' => 'UserController@user_updateShow'));

Route::post('/user/update/doupdate', array('as' => 'update_userDo', 'uses' => 'UserController@update_userDo'));

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//CERTIFICATIONS//CERTIFICATIONS//CERTIFICATIONS//CERTIFICATIONS//CERTIFICATIONS
//CERTIFICATIONS//CERTIFICATIONS//CERTIFICATIONS//CERTIFICATIONS//CERTIFICATIONS
//CERTIFICATIONS//CERTIFICATIONS//CERTIFICATIONS//CERTIFICATIONS
//CERTIFICATIONS//CERTIFICATIONS//CERTIFICATIONS
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//primary list

Route::get('/certifications/list', array('as' => 'cert_listShow', 'uses' => 'CertController@cert_listShow'));


//profile

Route::get('/certifications/profile/{id}', array('as' => 'cert_profileShow', 'uses' => 'CertController@cert_profileShow'));

Route::get('/certifications/usercerts/{id}', array('as' => 'user_certShow', 'uses' => 'CertController@user_certShow'));

Route::post('certifications/user/update/doupdate', array('as' => 'user_cert_update', 'uses' => 'CertController@user_cert_updateDo'));
//make

Route::get('certifications/make/new', array('as' => 'make_cert', 'uses' => 'CertController@make_certShow'));

Route::post('certifications/make/new', array('as' => 'make_cert', 'uses' => 'CertController@make_certDo'));

Route::post('certifications/update/doupdate', array('as' => 'update_certDo', 'uses' => 'CertController@update_certDo'));

//Make User

Route::get('certifications/user/add/{id}', array('as' => 'make_user_certShow', 'uses' => 'CertController@make_user_certShow'));

Route::post('certifications/user/add', array('as' => 'make_user_cert', 'uses' => 'CertController@make_user_certDo'));


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS
//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS
//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS
//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS
//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS
//EXPORTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS
//EXPORTS//EXPO//EXPORTS//EXPORTS//EXPORTS//EXPORTSRTS//EXPORTS//EXPORTS//EXPORTS//EXPORTS
//++++++++++++++++++++++++++++++++++++++++++

Route::get('users/export/excel/shirts', function(){
return

Excel::create('Shirts', function($excel) {
	
    $excel->sheet('Shirt Sizes', function($sheet) {
$shirtmodel = CertMain::get();
$sheet->fromModel($shirtmodel, null, 'A1', false, false);
        $sheet->setOrientation('landscape');

    });

})->export('xls');});



