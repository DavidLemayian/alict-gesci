<?php
/**
* Remindars Controller
*/
class RemindarsController extends BaseController
{
  public function index()
  {
    $incomplete_applications = DB::table('users')
            ->join('applications', 'users.id', '=', 'applications.user_id')
            ->whereNull('applications.submitted_at')
            ->get();
    foreach($incomplete_applications as $incomplete)
    {
      $data = [];
      Mail::queue('applications.emails.reminder', $data, function($message)
      {
          $message->to($incomplete->email)->subject('ALICT course 2014! [Reminder]');
      });
    }
  }
}
