<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller
{

	public function index()
	{

		$data = array(
			'page' => 'Pemilik'
		);

		$this->load->view('header', $data);
		$this->load->view('pemilik-home');
		$this->load->view('footer');
	}
}
