<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kuosioner Program Adiwiyata</title>
  </head>
  <body>

     <p>
       <h3  align = "center">KUOSIONER PENERAPA PROGRAM ADIWIYATA <br> (SEKOLAH BERBUDAYA LINGKUNGAN )<br>DI KOTA CIREBON</h3>
     </p>
   <p >
    NAMA SEKOLAH    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp <?php echo $nm_sekolah ?><br><br>
    ALAMAT SEKOLAH  &nbsp &nbsp &nbsp &nbsp : &nbsp <?php echo $alamat_sekolah ?><br><br>
    KONTAK PERSON  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp <?php echo $kontak_person ?><br><br>
    NO HP  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: &nbsp <?php echo $no_hp ?><br><br>
  </p>
  <hr>
  <p><h4 align = "center">Isilah Dan Lingkari Yang Sesuai Dengan Yang Ada Di Lingkungan Sekolah Saudara !<br>(jawaban dapat juga menyertakan foto yang menjelaskan jawaban)</h4></p>
  <hr>
  <p>
    &nbsp<h5><ins>A.DATA UMUM</ins></h5>
    <p> &nbsp 1. &nbsp Luas Lahan &nbsp &nbsp &nbsp &nbsp &nbsp    : &nbsp &nbsp &nbsp<?php echo $luas_lahan ?>&nbsp  M<sup>2</sup><br>
        &nbsp 2. &nbsp Luas Bangunan   &nbsp &nbsp :&nbsp &nbsp &nbsp<?php echo $luas_bangunan ?>&nbsp M<sup>2</sup><br>
        &nbsp 3. &nbsp Koordinat Siswa &nbsp  :&nbsp &nbsp &nbsp <?php echo $koordinat_sekolah ?>&nbsp<br>
        &nbsp 4. &nbsp Jumlah Siswa &nbsp &nbsp &nbsp &nbsp: &nbsp &nbsp &nbsp<?php echo $jumlah_siswa ?>&nbsp Orang<br>
        &nbsp 5. &nbsp Jumlah Siswi &nbsp &nbsp &nbsp &nbsp: &nbsp &nbsp &nbsp <?php echo $jumlah_siswi ?>&nbsp Orang<br>
        &nbsp 6. &nbsp Jumlah Guru &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp<?php echo $jumlah_guru ?>&nbsp Orang<br>
        &nbsp 7. &nbsp Capaian Sekolah Adiwiyata:<br>
          &nbsp &nbsp &nbsp &nbsp &nbsp   <?php echo $capai_sekolah ?>
                    <p style="padding:2px; margin-left:50px;">
                      &nbspii. &nbsp Sekolah Adiwiyata Kota Cirebon &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : tahun &nbsp <?php echo $sekolah_kota_cirebon ?><br>
                      &nbspiii.&nbsp Sekolah Adiwiyata Provinsi Jawa Barat  &nbsp  : tahun &nbsp <?php echo $sekolah_adiwiyata_provinsi_jabar ?><br>
                      &nbspiv. &nbspSekolah Adiwiyata Nasional &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : tahun &nbsp <?php echo $sekolah_adiwiyata_nasional ?><br>
                      &nbspv.  &nbsp Sekolah Adiwiyata Mandiri  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp    : tahun &nbsp <?php echo $sekolah_adiwiyata_mandiri?><br>
                    </p>
    </p>
  </p>
  <p>
    <h5><ins>B.Kebijakan Berwawasan Lingkungan</ins></h5>
    <p>
      &nbsp 1.&nbsp Visi Sekolah &nbsp: <?php echo $visi_sekolah ?><br>
      &nbsp 2.&nbsp Misi Sekolah : <?php echo $misi_sekolah ?><br>
      &nbsp 3.&nbsp Tujuan &nbsp &nbsp &nbsp &nbsp &nbsp : <?php echo $tujuan ?><br>
      &nbsp 4.&nbsp Kurikulum &nbsp &nbsp : <?php echo $kurikulum ?><br>
      &nbsp 5.&nbsp Alokasi Anggaran Kegiatan Hidup &nbsp     :<?php echo $lokasi_anggaran_kegiatan_hdp ?>&nbsp Persen<br>
    </p>
  <!-- </p>
    <?php
      echo "<script>window.print();</script>";

     ?> -->
  </body>
</html>
