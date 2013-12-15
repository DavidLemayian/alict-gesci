<?php

class Work extends Eloquent {
	protected $guarded = array();

	public static $rules =
  [
    'sponsoring_organisation'       => 'required',
    'sector'                        => 'required',
    'role'                          => 'required',
    'number_of_years_in_org'        => 'required|numeric',
    'years_current_position'        => 'required|numeric',
    'individuals_supervised'        => 'required|numeric',
    'years_professional_experience' => 'required|numeric',
	];

  public static $sponsors =
  [
    'Ministry of Education'                              => 'Ministry of Education',
    'Ministry of Higher Education'                       => 'Ministry of Higher Education',
    'Ministry of Planning'                               => 'Ministry of Planning',
    'Ministry of Infrastructure'                         => 'Ministry of Infrastructure',
    'Ministry of Information and Communications'         => 'Ministry of Information and Communications',
    'Ministry of Science and Technology'                 => 'Ministry of Science and Technology',
    'Ministry of Environment'                            => 'Ministry of Environment',
    'Ministry of Finance'                                => 'Ministry of Finance',
    'Ministry of Youth/Youth Affairs and Sports/Culture' => 'Ministry of Youth/Youth Affairs and Sports/Culture',
    'Office of the President/Prime Minister'             => 'Office of the President/Prime Minister',
    'Public Research Institution*'                       => 'Public Research Institution*',
    'Public University*'                                 => 'Public University*',
    'Public Training Institution*'                       => 'Public Training Institution*',
    'Other – please specify*'                            => 'Other – please specify*'
  ];

  public static $roles =
  [
    'Director' => 'Director',
    'Assistant Director' => 'Assistant Director',
    'Manager' => 'Manager',
    'Specialist ' => 'Specialist',
    'Curriculum Developer' => 'Curriculum Developer',
    'Officer' => 'Officer',
    'Coordinator' => 'Coordinator',
    'Other*' => 'Other*',
  ];

  public function user()
  {
    return $this->belongsTo('User');
  }
}
