<?php

class Statement extends Eloquent {
	protected $guarded = [];

	public static $rules =
  [
    'statement_one' => 'required',
    'statement_two' => 'required',
		'statement_three' => 'required',
	];

  public function user()
  {
    return $this->belongsTo('User');
  }
}
