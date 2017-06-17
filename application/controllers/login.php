<?php 

	class login extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('m_login');
			$this->load->library('session');
			$this->load->model('m_beranda');
		}

		public function index()
		{
			if ($this->session->userdata('username') == null){
				redirect('beranda/sign_in');
			}
			$table = 'artikel';
			$data['artikel'] = $this->m_beranda->get_all_data($table);
			$data['upcoming_event'] = $this->m_beranda->get_current_event();
			$data['event_lainnya'] = $this->m_beranda->get_another_event();
			$this->load->view('index',$data);
		}

		function logincek(){
			if (isset($this->session->userdata['logged_in'])) {
				redirect('beranda');
			}else{
				$data = array(
							'username' => $this->input->post('username'),
							'password' => $this->input->post('password')
						);
				$result = $this->m_login->cek_login($data);
				if ($result == TRUE) {
					$username = $this->input->post('username');
					$result = $this->m_login->getdatabyusername($username);

					if ($result!= FALSE) {
						$session_data = array(
											'id_akun' => $result[0]->id_akun,
											'username' => $result[0]->username,
											'jenis' => $result[0]->jenis_akses,
											'nim' => $result[0]->nim,
											'id_ukm' => $result[0]->id_ukm,
											'logged_in' => TRUE
										);
						$this->session->set_userdata($session_data);

							if ($result[0]->jenis_akses == 'Administrator') {
								redirect('admin/UKM/Artikel');
							}elseif ($result[0]->jenis_akses == 'Superadmin'){
								redirect('superadmin/Superadmin/Kelola_ukm');
								// die("ini nanti halaman superadmin");
							}elseif ($result[0]->jenis_akses == 'Mahasiswa'){
								redirect('beranda');
							}else{
								echo "tidak terdaftar";
							}
					}
				}else{
					$this->session->set_flashdata("msg",'<p style="color:red;">Username atau Password Salah</p>');
					redirect('beranda/sign_in');
				}
			}
		}

		function logout(){
			$this->session->sess_destroy();
			redirect('beranda/sign_in');
		}

	}
?>