<?php

class UserCertMain extends Eloquent {

	protected $fillable = array(
		'uid',
		'type',
		'cert_id',
		'cert_recd',
		'cert_exp',
		'reminder',
		'certificate',
		 );
	
	protected $table = 'user_certs';
}