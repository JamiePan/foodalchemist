<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Independent_Person extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('SharingModel');

    }


	public function index(){


        $this->loadView('independent_person/index',  null);
    }

    public function save(){
  
        if($this->input->post()) {
           
   
            $lat = $this->input->post('lat', true);
            $lng = $this->input->post('lng', true);
            $no_of_people = $this->input->post('no_of_people', true);
            $time = $this->input->post('time', true);
            $date = $this->input->post('date', true);

            $data = array(
               'lat' =>  $lat ,
               'lng' =>  $lng ,
               'date' =>  $date ,
               'no_of_people' =>  $no_of_people,
               'time' =>  $time

            );

            $this->SharingModel->insert('independent_person',$data);

            redirect('Home');
        }
        
    }



    /**
     * Load view 
     * @param 1 : view name
     * @param 2 : data to be render on view. If no data pass null
     */
    function loadView($view, $data) {

        $this->load->view('common/header');
        //$this->load->view('common/sidebar');

        $this->load->view($view, array('data' => $data));
        $this->load->view('common/footer');

    }   	
}
