<?php

class Evnt extends Eloquent {
    protected $guarded = array();
    protected $softDelete = True;

   public static $rules = array(
    	'name' => 'required',
      'admission' => 'required',
      'detail' => 'required'
    	);
   public static $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

   public function getDates(){
    return['created_ad','updated_at','deleted_at','when'];
   }
   public function Venue(){

   	return $this->BelongsTo('Venue');
   }

   public function User(){
   	return $this->BelongsTo('User');
   }
}


