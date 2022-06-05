<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lingkungan extends CI_Model {
  function barang_list(){
		$hasil=$this->db->query("SELECT * FROM tb_sekolah_adiwiayata");
		return $hasil->result();
	}

function simpan_lingkungan($kode,$nmsekolah,$alamat,$kontak,
                                              $no,$lahan,$bangunan,$koordinat,
                                              $siswa,$siswi,$guru,$capai,$kota,
                                              $provinsi,$nasional,$mandiri,$visi,$misi,
                                              $tujuan,$kurikulum,$lokasi){
                                    $hasil=$this->db->query("INSERT INTO tb_sekolah_adiwiayata (id,nm_sekolah,alamat_sekolah,kontak_person,no_hp
                                    ,luas_lahan,luas_bangunan,koordinat_sekolah,jumlah_siswa,jumlah_siswi,jumlah_guru,capai_sekolah,sekolah_kota_cirebon
                                    ,sekolah_adiwiyata_provinsi_jabar,sekolah_adiwiyata_nasional,sekolah_adiwiyata_mandiri,visi_sekolah,misi_sekolah,tujuan
                                    ,kurikulum,lokasi_anggaran_kegiatan_hdp)VALUES('$kode','$nmsekolah','$alamat','$kontak',
                                                                  '$no','$lahan','$bangunan','$koordinat',
                                                                  '$siswa','$siswi','$guru','$capai','$kota',
                                                                  '$provinsi','$nasional','$mandiri','$visi','$misi',
                                                                  '$tujuan','$kurikulum','$lokasi')");
                                  return $hasil;
                                  }


    	function hapus_barang($kode){
    		$hasil=$this->db->query("DELETE FROM tb_sekolah_adiwiayata WHERE id='$kode'");
    		return $hasil;
    	}

      function get_barang_by_kode($kode){
        $hsl=$this->db->query("SELECT * FROM tb_sekolah_adiwiayata WHERE id='$kode'");
        if($hsl->num_rows()>0){
          foreach ($hsl->result() as $data) {
            $hasil=array(
              'id' => $data->id,
              'nm_sekolah' => $data->nm_sekolah,
              'alamat_sekolah' => $data->alamat_sekolah,
              'kontak_person' => $data->kontak_person,
              'no_hp' => $data->no_hp,
              'luas_lahan' => $data->luas_lahan,
              'luas_bangunan' => $data->luas_bangunan,
              'koordinat_sekolah' => $data->koordinat_sekolah,
              'jumlah_siswa' => $data->jumlah_siswa,
              'jumlah_siswi' => $data->jumlah_siswi,
              'jumlah_guru' => $data->jumlah_guru,
              'capai_sekolah' => $data->capai_sekolah,
              'sekolah_kota_cirebon' => $data->sekolah_kota_cirebon,
              'sekolah_adiwiyata_provinsi_jabar' => $data->sekolah_adiwiyata_provinsi_jabar,
              'sekolah_adiwiyata_nasional' => $data->sekolah_adiwiyata_nasional,
              'sekolah_adiwiyata_mandiri' => $data->sekolah_adiwiyata_mandiri,
              'visi_sekolah' => $data->visi_sekolah,
              'misi_sekolah' => $data->misi_sekolah,
              'tujuan' => $data->tujuan,
              'kurikulum' => $data->kurikulum,
              'lokasi_anggaran_kegiatan_hdp' => $data->lokasi_anggaran_kegiatan_hdp,

              );
          }
        }
        return $hasil;
}
function update_lingkungan($kode,$nmsekolah,$alamat,$kontak,
                                              $no,$lahan,$bangunan,$koordinat,
                                              $siswa,$siswi,$guru,$capai,$kota,
                                              $provinsi,$nasional,$mandiri,$visi,$misi,
                                              $tujuan,$kurikulum,$lokasi){
  $hasil=$this->db->query("UPDATE tb_sekolah_adiwiayata SET nm_sekolah='$nmsekolah',alamat_sekolah='$alamat',kontak_person='$kontak'
    ,no_hp='$no',luas_lahan='$lahan',luas_bangunan='$bangunan',koordinat_sekolah='$koordinat',jumlah_siswa='$siswa' ,jumlah_siswi='$siswi'
    ,jumlah_guru='$guru',capai_sekolah='$capai',sekolah_kota_cirebon='$kota',sekolah_adiwiyata_provinsi_jabar='$provinsi',sekolah_adiwiyata_nasional='$nasional',sekolah_adiwiyata_mandiri='$mandiri',visi_sekolah='$visi',misi_sekolah='$misi',tujuan='$tujuan' ,kurikulum='$kurikulum'
    ,lokasi_anggaran_kegiatan_hdp='$lokasi' WHERE id='$kode'");
  return $hasil;
}
public function getlaporan($key,$data){
  $this->db->where('id',$key);
  $this->db->update('tb_sekolah_adiwiayata',$data);
}
}
