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
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => array(),
        ),

        'Twitter' => array(
            'client_id'         => '7fKK14LzYN5Z38ZykJ6p3g',
            'client_secret'     => 'dqU8vrpO8KxqHvkO7CWrDQQOYehPlM9TwvcqkmI0Ts',
            'callback_url'		=> URL::to('/login/tw/callback')
        ), 		

	)

);