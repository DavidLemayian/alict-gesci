<?php

class Course extends Eloquent {
  protected $guarded = [];

  public static $rules =
  [
		'course'          => 'required',
		'graduation_year' => 'required',
		'institution'     => 'required',
		'delivery'        => 'required',
		'qualification'   => 'required'
	];

  public function user()
  {
    return $this->belongsTo('user');
  }
}
