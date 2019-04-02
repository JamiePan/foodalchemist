<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cafe_Owner extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('SharingModel');

    }


	public function index(){
        //$mapData = $this->BushfireModel->getAllfromTable('Cafe_Owner');
        //$data['locations'] = $this->BushfireModel->getLocations($mapData);        
        $this->loadView('cafe_owner/index', null);
    }


    public function save(){
        //$mapData = $this->BushfireModel->getAllfromTable('Cafe_Owner');
        //$data['locations'] = $this->BushfireModel->getLocations($mapData);       
        if($this->input->post()) {
           
   
            $lat = $this->input->post('lat', true);
            $lng = $this->input->post('lng', true);
            $object_name = $this->input->post('object_name', true);
            $name_of_food = $this->input->post('name_of_food', true);
            $quantity_of_food = $this->input->post('quantity_of_food', true);
            $date = $this->input->post('date', true);
            $data = array(
               'lat' =>  $lat ,
               'lng' =>  $lng ,
               'object_name' =>  $object_name ,
               'name_of_food' =>  $name_of_food,
               'quantity_of_food' =>  $quantity_of_food,
               'date' => $date

            );

            $this->SharingModel->insert('cafe_owner',$data);

            //redirect('Home');
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
