<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accounts extends CI_Controller
{

	public function index()
	{

		$data = array(
			'page' => 'Accounts'
		);

		$this->load->view('header', $data);
		$this->load->view('accounts-home');
		$this->load->view('footer');
	}
}
