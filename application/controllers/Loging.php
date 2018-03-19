<?php
class loging extends CI_Controller{

    public function admin()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('adminloging');
        } else {

            $this->load->model('model_loging');
            $result= $this->model_loging->adminloging();

            if($result != false) {
                $user_data = array(

                    'username' => $result->username,
                    'loggedin' => TRUE
                );

                $this->session->set_userdata($user_data);
                redirect('Welcome/adminview');
            }
            else{
                $this->session->set_flashdata('msg','Invalid username or password');
                redirect('Welcome');

            }

        }

    }
    public function mannager()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {

            $this->load->model('model_loging');
            $result= $this->model_loging->mannagerloging();

            if($result != false) {
                $user_data = array(

                    'username' => $result->username,
                    'loggedin' => TRUE
                );

                $this->session->set_userdata($user_data);
                redirect('Welcome/mannagerview');
            }
            else{
                $this->session->set_flashdata('msg','Invalid username or password');
                redirect('Welcome');
            }

        }
}
    
    public function user()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {

            $this->load->model('model_loging');
            $result= $this->model_loging->userloging();

            if($result != false) {
                $user_data = array(

                    'username' => $result->username,
                    'loggedin' => TRUE
                );

                $this->session->set_userdata($user_data);
                redirect('Welcome/userview');
            }
            else{
                $this->session->set_flashdata('msg','Invalid username or password');
                redirect('Welcome');
            }

        }

    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('loggedin');
        redirect('Welcome/loging');

    }
}





    ?>
