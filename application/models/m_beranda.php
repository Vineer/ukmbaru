<?php

	class m_beranda extends CI_Model{

		function get_event($tabel){
			$this->db->where('status_approval','1');
			return $this->db->get($tabel)->result();
		}

		function get_recent_event(){
			$this->db->select('*');
			$this->db->from('event');
			$this->db->order_by('tanggal','desc');
			$this->db->limit(5);
			return $this->db->get()->result();
		}

		function update_pengumuman($where,$data,$tabel){
			$this->db->where($where);
			$this->db->update($tabel,$data);
		}

		function get_data($where,$tabel){
			return $this->db->get_where($tabel,$where);
		}

		function get_all_data($tabel){
			$this->db->select('*');
			$this->db->from($tabel);
			return $this->db->get()->result();
		}
		function get_all_data_where($tabel,$var,$find){
			$this->db->select('*');
			$this->db->from($tabel);
			$this->db->where($var,$find);
			return $this->db->get()->result();
		}

		function get_current_event(){
			$now = date('Y-m-d');
			$this->db->select('*');
			$this->db->from('event');
			$this->db->where('status_approval','1');
			// $this->db->where('status_terlaksana','Belum');
			$this->db->where('tanggal > CURDATE() ');
			$this->db->order_by('tanggal','DESC');
			$this->db->limit(3);
			return $this->db->get()->result();
		}

		function get_current_data($table,$tanggal){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->order_by($tanggal,'DESC');
			$this->db->limit(5);
			return $this->db->get()->result();
		}

		function get_another_event(){
			$this->db->select('*');
			$this->db->from('event');
			$this->db->where('status_approval','1');
			// $this->db->order_by('status_terlaksana','ASC');
			return $this->db->get()->result();
		}

		function get_komen($where,$tabel){
			return $this->db->order_by('id_komentar desc')->get_where($tabel, $where);
		}
		function get_komen_artikel($id_artikel){
			// return $this->db->order_by('id_komentar desc')->get_where($tabel, $where);
			$this->db->select('k.isi_komentar,k.id_artikel,k.jenis,k.waktu,k.nim,m.nama');
			$this->db->from('komentar k');
			$this->db->join('mahasiswa m','k.nim = m.nim');
			$this->db->where('jenis','artikel');
			$this->db->where('id_artikel',$id_artikel);
			$this->db->order_by('k.id_komentar desc');
			return $this->db->get();
		}
		function insert($table, $isi) {
			$this->db->insert($table, $isi);	
		}
		function update($table, $isi, $where, $vwhere) {
	        $this->db->where($where, $vwhere);
	        $this->db->update($table, $isi);
	        return TRUE;
	    }
	}
?>