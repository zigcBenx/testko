<?php 

	class Pages extends CI_Controller{
		public function view($page='home'){//Default page
			if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {//Preverimo če željena stran obstaja
				show_404();
			}

			$data['title'] = ucfirst($page);//Ime strani z veliko začetnico

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
			
		}
	}

?>