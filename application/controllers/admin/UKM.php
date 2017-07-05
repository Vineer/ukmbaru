<?php

class UKM extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/ModelUKM');
		$this->load->model('M_admin');
		date_default_timezone_set('Asia/Jakarta');
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
	}

	function index() {
		// $id = $this->session->userdata('id_ukm');
		//$data['artikel']		= $this->ModelUKM->AmbilDaftarArtikel()->result();
		$id 					= $this->session->userdata('id_ukm');
		$data['artikel']		= $this->ModelUKM->AmbilDaftarUKMById($id)->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/DaftarArtikel', $data);
		// echo $id;
	}

	function Artikel() {
		// $id = $this->session->userdata('id_ukm');
		//$data['artikel']		= $this->ModelUKM->AmbilDaftarArtikel()->result();
		$id 					= $this->session->userdata('id_ukm');
		$data['artikel']		= $this->ModelUKM->AmbilDaftarUKMById($id)->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/DaftarArtikel', $data);
	}

	function Proposal() {
		$data['proposal']		= $this->ModelUKM->AmbilDaftarProposal()->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/DaftarProposal', $data);
	}
	function Lpj() {
		$data['lpj']		= $this->ModelUKM->AmbilDaftarLpj()->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/DaftarLpj', $data);
	}
	function Event(){
		$id = $this->session->userdata('id_ukm');
		//$data['event']		= $this->ModelUKM->AmbilDaftarEvent()->result();
		$data['event']			= $this->ModelUKM->AmbliDaftarEventById($id)->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/DaftarEvent',$data);
	}

	function TambahArtikel() {
		$id 			  = $this->session->userdata('id_ukm');
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$data['penerbit'] = $this->ModelUKM->ambilNamaUKM($id)->row_array();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/TambahArtikel',$data);
	}

	function cekSession() {
		echo $this->session->userdata('id_ukm');
	}

	function SimpanArtikel() {
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('summernote', 'Konten', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/TambahArtikel',$data);
        }else{
        	
			$penerbit				= $this->input->post('penerbit');
			$kategori				= $this->input->post('kategori');
			$judul					= $this->input->post('judul');
			$konten					= nl2br(htmlspecialchars_decode($this->input->post('summernote'), ENT_HTML5));
			$tgl_terbit				= date('Y-m-d');
			$konten					= array(
											/*'kd_artikel'	=> $kd_artikel,*/
											'penerbit'		=> $penerbit,
											'kategori'		=> $kategori,
											'tgl_terbit'	=> $tgl_terbit,
											'judul'			=> $judul,			
											'konten'		=> $konten,
											'id_ukm'		=> $this->session->userdata('id_ukm')
											
							  	  	  );
			$this->ModelUKM->insert('artikel', $konten);
			redirect(base_url().'admin/UKM/Artikel');
        }
	}

	function EditArtikel($id) {
		$data['artikel']		= $this->ModelUKM->LihatArtikel($id)->row_array();
		$data['notif'] 			= $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] 		= $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/EditArtikel', $data);

	}

	function UpdateArtikel($id) {
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('summernote', 'Konten', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['artikel']		= $this->ModelUKM->LihatArtikel($id)->row_array();
			$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/EditArtikel', $data);
        }else{
			$penerbit				= $this->input->post('penerbit');
			$kategori				= $this->input->post('kategori');
			$judul					= $this->input->post('judul');
			$konten					= nl2br(htmlspecialchars_decode($this->input->post('summernote'), ENT_HTML5));
			$tgl_terbit				= date('Y-m-d');	
			$konten					= array(
											
											'penerbit'		=> $penerbit,
											'kategori'		=> $kategori,
											'tgl_terbit'	=> $tgl_terbit,
											'judul'			=> $judul,			
											'konten'		=> $konten
							  	  	  );
			$this->ModelUKM->update('artikel', $konten, 'kd_artikel', $id);
			redirect(base_url().'admin/UKM/Artikel');
		}
	}
	function delete_artikel($id){
		$this->ModelUKM->delete('artikel','kd_artikel',$id);
		redirect('admin/UKM/Artikel');

	}
	function TambahProposal() {
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/TambahProposal',$data);
	}

	function SimpanProposal() {
		$this->form_validation->set_rules('judul_proposal', 'Judul Proposal', 'trim|required');
        $this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'trim|required|numeric');
        if ($this->form_validation->run() == FALSE) {
        	$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/TambahProposal',$data);
        }else{
			$judul_proposal			= $this->input->post('judul_proposal');
			$nama_ukm 				= $this->input->post('nama_ukm');
			$no_telp				= $this->input->post('no_telp');
			if (isset($_FILES['proposal'])) {
				$config['upload_path']	= './assets/proposal/';
				$config['allowed_types']= 'pdf';
				$this->load->library('Upload', $config);
				$this->upload->initialize($config);
		        if ($this->upload->do_upload('proposal')) {

	            $pdf_data              	= $this->upload->data();
	            $namafile             	= $pdf_data['file_name'];
	            $isi					= array(
											'judul_proposal'	=> $judul_proposal,
											'file'				=> $namafile,
											'nama_ukm'			=> $nama_ukm,
											'no_telp'			=> $no_telp
									  );

	            $this->ModelUKM->insert('proposal',$isi);
	            redirect('admin/UKM/Proposal','refresh');

		        } else {
		        	$error = $this->upload->display_errors();
		        	print_r($error);
		        }
		    }
		}
        //$this->ModelUKM->insert('proposal', $isi);
        //redirect(base_url().'Admin/Proposal');
	}
	function EditProposal($id) {
		$data['dataproposal']		= $this->ModelUKM->LihatProposal($id);
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		// print_r($data);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/EditProposal', $data);
	}
	function UpdateProposal($id) {
		$this->form_validation->set_rules('id_proposal', 'Id Proposal', 'trim|required|numeric');
		$this->form_validation->set_rules('judul_proposal', 'Judul Proposal', 'trim|required');
        $this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'trim|required|numeric');
        if ($this->form_validation->run() == FALSE) {
        	$data['dataproposal']		= $this->ModelUKM->LihatProposal($id);
			$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			// print_r($data);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/EditProposal', $data);
        }else{
			$id_proposal 			= $this->input->post('id_proposal');
			$judul_proposal			= $this->input->post('judul_proposal');
			$nama_ukm 				= $this->input->post('nama_ukm');
			$no_telp				= $this->input->post('no_telp');
			
			// echo $id_proposal;
			// echo $judul_proposal;
			// echo $admin;
			// echo $telp;

			if (isset($_FILES['proposal'])) {

				$config['upload_path']	= './assets/proposal/';
				$config['allowed_types']= 'pdf';
				$this->load->library('Upload', $config);
				$this->upload->initialize($config);
		        if ($this->upload->do_upload('proposal')) {

	            $pdf_data              	= $this->upload->data();
	            $namafile             	= $pdf_data['file_name'];
	            $isi					= array(
											'judul_proposal'	=> $judul_proposal,
											'file'				=> $namafile,
											'nama_ukm'			=> $nama_ukm,
											'no_telp'			=> $no_telp
									  );
	            $table = 'proposal';
	            $where = 'id_proposal';
	            $this->ModelUKM->update($table, $isi, $where, $id_proposal);
	            redirect('admin/UKM/Proposal','refresh');

		        } else {
		        	$error = $this->upload->display_errors();
		        	print_r($error);
		        }
			}
	        //$this->ModelUKM->insert('proposal', $isi);
	        //redirect(base_url().'Admin/proposal');
		}
	}
	function delete_proposal($id){
		$this->ModelUKM->delete('proposal','id_proposal',$id);
		redirect('admin/UKM/Proposal');
	}


	function TambahLpj() {
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/TambahLpj', $data);
	}

	function SimpanLpj() {
		$this->form_validation->set_rules('judul_lpj', 'Judul LPJ', 'trim|required');
        $this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'trim|required|numeric');
        if ($this->form_validation->run() == FALSE) {
        	$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$this->load->view('admin/header', $data);
			$this->load->view('admin/TambahLpj', $data);
        }else{
			$judul					= $this->input->post('judul_lpj');
			$nama_ukm				= $this->input->post('nama_ukm');
			$telp					= $this->input->post('no_telp');
			if (isset($_FILES['lpj'])) {
				$config['upload_path']	= './assets/lpj/';
				$config['allowed_types']= 'pdf';
				$this->load->library('Upload', $config);
				$this->upload->initialize($config);
		        if ($this->upload->do_upload('lpj')) {

	            $pdf_data              	= $this->upload->data();
	            $namafile             	= $pdf_data['file_name'];
	            $isi					= array(
											'judul_lpj'	=> $judul,
											'file'		=>$namafile,
											'nama_ukm'	=> $nama_ukm,
											'no_telp'	=> $telp
									  );

	            $this->ModelUKM->insert('lpj',$isi);
	            redirect('admin/UKM/Lpj','refresh');

		        } else {
		        	$error = $this->upload->display_errors();
		        	print_r($error);
		        }
		    }
		}
        //$this->ModelUKM->insert('lpj', $isi);
        //redirect(base_url().'Admin/Lpj');
	}

	function UpdateLpj($id) {
		$this->form_validation->set_rules('id_lpj', 'Id LPJ', 'trim|required|numeric');
		$this->form_validation->set_rules('judul_lpj', 'Judul LPJ', 'trim|required');
        $this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'trim|required|numeric');
        if ($this->form_validation->run() == FALSE) {
        	$data['datalpj']		= $this->ModelUKM->LihatLPJ($id);
			$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/EditLpj', $data);
        }else{
			$idlpj 					= $this->input->post('id_lpj');
			$judul					= $this->input->post('judul_lpj');
			$nama_ukm 				= $this->input->post('nama_ukm');
			$telp					= $this->input->post('no_telp');
			
			// echo $idlpj;
			// echo $judul;
			// echo $admin;
			// echo $telp;

			if (isset($_FILES['lpj'])) {

				$config['upload_path']	= './assets/lpj/';
				$config['allowed_types']= 'pdf';
				$this->load->library('Upload', $config);
				$this->upload->initialize($config);
		        if ($this->upload->do_upload('lpj')) {

	            $pdf_data              	= $this->upload->data();
	            $namafile             	= $pdf_data['file_name'];
	            $isi					= array(
											'judul_lpj'	=> $judul,
											'file'		=> $namafile,
											'nama_ukm'	=> $nama_ukm,
											'no_telp'	=> $telp
									  );
	            $table = 'lpj';
	            $where = 'id_lpj';
	            $this->ModelUKM->update($table, $isi, $where, $idlpj);
	            redirect('admin/UKM/Lpj','refresh');

		        } else {
		        	$error = $this->upload->display_errors();
		        	print_r($error);
		        }
			}
	        //$this->ModelUKM->insert('lpj', $isi);
	        //redirect(base_url().'Admin/Lpj');
		}
	}

	function EditLpj($id) {
		$data['datalpj']		= $this->ModelUKM->LihatLPJ($id);
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/EditLpj', $data);
	}
	function delete_lpj($id){
		$this->ModelUKM->delete('lpj','id_lpj',$id);
		redirect('admin/UKM/Lpj');

	}
	function TambahEvent() {
		$id 				= $this->session->userdata('id_ukm');
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$data['penerbit']	= $this->ModelUKM->ambilNamaUKM($id)->row_array();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/TambahEvent');
	}

	function SimpanEvent() {
		$this->form_validation->set_rules('nama_event', 'Nama Event', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Event', 'trim|required');
        $this->form_validation->set_rules('tempat', 'Tempat Event', 'trim|required');
        //$this->form_validation->set_rules('waktu', 'Waktu Event', 'trim|required');
        $this->form_validation->set_rules('waktu', 'Waktu Mulai', 'trim|required');
        $this->form_validation->set_rules('selesai', 'Waktu Selesai', 'trim|required');
        $this->form_validation->set_rules('penyelenggara', 'penyelenggara', 'trim|required');
         $this->form_validation->set_rules('harga_tiket', 'harga_tiket', 'trim|required');
        $this->form_validation->set_rules('konten', 'Konten', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/TambahEvent');
        }else{
			$nama_event				= $this->input->post('nama_event');
			$tanggal				= $this->input->post('tanggal');
			$tempat					= $this->input->post('tempat');
			$waktu					= $this->input->post('waktu');
			$selesai 				= $this->input->post('selesai');
			$penyelenggara			= $this->input->post('penyelenggara');
			$harga_tiket			= $this->input->post('harga_tiket');
			$konten					= $this->input->post('konten');
			if (isset($_FILES['event'])) {
				$config['upload_path']	= './assets/event/';
				$config['allowed_types']= 'jpg';
				$this->load->library('Upload', $config);
				$this->upload->initialize($config);
		        if ($this->upload->do_upload('event')) {

	            $jpg_data              	= $this->upload->data();
	            $namafile	            = $jpg_data['file_name'];
	            $isi					= array(
											'nama_event'	=> $nama_event,
											'tanggal'		=> $tanggal,
											'tempat'		=> $tempat,
											'waktu'			=> $waktu,
											'selesai'		=> $selesai,
											'penyelenggara'	=> $penyelenggara,
											'harga_tiket'	=> $harga_tiket,
											'konten'		=> $konten,
											'poster'		=> $namafile,
											'id_ukm'		=> $this->session->userdata('id_ukm')
									  );

	            $this->ModelUKM->insert('event',$isi);
	            redirect('admin/UKM/Event','refresh');
		        } else {
		        	$error = $this->upload->display_errors();
		        	print_r($error);
		        }
		    } else{
		    	"file belum dipilih";
		    }

			// // echo $id_event;
			// echo $nama_event;
			// echo $tanggal;
			// echo $tempat;
			// echo $waktu;
			// echo $penyelenggara;
			// echo $konten;
			// // echo $poster;
	        //$this->ModelUKM->insert('event', $isi);
	        //redirect(base_url().'Admin/Event');
		}
	}
	function EditEvent($id) {
		$data['query'] = $this->ModelUKM->LihatEvent($id)->row();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/EditEvent', $data);
	}
	function UpdateEvent($id) {
		$this->form_validation->set_rules('nama_event', 'Nama Event', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Event', 'trim|required');
        $this->form_validation->set_rules('tempat', 'Tempat Event', 'trim|required');
        $this->form_validation->set_rules('waktu', 'Waktu Event', 'trim|required');
        $this->form_validation->set_rules('selesai', 'Waktu Event', 'trim|required');
        $this->form_validation->set_rules('penyelenggara', 'penyelenggara', 'trim|required');
        $this->form_validation->set_rules('harga_tiket','harga_tiket', 'trim|required');
        $this->form_validation->set_rules('konten', 'Konten', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['query'] = $this->ModelUKM->LihatEvent($id)->row();
			$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/EditEvent', $data);
        }else{
			$id_event				= $this->input->post('id_event');
			$nama_event				= $this->input->post('nama_event');
			$tanggal				= $this->input->post('tanggal');
			$tempat					= $this->input->post('tempat');
			$waktu					= $this->input->post('waktu');
			$selesai				= $this->input->post('selesai');
			$penyelenggara			= $this->input->post('penyelenggara');
			$harga_tiket			= $this->input->post('harga_tiket');
			$konten					= $this->input->post('konten');
			if (isset($_FILES['event'])) {
				$config['upload_path']	= './assets/event/';
				$config['allowed_types']= 'jpg|png|jpeg';
				$this->load->library('Upload', $config);
				$this->upload->initialize($config);
		        if ($this->upload->do_upload('event')) {

	            $jpg_data              	= $this->upload->data();
	            $namafile	            = $jpg_data['file_name'];
	            $isi					= array(
											'nama_event'	=> $nama_event,
											'tanggal'		=> $tanggal,
											'tempat'		=> $tempat,
											'waktu'			=> $waktu,
											'selesai'		=> $selesai,
											'penyelenggara'	=> $penyelenggara,
											'harga_tiket'	=> $harga_tiket,
											'konten'		=> $konten,
											'poster'		=> $namafile
									  );

	            $this->ModelUKM->update('event', $isi, 'id_event', $id_event);
	             redirect('admin/UKM/Event','refresh');
		        } else {
		        	$error = $this->upload->display_errors();
		        	print_r($error);
		        }
		    } else{
		    	echo "file belum dipilih";
		    }
		}
	}
	function delete_event($id){
		$this->ModelUKM->delete('event','id_event',$id);
		redirect('admin/UKM/Event');

	}

	function TambahProfil() {
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/TambahProfil');
	}
	function UpdateProfil($id) {
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$data['query']	= $this->db->where('id_ukm', $id)->get('ukm')->row();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/EditProfil',$data);
	}
	function EditProfil(){
		//$data['ukm']		= $this->ModelUKM->AmbilDaftarProfil()->result();
		$id 				= $this->session->userdata('id_ukm');
		$data['ukm']		= $this->ModelUKM->AmbilDaftarProfilId($id)->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/DaftarEditProfil', $data);
	}
	function delete_profil($id){
		$this->ModelUKM->delete('ukm','id_ukm',$id);
		redirect(base_url().'admin/UKM/EditProfil');
	}
	function Pengumuman(){
		$data['pengumuman']		= $this->ModelUKM->AmbilDaftarPengumuman()->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/DaftarPengumuman',$data);
	}
	function TambahPengumuman() {
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/TambahPengumuman');
	}
	function delete_pengumuman($id){
		$this->ModelUKM->delete('pengumuman','id_pengumuman',$id);
		redirect('admin/UKM/Pengumuman');
	}
	function EditPengumuman($id) {
		$data['query'] = $this->ModelUKM->LihatPengumuman($id)->row();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/EditPengumuman', $data);
	}
	function UpdatePengumuman($id) {
		$this->form_validation->set_rules('jenis', 'Jenis Pengumuman', 'trim|required');
        $this->form_validation->set_rules('judul', 'Judul Pengumuman', 'trim|required');
        $this->form_validation->set_rules('summernote', 'Isi Pengumuman', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['query'] = $this->ModelUKM->LihatPengumuman($id)->row();
			$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/EditPengumuman', $data);
        }else{
			$id	= $this->input->post('id');
			$jenis	= $this->input->post('jenis');
			$judul 	= $this->input->post('judul');
			$konten	= nl2br(htmlspecialchars_decode($this->input->post('summernote'), ENT_HTML5));
			$isi = array(
					'jenis_pengumuman'	=> $jenis,
					'judul'				=> $judul,
					'isi_pengumuman'	=> $konten
					
	  	  	);
			$this->ModelUKM->update('pengumuman', $isi, 'id_pengumuman', $id);
			redirect('admin/UKM/Pengumuman');
		}
		
	}
	function SimpanPengumuman() {
		$this->form_validation->set_rules('jenis', 'Jenis Pengumuman', 'trim|required');
        $this->form_validation->set_rules('judul', 'Judul Pengumuman', 'trim|required');
        $this->form_validation->set_rules('summernote', 'Isi Pengumuman', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/TambahPengumuman');
        }else{
			$jenis				= $this->input->post('jenis');
			$judul				= $this->input->post('judul');
			$konten					= nl2br(htmlspecialchars_decode($this->input->post('summernote'), ENT_HTML5));
			$isi				= array(
											'jenis_pengumuman'	=> $jenis,
											'judul'				=> $judul,
											'isi_pengumuman'	=> $konten
											
							  	  	  );
			$this->ModelUKM->insert('pengumuman', $isi);
			redirect(base_url().'admin/UKM/Pengumuman');
		}
	}
	function SimpanProfil() {
		$this->form_validation->set_rules('id_ukm', 'Kode UKM', 'trim|required');
        $this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('sekre_ukm', 'Sekre UKM', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/TambahProfil');
        }else{
			$id_ukm					= $this->input->post('id_ukm');
			$nama_ukm				= $this->input->post('nama_ukm');
			$kategori				= $this->input->post('kategori');
			$sekre_ukm				= $this->input->post('sekre_ukm');
			if (isset($_FILES['logo_ukm'])) {
				$config['upload_path']	= './assets/logoUkm/';
				$config['allowed_types']= 'jpg';
				$this->load->library('Upload', $config);
				$this->upload->initialize($config);
		        if ($this->upload->do_upload('logo_ukm')) {

	            $jpg_data              	= $this->upload->data();
	            $namafile	            = $jpg_data['file_name'];
	            $isi					= array(
											'id_ukm'		=> $id_ukm,
											'nama_ukm'		=> $nama_ukm,
											'kategori'		=> $kategori,
											'sekre_ukm'		=> $sekre_ukm,
											'logo_ukm'		=> $namafile
									  );

	            // print_r($isi);
	            $this->ModelUKM->insert('ukm',$isi);
	            redirect(base_url().'admin/UKM/EditProfil');

		        } else {
		        	$error = $this->upload->display_errors();
		        	print_r($error);
		        }
		    } else{
		    	echo "file belum dipilih";
		    }

		}
	}
	function SimpanUpdateProfil($id) {
		$this->form_validation->set_rules('id_ukm', 'Kode UKM', 'trim|required');
        $this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('sekre_ukm', 'Sekre UKM', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
        	$data['notif'] = $this->ModelUKM->notifEvent()->result();
			$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
			$data['query']	= $this->db->where('id_ukm', $id)->get('ukm')->row();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/EditProfil',$data);
        }else{
			$nama_ukm				= $this->input->post('nama_ukm');
			$kategori				= $this->input->post('kategori');
			$slogan 				= $this->input->post('slogan');
			$deskripsi 				= $this->input->post('deskripsi');
			$sekre_ukm				= $this->input->post('sekre_ukm');
			$isi = array(
				'nama_ukm'		=> $nama_ukm,
				'kategori'		=> $kategori,
				'slogan'		=> $slogan,
				'deskripsi'		=> $deskripsi,
				'sekre_ukm'		=> $sekre_ukm	
		  	);
			$this->ModelUKM->update('ukm', $isi, 'id_ukm', $id);
			redirect(base_url().'admin/UKM/EditProfil');
		}
	}
	function EventTicket(){
		//$data['tiket']		= $this->ModelUKM->AmbilDaftarTiket()->result();
		$id 					= $this->session->userdata('id_ukm');
		$data['tiket']			= $this->ModelUKM->AmbilDaftarTiketId($id)->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$this->load->view('admin/header',$data);
		
		$this->load->view('admin/DaftarTiket',$data);
	}
	function delete_ticket($id){
		$this->ModelUKM->delete('data_pesan_tiket','kd_booking',$id);
		redirect('admin/UKM/EventTicket');
	}
	function EditTicket($id) {
		$isi = array(
			'status'	=> 'Lunas'
		);

        $this->ModelUKM->update('data_pesan_tiket', $isi, 'kd_booking', $id);
		redirect('admin/UKM/EventTicket');
	}
	function PanitiaEvent(){
		//$data['panitia']		= $this->ModelUKM->AmbilDaftarPanitia()->result();
		$id 				= $this->session->userdata('id_ukm');
		$data['panitia']		= $this->ModelUKM->AmbilDaftarPanitiaId($id)->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$this->load->view('admin/header',$data);
		
		$this->load->view('admin/DaftarPanitiaEvent',$data);
	}
	function EditPanitiaEvent($id) {
		
		$divisi	= $this->input->post('divget');

		$isi = array(
			'divisi'	=> $divisi,
			'status'	=> 'Diterima'
		);

        $this->ModelUKM->update('data_panitia', $isi, 'kd_panitia', $id);
		redirect('admin/UKM/PanitiaEvent');
	}
	function delete_panitia($id){
		$this->ModelUKM->delete('data_panitia','kd_panitia',$id);
		redirect('admin/UKM/PanitiaEvent');
	}
	function Komentar(){
		$id = $this->session->userdata('id_ukm');
		//$data['komentar']		= $this->ModelUKM->AmbilDaftarKomentar($id)->result();
		$data['komentar']		= $this->ModelUKM->AmbilDaftarKomentarId($id)->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/DaftarKomentar',$data);
	}
	function delete_komentar($id){
		$this->ModelUKM->delete('komentar','id_komentar',$id);
		redirect('admin/UKM/Komentar');
	}
	function DaftarFeedback(){
		//$data['feedback']	= $this->ModelUKM->AmbilDaftarFeedback()->result();
		$id 				= $this->session->userdata('id_ukm');
		$data['feedback'] 	= $this->ModelUKM->AmbilDaftarFeedbackId($id)->result();
		$data['jmlnotif'] = $this->ModelUKM->jmlnotifEvent()->result();
		$data['notif'] = $this->ModelUKM->notifEvent()->result();
		$this->load->view('admin/header',$data);
		
		$this->load->view('admin/DaftarFeedback',$data);
	}
}

?>