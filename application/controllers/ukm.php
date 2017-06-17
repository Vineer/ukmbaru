<?php
	class ukm extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model(array('m_ukm','m_admin'));
			$this->load->helper('url','form','file');
			$this->load->database();
			$this->load->library('upload');
			if ($this->session->userdata('username') == null) {
				redirect('beranda/sign_in');
			}
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
		

		function register_mahasiswa(){
			$this->view->form_rester();
		}

		function input_data_pengurus(){
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
	        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
	        $this->form_validation->set_rules('fakultas', 'Fakultas', 'trim|required');
	        $this->form_validation->set_rules('ukm', 'UKM', 'trim|required');
	        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
	        $this->form_validation->set_rules('nohp', 'No Telepon', 'trim|required');
	        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	        $this->form_validation->set_rules('motivasi', 'Motivasi', 'trim|required');
	        if ($this->form_validation->run() == FALSE) {
	        	$this->load->view('formulir-ukm');
	        }else{
				$nama = $this->input->post('nama');
				$nim = $this->input->post('nim');
				$fakultas = $this->input->post('fakultas');
				$ukm = $this->input->post('ukm');
				$jurusan = $this->input->post('jurusan');
				$nohp = $this->input->post('nohp');
				$email = $this->input->post('email');
				$motivasi = $this->input->post('motivasi');
				$cv = $_FILES['cv']['name'];
				$foto = $_FILES['foto-profil']['name'];

				if ($cv!='') {
					// $image_path = dirname($_SERVER["SCRIPT_FILENAME"])."/foto/";
					$config['upload_path'] = './data_cv/';                        
					// $config['upload_url'] = base_url()."foto/";                        
			        $config['log_threshold'] = 1;
			        $config['allowed_types'] = 'jpg|png|jpeg|gif|pdf|doc|docx';
			        $config['max_size'] = '0'; // 0 = no file size limit`
			        $config['file_name']='cv-'.$cv;          
			        $config['overwrite'] = false;
			        $this->upload->initialize($config);
			         $this->load->library('upload', $config);
			         $this->upload->do_upload('cv');
			         $upload_data = $this->upload->data();
			         $file_name = $upload_data['file_name'];
				}
				if ($foto!='') {
					// $image_path = dirname($_SERVER["SCRIPT_FILENAME"])."/foto/";
					$config['upload_path'] = './foto/';                        
					// $config['upload_url'] = base_url()."foto/";                        
			        $config['log_threshold'] = 1;
			        $config['allowed_types'] = 'jpg|png|jpeg|gif';
			        $config['max_size'] = '0'; // 0 = no file size limit
			        $config['file_name']='profil-'.$foto;          
			        $config['overwrite'] = false;
			        $this->upload->initialize($config);
			         $this->load->library('upload', $config);
			         $this->upload->do_upload('foto-profil');
			         $upload_data = $this->upload->data();
			         $file_name = $upload_data['file_name'];
				}

				$data = array(
								'nama_mhs'=>$nama,
								'nim_mhs'=>$nim,
								'fakultas'=>$fakultas,
								'ukm_pilihan'=>$ukm,
								'jurusan'=>$jurusan,
								'no_hp'=>$nohp,
								'email'=>$email,
								'motivasi'=>$motivasi,
								'cv'=>$cv,
								'foto'=>$foto
							);
				$exec = $this->m_ukm->input_data($data,'data_pengurus');
				if ($exec) {
					$this->session->set_flashdata('pesan', array('message' => 'Berhasil mendaftar menjadi pengurus!', 'class' => 'success', 'title' => 'Sukses!'));
					redirect('beranda/join_ukm');
				}else{
					$this->session->set_flashdata('pesan', array('message' => 'Gagal mendaftar menjadi pengurus!', 'class' => 'danger', 'title' => 'Gagal!'));
					redirect('beranda/join_ukm');
				}
			}
		}
