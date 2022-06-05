<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 align = "center">Data Sekolah Berbudaya Lingkungan</h1>
    <table border="1px" align = "center">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Sekolah</th>
         <th>Nama Sekolah</th>
         <th>Alamat Sekolah</th>
         <th>Kontak Person</th>
         <th>Luas Lahan</th>
         <th>Luas Bangunan</th>
         <th>Koordinat Sekolah</th>
         <th>Jumlah Siswa</th>
         <th>Jumlah Siswi</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <?php
           $no =1;
           foreach ($data->result() as $row) {
             ?>
             <td><?php echo $no++; ?></td>
             <td><?php echo $row->id; ?></td>
             <td><?php echo $row->nm_sekolah; ?></td>
             <td><?php echo $row->alamat_sekolah; ?></td>
             <td><?php echo $row->kontak_person; ?></td>
             <td><?php echo $row->luas_lahan; ?></td>
             <td><?php echo $row->luas_bangunan; ?></td>
             <td><?php echo $row->koordinat_sekolah; ?></td>
             <td><?php echo $row->jumlah_siswa; ?></td>
             <td><?php echo $row->jumlah_siswi; ?></td>
         </tr>
           <?php } ?>
     </tbody>
   </table>
     <br>
  </body>
</html>
