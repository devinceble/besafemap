<?php

class Token extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'private' => 'required',
		'public' => 'required',
		'status' => 'required'
	);
}
