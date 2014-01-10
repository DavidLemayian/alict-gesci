<?php

/**
* Applications Controller
*/
class ApplicationsController extends BaseController
{

  function submit()
  {
    Application::save(Auth::user());
  }
}