<?php
class M_barang extends CI_Model{

	function barang_list(){
		$hasil=$this->db->query("SELECT * FROM plgn");
		return $hasil->result();
	}

	function simpan_barang($sid,$nid,$napel,$order,$stat,$accb,$pkt,$tglpes,$tglhir){
		$hasil=$this->db->query("INSERT INTO plgn (serviceID,noID,namaPlgn,order,status,accBill,paket,tgl_pesan,tgl_akhir)VALUES('$sid','$nid','$napel','$order','$stat','$accb','$pkt','$tglpes','$tglhir')");  
		return $hasil;
	}

	function get_barang_by_kode($sid){
		$hsl=$this->db->query("SELECT * FROM plgn WHERE serviceID='$sid'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'serviceID' => $data->serviceID,
					'noID' => $data->noID,
					'namaPlgn' => $data->namaPlgn,
					'order' => $data->order,
					'status' => $data->status,
					'accBill' => $data->accBill,
					'paket' => $data->paket,
					'tgl_pesan' => $data->tgl_pesan,
					'tgl_akhir' => $data->tgl_akhir,
					);
			}
		}
		return $hasil;
	}

	function update_barang($sid,$nid,$napel,$order,$stat,$accb,$pkt,$tglpes,$tglhir){
		$hasil=$this->db->query("UPDATE plgn SET noID='$nid',namaPlgn='$napel',order='$order',statut='$stat',accBill='$accb',paket='$pkt',tgl_pesan='$tglpes',tgl_akhir='$tglhir' WHERE serviceID='$sid'");
		return $hasil;
	}

	function hapus_barang($sid){
		$hasil=$this->db->query("DELETE FROM plgn WHERE serviceID='$sid'");
		return $hasil;
	}
	
}