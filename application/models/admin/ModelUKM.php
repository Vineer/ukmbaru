<?php

class ModelUKM extends CI_Model {

	function insert($table, $isi) {
		$this->db->insert($table, $isi);	
	}

	function update_pengumuman($where, $isi, $table) {
        $this->db->where($where);
        $this->db->update($table, $isi);
        // return TRUE;
    }

	function update($table, $isi, $where, $vwhere) {
        $this->db->where($where, $vwhere);
        $this->db->update($table, $isi);
        return TRUE;
    }
    function delete($table, $where, $vwhere) {
        $this->db->where($where, $vwhere);
        $this->db->delete($table);
    }
    function AmbilDaftarProfil() {
		$data = $this->db->query("select * from ukm");
		return $data;
	}
	function AmbilDaftarArtikel() {
		$data = $this->db->query("select * from artikel");
		return $data;
	}
	function AmbilDaftarProposal() {
		$data = $this->db->query("select * from proposal");
		return $data;
	}
	function AmbilDaftarLpj() {
		$data = $this->db->query("select * from lpj");
		return $data;
	}
	function AmbilDaftarEvent() {
		$data = $this->db->query("select * from event");
		return $data;
	}
	function AmbilDaftarPengumuman() {
		$data = $this->db->query("select * from pengumuman");
		return $data;
	}
	function AmbilDaftarTiket() {
		$data = $this->db->query("select * from data_pesan_tiket");
		return $data;
	}
	function AmbilDaftarKomentar() {
		$data = $this->db->query("select * from komentar");
		return $data;
	}
	function AmbilDaftarPanitia() {
		$data = $this->db->query("select * from data_panitia");
		return $data;
	}
	function AmbilDaftarFeedback() {
		$data = $this->db->query("select * from feedback");
		return $data;
	}

	function LihatProfil($id) {
		$data = $this->db->query("select * from ukm where id_ukm = $id");
		return $data;
	}
	function LihatArtikel($id) {
		$data = $this->db->query("select * from artikel where kd_artikel =$id");
		return $data;
	}
	function LihatProposal($id) {
		$data = $this->db->query("select * from proposal where id_proposal =$id");
		return $data->result();
	}
	function LihatLPJ($id){
		$data = $this->db->query("select * from lpj where id_lpj =$id");
		return $data->result();
	}
	function LihatEvent($id){
		$data = $this->db->query("select * from event where id_event =$id");
		return $data;
	}
	function LihatPengumuman($id){
		$data = $this->db->query("select * from pengumuman where id_pengumuman =$id");
		return $data;
	}

	function jmlnotifEvent() {
		$data = $this->db->query("select count(kd_booking) as jml from data_pesan_tiket where status != 'Lunas'");
		return $data;
	}
	function notifEvent() {
		$data = $this->db->query("select * from data_pesan_tiket where status != 'Lunas'");
		return $data;
	}
}

?>