<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('uploads'); //load model uploads yang berada di folder model
        $this->load->helper(array('url')); //load helper url
		}


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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	function gallery()
	{
		$data['record'] = $this->uploads->getGambar();
		$this->load->view('header');
		$this->load->view('gallery',$data);
		$this->load->view('footer');
	}

	function music()
	{
		$data['record'] = $this->uploads->getMusik();
		$this->load->view('header');
		$this->load->view('music',$data);
		$this->load->view('footer');
	}

	function videos()
	{
		$data['record'] = $this->uploads->getVideo();
		$this->load->view('header');
		$this->load->view('video',$data);
		$this->load->view('footer');
	}

	function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}

	function login()
	{
		$this->load->view('login');
	}
}
