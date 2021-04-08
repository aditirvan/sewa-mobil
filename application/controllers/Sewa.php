<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa extends CI_Controller
{

	public function index()
	{

		$data = array(
			'page' => 'Sewa'
		);

		$this->load->view('header', $data);
		$this->load->view('sewa-home');
		$this->load->view('footer');
	}
}
