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

	function AmbilDaftarProfilId($id) {
		$data = $this->db->query("select * from ukm where id_ukm = $id");
		return $data;
	}

	function AmbilDaftarArtikel() {
		$data = $this->db->query("select * from artikel");
		return $data;
	}

	function AmbilDaftarUKMById($id) {
		$data = $this->db->query("select * from artikel where id_ukm = $id order by kd_artikel desc");
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

	function AmbliDaftarEventById($id) {
		$data = $this->db->query("select * from event where id_ukm = $id order by id_event desc");
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

	function AmbilDaftarTiketId($id) {
		$data = $this->db->query("select a.kd_booking, a.nama_mhs, a.nim, a.acara, a.jml_tiket, a.acara, a.no_telp, a.email, a.status from data_pesan_tiket a join event b on a.id_event = b.id_event where b.id_ukm = $id");
		return $data;
	}

	function AmbilDaftarKomentar() {
		$data = $this->db->query("select * from komentar");
		return $data;
	}

	function AmbilDaftarKomentarId($id) {
		$data = $this->db->query("select a.id_komentar, a.jenis, a.id_artikel, a.nama_komentar, a.email, a.website, a.isi_komentar, a.waktu, b.judul from komentar a join artikel b on a.id_artikel = b.kd_artikel where b.id_ukm = $id");
		return $data;
	}

	function AmbilDaftarPanitia() {
		$data = $this->db->query("select * from data_panitia");
		return $data;
	}

	function AmbilDaftarPanitiaId($id) {
		$data = $this->db->query("select a.kd_panitia, a.nim_mhs, a.nama_mhs, a.ukm_pilihan, a.fakultas, a.jurusan, a.divisi, a.no_hp, a.email, a.motivasi, a.status from data_panitia a join event b on a.ukm_pilihan = b.nama_event where b.id_ukm = $id");
		return $data;
	}

	function AmbilDaftarFeedback() {
		$data = $this->db->query("select * from feedback");
		return $data;
	}

	function AmbilDaftarFeedbackId($id) {
		$data = $this->db->query("select a.id_feedback, a.nama_event, a.nama, a.email, a.kritik, a.saran from feedback a join event b on a.nim = b.id_event where b.id_ukm = $id");
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

	function ambilNamaUKM($id) {
		$data = $this->db->query("select * from ukm where id_ukm = $id");
		return $data;
	}
}

?>