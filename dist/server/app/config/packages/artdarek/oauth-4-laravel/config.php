<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '1432359080316117',
            'client_secret' => '90f371d5c9d181aa6319419a4a75d331',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),
            
        'Google' => array(
        'client_id'     => '769021859853.apps.googleusercontent.com',
        'client_secret' => 'eL8WDGmxZ863ni9D3gPf8z8l',
        'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),  
            
	)

);