<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jugador_Model extends CI_Model{

  public function __construct()
  {
          parent::__construct();
          $this->load->database();
  }


  function save ($Jugador)
  {
    $this->db->insert('Jugador', $Jugador);
  }

  function getTeam()
  {
  $query =  $this->db->get('Equipo');


    return $query->result();
  }

  function getPlayers()
  {
    $query = $this->db->get('Jugador');
    return $query->result();
  }


}
