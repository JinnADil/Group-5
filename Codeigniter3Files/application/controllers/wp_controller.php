<?php

use wp_controller as GlobalWp_controller;

defined('BASEPATH') OR exit('No direct script access allowed');

class wp_controller extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('wp_model_app'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 
     
	function index(){
		if($this->isUserLoggedIn){ 
            redirect('wp_controller/dashboard'); 
        }else{ 
            redirect('wp_controller/home'); 
        }
	}

	function register(){	
		$data = $userData = array();								
		if($_SERVER['REQUEST_METHOD']=='POST') 				
		{
			$this->load->library('form_validation');		
			$this->form_validation->set_rules('user','Username','required');		
			$this->form_validation->set_rules('pass','Password','required');
			$this->form_validation->set_rules('fname','First Name','required');
			$this->form_validation->set_rules('mname','Middle Name','required');
			$this->form_validation->set_rules('lname','Surname','required');
			$this->form_validation->set_rules('addrs','Address','required');
			$this->form_validation->set_rules('phnum','Phone Number','required');
			$this->form_validation->set_rules('email','Email Address','required');
			$this->form_validation->set_rules('bday','Birthday','required');
		
				$username = $this->input->post('user');			
				$password = $this->input->post('pass');			
				$firstname = $this->input->post('fname');
				$middlename = $this->input->post('mname');
				$surname = $this->input->post('lname');
				$address = $this->input->post('addrs');
				$phonenumber = $this->input->post('phnum');
				$emailaddress = $this->input->post('email');
				$birthday = $this->input->post('bday');
				$sex = $this->input->post('sex');		


				$this->load->model("wp_model_app");				
				$userData = array(									
					'sender_user' => $username,					
					'sender_pass' => $password,					
					'sender_fname' => $firstname,
					'sender_mname' => $middlename,
					'sender_lname' => $surname,
					'sender_addrs' => $address,
					'sender_phnum' => $phonenumber,
					'sender_email' => $emailaddress,
					'sender_bday' => $birthday,
					'sender_sex' => $sex,
					'sender_status' => "1"						
				);				
				
				if($this->input->post("update"))
				{	
					$this->db->set($userData);			
					$this->wp_model_app->update_data($data, $this->input->post("hidden_id"));	
					redirect(base_url()."wp_controller/account");
				}


				if($this->form_validation->run()==TRUE){
				$insert = $this->wp_model_app->insert($userData);

					if ($insert == true) {
						$this->session->set_flashdata('success_arr','Successfully User Created');
						redirect(base_url(). 'wp_controller/home');
					}
					else{
					$data['error_arr'] = 'Some problems occured, please try again.';
					}
				}
				else{
					$data['error_arr'] = 'Please fill all the mandatory fields.';
				} 
			}
			$data['user'] = $userData;
			$this->load->view('wp_element/wp_header');
			$this->load->view('wp_element/wp_nav'); 
			$this->load->view('wp_view/wp_view_register'); 
			$this->load->view('wp_element/wp_footer');
	}

	function home(){
		$data = array();
		$this->load->view('wp_element/wp_header', $data); 
		$this->load->view('wp_element/wp_nav', $data); 
		$this->load->view('wp_view/wp_view_home', $data); 
		$this->load->view('wp_element/wp_footer');
	}

	function login()
	{
		$data = array();

		if($this->session->userdata('success_arr')){ 
            $data['success_arr'] = $this->session->userdata('success_arr'); 
            $this->session->unset_userdata('success_arr'); 
        } 
        if($this->session->userdata('error_arr')){ 
            $data['error_arr'] = $this->session->userdata('error_arr'); 
            $this->session->unset_userdata('error_arr'); 
        } 

		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('user','Username','required');
			$this->form_validation->set_rules('pass','Password','required');

			if($this->form_validation->run()==TRUE)
			{
				$connect = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'sender_user'=> $this->input->post('user'), 
                        'sender_pass' =>$this->input->post('pass'), 
						'sender_status' => '1',
                    ) 
                );
				$checkLogin = $this->wp_model_app->getRows($connect);
				if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['id']); 
                    redirect(base_url().'wp_controller/dashboard'); 
                }else{ 
                    $data['error_msg'] = 'Wrong username or password, please try again.'; 
                }
			}else{ 
            $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            }

		}

		$this->load->view('wp_element/wp_header', $data);
		$this->load->view('wp_element/wp_nav', $data); 
		$this->load->view('wp_view/wp_view_login', $data); 
		$this->load->view('wp_element/wp_footer'); 		
	}

	function dashboard(){
		$data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
             
            // Pass the user data and load view 
		$this->load->view('wp_element/wp_header', $data); 
		$this->load->view('wp_view/wp_view_dashboard', $data); 
		$this->load->view('wp_element/wp_footer'); 
        }  
	}

	function account(){
		$data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
             
            // Pass the user data and load view 
		$this->load->view('wp_element/wp_header', $data); 
		$this->load->view('wp_view/wp_view_account', $data); 
		$this->load->view('wp_element/wp_footer');  
        } 
	}

	public function update(){
		$data = array(); 
        if($this->isUserLoggedIn){ 

           $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
			
			$this->load->view('wp_element/wp_header', $data); 
			$this->load->view('wp_view/wp_view_update', $data); 
			$this->load->view('wp_element/wp_footer');  
        }

	}

	public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('wp_controller/home'); 
    } 

	public function deactivate(){
		$data = array(); 
        if($this->isUserLoggedIn){ 

           $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
			 
			$this->load->view('wp_element/wp_header', $data); 
			$this->load->view('wp_view/wp_view_deactivate', $data); 
			$this->load->view('wp_element/wp_footer');
        }
	}

	public function deact(){
		if($this->input->post("deactivate"))
				{
					$data = array();

					if($this->session->userdata('success_arr')){ 
						$data['success_arr'] = $this->session->userdata('success_arr'); 
						$this->session->unset_userdata('success_arr'); 
					} 
					if($this->session->userdata('error_arr')){ 
						$data['error_arr'] = $this->session->userdata('error_arr'); 
						$this->session->unset_userdata('error_arr'); 
					} 
			
					if($_SERVER['REQUEST_METHOD']=='POST')
					{
						$this->form_validation->set_rules('user','Username','required');
						$this->form_validation->set_rules('pass','Password','required');
			
						if($this->form_validation->run()==TRUE)
						{
							$connect = array( 
								'returnType' => 'single', 
								'conditions' => array( 
									'sender_user'=> $this->input->post('user'), 
									'sender_pass' =>$this->input->post('pass'), 
									'sender_status' => '1',
								) 
							);
							$checkLogin = $this->wp_model_app->getRows($connect);
							if($checkLogin){ 

								$this->load->model("wp_model_app");
								$userData = array(									
									'sender_status' => '0'						
								);

								$this->db->set($userData);			
								$this->wp_model_app->update_data($data, $this->input->post("hidden_id"));

								$this->session->unset_userdata('isUserLoggedIn'); 
								$this->session->unset_userdata('userId'); 
								$this->session->sess_destroy();

								redirect(base_url().'wp_controller/login'); 
							}else{ 
								$data['error_msg'] = 'Wrong username or password, please try again.'; 
							}
						}else{ 
						$data['error_msg'] = 'Please fill all the mandatory fields.'; 
						}
						redirect('wp_controller/deactivate');
			
					}
				}
	}

}
