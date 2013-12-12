<?php
	class StaticController extends BaseController
	{

		public function contact()
		{
			return View::make('static.contact');
		}

		public function sendcontact()
		{
			$data = array( 

				'name'=>Input::get('name'),
				'detail'=>Input::get('detail'),
				'email' => Input::get('email')
				);
			$rules =  array(
				'name'=>'required',
				'detail'=> 'required',
				'email' =>'required|email'

				);

			$v = Validator::make($data, $rules);
			if($v->fails())
			{
				return  Redirect::to('/contact')->withErrors($v)->withinput();

			}
			Mail::send('static.message',$data,function($message)
			{
				$message->to('kimfraser@gmail.com','kim Fraser')->subject('Getnycevent - Message');
				

				
			});
		return  Redirect::to('/contact')->with('message','Thank You, I have receieve your message.');

		}

	}