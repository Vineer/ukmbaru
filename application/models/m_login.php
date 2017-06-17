<?php 

	class m_login extends CI_Model{

		function cek_login($data){
			$query = "username = "."'".$data['username']."' AND "."password ='".$data['password']."'";
			$this->db->select('*');
			$this->db->from('akun');
			$this->db->where($query);
			$this->db->limit(1);

			$exec = $this->db->get();
				if ($exec->num_rows() == 1) {
					return true;
				}else{
					return false;
				}
		}

		function getdatabyusername($username){
			$this->db->from('akun');
			$this->db->where('username',$username);

			$exec = $this->db->get();
				if ($exec->num_rows()==1) {
					return $exec->result();
				}
		}
		

	}
?>