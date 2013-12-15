<?php

class Supervisor extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'firstname'       => 'required',
		'lastname'        => 'required',
		'title'           => 'required',
		'work_mobile'     => 'unique:profiles,mobile',
		'telephone'       => 'unique:profiles,mobile',
		'primary_email'   => 'required|email|unique:supervisors,primary_email|unique:supervisors,secondary_email',
		'secondary_email' => 'email|unique:supervisors,primary_email|unique:supervisors,secondary_email'
	);

	public static $updateRules = array(
		'firstname'       => 'required',
		'lastname'        => 'required',
		'title'           => 'required',
		'work_mobile'     => 'unique:profiles,mobile',
		'telephone'       => 'unique:profiles,mobile',
		'primary_email'   => 'required|email',
		'secondary_email' => 'email'
	);

	public function user()
	{
		return belongsTo('User');
	}
}
