<?php

class Statement extends Eloquent {
  protected $guarded = [];

  public static $rules =
  [
    'statement_one'   => 'required|word_count:100',
    'statement_two'   => 'required|word_count:100',
    'statement_three' => 'required|word_count:100',
	];

  public function user()
  {
    return $this->belongsTo('User');
  }
}
