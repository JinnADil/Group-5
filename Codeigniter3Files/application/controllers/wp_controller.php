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
			$this->form_validation->set_rules('conf_pass', 'Confirm Password', 'required|matches[pass]');
			$this->form_validation->set_rules('fname','First Name','required');
			$this->form_validation->set_rules('mname','Middle Name','required');
			$this->form_validation->set_rules('lname','Surname','required');
			$this->form_validation->set_rules('houselt','House Lot Block no.');
			$this->form_validation->set_rules('strt','Street');
			$this->form_validation->set_rules('subd','Subdivision');
			$this->form_validation->set_rules('brgy','Baranggay');
			$this->form_validation->set_rules('municity','City/Municipality');
			$this->form_validation->set_rules('provi','Province/State');
			$this->form_validation->set_rules('zip','Zipcode');
			$this->form_validation->set_rules('rec_email','Receiveing Email Address','required');
			$this->form_validation->set_rules('phnum','Mobile Number','required');
			$this->form_validation->set_rules('email','Email Address','required|valid_email|callback_email_check');

				$username = $this->input->post('user');			
				$password = $this->input->post('pass');			
				$firstname = $this->input->post('fname');
				$middlename = $this->input->post('mname');
				$surname = $this->input->post('lname');
				$extension = $this->input->post('extension');
				$houselot = $this->input->post('houselt');
				$street = $this->input->post('strt');
				$subdivision = $this->input->post('subd');
				$baranggay = $this->input->post('brgy');
				$municipality = $this->input->post('municity');
				$province = $this->input->post('provi');
				$zipcode = $this->input->post('zip');
				$phonenumber = $this->input->post('phnum');
				$emailaddress = $this->input->post('email');
				$receivingemail = $this->input->post('rec_email');
				$year = $this->input->post('year');
				$day = $this->input->post('day');
				$month = $this->input->post('month');
				$sex = $this->input->post('sex');
				$document = $this->input->post('docu');

				$this->load->model("wp_model_app");
				$userData = array(		
					'sender_docu' => $document,	
					'sender_user' => $username,					
					'sender_pass' => $password,					
					'sender_fname' => $firstname,
					'sender_mname' => $middlename,
					'sender_lname' => $surname,
					'sender_extension' => $extension,
					'sender_houselt' => $houselot,
					'sender_strt' => $street,
					'sender_subd' => $subdivision,
					'sender_brgy' => $baranggay,
					'sender_municity' => $municipality,
					'sender_provi' => $province,
					'sender_zip' => $zipcode,
					'sender_phnum' => $phonenumber,
					'sender_email' => $emailaddress,
					'sender_docu_email' => $receivingemail,
					'sender_tmp_email' => $emailaddress,
					'sender_year' => $year,
					'sender_month' => $month,
					'sender_day' => $day,
					'sender_sex' => $sex,
					'sender_status' => "1"						
				);				
				
				if($this->input->post("acc_update"))
				{	
					$userData = array(													
						'sender_user' => $username,					
						'sender_pass' => $password,
						'sender_email' => $emailaddress,
						'sender_tmp_email' => $emailaddress,					
					);
					$this->db->set($userData);			
					$this->wp_model_app->update_data($data, $this->input->post("hidden_id"));	
					redirect(base_url()."wp_controller/account");
				}


				if($this->input->post("pers_update"))
				{	
					$userData = array(													
						'sender_fname' => $firstname,
						'sender_mname' => $middlename,
						'sender_lname' => $surname,
						'sender_extension' => $extension,
						'sender_docu_email' => $receivingemail,
						'sender_houselt' => $houselot,
						'sender_strt' => $street,
						'sender_subd' => $subdivision,
						'sender_brgy' => $baranggay,
						'sender_municity' => $municipality,
						'sender_provi' => $province,
						'sender_zip' => $zipcode,
						'sender_phnum' => $phonenumber,
						'sender_year' => $year,
						'sender_month' => $month,
						'sender_day' => $day,
						'sender_sex' => $sex,
						'sender_status' => "1"						
					);
					$this->db->set($userData);			
					$this->wp_model_app->update_data($data, $this->input->post("hidden_id"));	
					redirect(base_url()."wp_controller/account");
				}
				if($this->input->post("update_docu"))
				{	
					$userData = array(													
						'sender_fname' => $firstname,
						'sender_mname' => $middlename,
						'sender_lname' => $surname,
						'sender_extension' => $extension,
						'sender_houselt' => $houselot,
						'sender_strt' => $street,
						'sender_subd' => $subdivision,
						'sender_brgy' => $baranggay,
						'sender_municity' => $municipality,
						'sender_provi' => $province,
						'sender_zip' => $zipcode,
						'sender_phnum' => $phonenumber,
						'sender_year' => $year,
						'sender_month' => $month,
						'sender_day' => $day,
						'sender_sex' => $sex,
						'sender_status' => "1"						
					);
					$this->db->set($userData);			
					$this->wp_model_app->update_data($data, $this->input->post("hidden_id"));	
					redirect(base_url()."wp_controller/request");
				} 

				if($this->input->post("request_docu"))
				{	
					$this->load->model("wp_model_app");
					$userData = array(				
						"sender_docu" => $document,	
						"sender_docu_status" => 'Not Received'														
					);
						$this->db->set($userData);			
						$this->wp_model_app->update_data($data, $this->input->post("hidden_id"));
						redirect(base_url()."wp_controller/dashboard");
						// if ($request == TRUE){
						// 	$this->session->set_flashdata('success_arr','Document Requested Successfully');
						// 	redirect(base_url()."wp_controller/dashboard");
						// }
				}
				if($this->input->post("receive"))
				{	
					$this->load->model("wp_model_app");
					$userData = array(					
						"sender_docu_status" => 'Received'														
					);
						$this->db->set($userData);			
						$this->wp_model_app->update_data($data, $this->input->post("hidden_id"));
						redirect(base_url()."wp_controller/history");
						// if ($request == TRUE){
						// 	$this->session->set_flashdata('success_arr','Document Requested Successfully');
						// 	redirect(base_url()."wp_controller/dashboard");
						// }
				}

				if($this->input->post("cancel"))
				{	
					$this->load->model("wp_model_app");
					$userData = array(					
						"sender_docu_status" => 'Cancelled'														
					);
						$this->db->set($userData);			
						$this->wp_model_app->update_data($data, $this->input->post("hidden_id"));
						redirect(base_url()."wp_controller/history");
						// if ($request == TRUE){
						// 	$this->session->set_flashdata('success_arr','Document Requested Successfully');
						// 	redirect(base_url()."wp_controller/dashboard");
						// }
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
			$this->load->view('wp_element/wp_header',$data);
			$this->load->view('wp_element/wp_nav',$data); 
			$this->load->view('wp_view/wp_view_register',$data); 
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
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('pass','Password','required');

			if($this->form_validation->run()==TRUE)
			{
				$connect = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'sender_email'=> $this->input->post('email'), 
                        'sender_pass' =>$this->input->post('pass'), 
						'sender_status' => '1',
                    )
                );
				$admin = array(
					'returnType' => 'single', 
                    'conditions' => array( 
                        'sender_email'=> $this->input->post('email'), 
                        'sender_pass' =>$this->input->post('pass'), 
						'sender_status' => '1',
						'sender_admin' => 'admin',
                    )
				);
				$admin = $this->wp_model_app->getRows($admin);
				$checkLogin = $this->wp_model_app->getRows($connect);

				if($checkLogin == TRUE && $admin == TRUE){ 

					$this->session->set_userdata('isUserLoggedIn', TRUE); 
					$this->session->set_userdata('userId', $checkLogin['id']); 
					redirect(base_url().'wp_controller/admin');
				}else if($checkLogin == TRUE && $admin == FALSE){ 

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

	public function pers_update(){
		$data = array(); 
        if($this->isUserLoggedIn){ 

           $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
			
			$this->load->view('wp_element/wp_header', $data); 
			$this->load->view('wp_view/wp_view_pers_update', $data); 
			$this->load->view('wp_element/wp_footer');  
        }
	}

	public function acc_update(){
		$data = array(); 
        if($this->isUserLoggedIn){ 

           $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
			
			$this->load->view('wp_element/wp_header', $data); 
			$this->load->view('wp_view/wp_view_acc_update', $data); 
			$this->load->view('wp_element/wp_footer');  
        }
	}

	public function reqUpdate(){
		$data = array(); 
        if($this->isUserLoggedIn){ 

           $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
			
			$this->load->view('wp_element/wp_header', $data); 
			$this->load->view('wp_view/wp_view_req_update', $data); 
			$this->load->view('wp_element/wp_footer');  
        }
	}

	public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('wp_controller/home'); 
    } 

	public function delete(){
		$data = array(); 
        if($this->isUserLoggedIn){ 

           $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
			 
			$this->load->view('wp_element/wp_header', $data); 
			$this->load->view('wp_view/wp_view_delete', $data); 
			$this->load->view('wp_element/wp_footer');
        }
	}

	public function del(){
		if($this->input->post("del"))
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
						$this->form_validation->set_rules('email','Email Address','required');
						$this->form_validation->set_rules('pass','Password','required');
			
						if($this->form_validation->run()==TRUE)
						{
							$connect = array( 
								'returnType' => 'single', 
								'conditions' => array( 
									'sender_email'=> $this->input->post('email'), 
									'sender_pass' =>$this->input->post('pass'), 
									'sender_status' => '1',
								) 
							);
							$checkLogin = $this->wp_model_app->getRows($connect);
							if($checkLogin){ 

								$this->load->model("wp_model_app");
								$userData = array(									
									'sender_status' => '0',
									'sender_email'	=> 'DELETED'					
								);

								$this->db->set($userData);			
								$this->wp_model_app->update_data($data, $this->input->post("hidden_id"));

								$this->session->unset_userdata('isUserLoggedIn'); 
								$this->session->unset_userdata('userId'); 
								$this->session->sess_destroy();

								redirect(base_url().'wp_controller/home'); 
							}else{ 
								$data['error_msg'] = 'Wrong username or password, please try again.'; 
							}
						}else{ 
						$data['error_msg'] = 'Please fill all the mandatory fields.'; 
						}
						redirect('wp_controller/delete');
			
					}
				}
	}

	public function email_check($str){ 
        $con = array( 
            'returnType' => 'count', 
            'conditions' => array( 
                'sender_email' => $str 
            ) 
        ); 
        $checkEmail = $this->wp_model_app->getRows($con); 
        if($checkEmail > 0){ 
            $this->form_validation->set_message('email_check', 'The given email already exists.'); 
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    }

	function admin(){
		$data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
             
            // Pass the user data and load view 
		$this->load->view('wp_element/wp_header', $data); 
		$this->load->view('wp_view/wp_view_admin', $data); 
		$this->load->view('wp_element/wp_footer'); 
        }  
	}

	function admin_account(){
		$data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 

			$this->load->model("wp_model_app");
			$data["display_data"] = $this->wp_model_app->display_data();
            // Pass the user data and load view

		$this->load->view('wp_element/wp_header', $data); 
		$this->load->view('wp_view/wp_view_ad_account', $data); 
		$this->load->view('wp_element/wp_footer');  
        } 
	}

	function request(){
		$data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
             
            // Pass the user data and load view 
		$this->load->view('wp_element/wp_header', $data); 
		$this->load->view('wp_view/wp_view_request', $data); 
		$this->load->view('wp_element/wp_footer');
		}

	}
	function receive(){
		$data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
             
            // Pass the user data and load view 
		$this->load->view('wp_element/wp_header', $data); 
		$this->load->view('wp_view/wp_view_receive', $data); 
		$this->load->view('wp_element/wp_footer');
		}
	}

	function history(){
		$data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->wp_model_app->getRows($con); 
             
            // Pass the user data and load view 
		$this->load->view('wp_element/wp_header', $data); 
		$this->load->view('wp_view/wp_view_history', $data); 
		$this->load->view('wp_element/wp_footer');
		}
	}


}