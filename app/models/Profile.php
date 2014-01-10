<?php

class Profile extends Eloquent {
	protected $guarded = [];

	public static $rules =
	[
		'firstname'   => 'required',
		'lastname'    => 'required',
		'country'     => 'required',
		'gender'      => 'required',
		'dob'         => 'required|date|date_format:Y-m-d',
		'nationality' => 'required',
		'workaddress' => 'required',
		'email'       => 'required|unique:users,email',
		'mobile'      => 'required|min:10|regex:/^\+/',
		'passport'    => 'required',
	];

	public function user()
	{
		return $this->belongsTo('User');
	}
}
