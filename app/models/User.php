<?php

use Zizaco\Confide\ConfideUser;

class User extends ConfideUser {

  public function profile()
  {
    return $this->hasOne('Profile');
  }

  public function education()
  {
    return $this->hasOne('Education');
  }

  public function courses()
  {
    return $this->hasMany('Course');
  }

  public function supervisor()
  {
    return $this->hasOne('Supervisor');
  }

  public function skill()
  {
    return $this->hasOne('Skill');
  }

  public function language()
  {
    return $this->hasOne('Language');
  }

  public function declaration()
  {
    return $this->hasOne('Declaration');
  }

  public function statement()
  {
    return $this->hasOne('Statement');
  }

  public function work()
  {
    return $this->hasOne('Work');
  }

}