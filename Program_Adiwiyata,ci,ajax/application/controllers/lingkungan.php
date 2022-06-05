<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lingkungan extends CI_Controller {
	function __construct(){
		parent::__construct();
			$this->load->model('model_lingkungan');
		}
	public function index()
	{
		$this->model_squrity->getsqurity();
    $isi['isi'] = 'lingkungan/tampil_datalingkungan';
		$isi['data'] = $this->db->get('tb_sekolah_adiwiayata');
		$this->load->view('tampilan_home',$isi);
	}
	function data_lingkungan(){
		$data=$this->model_lingkungan->barang_list();
		echo json_encode($data);
	}
	function simpan_lingkungan(){
		$kode = $this->input->post('kode');
		$nmsekolah = $this->input->post('nm_sekolah');
		$alamat = $this->input->post('alamat_sekolah');
		$kontak = $this->input->post('kontak_person');
		$no = $this->input->post('no_hp');
		$lahan = $this->input->post('luas_lahan');
		$bangunan = $this->input->post('luas_bangunan');
		$koordinat = $this->input->post('koordinat_sekolah');
		$siswa = $this->input->post('jumlah_siswa');
		$siswi = $this->input->post('jumlah_siswi');
		$guru = $this->input->post('jumlah_guru');
		$capai = $this->input->post('capai_sekolah');
		$kota = $this->input->post('sekolah_kota_cirebon');
		$provinsi = $this->input->post('sekolah_adiwiyata_provinsi_jabar');
		$nasional = $this->input->post('sekolah_adiwiyata_nasional');
		$mandiri = $this->input->post('sekolah_adiwiyata_mandiri');
		$visi = $this->input->post('visi_sekolah');
		$misi = $this->input->post('misi_sekolah');
		$tujuan = $this->input->post('tujuan');
		$kurikulum = $this->input->post('kurikulum');
		$lokasi = $this->input->post('lokasi_anggaran_kegiatan_hdp');
		$data=$this->model_lingkungan->simpan_lingkungan($kode,$nmsekolah,$alamat,$kontak,
																									$no,$lahan,$bangunan,$koordinat,
																									$siswa,$siswi,$guru,$capai,$kota,
																									$provinsi,$nasional,$mandiri,$visi,$misi,
																									$tujuan,$kurikulum,$lokasi);
						echo json_encode($data);

	}

		function hapus_barang(){
			$kode=$this->input->post('kode');
			$data=$this->model_lingkungan->hapus_barang($kode);
			echo json_encode($data);
		}
		function get_lingkungan(){
			$kode=$this->input->get('id');
			$data=$this->model_lingkungan->get_barang_by_kode($kode);
			echo json_encode($data);
		}

			function update_lingkungan(){
				$kode = $this->input->post('kode');
				$nmsekolah = $this->input->post('nm_sekolah');
				$alamat = $this->input->post('alamat_sekolah');
				$kontak = $this->input->post('kontak_person');
				$no = $this->input->post('no_hp');
				$lahan = $this->input->post('luas_lahan');
				$bangunan = $this->input->post('luas_bangunan');
				$koordinat = $this->input->post('koordinat_sekolah');
				$siswa = $this->input->post('jumlah_siswa');
				$siswi = $this->input->post('jumlah_siswi');
				$guru = $this->input->post('jumlah_guru');
				$capai = $this->input->post('capai_sekolah');
				$kota = $this->input->post('sekolah_kota_cirebon');
				$provinsi = $this->input->post('sekolah_adiwiyata_provinsi_jabar');
				$nasional = $this->input->post('sekolah_adiwiyata_nasional');
				$mandiri = $this->input->post('sekolah_adiwiyata_mandiri');
				$visi = $this->input->post('visi_sekolah');
				$misi = $this->input->post('misi_sekolah');
				$tujuan = $this->input->post('tujuan');
				$kurikulum = $this->input->post('kurikulum');
				$lokasi = $this->input->post('lokasi_anggaran_kegiatan_hdp');
				$data=$this->model_lingkungan->update_lingkungan($kode,$nmsekolah,$alamat,$kontak,
																											$no,$lahan,$bangunan,$koordinat,
																											$siswa,$siswi,$guru,$capai,$kota,
																											$provinsi,$nasional,$mandiri,$visi,$misi,
																											$tujuan,$kurikulum,$lokasi);
				echo json_encode($data);
			}
}
