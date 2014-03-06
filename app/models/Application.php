<?php

/**
* Application Model
*/
class Application extends Eloquent
{
  protected $guarded = [];

  public static $rules =
  [
    'profiles'     => 'required',
    'educations'   => 'required',
    'courses'      => 'required',
    'works'        => 'required',
    'skills'       => 'required',
    'supervisors'  => 'required',
    'languages'    => 'required',
    'statements'   => 'required',
    'declarations' => 'required',
  ];

  public static function boot()
  {
    parent::boot();

    // Setup event bindings...
    static::saving(function($model)
    {
      if(!is_null($model->submitted_at))
      {
        $user = User::find($model->user_id);
        $data = ['user' => $user, 'profile' => $user->application, 'supervisor' => $user->supervisor];
        // Send user confirmation email for profile submission
        Mail::send('applications.emails.submission', $data, function($message) use ($user)
        {
          $message->subject('ALICT Course - Submission Confirmation');
          $message->to($user->email);
        });

        // Send alert to supervisor different template with different text
        Mail::send('applications.emails.alert', $data, function($message) use ($user)
        {
          $message->subject('ALICT Course - Submission Alert');
          $message->to($user->supervisor->primary_email);
        });
      }
    });

  }


  public function user()
  {
    return $this->belongsTo('User');
  }
}
