<?php

class CertMain extends Eloquent {

	protected $fillable = array(
		'name',
		'type',
		'term',
		'term_',
		'reminder_term',
		'reminder_term_',
		'desc',
		'active',
		 );
	
	protected $table = 'certification_list';
}