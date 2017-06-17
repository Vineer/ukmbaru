<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		date_default_timezone_set('Asia/Jakarta');
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
	}

	//------------------------------- this is functions for ukm------------------------------------------
	function index() {
		$data['ukm']		= $this->M_admin->AmbilDaftarukm()->result();
		$data['notif'] = $this->M_admin->notifEvent()->result();
		$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
		$this->load->view('ukm/header',$data);
		$this->load->view('ukm/Daftar_ukm', $data);
	}

	function Kelola_ukm() {
		$data['ukm']		= $this->M_admin->AmbilDaftarukm()->result();
		$data['notif'] = $this->M_admin->notifEvent()->result();
		$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
		$this->load->view('ukm/header',$data);
		$this->load->view('ukm/Daftar_ukm', $data);
	}

	function Kelola_mhs() {
		$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
		$data['notif'] = $this->M_admin->notifEvent()->result();
		$this->load->view('ukm/header',$data);

		$data['mahasiswa']		= $this->M_admin->AmbilDaftarMhs()->result();
		$this->load->view('ukm/Daftar_mhs', $data);
	}
	function Kelola_bagKmhswaan() {
		$data['kemahasiswaan']		= $this->M_admin->AmbilDaftarKmhswaan()->result();
		$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
		$data['notif'] = $this->M_admin->notifEvent()->result();
		$this->load->view('ukm/header',$data);
		
		$this->load->view('ukm/Daftar_kmhswaan', $data);
	}
	function Kelola_event(){
		
		$data['event']		= $this->M_admin->AmbilDaftarEvent()->result();
		$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
		$data['notif'] = $this->M_admin->notifEvent()->result();
		$this->load->view('ukm/header',$data);
		
		$this->load->view('ukm/DaftarEvent',$data);
	}

	function Tambah_ukm() {

		$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
		$data['notif'] = $this->M_admin->notifEvent()->result();
		$this->load->view('ukm/header',$data);
		$this->load->view('ukm/Tambah_ukm');
	}

	function Simpan_ukm() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_ukm', 'Nama_ukm', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('slogan', 'Slogan', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
        $this->form_validation->set_rules('sekre_ukm', 'Sekre_ukm', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

        redirect('superadmin/Superadmin/Tambah_ukm','refresh');

        }else{
        	$id_ukm			= $this->input->post('id_ukm');
			$nama_ukm		= $this->input->post('nama_ukm');
			$kategori		= $this->input->post('kategori');
			$slogan			= $this->input->post('slogan');
			$deskripsi		= $this->input->post('deskripsi');
			$sekre_ukm		= $this->input->post('sekre_ukm');
			$logo_ukm		= $this->input->post('logo_ukm');
			$username		= $this->input->post('username');
			$password		= $this->input->post('password');
			$jenis_akses	= $this->input->post('jenis_akses');


						$config['upload_path']	= './assets/logoUkm/';
						$config['allowed_types']= 'jpg|png|jpeg';
						$this->load->library('Upload', $config);
						$this->upload->initialize($config);
				        if ($this->upload->do_upload('ukm')) {
				            $jpg              	= $this->upload->data();
				            $hasil              = $jpg['file_name'];
				            $isi				= array(
				            	                  	'id_ukm'    =>$id_ukm,
				            						'nama_ukm'	=>$nama_ukm,
				            						'kategori'	=>$kategori,
				            						'slogan'	=>$slogan,
				            						'deskripsi'	=>$deskripsi,
				            						'sekre_ukm'	=>$sekre_ukm,
				            						'logo_ukm'	=>$hasil,
				            						'status' 	=>"non-aktif"
				            );

				            $data = array(          'username'	    =>$username,
				            						'password'	    =>$password,
				            						'jenis_akses'	=>$jenis_akses
				            						
				            );

				            		 // print_r($isi);
				            	  $this->M_admin->insert($isi,'ukm');
				                  $this->M_admin->insert($data,'akun');
				                  redirect('superadmin/Superadmin/Kelola_ukm','refresh');
				            
		                    
				    }else{

				    	$error = $this->upload->display_errors();
			        	print_r($error);
				    	
				    }
	        }
	   }

	function Edit_ukm() {
		$id_ukm				= $this->uri->segment(4);
		$data['ukm']		= $this->M_admin->Lihat_ukm($id_ukm)->row_array();
		$data['mahasiswa']  = $this->M_admin->lihat_mahasiswa_edit($id_ukm)->row_array();
		$data['notif'] 		= $this->M_admin->notifEvent()->result();
		$data['jmlnotif'] 	= $this->M_admin->jmlnotifEvent()->result();
		$this->load->view('ukm/header',$data);
		$this->load->view('ukm/Edit_ukm', $data);
	}

	function EditEvent() {
		$id_event			= $this->uri->segment(4);
		$isi 				= array('status_approval'=>1);
		$data 				= $this->M_admin->approve($id_event,$isi);
		$data['notif'] 		= $this->M_admin->notifEvent()->result();
		$data['jmlnotif'] 	= $this->M_admin->jmlnotifEvent()->result();
		$this->load->view('ukm/header',$data);
		
		// print_r($data);
		redirect(base_url().'superadmin/Superadmin/Kelola_event');
	}

	function Update_ukm() {
		$nim = $this->input->post('id_ukm');
		$mhs_nim = $this->input->post('nim');
		
		//$this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
        // $this->form_validation->set_rules('id_ukm', 'Id_ukm', 'trim|required');
        $this->form_validation->set_rules('nama_ukm', 'Nama_ukm', 'trim|required');
    //     $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
    //     $this->form_validation->set_rules('slogan', 'Slogan', 'trim|required');
    //     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
    //     $this->form_validation->set_rules('sekre_ukm', 'Sekre_ukm', 'trim|required');
  		// $this->form_validation->set_rules('logo_ukm', 'Logo_ukm', 'trim|required');
  		// $this->form_validation->set_rules('username', 'Username', 'trim|required');
  		// $this->form_validation->set_rules('password', 'password', 'trim|required');
  		// $this->form_validation->set_rules('jenis_akses', 'jenis_akses', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['mahasiswa']  = $this->M_admin->lihat_mahasiswa_edit($nim)->row_array();
			$data['notif'] = $this->M_admin->notifEvent()->result();
			$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
			$this->load->view('ukm/header',$data);
			$this->load->view('ukm/Edit_ukm', $data);
        }else{
			$nama_ukm		= $this->input->post('nama_ukm');
			$kategori		= $this->input->post('kategori');
			$slogan			= $this->input->post('slogan');
			$deskripsi		= $this->input->post('deskripsi');
			$sekre_ukm		= $this->input->post('sekre_ukm');
			// $logo_ukm		= $this->input->post('logo_ukm');
			$username		= $this->input->post('username');
			$password		= $this->input->post('password');
			$jenis_akses	= $this->input->post('jenis_akses');
			$file			= 'ukm';
			
			
			$config['upload_path']	= 'assets/logoUkm/';
			$config['allowed_types']= 'jpg';
			$this->load->library('Upload', $config);
	        if ($this->upload->do_upload($file)) {
	            $jpg              	= $this->upload->data();
	            $hasil              = $jpg['file_name'];
	            // $isi['file']		= $hasil;
	            $isi			= array(
											'nama_ukm'		=> $nama_ukm,
											'kategori'		=> $kategori,
											'slogan'		=> $slogan,
											'deskripsi'		=> $deskripsi,
											'sekre_ukm'		=> $sekre_ukm,
											'logo_ukm'		=> $hasil
											
									  );

	            $data = array('username'		=> $username,
							  'password'		=> $password,
							  'jenis_akses'	=> $jenis_akses);

	            $table = 'ukm';
	            $where = 'id_ukm';
	            $vwhere = $this->input->post('id_ukm');
	            $id_akun = $this->input->post('id_akun');
	            
	             $this->M_admin->update($table, $isi, $where, $vwhere);
	             $this->M_admin->update('akun',$data,'id_akun',$id_akun);
	            redirect('superadmin/Superadmin/Kelola_ukm','refresh');
	             // echo "<script>alert('sukses')</script>";
	        } else {
	        	$error = $this->upload->display_errors();
	        	print_r($error);
	        }
	        // $this->Modelukm->insert('proposal', $isi);
	        //redirect(base_url().'Admin/Proposal');
	    }
	}
	
	function searching_ukm(){
		
	}

	function aktifnonaktif_ukm(){
		if($this->input->post("submit")){
			$change_status=$this->input->post("status");
			$get_id=$this->input->post("id");

			if($change_status=="aktiv"){
				$change= array('status'=> "non-aktiv" );
			}else{
				$change= array ('status'=> "aktiv" );
			}
			// echo '<pre>'; print_r($get_id); die;
			 $this->M_admin->updatestatus_ukm($change,$get_id);
        
		}
		redirect('superadmin/Superadmin/Kelola_ukm');

	}

