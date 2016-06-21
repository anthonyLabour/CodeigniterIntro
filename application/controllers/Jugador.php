
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jugador extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Jugador_Model');
  }

  function index()
  {
    $data = array();
    $data ['Equipo'] = $this->Jugador_Model->getTeam();
    $this->load->view('Templates/Header.php');
  $this->load->view("Jugador/index.php", $data);
  $this->load->view('Templates/Footer.php');
  }

public function guarda()
{
if($_POST)
{
  $this->Jugador_Model->save($_POST);
}

$data = array();
$data['Jugador'] = $this->Jugador_Model->getPlayers();
$this->load->view('Templates/Header.php');
$this->load->view('Jugador/Listado.php', $data);
$this->load->view('Templates/Footer.php');
}




}
