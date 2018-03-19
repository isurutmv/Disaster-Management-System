<?php 
class Our_chart_model extends CI_Model 
{ 
    function __construct() 
    { 
        parent::__construct(); 
    } 
    //get fruts data 
    public function get_all_approved() 
    { 
        return $this->db->get('approved')->result(); 
    } 
}