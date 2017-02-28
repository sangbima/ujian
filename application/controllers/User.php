<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model("user_model");
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->lang->load('basic', $this->config->item('language'));
		// redirect if not loggedin
		if(!$this->session->userdata('logged_in')){
			redirect('login');
		}
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['base_url'] != base_url()){
			$this->session->unset_userdata('logged_in');		
			redirect('login');
		}
	}

	public function index($limit='0')
	{
		$logged_in=$this->session->userdata('logged_in');
		 
		if($logged_in['su']!='1'){
			exit($this->lang->line('permission_denied'));
		}
			
		$data['limit']=$limit;
		$data['title']=$this->lang->line('userlist');
		// fetching user list
		$data['result']=$this->user_model->user_list($limit);
		$this->load->view('header',$data);
		$this->load->view('user_list',$data);
		$this->load->view('footer',$data);
	}
	
	public function new_user()
	{
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
			exit($this->lang->line('permission_denied'));
		}
			
		$data['title']=$this->lang->line('add_new').' '.$this->lang->line('user');
		// fetching group list
		$data['group_list']=$this->user_model->group_list();
		$this->load->view('header',$data);
		$this->load->view('user_new',$data);
		$this->load->view('footer',$data);
	}
	
	public function insert_user()
	{
	 	$logged_in=$this->session->userdata('logged_in');
		if($logged_in['su']!='1'){
			exit($this->lang->line('permission_denied'));
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('message', validation_errors());
			redirect('user/new_user/');
		}else{
			if($this->user_model->insert_user()){
				$this->session->set_flashdata('message', $this->lang->line('data_added_successfully'));
			}else{
				$this->session->set_flashdata('message', $this->lang->line('error_to_add_data'));
			}
			redirect('user/new_user/');
		}       

	}

	public function remove_user($uid)
	{
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['su']!='1'){
			exit($this->lang->line('permission_denied'));
		}
		if($uid=='1'){
				exit($this->lang->line('permission_denied'));
		}
			
		if($this->user_model->remove_user($uid)){
			$this->session->set_flashdata('message', $this->lang->line('removed_successfully'));
		}else{
			$this->session->set_flashdata('message', $this->lang->line('error_to_remove'));		
		}
		redirect('user');
	}

	public function edit_user($uid)
	{
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['su']!='1'){
			$uid=$logged_in['uid'];
		}
			
		$data['uid']=$uid;
		$data['title']=$this->lang->line('edit').' '.$this->lang->line('user');
		// fetching user
		$data['result']=$this->user_model->get_user($uid);
		$this->load->model("payment_model");
		$data['payment_history']=$this->payment_model->get_payment_history($uid);
		// fetching group list
		$data['group_list']=$this->user_model->group_list();
		$this->load->view('header',$data);
		if($logged_in['su']=='1'){
			$this->load->view('user_edit',$data);
		}else{
			$this->load->view('myaccount',$data);	
		}
		$this->load->view('footer',$data);
	}

	public function update_user($uid)
	{
		$logged_in=$this->session->userdata('logged_in');
						 
		if($logged_in['su']!='1'){
			$uid=$logged_in['uid'];
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('message', validation_errors());
			redirect('user/edit_user/'.$uid);
		} else {
			if($this->user_model->update_user($uid)){
				$this->session->set_flashdata('message', $this->lang->line('data_updated_successfully'));
			}else{
				$this->session->set_flashdata('message', $this->lang->line('error_to_update_data'));
						
			}
			redirect('user/edit_user/'.$uid);
		}       
	}
	
	public function group_list()
	{
		// fetching group list
		$data['group_list']=$this->user_model->group_list();
		$data['title']=$this->lang->line('group_list');
		$this->load->view('header',$data);
		$this->load->view('group_list',$data);
		$this->load->view('footer',$data);
	}
	
	public function insert_group()
	{
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['su']!='1'){
			exit($this->lang->line('permission_denied'));
		}
	
		if($this->user_model->insert_group()){
			$this->session->set_flashdata('message', $this->lang->line('data_added_successfully'));
		}else{
			$this->session->set_flashdata('message', $this->lang->line('error_to_add_data'));	
		}
		redirect('user/group_list/');
	}
	
	public function update_group($gid)
	{
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['su']!='1'){
			exit($this->lang->line('permission_denied'));
		}
	
		if($this->user_model->update_group($gid)){
			echo $this->lang->line('data_updated_successfully');
		}else{
			echo $this->lang->line('error_to_update_data');		
		}
	}
	
	function get_expiry($gid)
	{
		echo $this->user_model->get_expiry($gid);
	}
	
	public function remove_group($gid)
	{
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['su']!='1'){
			exit($this->lang->line('permission_denied'));
		} 
			
		if($this->user_model->remove_group($gid)){
			$this->session->set_flashdata('message', $this->lang->line('removed_successfully'));
		}else{
			$this->session->set_flashdata('message', $this->lang->line('error_to_remove'));
		}
		redirect('user/group_list');	
	}

	function logout()
	{
		$this->session->unset_userdata('logged_in');		
		if($this->session->userdata('logged_in_raw')){
			$this->session->unset_userdata('logged_in_raw');	
		}		
 		redirect('login');
	}
}