//-------------------------------------This is function for Mahasiswa-------------------------------------
	
	function Tambah_mhs() {
		$data['notif'] = $this->M_admin->notifEvent()->result();
		$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
		$this->load->view('ukm/header',$data);
		
		$this->load->view('ukm/Tambah_mhs');
	}

	function Simpan_mhs() {
		    $nim			= $this->input->post('nim');
			$nama			= $this->input->post('nama');
			$fakultas		= $this->input->post('fakultas');
			$jurusan		= $this->input->post('jurusan');
			$foto			= $this->input->post('foto');
			$email			= $this->input->post('email');
			$no_telp		= $this->input->post('no_telp');
			$username		= $this->input->post('username');
			$password		= $this->input->post('password');
			$jenis_akses	= $this->input->post('jenis_akses');
		$this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('jenis_akses', 'Jenis_akses', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
        	$data['notif'] = $this->M_admin->notifEvent()->result();
			$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
			$this->load->view('ukm/header',$data);
			
			$this->load->view('ukm/Tambah_mhs');
        }else{
			    if ($this->M_admin->checkUsername($username) == 0) {
			    	if(isset ($_FILES['mahasiswa'])){
						$config['upload_path']	= './assets/mahasiswa/';
						$config['allowed_types']= 'jpg';
						$this->load->library('Upload', $config);
						$this->upload->initialize($config);
				        if ($this->upload->do_upload('mahasiswa')) {
				            $jpg              	= $this->upload->data();
				            $hasil              = $jpg['file_name'];
				            $isi				= array(
				            						'nim'		=>$nim,
				            						'nama'		=>$nama,
				            						'fakultas'	=>$fakultas,
				            						'jurusan'	=>$jurusan,
				            						'foto'		=>$hasil,
				            						'email'		=>$email,
				            						'no_telp'	=>$no_telp,
				            						'status' 	=>"non-aktiv"
				            	);
				            $data = array(          'username'	    =>$username,
				            						'password'	    =>$password,
				            						'jenis_akses'	=>$jenis_akses,
				            						'nim'           =>$nim
				            		);

				            if ($this->M_admin->checknim($nim) == 0) {
				            	print_r($isi);
				            	  $this->M_admin->insert($isi,'mahasiswa');
				                  $this->M_admin->insert($data,'akun');
				                  redirect('superadmin/Superadmin/Kelola_mhs','refresh');
				            }else{

				            	$this->session->set_flashdata('error_input','Username Atau Nim Telah Di Gunakan');
						    	$data['notif'] = $this->M_admin->notifEvent()->result();
						        $data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
						    	$this->load->view('ukm/header',$data);
						        $this->load->view('ukm/Tambah_mhs');
				            }
		                    
			    }else{
			    	$this->session->set_flashdata('error_input','Username Atau Nim Telah Di Gunakan');
			    	$data['notif'] = $this->M_admin->notifEvent()->result();
			        $data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
			    	$this->load->view('ukm/header',$data);
			        $this->load->view('ukm/Tambah_mhs');
			    }

		        } else {
		        	$error = $this->upload->display_errors();
		        	print_r($error);
		        }
	        }else{
	        	    $this->session->set_flashdata('error_input','Username Telah Di Gunakan');
			    	$data['notif'] = $this->M_admin->notifEvent()->result();
			        $data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
			    	$this->load->view('ukm/header',$data);
			        $this->load->view('ukm/Tambah_mhs');
	        }
	    }
	}
    
       
	
	function Edit_mhs() {
		$nim			        = $this->uri->segment(4);
		$data['mahasiswa']		= $this->M_admin->Lihat_mhs($nim)->row_array();
		$data['notif'] = $this->M_admin->notifEvent()->result();
		$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
		//$data['akun'] = $this->M_admin->AmbilDataAkun_id('akun','id_akun',$id_akun);
		$this->load->view('ukm/header',$data);
		$this->load->view('ukm/Edit_mhs', $data);
	}
	function Update_mhs() {
		$nim = $this->input->post('nim');
		
		//$this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
  		$this->form_validation->set_rules('username', 'username', 'trim|required');
  		$this->form_validation->set_rules('password', 'password', 'trim|required');
  		$this->form_validation->set_rules('jenis_akses', 'jenis_akses', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['mahasiswa']		= $this->M_admin->Lihat_mhs($nim)->row_array();
			$data['notif'] = $this->M_admin->notifEvent()->result();
			$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
			$this->load->view('ukm/header',$data);
			$this->load->view('ukm/Edit_mhs', $data);
        }else{
			$nama			= $this->input->post('nama');
			$fakultas		= $this->input->post('fakultas');
			$jurusan		= $this->input->post('jurusan');
			$foto			= $this->input->post('foto');
			$email			= $this->input->post('email');
			$no_telp		= $this->input->post('no_telp');
			$username		= $this->input->post('username');
			$password		= $this->input->post('password');
			$jenis_akses	= $this->input->post('jenis_akses');
			$file			= 'mahasiswa';
			
			
			$config['upload_path']	= 'assets/mahasiswa/';
			$config['allowed_types']= 'jpg';
			$this->load->library('Upload', $config);
	        if ($this->upload->do_upload($file)) {
	            $jpg              	= $this->upload->data();
	            $hasil              = $jpg['file_name'];
	            // $isi['file']		= $hasil;
	            $isi			= array(
											'nim'			=> $nim,
											'nama'			=> $nama,
											'fakultas'		=> $fakultas,
											'jurusan'		=> $jurusan,
											'foto'			=> $hasil,
											'email'			=> $email,
											'no_telp'		=> $no_telp
											
									  );

	            $data = array('username'		=> $username,
							  'password'		=> $password,
							  'jenis_akses'	=> $jenis_akses);

	            $table = 'mahasiswa';
	            $where = 'nim';
	            $vwhere = $nim;
	            
	             $this->M_admin->update($table, $isi, $where, $vwhere);
	             $this->M_admin->update('akun',$data,'id_akun',$id_akun);
	            redirect('superadmin/Superadmin/Kelola_mhs','refresh');
	        } else {
	        	$error = $this->upload->display_errors();
	        	print_r($error);
	        }
	        //$this->Modelukm->insert('proposal', $isi);
	        //redirect(base_url().'Admin/Proposal');
	    }
	}
	function aktifnonaktif_mhs(){
		if($this->input->post("submit")){
			$change_status=$this->input->post("status");
			$get_id=$this->input->post("id");

			if($change_status=="aktiv"){
				$change= array('status'=> "non-aktiv" );
			}else{
				$change= array ('status'=> "aktiv" );
			}
			// echo '<pre>'; print_r($get_id); die;
			 $this->M_admin->updatestatus_mhs($change,$get_id);
        
		}
		redirect('superadmin/Superadmin/Kelola_mhs');

	}

