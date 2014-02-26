<?php
/**
* Reminders Controller
*/
class RemindersController extends BaseController
{
  public function index()
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
}
