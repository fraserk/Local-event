<?php

class Venue extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function Evnts(){
    	return $this->HasMany('Evnt');
    }
}