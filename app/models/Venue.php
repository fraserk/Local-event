<?php

class Venue extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function Evnts(){
    	return $this->HasMany('Evnt');
    }

    public function User()
    {
    	return $this->belongsto('user');
    }
}