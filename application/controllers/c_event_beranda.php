<?php 
	
	class C_event_beranda extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('m_event_beranda');
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

			$data['event'] = $this->m_event_beranda->get_event('event');

			$this->load->view('data-event',$data);
		}

		function beranda_event($id_event){

			$where = array('id_event'=>$id_event);
			$data['recent'] = $this->m_event_beranda->get_recent_event();
			$data['beranda'] = $this->m_event_beranda->get_single_event($where,'event')->result();

			$this->load->view('index',$data);
		}
	}
?>
