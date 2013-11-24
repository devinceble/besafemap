<?php

class Message extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'text' => 'required',
		'type' => 'required',
		'picture' => 'required',
		'status' => 'required'
	);
}
