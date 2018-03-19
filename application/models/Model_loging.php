<?php


class model_loging extends CI_Model{

    public function adminloging()
    {
        $username = $this->input->post('email');
        $password =$this->input->post('password');

        $this->db->where('Email',$username);
        $this->db->where('Password',$password);
        $respond = $this->db->get('admin');

        if($respond->num_rows()==1){

          return $respond->row(0);

        }
        else {

          return false;

        }
    }

    public function mannagerloging()
    {
        $username = $this->input->post('email');
        $password =$this->input->post('password');

        $this->db->where('Email',$username);
        $this->db->where('Password',$password);
        $respond = $this->db->get('manager');

        if($respond->num_rows()==1){

          return $respond->row(0);

        }
        else {

          return false;

        }
    }

    public function userloging()
    {
        $username = $this->input->post('email');
        $password =$this->input->post('password',TRUE);

        $this->db->where('Email',$username);
        $this->db->where('Password',$password);
        $respond = $this->db->get('user');

        if($respond->num_rows()==1){

          return $respond->row(0);

        }
        else {

          return false;

        }
    }

}