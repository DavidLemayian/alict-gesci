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

  public static $delivery = ['Online', 'Face-to-Face', 'Blended (Both)'];

  public function user()
  {
    return $this->belongsTo('User');
  }
}
