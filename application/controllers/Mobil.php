<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{

	public function index()
	{

		$data = array(
			'page' => 'Mobil'
		);

		$this->load->view('header', $data);
		$this->load->view('mobil-home');
		$this->load->view('footer');
	}
}
