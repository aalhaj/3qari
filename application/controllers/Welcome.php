<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->helper('url');

		}
		public function main()
		{
			$this->load->view('header');
			$this->load->view('footer');
		}
}
