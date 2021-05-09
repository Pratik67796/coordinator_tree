<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_controller extends CI_Controller {

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

    public function insert_api()
    {
        $data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
        $this->load->model("Api");
		$insertdata= $this->Api->insert_api($data);
		
        if($insertdata)
        {
            return ["insertdata"=>"Your Data is  inserted"];
        }
        else
        {
            return ["insertdata"=>"Your Data is Not inserted"];
        }


    }
}