<?php

class M_admin extends CI_Model {

	function insert($data, $tabel) {
		$this->db->insert($tabel, $data);
		
	}
	function update($table, $isi, $where, $vwhere) {
        $this->db->where($where, $vwhere);
        $this->db->update($table, $isi);
        return TRUE;
    }

    // dummy function
    function approve($id_event,$isi) {
        $this->db->where('id_event', $id_event);
        $this->db->update('event', $isi);
        return TRUE;
    }

    function delete($table, $where, $vwhere) {
        $this->db->where($where, $vwhere);
        $this->db->delete($table);
    }
	function AmbilDaftarUkm() {
		$data = $this->db->query("select * from ukm");
		return $data;
	}
	function AmbilDaftarMhs() {
		$data = $this->db->query("select * from mahasiswa");
		return $data;
	}
	function AmbilDataAkun_id($table,$where,$vwhere) {
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where,$vwhere);

		return $this->db->get();
	}
	function AmbilDaftarKmhswaan() {
		$data = $this->db->query("select * from kemahasiswaan");
		return $data;
	}
	function AmbilDaftarEvent() {
		$data = $this->db->query("select * from event");
		return $data;
	}
	function updatestatus_ukm($status,$id){
		$this->db->where('id_ukm',$id);
		$this->db->update('ukm',$status);

	}
	function updatestatus_mhs($status,$id){
		$this->db->where('nim',$id);
		$this->db->update('mahasiswa',$status);

	}


	function notifEvent() {
		$data = $this->db->query("select * from event where status_approval = 0");
		return $data;
	}

	function jmlnotifEvent() {
		$data = $this->db->query("select count(id_event) as jml from event where status_approval = 0");
		return $data;
	}


	function Lihat_ukm($id) {
		$data = $this->db->query("select * from ukm where id_ukm = '$id'");
		return $data;
	}

	function Lihat_mahasiswa_edit($id) {
		$data = $this->db->query("select * from mahasiswa join akun on(akun.nim = mahasiswa.nim ) where akun.id_ukm = '$id'");
		return $data;
	}

	function Lihat_mhs($id) {
		$data = $this->db->query("select * from mahasiswa join akun on(akun.nim = mahasiswa.nim ) where mahasiswa.nim =$id");
		return $data;
	}
	function Lihat_kmhswaan($id){
		$data = $this->db->query("select * from kemahasiswaan where nip =$id");
		return $data->result();
	}
	function LihatEvent($id){
		$data = $this->db->query("select * from event where id_event =$id");
		return $data;
	}
	function profil($nim){
		$data = $this->db->query("select a.id_akun,m.nim,m.nama,m.email,m.fakultas,m.jurusan,m.no_telp
		from akun a join mahasiswa m on(a.nim=m.nim) where m.nim=$nim");
		return $data;
	}

	function checkUsername($username){
       $query = $this->db->query('select * from akun where username = "'.$username.'"');
       $hasil = 0;
       if ($query->num_rows() == 1) {
       	   
       	   return $hasil = 1;
       }

       return $hasil; 
	}

	function checknim($nim){
       $query = $this->db->query('select * from mahasiswa where nim = "'.$nim.'"');
       $hasil = 0;
       if ($query->num_rows() == 1) {
       	   
       	   return $hasil = 1;
       }

       return $hasil; 
	}
	
}

?>