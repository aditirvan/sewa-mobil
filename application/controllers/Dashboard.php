<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$data = array(
			'page' => 'Dashboard'
		);

		$this->load->view('header', $data);
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
}
