<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUDcontroller extends CI_Controller {
	public function  __construct()
	{
		parent:: __construct();
		$this->load->model('crudmodel');
	}
	public function index()
	{	
		$this->load->view('crudview');
	}

	public function create() {
		$this->crudmodel->createData();
		redirect("CRUDcontroller");
	}

}