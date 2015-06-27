<?php
	class form_controll extends CI_Controller{

		public function __construct() 
	     {
				parent::__construct(); 
	     }

	    function getAll()
	    {
	    		$this->load->helper('url');
				$this->load->model('form_model');
	    		$data['query']=$this->form_model->getInfo();
	    		$this->load->view('form_view', $data);
	    }

		function updateRec()
		{	
			$this->load->model('form_model');
			$this->form_model->update();
			$data['query']=$this->form_model->getInfo();
			$this->load->view('form_view', $data);
		}
	}
?>