<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('twig');
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$datetime = filemtime('assets/js/main.js');
		// 
		// 
		print_r(date('d-m-y h:i:s', '1634199127')); echo '<br>';
		print_r(date('d-m-y h:i:s', '1634202662')); echo '<br>';
		die();
		$this->twig->getTwig()->addFilter(new \Twig\TwigFilter('getModified', [$this, 'test']));
		$this->twig->display('welcome', ["title" => "Achmad Ali Baidlowi"]);
	}

	public function test($path)
	{
		return filemtime($path);
	}
}
