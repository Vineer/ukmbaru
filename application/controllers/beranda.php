<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_beranda');
		$this->load->model('m_admin');
	}
	public function index()
	{
		if ($this->session->userdata('username') == null){
			redirect('beranda/sign_in');
		}
		$table = 'artikel';
		$data['artikel'] = $this->m_beranda->get_all_data($table);
		$id_akun = $this->session->userdata['nim'];
		$data['mahasiswa'] =$this->m_admin->profil($id_akun)->row_array();
		$data['upcoming_event'] = $this->m_beranda->get_current_event();
		$data['event_lainnya'] = $this->m_beranda->get_another_event();
		$this->load->view('index',$data);
		//print_r($id_akun);
	}

	public function artikel(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$table = 'ukm';
		$tab = 'artikel';
		$tanggal = 'tgl_terbit';
		$data['ukm'] = $this->m_beranda->get_all_data($table);
		$data['artikel'] = $this->m_beranda->get_all_data($tab);
		$data['current_artikel'] = $this->m_beranda->get_current_data($tab,$tanggal);
		$data['upcoming_event'] = $this->m_beranda->get_current_event();
		$this->load->view('artikel',$data);
	}

	public function pengumuman(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$where = array('status'=>'0');
		$data = array('status'=>'1');
		$this->m_beranda->update_pengumuman($where,$data,'pengumuman');
		$table = 'pengumuman';
		$data['pengumuman'] = $this->m_beranda->get_all_data($table);

		$this->load->view('pengumuman',$data);
	}

	public function artikel_detail($kd_artikel){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$table = 'ukm';
		$tab = 'artikel';
		$tanggal = 'tgl_terbit';
		$data['ukm'] = $this->m_beranda->get_all_data($table);
		$where = 'kd_artikel = '.$kd_artikel;
		$data['artikel'] = $this->m_beranda->get_data($where,$tab)->result();
		$data['current_artikel'] = $this->m_beranda->get_current_data($tab,$tanggal);
		$data['upcoming_event'] = $this->m_beranda->get_current_event();
		$where2 = array('id_artikel'=>$kd_artikel, 'jenis'=>'artikel');
		$data['komen'] = $this->m_beranda->get_komen($where2,'komentar')->result();
		$data['jmlkomen'] = $this->db->select('count(id_komentar) as jmlkomen')->where('id_artikel',$kd_artikel)->where('jenis','artikel')->get('komentar')->row();
		$data['idevent'] = $kd_artikel;
		$this->load->view('artikel_detail',$data);
		// echo $kd_artikel;
		// print_r($data['artikel']);
	}

	function komentar($id) {
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$isi		= $this->input->post('isi');
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$website	= $this->input->post('website');
		$waktu		= date("F j, Y, g:i a"); 
		$isi		= array(
			'jenis'			=> 'artikel',
			'id_artikel'	=> $id,
			'nama_komentar'	=> $nama,
			'email'			=> $email,
			'website'		=> $website,
			'isi_komentar'	=> $isi,
			'waktu'			=> $waktu
		);
		$this->m_beranda->insert('komentar', $isi);
		redirect(base_url().'beranda/artikel_detail/'.$id);
	}

	function rating(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$rating = $this->input->post('rating');
		$id = $this->input->post('id');
		$cek = $this->db->where('kd_artikel', $id)->get('artikel')->row();
		$i = ($cek->rating + $rating)/2;
		$total = round($i, 0, PHP_ROUND_HALF_ODD);
		$data = array(
			'rating'	=> $total
  	  	);
		$this->m_beranda->update('artikel', $data, 'kd_artikel', $id);
	}

	public function profile_ukm(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$table = 'ukm';
		$data['ukm'] = $this->m_beranda->get_all_data($table);
		$this->load->view('profile_ukm',$data);
	}
	public function searching_ukm(){
		if($this->input->post('submit')){

			$nama_ukm=$this->input->post('nama_ukm');
			$table = 'ukm';
			$var="nama_ukm";
			$data['ukm_list'] = $this->m_beranda->get_all_data($table);
			$data['ukm'] = $this->m_beranda->get_all_data_where($table,$var,$nama_ukm);
			$this->load->view('profile_ukm',$data);

		}
	}

	public function profile_ukm_lengkap($id_ukm){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$id_ukm = $this->uri->segment(3);
		$where = array('id_ukm' =>$id_ukm);
		$table = 'ukm';
		$data['ukm_lain'] = $this->m_beranda->get_all_data($table);
		$data['ukm'] = $this->m_beranda->get_data($where,$table)->result();
		$tab = 'artikel';
		$tanggal = 'tgl_terbit';
		$data['current_artikel'] = $this->m_beranda->get_current_data($tab,$tanggal);

		$this->load->view('profile_ukm_lengkap',$data);
	}

	public function join_ukm(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$this->load->view('formulir-ukm');
	}
	public function join_panitia_event(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		date_default_timezone_set('Asia/Jakarta');
		$tanggal 			= date('Y-m-d');
		$data['event']		= $this->db->query("select * from event where tanggal >= '$tanggal'")->result();
		$this->load->view('form_panitia_event', $data);
	}
	public function hasil_pengumuman(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$this->load->view('form_pengumuman_panitia');
	}
	public function hasil_pengumuman_pengurus(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$this->load->view('form_pengumuman_pengurus');
	}
	public function pemesanan_tiket(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$data['acara'] = $this->db->query("select * from event where status_terlaksana = 'Belum' ");
		$this->load->view('form_pesan_tiket',$data);
	}

	function AmbilHargaTiket() {
		$output 		= '';
		$nama 			= $this->input->post('nama');
		$ambil 			= $this->db->query("select harga_tiket from event where nama_event = '$nama'")->row_array();
		if ($nama != '') {
			$output    .= "<input type='text' value='".$ambil['harga_tiket']."' name='harga_tiket' id='harga_tiket' hidden>";
		}
		echo $output;
	}

	public function bukti_transfer(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$this->load->view('form_bukti_transfer');
	}

	function tampilNamaPemesan() {
		$output 				= '';
		$id 					= $this->input->post('id');
		$ambil 					= $this->db->query("select nama_mhs from data_pesan_tiket where kd_booking = $id")->row_array();
		if ($id != '') {
			$output 			.= "<input type='text' placeholder='Nama Mahasiswa *' name='nama' value='".$ambil['nama_mhs']."' readonly>";
		}
		echo $output;
	}

	function tampilNIMPemesan() {
		$output 				= '';
		$id 					= $this->input->post('id');
		$ambil 					= $this->db->query("select nim from data_pesan_tiket where kd_booking = $id")->row_array();
		if ($id != '') {
			$output 			.= "<input type='text' placeholder='NIM Mahasiswa *' name='nim' value='".$ambil['nim']."' readonly>";
		}
		echo $output;
	}

	function tampilAcaraPemesan() {
		$output 				= '';
		$id 					= $this->input->post('id');
		$ambil 					= $this->db->query("select acara from data_pesan_tiket where kd_booking = $id")->row_array();
		if ($id != '') {
			$output 			.= "<input type='text' placeholder='NIM Mahasiswa *' name='acara' value='".$ambil['acara']."' readonly>";
		}
		echo $output;
	}

	public function data_event(){
		if ($this->session->userdata('username') == null) {
			redirect('beranda/sign_in');
		}
		$this->load->view('data-event');
	}

	public function sign_in(){
		if ($this->session->userdata('jenis') == 'Administrator') {
			redirect('admin/UKM/Artikel');
		}elseif ($this->session->userdata('jenis') == 'Superadmin'){
			redirect('superadmin/Superadmin/Kelola_ukm');
			// die("ini nanti halaman superadmin");
		}elseif ($this->session->userdata('jenis') == 'Mahasiswa'){
			redirect('beranda');
		}
		$this->load->view('sign-in');
	}

	public function sign_up(){
		$this->load->view('sign-up');
	}

	public function pemesanan_tiket_beranda($id_event){
		$this->load->view('form_pesan_tiket');
	}
}
