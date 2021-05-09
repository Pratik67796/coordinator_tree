<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_controller extends CI_Controller {

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

    public function about()
    {
        $this->load->view('Admin/add_about');
    }
	public function add_about()
	{
        $upload_profile_path = ('./application/upload/about_image');
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
			redirect('About_controller/add_about');
			//print_r($error);
		}
		else {
			$this->upload->do_upload('userImage');
			$image = $this->upload->data();
			$filename = $image['file_name'];
			$data['image'] = $filename;
		} 
		//$this->load->library('encrypt');
		$data['dec'] = $this->input->post('dec');
		
		$this->load->model("About");
		$insertdata= $this->About->insert_about($data);
		if($insertdata) {
			//$this->session->set_flashdata('success','product has been added successfully.');
			redirect('Admin_controller/admin_index');
		}
	}

    public function view_about()
    {
        $this->load->model("About");
		$about_data = $this->About->select();
		$data['about_data']=$about_data;
		$this->load->view('Admin/view_about',$data);
    }
	
   
}