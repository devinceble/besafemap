<?php

class Place extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'address' => 'required',
		'type' => 'required',
		'status' => 'required'
	);
}