//--------------------------------function for Formulir Panitia Event------------------------------------------		
		function input_data_panitia(){
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
	        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
	        $this->form_validation->set_rules('fakultas', 'Fakultas', 'trim|required');
	        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
	        $this->form_validation->set_rules('divis', 'Divisi', 'trim|required');
	        $this->form_validation->set_rules('nohp', 'No Telepon', 'trim|required');
	        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	        $this->form_validation->set_rules('motivasi', 'Motivasi', 'trim|required');
	        if ($this->form_validation->run() == FALSE) {
	        	$this->load->view('form_panitia_event');
	        }else{
				$nama = $this->input->post('nama');
				$nim = $this->input->post('nim');
				$ukm = $this->input->post('ukm');
				$fakultas = $this->input->post('fakultas');
				$jurusan = $this->input->post('jurusan');
				$divisi = $this->input->post('divisi');
				$nohp = $this->input->post('nohp');
				$email = $this->input->post('email');
				$motivasi = $this->input->post('motivasi');
				$cv = $_FILES['cv']['name'];
				$foto = $_FILES['foto-profil']['name'];

				if ($cv!='') {
					// $image_path = dirname($_SERVER["SCRIPT_FILENAME"])."/foto/";
					$config['upload_path'] = './data_cv/';                        
					// $config['upload_url'] = base_url()."foto/";                        
			        $config['log_threshold'] = 1;
			        $config['allowed_types'] = 'jpg|png|jpeg|gif|pdf|doc|docx';
			        $config['max_size'] = '0'; // 0 = no file size limit`
			        $config['file_name']='cv-'.$cv;          
			        $config['overwrite'] = false;
			        $this->upload->initialize($config);
			         $this->load->library('upload', $config);
			         $this->upload->do_upload('cv');
			         $upload_data = $this->upload->data();
			         $file_name = $upload_data['file_name'];
				}
				if ($foto!='') {
					// $image_path = dirname($_SERVER["SCRIPT_FILENAME"])."/foto/";
					$config['upload_path'] = './foto/';                        
					// $config['upload_url'] = base_url()."foto/";                        
			        $config['log_threshold'] = 1;
			        $config['allowed_types'] = 'jpg|png|jpeg|gif';
			        $config['max_size'] = '0'; // 0 = no file size limit
			        $config['file_name']='profil-'.$foto;          
			        $config['overwrite'] = false;
			        $this->upload->initialize($config);
			         $this->load->library('upload', $config);
			         $this->upload->do_upload('foto-profil');
			         $upload_data = $this->upload->data();
			         $file_name = $upload_data['file_name'];
				}

				$data = array(
								'nama_mhs'=>$nama,
								'nim_mhs'=>$nim,
								'ukm_pilihan'=>$ukm,
								'fakultas'=>$fakultas,
								'jurusan'=>$jurusan,
								'divisi'=>$divisi,
								'no_hp'=>$nohp,
								'email'=>$email,
								'motivasi'=>$motivasi,
								'cv'=>$cv,
								'foto'=>$foto
							);
				$exec = $this->m_ukm->input_data($data,'data_panitia');
				if ($exec) {
					$this->session->set_flashdata('pesan', array('message' => 'Berhasil mendaftar menjadi panitia!', 'class' => 'success', 'title' => 'Sukses!'));
				}else{
					$this->session->set_flashdata('pesan', array('message' => 'Gagal mendaftar menjadi panitia!', 'class' => 'danger', 'title' => 'Gagal!'));
				}
				redirect('beranda/join_panitia_event');
			}
		}
//---------------------------------function for pemesanan tiket-----------------------------------------------

		function input_pemesanan_tiket(){
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
	        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
	        $this->form_validation->set_rules('acara', 'Acara', 'trim|required');
	        $this->form_validation->set_rules('jml_tiket', 'Jumlah Tiket', 'trim|required|numeric');
	        if ($this->form_validation->run() == FALSE) {
	        	$this->load->view('form_pesan_tiket');
	        }else{
				$nama = $this->input->post('nama');
				$nim = $this->input->post('nim');
				$acara = $this->input->post('acara');
				$jml_tiket = $this->input->post('jml_tiket');
				
				$data = array(
								'nama_mhs'=>$nama,
								'nim'=>$nim,
								'acara'=>$acara,
								'jml_tiket'=>$jml_tiket
							);
				$exec = $this->m_ukm->input_data($data,'data_pesan_tiket');
				$cek = $this->db->order_by('kd_booking desc')->limit(1)->get('data_pesan_tiket')->row();
				$this->session->set_flashdata('pesan', array('message' => 'Kode booking anda: '.$cek->kd_booking.' <br> Nama pemesan tiket: '.$cek->nama_mhs.' <br> Jumlah tiket yang dipesan: '.$cek->jml_tiket.' <br> Harap membayar sesuai dengan harga tiket <br> No Rek mandiri : 1121111399992 (a/n Amirudin) <br> Atau bisa membayar langsung dengan menghubungi id line: aahaw <br><br> NB: Harap capture pesan ini.', 'class' => 'success', 'title' => 'Berhasil memesan tiket! <br>'));
				$this->load->view('form_pesan_tiket');
			}
		}
