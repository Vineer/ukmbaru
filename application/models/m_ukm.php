<?php
	class m_ukm extends CI_Model{

		function input_data($data,$tabel){
			$this->db->insert($tabel,$data);
		}

		function input_data_panitia($data,$tabel){
			$this->db->insert($tabel,$data);
		}
		function input_data_pesan_tiket($data,$tabel){
			$this->db->insert($tabel,$data);
		}
		function input_data_bukti_transfer($data,$tabel){
			$this->db->insert($tabel,$data);
		}

		function edit_profile_mhs($id, $data){
			$this->db->where('nim',$id);
			$this->db->update('mahasiswa',$data);
		}
		
	}
?>