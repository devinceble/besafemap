<?php

class Location extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'latitude' => 'required',
		'longtitude' => 'required',
		'status' => 'required'
	);
}
