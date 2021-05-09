<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vege_controller extends CI_Controller {

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

    public function vegetable()
    {
        $this->load->view('Admin/add_vegetable');
    }
	public function add_vegitable()
	{
		$upload_profile_path = ('./application/upload/vegetable_image');
		if(!file_exists($upload_profile_path)) {
			mkdir($upload_profile_path,0777,true);
		}

		$files = $_FILES;
		$count = count($_FILES['userfile']['name']);
		for($i=0; $i<$count; $i++)
		  {
				$_FILES['userfile']['name']= time().$files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];
				$config['upload_path'] = 	$upload_profile_path;
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//$config['max_size'] = '2000000';
				//$config['remove_spaces'] = true;
				//$config['overwrite'] = false;
				//$config['max_width'] = '';
				//$config['max_height'] = '';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$this->upload->do_upload();
				$fileName = $_FILES['userfile']['name'];
				$filename['dec'] = $this->input->post('dec');
				$images[] = $fileName;
				
				// print_r($images);
				// exit;
		  }
			$fileName = implode(',',$images);
			$this->load->model("Vegetable");
			$data['dec'] = $this->input->post('dec');
			$data['image'] = $fileName;
			//print_r($fileName);
			$insertdata= $this->Vegetable->insert_vegetable($data);
			if($insertdata) {
			//$this->session->set_flashdata('success','product has been added successfully.');
			redirect('Admin_controller/admin_index');
		}
	}

	public function view_vegetable()
	{
		$this->load->model("Vegetable");
		$vegetable_data = $this->Vegetable->select();
		$data ['vegetable_data'] = $vegetable_data;
		$this->load->view('Admin/view_vegetable',$data);
	}
	public function delete($id)
	{
		$this->load->model("Vegetable");
		$vegetable_data =$this->Vegetable->deleteslider($id);
		$this->Vegetable->deleteslider($id);
		redirect('vege_controller/view_vegetable');
	}
	public function editvegetable($id)
	{
		$this->load->model("Vegetable");
		$vegetable_data =$this->Vegetable->edituser($id);
		$data =array();
		$data['dataas']= $vegetable_data;
		$this->load->view('Admin/edit_vegetable',$data);
	}
	public function updatevegetable($id)
	 {
		// $upload_profile_path = ('./application/upload/vegetable_image');
		// if(!file_exists($upload_profile_path)) {
		// 	mkdir($upload_profile_path,0777,true);
		// }

		$files = $_FILES;
		$count = count($_FILES['userfile']['name']);
		for($i=0; $i<$count; $i++)
		  {
				$_FILES['userfile']['name']= time().$files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];
				$config['upload_path'] = 	$upload_profile_path;
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//$config['max_size'] = '2000000';
				//$config['remove_spaces'] = true;
				//$config['overwrite'] = false;
				//$config['max_width'] = '';
				//$config['max_height'] = '';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$this->upload->do_upload();
				$fileName = $_FILES['userfile']['name'];
				$filename['dec'] = $this->input->post('dec');
				$images[] = $fileName;
				
				// print_r($images);
				// exit;
		  }
			$fileName = implode(',',$images);
			$this->load->model("Vegetable");
			$data['dec'] = $this->input->post('dec');
			$data['image'] = $fileName;
			//print_r($fileName);
			$insertdata= $this->Vegetable->updatevegetable($id,$data);
			if($insertdata) {
			//$this->session->set_flashdata('success','product has been added successfully.');
			redirect('vege_controller/view_vegetable');
		}
	}
   
	
   
}