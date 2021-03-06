<?php

class Declaration extends Eloquent {
  protected $guarded = [];

  public static $rules =
  [
		'one'   => 'accepted',
		'two'   => 'accepted',
		'three' => 'accepted',
    'four'  => 'accepted',
		'five'  => 'accepted',
	];

  public function user()
  {
    return $this->belongsTo('User');
  }
}
