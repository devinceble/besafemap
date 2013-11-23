<?php

class User extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'username' => 'required',
		'password' => 'required',
		'type' => 'required',
		'status' => 'required'
	);
}
