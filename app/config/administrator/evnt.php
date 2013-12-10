<?php
	
	return [
		'title' => 'Event',
		'single' => 'Event',
		'model' =>  'Evnt',

		'columns'  => [
			'id',
			'name' =>['title'=>'Event Name','type'=>'text','text'=>'(:table)'],
			'when' =>['title'=>'Event Date','type'=>'text','date'=>'(:table)']
		],

		'edit_fields' =>[
			'name'=>['title'=>'name','type'=>'text','text'=>"(:table).name"]

		],

	];