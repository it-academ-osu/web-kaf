<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {


	public function index()
	{
		$this->load->view('head_view');
		$this->output->append_output('<div class="super_container">');
		$this->load->view('header_view');
		$this->load->view('slider_view');
		$this->load->view('page_on_slider_view');
		$this->load->view('popular_view');
		$this->load->view('register_view');
		$this->load->view('services_view');
		$this->load->view('testimonials_view');
		$this->load->view('events_view');







		$this->load->view('footer_view');
		$this->output->append_output('</div>');
		$this->load->view('footer_connection_view');
	}
}
