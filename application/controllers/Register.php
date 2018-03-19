<?php

/**
* 
*/
class register extends CI_Controller{
	
	public function registermanager()
	{
	         $this->form_validation->set_rules('fullname', 'Name', 'required');
             $this->form_validation->set_rules('nic', 'NIC', 'required|min_length[10]|max_length[10]');
             $this->form_validation->set_rules('email', 'email', 'required');
             $this->form_validation->set_rules('telephone', 'Telephone', 'required|min_length[10]|max_length[100]');
             $this->form_validation->set_rules('password', 'password', 'required');

             if ($this->form_validation->run() == FALSE)
             {
                     $this->load->view('managerreg');
             }
             else
             {
                $this->load->model('model_register');

                $data = array(

                        'Name' => $this->input->post("fullname",TRUE),
                        'NIC' => $this->input->post("nic",TRUE),
                        'Telephone' => $this->input->post("telephone",TRUE),
                        'Email' => $this->input->post("email",TRUE),
                        'Password' => sha1($this->input->post("password",TRUE)),

                );

               
                
              
    

             if($this->input->post("submit")){
             $this->model_register->managerreg($data);
             redirect(base_url()."Welcome/adminview");
         }
         if($this->input->post("delete")){
             $this->model_register->managerdelete($data,$this->input->post("id"));
             redirect(base_url()."Welcome/adminview");
         }
         if($this->input->post("update")){
             $this->model_register->managerupdate($data,$this->input->post("id"));
             redirect(base_url()."Welcome/adminview");
         }
             }
              


              	 
               
             

	}

  public function registeruser()
  {
           $this->form_validation->set_rules('fullname', 'Name', 'required');
             $this->form_validation->set_rules('nic', 'NIC', 'required|min_length[10]|max_length[10]');
             $this->form_validation->set_rules('email', 'email', 'required');
             $this->form_validation->set_rules('telephone', 'Telephone', 'required|min_length[10]|max_length[100]');
             $this->form_validation->set_rules('password', 'password', 'required');
             $this->form_validation->set_rules('location', 'location', 'required');
             $this->form_validation->set_rules('designation', 'designation', 'required');


             if ($this->form_validation->run() == FALSE)
             {
                     $this->load->view('userreg');
             }
             else
             {
                $this->load->model('model_register');

                $data = array(

                        'Name' => $this->input->post("fullname",TRUE),
                        'NIC' => $this->input->post("nic",TRUE),
                        'Telephone' => $this->input->post("telephone",TRUE),
                        'Email' => $this->input->post("email",TRUE),
                        'Password' => sha1($this->input->post("password",TRUE)),
                        'Location' => $this->input->post("location",TRUE),
                        'Designation' => $this->input->post("designation",TRUE),

                );

               
                
              if($this->input->post("submit")){
             $this->model_register->userreg($data);
             redirect(base_url()."Welcome/adminview");
         }
         if($this->input->post("delete")){
             $this->model_register->userdelete($data,$this->input->post("id"));
             redirect(base_url()."Welcome/adminview");
         }
         if($this->input->post("update")){
             $this->model_register->userupdate($data,$this->input->post("id"));
             redirect(base_url()."Welcome/adminview");
         }
           
        }

}
  
public function report()
{
       
    $this->form_validation->set_rules('User_ID', 'User_ID', 'required');
    $this->form_validation->set_rules('Date_Time', 'Name', 'required');
    $this->form_validation->set_rules('Type', 'Type', 'required');
    $this->form_validation->set_rules('Location', 'Location', 'required');
    $this->form_validation->set_rules('Gross_Damage', 'Gross_Damage', 'required');
    $this->form_validation->set_rules('Number_of_death', 'Number_of_death', 'required');
    $this->form_validation->set_rules('lat', 'lat', 'required');
    $this->form_validation->set_rules('lon', 'lon', 'required');
          
        
    if ($this->form_validation->run() == FALSE)
    {
            $this->load->view('userview');
    }
    else
    {
        $this->load->model('model_register');

                $data = array(

                        'User_ID' => $this->input->post("User_ID",TRUE),
                        'Date_Time' => $this->input->post("Date_Time",TRUE),
                        'Type' => $this->input->post("Type",TRUE),
                        'Location' => $this->input->post("Location",TRUE),
                        'Gross_Damage' => $this->input->post("Gross_Damage",TRUE),
                        'Number_of_death' => $this->input->post("Number_of_death",TRUE),
                        'lat' => $this->input->post("lat",TRUE),
                        'lon' => $this->input->post("lon",TRUE),
                        

                );

               
                
                if($this->input->post("submit")){
             $this->model_register->report($data);
             redirect(base_url()."Welcome/userview");
                }
                if($this->input->post("delete")){
                    $this->model_register->pendingdelete($data,$this->input->post("ID"));
                    redirect(base_url()."Welcome/userview");
                }
                if($this->input->post("update")){
                    $this->model_register->pendingupdate($data,$this->input->post("ID"));
                    redirect(base_url()."Welcome/userview");
                }
           
         
             }


    

            }    

                 

  
  public function action()
  {
           
    

              


                 $this->load->model('model_register');

                    $data = array(

                            'ID' => $this->input->post("ID",TRUE),
                            'User_ID' => $this->input->post("User_ID",TRUE),
                            'Date_Time' => $this->input->post("Date_Time",TRUE),
                            'Type' => $this->input->post("Type",TRUE),
                            'Location' => $this->input->post("Location",TRUE),
                            'Gross_Damage' => $this->input->post("Gross_Damage",TRUE),
                            'Number_of_death' => $this->input->post("Number_of_death",TRUE),
                            'Approved_By' => $this->input->post("Approved_By",TRUE),
                            'lat' => $this->input->post("lat",TRUE),
                            'lot' => $this->input->post("lot",TRUE),
                            

                    );

                   
                    
                  
                 $this->model_register->action($data,$this->input->post("ID"));
                 redirect(base_url()."Welcome/mannagerview");
               
             

  }
  public function reject()
  {
           

              


                 $this->load->model('model_register');

                    $data = array(

                            'ID' => $this->input->post("ID",TRUE),
                            'User_ID' => $this->input->post("User_ID",TRUE),
                            'Date_Time' => $this->input->post("Date_Time",TRUE),
                            'Type' => $this->input->post("Type",TRUE),
                            'Location' => $this->input->post("Location",TRUE),
                            'Gross_Damage' => $this->input->post("Gross_Damage",TRUE),
                            'Number_of_death' => $this->input->post("Number_of_death",TRUE),
                            'Rejected_By' => $this->input->post("Rejected_By",TRUE),
                            'Comments' => $this->input->post("Comments",TRUE),
                            'lat' => $this->input->post("lat",TRUE),
                            'lot' => $this->input->post("lot",TRUE),
                            

                    );

                   
                    
                  
                 $this->model_register->reject($data,$this->input->post("ID"));
                 redirect(base_url()."Welcome/mannagerview");
               
             

  }




}

?>