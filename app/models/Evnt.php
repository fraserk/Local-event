<?php

class Evnt extends Eloquent {
    protected $guarded = array();
    protected $softDelete = True;

   public static $rules = array(
    	'name' => 'required'
    	);

   public function Venue(){

   	return $this->BelongsTo('venue');
   }

   public function User(){
   	return $this->BelongsTo('user');
   }
}


