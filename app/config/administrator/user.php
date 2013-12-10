<?php

	return array(
		'title' => 'User',
		'single' => 'user',
		'model' => 'User',

			'columns' => array(
				'id',
			'username' => array(
				'title' => 'Name',
				'text' => "(:table).username",
								),
			'email' => array(
				'title' => 'Email Address',
				'text' =>"(:table).email"
				)
			
			),
			'edit_fields' => array(
			'username' => array(
				'title' => 'Username',
				'type' => 'text',
				'text' => "(:table).username"
								),
			'email'=> array(
				'title' => 'Email Address',
				'type' =>'text',
				'text'=>'(:table).email'
				),
			'password' =>array(
				'type'=>'password',
				'title'=>'password'
				)
								),
					
		);