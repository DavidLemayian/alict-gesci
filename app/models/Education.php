<?php

class Education extends Eloquent {
  protected $guarded = [];

  public static $rules =
  [
		'highest_qualification' => 'required',
		'graduation_year'       => 'required|numeric|between:1950,2013',
		'institution'           => 'required',
		'country'               => 'required'
	];

  public static $qualifications =
  [
    'PhD', 'Masters', 'Bachelors Honours', 'Bachelors 1st Class', 'Bachelors 2nd Class', 'Bachelors 3rd Class', 'Bachelors Pass',
  ];

  public function user()
  {
    return $this->belongsTo('User');
  }
}
