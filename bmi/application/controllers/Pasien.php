<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
    
        public function index()
        {
            $this->load->view('layouts/header');
            $this->load->view('pasien/index');
            $this->load->view('layouts/footer');
        }
    
    public function list(){
        $this->load->model('pasien_model');//load model
        $data['pasien']=$this->pasien_model->getALL();// query

        $this->load->view('layouts/header');
		$this->load->view('pasien/list',$data);
        $this->load->view('layouts/footer');
	}

    public function view($id){
        $this->load->model('pasien_model');
        $data['pasien']=$this->pasien_model->findById($id);

        $this->load->view('layouts/header');
        $this->load->view('pasien/view',$data);
        $this->load->view('layouts/footer');
    }

}