//--------------------------------This is function for Bagian Kemahasiswaan----------------------------------


function Tambah_kmhswaan() {
		$data['notif'] = $this->M_admin->notifEvent()->result();
		$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
		$this->load->view('ukm/header',$data);
		
		$this->load->view('ukm/Tambah_kmhswaan');
	}

	function Simpan_kmhswaan() {
		$nim = $this->uri->segment(4);
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['notif'] = $this->M_admin->notifEvent()->result();
			$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
			$this->load->view('ukm/header',$data);
			
			$this->load->view('ukm/Tambah_kmhswaan');
        }else{
			$nip			= $this->input->post('nip');
			$nama			= $this->input->post('nama');
			$jabatan		= $this->input->post('jabatan');
			$foto			= $this->input->post('foto');
			
			if(isset ($_FILES['kemahasiswaan'])){
				$config['upload_path']	= './assets/kemahasiswaan/';
				$config['allowed_types']= 'jpg';
				$this->load->library('Upload', $config);
				$this->upload->initialize($config);
		        if ($this->upload->do_upload('kemahasiswaan')) {
		            $jpg              	= $this->upload->data();
		            $hasil              = $jpg['file_name'];
		            $isi				= array(
		            						'nip'		=>$nip,
		            						'nama'		=>$nama,
		            						'jabatan'	=>$jabatan,
		            						'foto'		=>$hasil
		            	);
		             $this->M_admin->insert('kemahasiswaan',$isi);
		            redirect('superadmin/Superadmin/Kelola_bagKmhswaan','refresh');
		        } else {
		        	$error = $this->upload->display_errors();
		        	print_r($error);
		        }
	        }else{
	        	echo "file gambar belum di set";
	        }
	    }
    
       
	}
	function Edit_kmhswaan() {
		$nip			= $this->uri->segment(4);
		$data['kemahasiswaan']		= $this->M_admin->Lihat_kmhswaan($nip);
		$data['notif'] = $this->M_admin->notifEvent()->result();
		$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
		
		$this->load->view('ukm/header',$data);
		$this->load->view('ukm/Edit_kmhswaan', $data);
	}

	function Update_kmhswaan() {
		$nip = $this->uri->segment(4);
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['kemahasiswaan']		= $this->M_admin->Lihat_kmhswaan($nip);
			$data['notif'] = $this->M_admin->notifEvent()->result();
			$data['jmlnotif'] = $this->M_admin->jmlnotifEvent()->result();
			
			$this->load->view('ukm/header',$data);
			$this->load->view('ukm/Edit_kmhswaan', $data);
        }else{
			$nama			= $this->input->post('nama');
			$jabatan		= $this->input->post('jabatan');
			// $foto			= $this->input->post('foto');
			
			if(isset ($_FILES['foto'])){
				$config['upload_path']	= './assets/kemahasiswaan/';
				$config['allowed_types']= 'jpg';
				$this->load->library('Upload', $config);
				$this->upload->initialize($config);
		        if ($this->upload->do_upload('foto')) {
		            $jpg              	= $this->upload->data();
		            $hasil              = $jpg['file_name'];
		            $isi				= array(
		            						'nip'		=>$nip,
		            						'nama'		=>$nama,
		            						'jabatan'	=>$jabatan,
		            						'foto'		=>$hasil
		            	);
		            $table = 'kemahasiswaan';
		            $where = 'nip';
		            $vwhere = $nip;
		            
		             $this->M_admin->update($table, $isi, $where, $vwhere);
		            redirect('superadmin/Superadmin/Kelola_bagKmhswaan','refresh');
		        } else {
		        	$error = $this->upload->display_errors();
		        	print_r($error);
		        }
	        }else{
	        	echo "file gambar belum di set";
	        }
	        //$this->Modelukm->insert('proposal', $isi);
	        //redirect(base_url().'Admin/Proposal');
	    }
	}
	function delete_kmhswaan(){
		$nip = $this->uri->segment(4);
		$this->M_admin->delete('kemahasiswaan','nip',$nip);
		// echo $nip;
		redirect('superadmin/Superadmin/Kelola_bagKmhswaan');

	}

}
// 	function TambahLpj() {
// 		$this->load->view('ukm/TambahLpj');
// 	}

