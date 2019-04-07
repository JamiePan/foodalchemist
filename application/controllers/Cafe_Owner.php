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
		// $data['res'] = $this->SharingModel->getRestaurants();
		// $arr = array();
		// foreach($data['res'] as $r){
			// $arr[] = $r['title'];
		// }
		// $data['arr'] = $arr;
		// print_r($data['arr']);exit;
		// $this->load->view("cafe_owner/index",$data);
        $this->loadView('cafe_owner/index', null);
    }


    public function save(){
  
        if($this->input->post()) {
           
            $data = $this->SharingModel->getRestaurants();
            // $arr = array();
            foreach($data as $r){
                $data[] = $r['title'];
            }
            // print_r($data);exit;
            $lat = $this->input->post('lat', true);
            $lng = $this->input->post('lng', true);
            $object_name = $this->input->post('object_name', true);
            $check = in_array($object_name, $data);
            
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
            if($check == 1){
                $this->SharingModel->insert('cafe_owner',$data);
                redirect('Cafe_Owner');
            }
            else{
                redirect('Cafe_Owner');
            }

            
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
