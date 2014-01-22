<?php

class Profile extends Eloquent {
	protected $guarded = [];

	public static $rules =
	[
		'firstname'   => 'required',
		'lastname'    => 'required',
		'country'     => 'required',
		'gender'      => 'required',
		'day'         => 'required',
		'month'       => 'required',
		'year'        => 'required',
		'nationality' => 'required',
		'workaddress' => 'required',
		'email'       => 'required|unique:users,email',
		'mobile'      => 'required|min:10|regex:/^\+/',
		'passport'    => 'required',
	];

	public static $gender = [ 'Female', 'Male' ];

	public function user()
	{
		return $this->belongsTo('User');
	}
}