// 	function SimpanLpj() {
// 		$judul					= $this->input->post('judul_lpj');
// 		$ukm 					= $this->input->post('nama_ukm');
// 		$telp					= $this->input->post('no_telp');
// 		if (isset($_FILES['lpj'])) {
// 			$config['upload_path']	= './assets/lpj/';
// 			$config['allowed_types']= 'pdf';
// 			$this->load->library('Upload', $config);
// 			$this->upload->initialize($config);
// 	        if ($this->upload->do_upload('lpj')) {

//             $pdf_data              	= $this->upload->data();
//             $namafile             	= $pdf_data['file_name'];
//             $isi					= array(
// 										'judul_lpj'	=> $judul,
// 										'file'		=>$namafile,
// 										'nama_ukm'	=> $ukm,
// 										'no_telp'	=> $telp
// 								  );

//             $this->Modelukm->insert('lpj',$isi);
//             redirect('ukm/Lpj','refresh');

// 	        } else {
// 	        	$error = $this->upload->display_errors();
// 	        	print_r($error);
// 	        }
// 		}
//         //$this->Modelukm->insert('lpj', $isi);
//         //redirect(base_url().'Admin/Lpj');
// 	}

// 	function UpdateLpj() {
// 		$idlpj 					= $this->input->post('id_lpj');
// 		$judul					= $this->input->post('judul_lpj');
// 		$ukm 					= $this->input->post('nama_ukm');
// 		$telp					= $this->input->post('no_telp');
		