//---------------------------------------function for Booking Tiket---------------------------------------

	function input_data_bukti_transfer(){
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
        $this->form_validation->set_rules('kd_booking', 'Kode Booking', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('form_bukti_transfer');
        }else{
			$kd_booking = $this->input->post('kd_booking');
			$nama = $this->input->post('nama');
			$nim = $this->input->post('nim');
			$foto = $_FILES['foto-profil']['name'];

			if ($foto!='') {
				// $image_path = dirname($_SERVER["SCRIPT_FILENAME"])."/foto/";
				$config['upload_path'] = './foto/';                        
				// $config['upload_url'] = base_url()."foto/";                        
		        $config['log_threshold'] = 1;
		        $config['allowed_types'] = 'jpg|png|jpeg|gif';
		        $config['max_size'] = '0'; // 0 = no file size limit
		        $config['file_name']='profil-'.$foto;          
		        $config['overwrite'] = false;
		        $this->upload->initialize($config);
		         $this->load->library('upload', $config);
		         $this->upload->do_upload('foto-profil');
		         $upload_data = $this->upload->data();
		         $file_name = $upload_data['file_name'];
			}

			$data = array(
							'kd_booking'=>$kd_booking,
							'nama_mhs'=>$nama,
							'nim'=>$nim,
							'foto'=>$foto
						);
			$exec = $this->m_ukm->input_data($data,'data_bukti_transfer');
			if ($exec) {
				$this->session->set_flashdata('pesan', array('message' => 'Berhasil melakukan konfirmasi bukti transfer!', 'class' => 'success', 'title' => 'Sukses!'));
			}else{
				$this->session->set_flashdata('pesan', array('message' => 'Gagal melakukan konfirmasi bukti transfer!', 'class' => 'danger', 'title' => 'Gagal!'));
			}
			redirect('beranda/bukti_transfer');
		}
	}
	public function edit_profil_mhs(){
		
		//$this->load->view('footer',$data);
		print_r($data['mahasiswa']);
	}
public function updateprofile_mhs(){
		$nim 		= $this->input ->post('nim');
		$nama 		= $this->input ->post('nama');
		$fakultas 	= $this->input ->post('fakultas');
		$jurusan 	= $this->input ->post('jurusan');
		$email		= $this->input ->post('email');
		$no_telp 	= $this->input ->post('no_telp');
		$foto 		= $this->input->post('foto');
		$dataa = array(
			'nama'		=>$nama,
			'fakultas'	=>$fakultas,
			'jurusan'	=>$jurusan,
			'email'		=>$email,
			'no_telp'	=>$no_telp,
			'foto'		=>$foto
			);
		if ($foto!='') {
		$config['upload_path'] = './foto/';                        
				// $config['upload_url'] = base_url()."foto/";                        
		        $config['log_threshold'] = 1;
		        $config['allowed_types'] = 'jpg|png|jpeg|gif';
		        $config['max_size'] = '0'; // 0 = no file size limit
		        $config['file_name']='profil-'.$foto;          
		        $config['overwrite'] = false;
		        $this->upload->initialize($config);
		         $this->load->library('upload', $config);
		         $this->upload->do_upload('foto-profil');
		         $upload_data = $this->upload->data();
		         $file_name = $upload_data['file_name'];
		}
		$this->m_ukm->edit_profile_mhs($nim, $dataa);
	$this->session->set_flashdata('save_profile','Profile Berhasil di Ubah');
	redirect(base_url().'beranda');
}
	

	
function cari_panitia()	{
		$cari = $this->input->post('cari');
		$data['query'] = $this->db->where('nim_mhs', $cari)->get('data_panitia')->result();
		$data['cari'] = $cari;
		$this->load->view('form_pengumuman_panitia', $data);
}

function cari_pengurus()	{
		$cari = $this->input->post('cari');
		$data['query'] = $this->db->where('nim_mhs', $cari)->get('data_pengurus')->result();
		$data['cari'] = $cari;
		$this->load->view('form_pengumuman_pengurus', $data);
	}	

}



?>