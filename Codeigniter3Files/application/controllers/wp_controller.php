<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wp_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	
// PAG MAY NAKITA KAYO NA GANITO
//	base_url('wp_controller/signup')
//	base_url - NAKA DEFINED SIYA NA ANG INDEX.PHP NATIN AY (http://localhost/Codeigniter3Files) makikita to sa (application/config/config.php/ LINE 26)
//  wp_controller - yan yung main controller natin nasa (controllers/wp_contreller)
//  signup - function yan na nasa loob ng (wp_controller)
//
//  SO ANG PARAAN PARA MAKA PAG VIEW KA NG IBANG PAGES SA SAME TAB AY GANITO,
//  STEP 1 - sa loob ng (wp_controller), gawa ka ng FUNCTION na mag papakita ng new page,
//			ex: function signup (){
//				}
//  STEP 2 - sa loob ng function na nagawa lagay mo to, $this->load->view("wp_view/wp_view_home")
//			$this->load->view - iloload niya yung arguments na nasa loob ng parenthesis
//			("wp_view/wp_view_home") - wp_view = FOLDER, wp_view_home - FOLDER FILENAME
//	GANYAN LANG, ang ipapakita niya na page is yung (wp_view_home) na nasa loob ng (wp_view)



	public function index()									//DITO YUNG UNANG MAKIKITA NG WEBSITE 
	{														//PAG SINEARCH YUNG localhost/Codeigniter3Files
		$this->load->view("wp_view/wp_view_home");			//FOLDER NAME/ FOLDER FILENAME

	}

	function signup(){										//PAG PINRESS YUNG BUTTON NA SIGNUP MAPUPUNTA SA 
		$this->load->view("wp_view/wp_view_signup");		//wp_view/wp_view_signup
	}														//FOLDER NAME/ FOLDER FILENAME

	function register(){									//ETO YUNG FUNCTION PARA MAKA PAG INSERT NG INFO FROM (wp_view/wp_view_signup) dito ma reredirect
		if($_SERVER['REQUEST_METHOD']=='POST') 				//yung $_SERVER['REUEST_METHOD']=='POST', eto yung nasa may form na nasa (wp_view/wp_view_signup), eto yung function niya
		{
			$this->load->library('form_validation');		//DITO ILOLOAD YUNG ('form_validation'), na nasa may (application/config/autoload.php)
			$this->form_validation->set_rules('user','Username','required');		//yung set_rules na yan, dyan sinasabi na pag may hindi siya na lagyan na field di gagana yung pag insert sa database
			$this->form_validation->set_rules('pass','Password','required');
			$this->form_validation->set_rules('fname','First Name','required');
			$this->form_validation->set_rules('mname','Middle Name','required');
			$this->form_validation->set_rules('lname','Surname','required');
			$this->form_validation->set_rules('addrs','Address','required');
			$this->form_validation->set_rules('phnum','Phone Number','required');
			$this->form_validation->set_rules('email','Email Address','required');
			$this->form_validation->set_rules('bday','Birthday','required');

			if($this->form_validation->run()==TRUE)			//dito pag input ng info yung lahat ng fields sa registration mag true to
			{

				$username = $this->input->post('user');			//dito sa $username = $this->input->post('user')
				$password = $this->input->post('pass');			//naiistore sa $username yung mga ininput sa ('user')
				$firstname = $this->input->post('fname');
				$middlename = $this->input->post('mname');
				$surname = $this->input->post('lname');
				$address = $this->input->post('addrs');
				$phonenumber = $this->input->post('phnum');
				$emailaddress = $this->input->post('email');
				$birthday = $this->input->post('bday');		
			
				$this->load->model("wp_model_app");				//dito naman i loload yung model na nakalagay sa (application/models/wp_model_app)
				$data = array(									//then dito 'sender_user' => $username
					'sender_user' => $username,					//yung sender_user, yan yung name ng column natin sa DATABASE sa PHPMYSQL
					'sender_pass' => $password,					//dito na mastore sa mismong database
					'sender_fname' => $firstname,
					'sender_mname' => $middlename,
					'sender_lname' => $surname,
					'sender_addrs' => $address,
					'sender_phnum' => $phonenumber,
					'sender_email' => $emailaddress,
					'sender_bday' => $birthday,
					'sender_status' => "1"						//eto sana yung status ng mag oonline, like pag nag register na siya, 1 muna siya
				);												//then pag nag logout magiging 0 na,then pag nag login, magiging 1

				if($this->input->post("update"))				//ito naman yung para sa UPDATE na makikita sa (wp_view/wp_view_update)
				{												//                                             (FOLDER NAME/ FOLDER FILENAME)
					$this->wp_model_app->update_data($data, $this->input->post("hidden_id"));	//iloload yung (wp_model_app) then gagawin yung operation na (update_data), yung ("hidden_id") diyan na store yung ininput nung user sa (wp_view/wp_view_update) kapag pinress yung UPDATE BUTTON,
					redirect(base_url()."wp_controller/updated"); //mayroon redirect talaga na type, then mareredirect siya sa (base_url), na makikita sa (application/config/config.php)
				}
				if($this->input->post("insert"))				//ito naman yung para sa INSERT function, di ata nagana to eh
				{
					$this->wp_model_app->insert_into_user($data);
					$this->session->set_flashdata('success','Successfully User Created');
					redirect(base_url(). 'wp_controller/registered');
				}
				$this->load->model('wp_model_app');				//dito mag loload yung model natin
				$this->wp_model_app->insert_into_user($data);	//kasi dito talaga napupunta yung info na ininput ni user, makikita yung function na (insert_into_user) sa (wp_model_app)
				$this->session->set_flashdata('success','Successfully User Created');
				redirect(base_url(). 'wp_controller/registered'); //mareredirect yung user sa (wp_controller/registered), na nasa (wp_controller)
			}
			else
			{
				$this->signup();								//dito mapupunta if FALSE yung nakuha
			}
		}
	}
	function registered()
	{
		$this->index();
	}
	function login()
	{
		$this->load->view("wp_view/wp_view_login");
	}
	function loginnow()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('user','Username','required');
			$this->form_validation->set_rules('pass','Password','required');
			if($this->form_validation->run()==TRUE)
			{
				$username = $this->input->post('user');
				$password = $this->input->post('pass');
				// $password = sha1($password);
				$this->load->model('wp_model_app');
				$status = $this->wp_model_app->checkPass($password, $username);
				if($status != false)
				{
					$username = $status->sender_user;
					$password = $status->sender_pass;
					$session_data = array(
						'sender_user' => $username,
						'sender_pass' => $password,		
					);
					$this->session->set_userdata('UserLoginSession', $session_data);
					redirect(base_url('wp_controller/dashboard'));
				}
				else{
					$this->session->set_flashdata('error','Username or Password is Wrong');
					redirect('wp_controller/login');
				}
			}
			else{
				$this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('wp_controller/login'));
			}

		}
	}
	function dashboard()
	{
		$this->load->view('wp_view/wp_view_dashboard');
	}
	function logout()
	{
		session_destroy();
		redirect(base_url('wp_controller'));
	}
	function account()
	{
		$this->load->model("wp_model_app");
		$data["fetch_data"] = $this->wp_model_app->fetch_data();
		$this->load->view('wp_view/wp_view_account', $data);
	}
	function delete_data($id)
	{
		$this->db->WHERE('id', $id);
		$this->db->delete('user_info');
		redirect(base_url('wp_controller/deleted'));
	}
	function deleted(){
		$this->index();
	}
	function update_data()
	{
		$user_id = $this->uri->segment(3);
		$this->load->model("wp_model_app");
		$data["user_data"] = $this->wp_model_app->fetch_single_data($user_id);
		$data["fetch_data"] = $this->wp_model_app->fetch_data();
		$this->load->view("wp_view/wp_view_update", $data);
		}

	function updated()
	{
		$this->account();
	}

}
