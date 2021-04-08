<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

	public function index()
	{

		$data = array(
			'page' => 'Pelanggan'
		);

		$this->load->view('header', $data);
		$this->load->view('pelanggan-home');
		$this->load->view('footer');
	}
}
