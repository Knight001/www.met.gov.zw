<?php

/**
 *
 */
class Home extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
  }
  function index()
  {
    $data['page_class'] = 'login-page';
    $data['title'] = 'Login';
    $data['content_view'] = 'Home/login_v';
    $this->template->login_template($data);
  }
  function register()
  {
    $data['page_class'] = 'register-page';
    $data['title'] = 'Registration';
    $data['content_view'] = 'Home/register_v';
    $this->template->login_template($data);
  }
}
