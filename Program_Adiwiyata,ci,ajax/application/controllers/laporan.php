<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
    $isi['isi'] = 'lingkungan/tampil_datalaporan';
    $isi['data'] = $this->db->get('tb_sekolah_adiwiayata');
		$this->load->view('tampilan_home',$isi);
	}
	public function print(){
		$this->model_squrity->getsqurity();
    $isi['data'] = $this->db->get('tb_sekolah_adiwiayata');
		$isi['isi'] = 'lingkungan/cetak_laporan';
    $key =$this->uri->segment(3);
    $this->db->where('id',$key);
    $query = $this->db->get('tb_sekolah_adiwiayata');
    if ($query->num_rows()>0) {
      foreach ($query->result() as $row) {
        $isi['nm_sekolah'] = $row->nm_sekolah;
        $isi['alamat_sekolah'] = $row->alamat_sekolah;
        $isi['kontak_person'] = $row->kontak_person;
        $isi['no_hp'] = $row->no_hp;
        $isi['luas_lahan'] = $row->luas_lahan;
        $isi['luas_bangunan'] = $row->luas_bangunan;
        $isi['koordinat_sekolah'] = $row->koordinat_sekolah;
        $isi['jumlah_siswa'] = $row->jumlah_siswa;
        $isi['jumlah_siswi'] = $row->jumlah_siswi;
        $isi['jumlah_guru'] = $row->jumlah_guru;
        $isi['capai_sekolah'] = $row->capai_sekolah;
        $isi['sekolah_kota_cirebon'] = $row->sekolah_kota_cirebon;
        $isi['sekolah_adiwiyata_provinsi_jabar'] = $row->sekolah_adiwiyata_provinsi_jabar;
        $isi['sekolah_adiwiyata_nasional'] = $row->sekolah_adiwiyata_nasional;
        $isi['sekolah_adiwiyata_mandiri'] = $row->sekolah_adiwiyata_mandiri;
        $isi['visi_sekolah'] = $row->visi_sekolah;
        $isi['misi_sekolah'] = $row->misi_sekolah;
        $isi['tujuan'] = $row->tujuan;
        $isi['kurikulum'] = $row->tujuan;
        $isi['lokasi_anggaran_kegiatan_hdp'] = $row->lokasi_anggaran_kegiatan_hdp;
      }
    }else {
			$isi['nm_sekolah'] = '';
			$isi['alamat_sekolah'] = '';
			$isi['kontak_person'] = '';
			$isi['no_hp'] = '';
			$isi['luas_lahan'] = '';
			$isi['luas_bangunan'] = '';
			$isi['koordinat_sekolah'] = '';
			$isi['jumlah_siswa'] = '';
			$isi['jumlah_siswi'] = '';
			$isi['jumlah_guru'] = '';
			$isi['capai_sekolah'] = '';
			$isi['sekolah_kota_cirebon'] = '';
			$isi['sekolah_adiwiyata_provinsi_jabar'] = '';
			$isi['sekolah_adiwiyata_nasional'] = '';
			$isi['sekolah_adiwiyata_mandiri'] = '';
			$isi['visi_sekolah'] = '';
			$isi['misi_sekolah'] = '';
			$isi['tujuan'] ='';
			$isi['kurikulum'] = '';
			$isi['lokasi_anggaran_kegiatan_hdp'] = '';
    	}
			$this->load->view('lingkungan/cetak_laporan',$isi);
  	}
	}

?>
