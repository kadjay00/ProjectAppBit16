<!-- 
    GREIF MATTHIAS
	LAST UPDATED: 18 03 30
	STUDENT CONTROLLER
-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		// Autoload
		$this->load->library('session');

		// Redirect to mainscreen if no session started
		if(!$this->session->has_userdata('id')){
			redirect('/main/index', 'location');
		}
	}

	public function dash($view = null, $extras = null){
		// Load models
		$this->load->model('beheer_model');

		// Load logged in user
		$data['user'] = $this->beheer_model->get_byId($this->session->userdata('id'));

		// Check if dashboard view is requested else default homeview
		if(is_null($view) )
		{
			$view = 'index';
		}

		// Load view
		$data['message'] = 'Hello there ' . $data['user']->username . ' | Dash';// Title
		$data['css_files'] = array("dash.css");									// Default dash style

		$data['primaryColor'] = 'blue';											// Primary color (purple for admin, blue for others??)
		$data['currentview'] = $view;											// Current view indicator (for navbar indicator??)
		$data['homelink'] = base_url() . 'index.php/student/dash/';				// Dash homepage
		$data['links'] = [														// Available links for navbar
			// [
			// 	'title' => 'Jaargang',
			// 	'url' => base_url() . 'index.php/admin/dash/jaargangoverzicht/'
			// ]
		];
		$data['actions'] = [
			// [
			// 	'title' => 'Administrators beheren',
			// 	'url' => base_url() . 'index.php/admin/dash/adminbeheer/'
			// ]
		];

		// Get data for view
		switch($view){
			
		}

		// Set view
		$data['view'] = 'dash_student_' . $view;

		$this->load->view('template/main', $data);
	}
}