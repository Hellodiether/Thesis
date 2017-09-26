<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('index');
	}

	
	public function compose()
	{
		$this->load->view('pages/mailbox/compose');
	}

	public function mailbox()
	{
		$this->load->view('pages/mailbox/mailbox');
	}

	public function readmail()
	{
		$this->load->view('pages/mailbox/read-mail');
	}
	public function calendar()
	{
		$this->load->view('pages/calendar');
	}
	public function simple()
	{
		$this->load->model('tables_model');
		$data['inquiry'] = $this->tables_model->getInquiry('inquires');
		$this->load->view('pages/tables/simple', $data);
	}
	}	
