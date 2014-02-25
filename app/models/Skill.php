<?php

class Skill extends Eloquent {
  protected $guarded = [];

  public static $rules =
  [
    'one'     => 'required',
    'two'     => 'required',
    'three'   => 'required',
    'four'    => 'required',
    'five'    => 'required',
    'six'     => 'required',
    'seven'   => 'required',
    'eight'   => 'required',
    'nine'    => 'required',
	];

  public function user()
  {
    return $this->belongsTo('User');
  }

  public function processInput($input)
  {
    array_walk($input, function(&$value, $index){
      if (is_array($value)) $value = implode(',', $value);
    });

    return $input;
  }

  public function processRecord($record)
  {
    return explode(',', $record);
  }
}
