<?php
defined('BASEPATH') OR exit('No Direct Allwoed');

class BukuController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BukuModel');
	}
	
	public function index()
	{
		$data['DataBuku'] = $this->BukuModel->getBook();
		$this->load->view('BukuView', $data);
	}
} 
