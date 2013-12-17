<?php

class Language extends Eloquent {
	protected $guarded = [];

	public static $rules =
  [
    'spoken_english' => 'required',
		'written_english' => 'required',
	];

  public function user()
  {
    return $this->belongsTo('User');
  }
}
