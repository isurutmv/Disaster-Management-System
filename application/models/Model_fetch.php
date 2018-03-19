<?php


class model_fetch extends CI_Model{

    public function fetch_user()
    {
    	$query = $this->db->get("user");

    	return $query;
       
     }
     public function fetch_manager()
    {
    	$query = $this->db->get("manager");

    	return $query;
       
     }
     public function fetch_pending()
    {
    	$query = $this->db->get("pending_incident");

    	return $query;
       
     }
     public function fetch_aproved()
    {
    	$query = $this->db->get("approved");

    	return $query;
       
     }
     public function fetch_rejected()
    {
    	$query = $this->db->get("rejected");

    	return $query;
       
     }
     public function action($id){
        
        $this->db->where("ID",$id);
        $query = $this->db->get("pending_incident");
        return $query;

     }
     public function reject($id){
        
        $this->db->where("ID",$id);
        $query = $this->db->get("pending_incident");
        return $query;

     }

   public function updateuser($id){
        
        $this->db->where("User_ID",$id);
        $query = $this->db->get("user");
        return $query;

     }
     public function managerupdate($id){
        
        $this->db->where("ID",$id);
        $query = $this->db->get("manager");
        return $query;

     }
     public function countmanager(){
        $query = $this->db->count_all_results("manager");

        return $query;

     }
     public function countuser(){
        
        $query = $this->db->count_all_results("user");

        return $query;

     }
     public function countaprove(){
        
        $query = $this->db->count_all_results("approved");

        return $query;

     }
     public function countreject(){
        
        $query = $this->db->count_all_results("rejected");

        return $query;

     }
     public function countpending(){
        
        $query = $this->db->count_all_results("pending_incident");

        return $query;

     }
     public function damage(){
        $this->db->where('Type', "Flood");
        $this->db->select_sum('Gross_Damage');
        $query = $this->db->get('approved');

        return $query;

     }

 }

 ?>