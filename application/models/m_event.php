<?php

	class m_event extends CI_Model{

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

		function insert($table, $isi) {
			$this->db->insert($table, $isi);	
		}
		function get_single_event($where,$tabel){
			return $this->db->get_where($tabel,$where);
		}
		function get_komen($where,$tabel){
			return $this->db->order_by('id_komentar desc')->get_where($tabel, $where);
		}
		function update($table, $isi, $where, $vwhere) {
	        $this->db->where($where, $vwhere);
	        $this->db->update($table, $isi);
	        return TRUE;
	    }
	}
?>