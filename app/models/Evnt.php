<?php

class Evnt extends Eloquent {
    protected $guarded = array();
    protected $softDelete = True;

   public static $rules = array(
    	'name' => 'required',
      'flier' => 'image|mime:jpg,gif,png|max:3000'
    	);

   public function Venue(){

   	return $this->BelongsTo('venue');
   }

   public function User(){
   	return $this->BelongsTo('user');
   }
}


