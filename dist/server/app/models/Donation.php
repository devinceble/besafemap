<?php

class Donation extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'location' => 'required',
		'place' => 'required',
		'status' => 'required'
	);
}
