<?php
/**
* Reminders Controller
*/
class RemindersController extends BaseController
{
  public function submissionRemindar()
  {
    if (Input::has('token'))
    {
      $applications = EmailReminder::where('sent', 0)->get();
      $data = array();
      foreach ($applications as $application) {
        Mail::queue('applications.emails.reminder', $data, function($message) use ($application)
        {
            $message->to($application->email)->subject('ALICT course 2014! [Reminder]');

        });

        DB::table('email_reminders')->where('id', $application->id)->increment('sent');
      }

      return  "Email Reminders Sent out";
    }

    return "I see you.";
  }

  public function applicationProfile()
  {
    if (Input::has('token'))
    {
      $applications = DB::table('users')
        ->join('applications', 'applications.user_id', '=', 'users.id')
        ->whereNotNull('submitted_at')
        ->get();
      foreach ($applications as $application) {
        $data = ['user' => User::find($application->user_id), 'profile' => Application::find($application->id)];
        Mail::queue('applications.emails.submission', $data, function($message) use ($application)
        {
            $message->to($application->email)->subject('ALICT course 2014! Application Profile [Updated]');
        });
      }
    }
    else{
      return 'I see you.';
    }
  }
}
