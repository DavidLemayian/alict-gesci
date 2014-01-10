<?php

/**
* Application Model
*/
class Application extends Eloquent
{
  protected $guarded = [];

  public function user()
  {
    return $this->belongsTo('User');
  }
}