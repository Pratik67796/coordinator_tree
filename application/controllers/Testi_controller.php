<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testi_controller extends CI_Controller {

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
	public function testimanual()
	{
		$this->load->view('Admin/add_testi');
	}
    public function add_testimonial()
	{
		$upload_profile_path = ('./application/upload/testimonial_image');
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
		
		$this->load->model("Testi");
		$insertdata= $this->Testi->insert_testimonial($data);
		if($insertdata) {
			//$this->session->set_flashdata('success','product has been added successfully.');
			redirect('Admin_controller/admin_index');
		}
	}

    public function view_testimonial()
    {
        $this->load->model("Testi");
		$testimonial_data = $this->Testi->select();
		$data['testi_data']=$testimonial_data;
		$this->load->view('Admin/view_testimonial',$data);
    }
    public function delete($id)
    {
		$this->load->model("Testi");
		$testimonial_data =$this->Testi->deletetesti($id);
		$this->Testi->deletetesti($id);
		redirect('Testi_controller/view_testimonial');
    }
    public function edittesti($id)
	{
		$this->load->model("Testi");
		$testi_data =$this->Testi->edittesti($id);
		$data =array();
		$data['dataas']= $testi_data;
		$this->load->view('Admin/edit_testimonial',$data);
        // print_r($testi_data);
        // exit;
	}
    public function update_testimonial($id)
    {
        $upload_profile_path = ('./application/upload/testimonial_image');
		$data['name'] = $this->input->post('name');
		$data['title'] = $this->input->post('dec');
		//$data['dec'] = $this->input->post('dec');

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
		$this->load->model("Testi");
		$insertdata= $this->Testi->update_testi($id,$data);
		if($insertdata) {
			//$this->session->set_flashdata('success','product has been added successfully.');
			redirect('Testi_controller/view_testimonial');
		}
    }
   
}