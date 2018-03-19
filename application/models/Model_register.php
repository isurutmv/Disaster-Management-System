<?php


class model_register extends CI_Model{

    public function managerreg($data)
    {
       $this->db->insert("manager",$data);
    }


    public function userreg($data)
    {
       $this->db->insert("user",$data);
    }
    public function userdelete($data,$id)
    {
       $this->db->where("User_ID",$id);
       $this->db->delete("user");
    }
    public function pendingdelete($data,$id)
    {
       $this->db->where("ID",$id);
       $this->db->delete("pending_incident");
    }

    public function userupdate($data,$id)
    {
       $this->db->where("User_ID",$id);
       $this->db->update("user",$data);
    }
    public function pendingupdate($data,$id)
    {
       $this->db->where("ID",$id);
       $this->db->update("pending_incident",$data);
    }
    public function report($data)
    {
       $this->db->insert("pending_incident",$data);
    }
    public function action($data,$id)
    {
       $this->db->insert("approved",$data);
       $this->db->where("ID",$id);
       $this->db->delete("pending_incident");
    }
    public function reject($data,$id)
    {
       $this->db->insert("rejected",$data);
       $this->db->where("ID",$id);
       $this->db->delete("pending_incident");
    }

    public function managerdelete($data,$id)
    {
       $this->db->where("ID",$id);
       $this->db->delete("manager");
    }
    public function managerupdate($data,$id)
    {
       $this->db->where("ID",$id);
       $this->db->update("manager",$data);
    }
}