// 		// echo $idlpj;
// 		// echo $judul;
// 		// echo $ukm;
// 		// echo $telp;

// 		if (isset($_FILES['lpj'])) {

// 			$config['upload_path']	= './assets/lpj/';
// 			$config['allowed_types']= 'pdf';
// 			$this->load->library('Upload', $config);
// 			$this->upload->initialize($config);
// 	        if ($this->upload->do_upload('lpj')) {

//             $pdf_data              	= $this->upload->data();
//             $namafile             	= $pdf_data['file_name'];
//             $isi					= array(
// 										'judul_lpj'	=> $judul,
// 										'file'		=>$namafile,
// 										'nama_ukm'	=> $ukm,
// 										'no_telp'	=> $telp
// 								  );
//             $table = 'lpj';
//             $where = 'id_lpj';
//             $this->Modelukm->update($table, $isi, $where, $idlpj);
//             redirect('ukm/Lpj','refresh');

// 	        } else {
// 	        	$error = $this->upload->display_errors();
// 	        	print_r($error);
// 	        }
// 		}
//         //$this->Modelukm->insert('lpj', $isi);
//         //redirect(base_url().'Admin/Lpj');
// 	}

// 	function EditLpj() {
// 		$id_lpj			= $this->uri->segment(3);
// 		$data['datalpj']		= $this->Modelukm->LihatLPJ($id_lpj);
		

