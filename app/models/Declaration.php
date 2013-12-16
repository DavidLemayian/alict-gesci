<?php

class Declaration extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'one'   => 'accepted',
		'two'   => 'accepted',
		'three' => 'accepted',
    'four'  => 'accepted',
		'five'  => 'accepted',
	);
}
