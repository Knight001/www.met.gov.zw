<?php

/**
 *
 */
class Template extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
  }
  function login_template($data=NULL)
  {
    $this->load->view('Template/loginpage_v',$data);
  }
  function home_template($data=NULL)
  {
    $this->load->view('Template/admin_template_v');
  }
}
