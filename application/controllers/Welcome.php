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
	public function home(){
		$this->load->view('home');

	}
	public function about(){
		$this->load->view('about');

	}
	public function products(){
		$this->load->view('products');

	}
	public function services(){
		$this->load->view('services');

	}
	
	public function project(){
		$this->load->view('project');

	}
	public function inquiry(){
		$this->load->view('inquiry');

	}
	public function connect()
	{
		$select = $this->input->post('services');
		$newSelect = implode(',', $select);

		//print_r($newSelect);exit;
		$this->load->model('Main_model'); //load mo dito yung model mo pre
		$data = array(
			'id' => '',
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'company' => $this->input->post('company'),
			'services' => $newSelect,
			'add_info' =>$this->input->post('add_info')
		);

		$result = $this->Main_model->insert('inquires', $data);
		redirect(Welcome/index);
		
	}

	public function contact()
	{
		$this->load->model('Main_model');
		$data['inquiry'] = $this->Main_model->getInquiry('feedback');
		$this->load->view('contact', $data);
	}
	public function feedback()
	{
		$this->load->model('Main_model'); //load mo dito yung model mo pre
		$data = $this->input->post();

		$result = $this->Main_model->insert('feedback', $data);
		redirect(Welcome/index);
		
	}
}
