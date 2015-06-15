<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Modelo Usuario
 *
 * @package Yunho
 * @subpackage Models
 * @author Juan Lopez <juanlopez.developer@gmail.com>
 */
class User_model extends CI_Model {

  /**
   * Nombre de la tabla
   */
  var $table = 'contact';

  public function __construct() {
    parent::__construct();
  }
  
  public function get_all() {
    return 'Lista de usuarios';
  }

}