// 		$this->load->view('ukm/EditLpj', $data);
// 	}
// 	function delete_lpj(){
// 		$id_lpj = $this->uri->segment(3);
// 		$this->Modelukm->delete('lpj','id_lpj',$id_lpj);
// 		redirect('ukm/Lpj');

// 	}
// 	function TambahEvent(){

// 		$this->load->view('ukm/TambahEvent');
// 	}

// 	function SimpanEvent() {
// 		$id_event				= $this->input->post('id_event');
// 		$nama_event				= $this->input->post('nama_event');
// 		$tanggal				= date('Y-m-d');
// 		$tempat					= $this->input->post('tempat');
// 		$waktu					= time();
// 		$penyelenggara			= $this->input->post('penyelenggara');
// 		$poster					= 'event';
// 		$konten					= nl2br(htmlspecialchars_decode($this->input->post('summernote'), ENT_HTML5));
		
// 		$konten					= array(
// 										'id_event'		=> $id_event,
// 										'nama_event'	=> $nama_event,
// 										'tanggal'		=> $tanggal,
// 										'tempat'		=> $tempat,
// 										'penyelenggara'	=> $penyelenggara,			
// 										'poster'		=> $poster,
// 										'konten'		=> $konten
										
// 						  	  	  );
// 		$this->Modelukm->insert('event', $konten);
// 		redirect(base_url().'ukm/Event');
// 	}
// 	function delete_event(){
// 		$id_event = $this->uri->segment(3);
// 		$this->Modelukm->delete('event','id_event',$id_event);
// 		redirect('ukm/Event');

// 	}


