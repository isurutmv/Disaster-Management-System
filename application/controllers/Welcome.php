<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function index()
	{
		$this->load->model('mod_map');
		$this->load->model("model_fetch");
$data["countmanager"] = $this->model_fetch->countmanager();
        $data["countuser"] = $this->model_fetch->countuser();
        $data["countaprove"] = $this->model_fetch->countaprove();
        $data["countreject"] = $this->model_fetch->countreject();
        $data["fetch_aproved"] = $this->model_fetch->fetch_aproved();
        $data["damage"] = $this->model_fetch->damage();
		$data['results'] = $this->mod_map->get_details();

		
		$this->load->view('index',$data);

	}

	public function loging()
	{
		$this->load->view('loging');
	}

	public function adminloging()
	{
		$this->load->view('adminloging');
	}
	public function userloging()
	{
		$this->load->view('userloging');
	}
	public function mannagerloging()
	{
		$this->load->view('mannagerloging');
	}
	public function adminview()
	{
		$this->load->model("model_fetch");
        $data["fetch_user"] = $this->model_fetch->fetch_user();
        $data["fetch_manager"] = $this->model_fetch->fetch_manager();
        $data["countmanager"] = $this->model_fetch->countmanager();
        $data["countuser"] = $this->model_fetch->countuser();
        $data["countaprove"] = $this->model_fetch->countaprove();
        $data["countreject"] = $this->model_fetch->countreject();
		$this->load->view('adminview',$data);
	}
	public function mannagerview()
	{
		$this->load->model("model_fetch");
        $data["fetch_pending"] = $this->model_fetch->fetch_pending();
        $data["fetch_aproved"] = $this->model_fetch->fetch_aproved();
        $data["fetch_rejected"] = $this->model_fetch->fetch_rejected();
        $data["countmanager"] = $this->model_fetch->countmanager();
        $data["countuser"] = $this->model_fetch->countuser();
        $data["countaprove"] = $this->model_fetch->countaprove();
        $data["countreject"] = $this->model_fetch->countreject();
        $this->load->view('mannagerview',$data);
	}
	public function userview()
	{
		$this->load->model("model_fetch");
		$data["fetch_pending"] = $this->model_fetch->fetch_pending();
		$data["countaprove"] = $this->model_fetch->countaprove();
        $data["countreject"] = $this->model_fetch->countreject();
		$this->load->view('userview',$data);
	}
	public function mannagerreg()
	{
		$this->load->view('managerreg');
	}
	public function userreg()
	{
		$this->load->view('userreg');
	}
	

public function action(){

        $id=$this->uri->segment(3);
        $this->load->model("model_fetch");
        $data["pending"]=$this-> model_fetch->action($id);
        $this->load->view('action',$data);

    }
    public function reject(){

        $id=$this->uri->segment(3);
        $this->load->model("model_fetch");
        $data["reject"]=$this-> model_fetch->reject($id);
        $this->load->view('reject',$data);

    }
    public function updateuser(){

        $id=$this->uri->segment(3);
        $this->load->model("model_fetch");
        $data["updateuser"]=$this-> model_fetch->updateuser($id);
        $this->load->view('updateuser',$data);

	}
	public function updatepending(){

        $id=$this->uri->segment(3);
        $this->load->model("model_fetch");
        $data["edite"]=$this-> model_fetch->action($id);
        $this->load->view('updatepending',$data);

    }
    public function managerupdate(){

        $id=$this->uri->segment(3);
        $this->load->model("model_fetch");
        $data["managerupdate"]=$this-> model_fetch->managerupdate($id);
        $this->load->view('managerupdate',$data);

    }


}
