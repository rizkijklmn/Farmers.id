<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('user'))
			redirect('administrator/login');
			
		$this->load->view('app_administrator', ['data'=>['page' => 'administrator/transaction']]);
	}

}
