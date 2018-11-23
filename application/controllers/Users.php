<?php 

class Users extends CI_Controller{

	public function register(){
		$data['title']='Registracija';
		//Form validation
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required|is_unique[users.username]',
			array(
				'is_unique'=>'Uporabniško ime je že zasedeno',
				'required'=>'Uporabniško ime je obvezno polje.'
			));

		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|is_unique[users.email]',
			array(
				'is_unique'=>'Ta email že ima registriran račun.',
				'required'=>'Email je obvezno polje.'
			));

		$this->form_validation->set_rules(
			'password',
			'Password',
			'required',
			array(
				'required'=>'Geslo je obvezno polje.'
			));
		$this->form_validation->set_rules(
			'password2',
			'Confirm Password',
			'matches[password]',
			array(
				'required'=>'Ponovno geslo je obvezno polje.'
			));

		if($this->form_validation->run()===FALSE){
			$this->load->view('templates/header');
			$this->load->view('users/register',$data);
			$this->load->view('templates/footer');
		}else{
			//Encrypt password
			$enc_password = md5($this->input->post('password'));
			$this->user_model->register($enc_password);

			//Sent info message
			$this->session->set_flashdata('user_registered', 'Uspešno ste se registrirali, sedaj se lahko prijavite.');
			redirect('users/login');
		}
	}

	public function login(){
		$data['title']='Prijava';
		
		//Validate input from form
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required',
			array(
				'required'=>'Uporabniško ime je obvezno polje.'
			));

		$this->form_validation->set_rules(
			'password',
			'Password',
			'required',
			array(
				'required'=>'Geslo je obvezno polje.'
			));

		if($this->form_validation->run() === FALSE){//If data is not inserted corectly
			$this->load->view('templates/header');
			$this->load->view('users/login',$data);
			$this->load->view('templates/footer');	
		}else{//Data is inserted correctly, we can continue to comparing inserted data with data from database

			//Get data from input fields
			$username=$this->input->post('username');
			//Password must be encrypted the same way as it is on registration
			$password=md5($this->input->post('password'));

			//Loggin in with User_model
			$user_id=$this->user_model->login($username,$password);
			if($user_id){//Login succeded

				//Create session
				$user_data=array(//data stored in session when user is logged in
					'user_id'=>$user_id,
					'username'=>$username,
					'logged_in'=>true
				);
				
				$this->session->set_userdata($user_data);
				//sent message success
				$this->session->set_flashdata('login_succ', 'Uspešno ste se prijavili. Sedaj lahko brskate po blalbal');
				redirect('home');//Na neko domačo stran, kjer bi uporabniku predlagal snovi, na podlagi preteklega downloaddanja in statusa(student/dijak/ucenec)
			}else{//Login failed-wrong data
				//sent message error
				$this->session->set_flashdata('login_fail', 'Napačni podatki pri prijavi, prosimo poizkusite ponovno.');
				redirect('users/login');
			}
		}

		
	}

	public function logout(){
		//Delete session data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		//set message that user is logged out
		$this->session->set_flashdata('user_loggedout', 'Uspešno ste se odjavili.');
		redirect('home');
	}


	public function settings(){
		if(!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('not_autorized', 'Za dostop do te strani je obvezna prijava.');
			redirect('users/login');
		}
		$data['title']="Nastavitve računa";
		$this->load->view('templates/header');
		$this->load->view('users/settings',$data);
		$this->load->view('templates/footer');
	}
	public function update(){
		if(!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('not_autorized', 'Za dostop do te strani je obvezna prijava.');
			redirect('users/login');
		}
		//validation input
		//***TODO
	}

}

?>