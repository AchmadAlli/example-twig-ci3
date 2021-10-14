<?php

class Actor extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  protected $first_name;
  protected $last_name;

  public function getFullName(){
    return $this->first_name . " " . $this->last_name;
  }

  public function getAll(){
    return $this->db->query('SELECT * FROM actor')->result(2, 'TestActor');
  }

}