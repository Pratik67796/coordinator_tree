<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

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
		$this->load->model("Slider");
		$this->load->model("About");
		$this->load->model("Vegetable");
		$this->load->model("Testi");
		$slider_data = $this->Slider->select();
		$about_data = $this->About->select();
		$vegetable_data = $this->Vegetable->select();
		$testimonial_data = $this->Testi->select();
		$data['slider_data']=$slider_data;
		$data['about_data']=$about_data;
		$data['vegetable_data']=$vegetable_data;
		$data['testimonial_data']=$testimonial_data;

		$this->load->view('user/index',$data);
	   // $this->load->view('add_data');
        
	}
	
}