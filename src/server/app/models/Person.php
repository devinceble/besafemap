<?php

class Person extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'firstname' => 'required',
		'lastname' => 'required',
		'middlename' => 'required',
		'age' => 'required',
		'gender' => 'required',
		'cell_number' => 'required',
		'person_status' => 'required',
		'photo' => 'required',
		'status' => 'required'
	);
}
