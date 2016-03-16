<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MiControlador extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->layout->setLayout('template1');
    }
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('mivista');
		$this->layout->view('mivista');
	}

    /**
     *
     */
    public function nosotros()
    {
        //$this->load->view('welcome_message');
        //$this->load->view('mivista');
        //$this->layout->setLayout('template2');//se establece nuevo layout para esta vista
        $this->layout->setTitle('nosotros page');
        $this->layout->setKeywords('mas keywords');
        $this->layout->setDescripcion('metadescripcion');
        $this->layout->view('nosotros');
    }
}
