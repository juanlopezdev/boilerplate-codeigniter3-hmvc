<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends MX_Controller {

  public function __construct() {
    parent::__construct();

    // Modelos
    $this->load->model('User_model');
  }

  public function index() {
    $users = $this->User_model->get_all();
    echo $users;
  }

  public function new_user() {
    $this->load->view('user_new');
  }

}
