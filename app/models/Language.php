<?php

class Language extends Eloquent {
  protected $guarded = [];

  public static $rules =
  [
    'spoken_english' => 'required',
		'written_english' => 'required',
	];

  public static $spoken_english = ['Fluent', 'Good Command', 'Basic'];
  public static $written_english = ['Excellent' , 'Good', 'Basic'];

  public function user()
  {
    return $this->belongsTo('User');
  }
}
