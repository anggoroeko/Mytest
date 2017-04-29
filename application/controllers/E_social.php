<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class e_social extends CI_Controller {

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
		$arr_identity = array(
								'title_eng' => 'Welcome',
							);

		// $this->load->view('templates/doAuth/login', $arr_identity);
		// $this->load->view('templates/home', $arr_identity);
		$this->load->view('templates/header');
	}

	public function login_ind()
	{
		$arr_identity = array(
								'title_ind' => 'Selamat Datang',
							);

		$this->load->view('templates/doAuth/login_ind', $arr_identity);
	}
}
