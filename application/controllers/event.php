<?php 
	
	class event extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('m_event');
			$this->load->model('m_admin');
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

		function data_event(){

			$data['event'] = $this->m_event->get_event('event');
			$id_akun = $this->session->userdata['nim'];
			$data['mahasiswa'] =$this->m_admin->profil($id_akun)->row_array();
			$this->load->view('data-event',$data);
		}

		function single_event($id_event){
			$id_akun = $this->session->userdata['nim'];
			$data['mahasiswa'] =$this->m_admin->profil($id_akun)->row_array();
			$where = array('id_event'=>$id_event);
			$data['recent'] = $this->m_event->get_recent_event();
			$data['single'] = $this->m_event->get_single_event($where,'event')->result();
			$data['idevent'] = $id_event;
			// $where2 = array('id_artikel'=>$id_event, 'jenis'=>'event');
			$id_artikel	= $id_event;

			$data['komen'] = $this->m_event->get_komen_event($id_artikel)->result();
			$data['jmlkomen'] = $this->db->select('count(id_komentar) as jmlkomen')->where('id_artikel',$id_event)->where('jenis','event')->get('komentar')->row();
			$this->load->view('single-event',$data);
			// print_r($data['komen']);
		}

		function komentar($id) {
			$isi		= $this->input->post('isi');
			$nim		= $this->input->post('nama');
			$waktu		= date("F j, Y, g:i a"); 
			$isi		= array(
				'jenis'			=> 'event',
				'id_artikel'	=> $id,
				'isi_komentar'	=> $isi,
				'waktu'			=> $waktu,
				'nim'	=> $nim
			);
			$this->m_event->insert('komentar', $isi);
			redirect(base_url().'event/single_event/'.$id);
		}

		function rating(){
			$rating = $this->input->post('rating');
			$id = $this->input->post('id');
			$cek = $this->db->where('id_event', $id)->get('event')->row();
			$i = ($cek->rating + $rating)/2;
			$total = round($i, 0, PHP_ROUND_HALF_ODD);
			$data = array(
				'rating'	=> $total
	  	  	);
			$this->m_event->update('event', $data, 'id_event', $id);
		}

		/*------------------------------------Feedback Event------------------------------------------*/

	public function form_feedback(){
		$id_akun = $this->session->userdata['nim'];
			$data['mahasiswa'] =$this->m_admin->profil($id_akun)->row_array();
			$nim = $this->uri->segment(3);
			$data['id']		= $this->uri->segment(3);
			$data['event'] = $this->m_beranda->get_all_data('event');
			$this->load->view('feedback',$data);
	}


	public function kritik_saran(){
		// $id_feedback	= $this->input ->post('id_feedback');
		// $email			= $this->input ->post('email');
		$nim		= $this->input ->post('nama');
		
		$kritik			= $this->input ->post('kritik');
		$saran			= $this->input ->post('saran');
		$id_event 		= $this->input->post('id_event');
		$nama_event 		= $this->input->post('nama_event');
		$data 			= array(
			'kritik' 		=>$kritik,
			'saran' 		=>$saran,
			'nim'			=>$nim,
			'id_event'	=>$id_event
		);	

		if($this->m_event->insert('feedback',$data)){
			alert ('Terimakasih Atas Kritik dan Saran yang Anda Berikan');
			$this->session->set_flashdata('Terimakasih Atas Kritik dan Saran yang Anda Berikan');
		}else{
			$this->session->set_flashdata('Maaf, kritik dan saran Anda Gagal disimpan.');
		}
	}
}
?>