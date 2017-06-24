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
		function buat_kode()   {    
			$this->db->select('RIGHT(data_pesan_tiket.kd_booking,2) as kode', FALSE);
			$this->db->order_by('kd_booking','DESC');    
			$this->db->limit(1);     
			$query = $this->db->get('data_pesan_tiket');      //cek dulu apakah ada sudah ada kode di tabel.    
			if($query->num_rows() <> 0){       
			//jika kode ternyata sudah ada.      
		 	$data = $query->row();      
			$kode = intval($data->kode) + 1;     
				} else{       
				//jika kode belum ada      
					$kode = 1;     
				}
			$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
			$kodejadi = "BKT".$kodemax."E";     
			return $kodejadi;  
		}

		function edit_profile_mhs($id, $data){
			$this->db->where('nim',$id);
			$this->db->update('mahasiswa',$data);
		}
		function get_mahasiswa($nim){
			$data = $this->db->query("select * from akun a join mahasiswa m on(a.nim=m.nim) where a.nim=$nim");
			return $data;
		}
		function get_mhs_un($username){
			$data = $this->db->query("select * FROM mahasiswa m inner join akun a on(m.nim=a.nim) WHERE username='$username'");
			return $data;
		}
	}
?>