<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	
    public function index()
    {
		$this->load->view('main/header');
        $this->load->view('home');
		$this->load->view('main/footer');
    }
}
