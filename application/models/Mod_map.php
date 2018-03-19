<?php

class Mod_map extends CI_Model{

public function get_details(){


			$query = $this->db->get('approved');
			return $query->result();

 }

}


?>