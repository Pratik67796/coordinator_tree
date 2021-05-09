<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

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
	public function admin_index()
	{
		$this->load->view('Admin/admin_index');
	}

	public function add_slider()
	{
		$this->load->view('Admin/add_slider');
	}
	public function show_slider()
	{
		$this->load->model("Slider");
		$slider_data = $this->Slider->select();
		$data['slider_data']=$slider_data;
		$this->load->view('Admin/view_slider',$data);
	}

	public function reg()
	{	
		
		$upload_profile_path = ('./application/upload/slider_image');
		if(!file_exists($upload_profile_path)) {
			mkdir($upload_profile_path,0777,true);
		}
		
		$config['upload_path']    =  $upload_profile_path;
		$config['allowed_types']  = 'gif|jpg|png|jpeg|x-png|jpe';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
			//$this->session->set_flashdata('error',$error['error']);
			//redirect(base_url());
			redirect('Admin_controller/add_slider');
			//print_r($error);
		}
		else {
			$this->upload->do_upload('userImage');
			$image = $this->upload->data();
			$filename = $image['file_name'];
			$data['image'] = $filename;
		} 
		//$this->load->library('encrypt');
		$data['name'] = $this->input->post('name');
		$data['title'] = $this->input->post('title');
		$data['dec'] = $this->input->post('dec');
		
		$this->load->model("Slider");
		$insertdata= $this->Slider->insert_slider($data);
		if($insertdata) {
			//$this->session->set_flashdata('success','product has been added successfully.');
			redirect('Admin_controller/admin_index');
		}
	
	}
	public function delete($id)
	{
		$this->load->model("Slider");
		$slider_data =$this->Slider->deleteslider($id);
		$this->Slider->deleteslider($id);
		redirect('Admin_controller/show_slider');
	}
	public function editslider($id)
	{
		$this->load->model("Slider");
		$slider_data =$this->Slider->edituser($id);
		$data =array();
		$data['dataas']= $slider_data;
		$this->load->view('Admin/edit_slider',$data);
	}
	public function updateslider($id)
	{
		$upload_profile_path = ('./application/upload/slider_image');
		$data['name'] = $this->input->post('name');
		$data['title'] = $this->input->post('title');
		$data['dec'] = $this->input->post('dec');

		$config['upload_path']    =  $upload_profile_path;
		$config['allowed_types']  = 'gif|jpg|png|jpeg|x-png|jpe';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			//$this->session->set_flashdata('error',$error['error']);
			//redirect(base_url());
			//redirect('Admin_controller/admin_index');
			print_r($error);
		}
		else 
		{
			$this->upload->do_upload('userImage');
			$image = $this->upload->data();
			$filename = $image['file_name'];
			$data['image'] = $filename;
		} 
		$this->load->model("Slider");
		$insertdata= $this->Slider->updateslider($id,$data);
		if($insertdata) {
			//$this->session->set_flashdata('success','product has been added successfully.');
			redirect('Admin_controller/show_slider');
		}
	}
	
		
		

   
}