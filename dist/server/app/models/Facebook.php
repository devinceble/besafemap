<?php

class Facebook extends Eloquent {
	protected $guarded = array();
        protected $table = 'facebook';
	public static $rules = array(
		'name' => 'required',
		'location' => 'required',
		'place' => 'required',
		'status' => 'required'
	);
}
