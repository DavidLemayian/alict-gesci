<?php

class Supervisor extends Eloquent {
	protected $guarded = [];

	public static $rules =
	[
		'firstname'       => 'required',
		'lastname'        => 'required',
		'title'           => 'required',
		'work_mobile'     => 'unique:profiles,mobile',
		'telephone'       => 'unique:profiles,mobile',
		'primary_email'   => 'required|email|unique:supervisors,secondary_email',
		'secondary_email' => 'email|unique:supervisors,primary_email'
	];

	public static $updateRules =
	[
		'firstname'       => 'required',
		'lastname'        => 'required',
		'title'           => 'required',
		'work_mobile'     => 'unique:profiles,mobile',
		'telephone'       => 'unique:profiles,mobile',
		'primary_email'   => 'required|email',
		'secondary_email' => 'email'
	];

	public function user()
	{
		return belongsTo('User');
	}
}
