<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	

	public function index()
	{

		$this->load->view('partials/header');

		$this->load->view('pages/main/hero');
		$this->load->view('pages/main/announcements');
		$this->load->view('pages/main/holy-masses');
		$this->load->view('pages/main/history');
		$this->load->view('pages/main/patroness');
		
		$this->load->view('partials/footer');
	}
}
