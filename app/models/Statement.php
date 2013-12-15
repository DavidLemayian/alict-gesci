<?php

class Statement extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
    'statement_one' => 'required',
    'statement_two' => 'required',
		'statement_three' => 'required',
	);

  public function user()
  {
    return $this->belongsTo('User');
  }
}
