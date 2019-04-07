<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class SharingModel extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }


    public function getAllfromTable( $tableName ) {
        $this->db->select('*');
        $this->db->from( $tableName );
        //$this->db->where(  'id <', 80 );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;        
    } 
    
     /**
     * Insert Method
     * @param tableName
     * @param dataObject
     */
    public function insert( $tableName ,$data ){

        if ($this->db->insert($tableName, $data) ) {

            return $this->db->insert_id();

        } 

        return -1 ;

    } 
   

    public function getLocations( $result ){

        $location = []; $location_data = [];
        foreach ($result as $key => $value) {
            $location_data = '["' .$value->object_name .'", '. $value->lat . ', '. $value->lng .']';
            array_push($location, $location_data);
            $location_data = [];
        }
        $data = '['. implode(",",$location) . ']';
        return $data;
    }
	
	public function getRestaurants(){
        try{
            $qryLicence = 'SELECT DISTINCT INDUSTRY_ANZSIC4_CODE as title from restro_staging;';
            return $this->db->query($qryLicence)->result_array();
        }catch(Exception $e){
            return false;
        }
    }

}
