<?php

class UserProfile extends Eloquent {

	protected $fillable = array(
		'uid',
		'f_name',
		'm_name',
		'l_name',
		'street1',
		'street2',
		'city',
		'state',
		'zip',
		'dob',
		'phone',
		'email',
		'hire_date'
		'active',
		 );
	
	protected $table = 'user_profile';
}