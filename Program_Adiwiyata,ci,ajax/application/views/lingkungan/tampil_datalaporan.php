<div class="box">
       <h1>PROGRAM ADIWIYATA</h1>
       <h4>
         <small>Data Sekolah</small>
       </h4>

<table class="table table-hover table-striped">
  <button onclick="openWin()" class="btn btn-primary fa fa-print">Cetak Laporan</button><br><br>

   <script>
      function openWin() {
          myWindow = window.open("<?php echo base_url(); ?>laporan/print", "myWindow", "width=1000,height=1000");

        }
    </script>

  <thead>
    <tr>
      <th>No</th>
      <th>Kode Sekolah</th>
      <th>Nama Sekolah</th>
      <th>Alamat Sekolah</th>
      <th>Kontak Person</th>
      <th>No HP</th>
      <th>Cetak Data</th>
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
          <td><?php echo $row->no_hp; ?></td>
          <td>
              <a href="<?php echo base_url(); ?>cetak/print/<?php echo $row->id; ?>" class="btn btn-primary fa fa-print" target="_blank" onclick="window.open(this.href, '_blank', 'width=560,height=1000,toolbar=1,resizable=0'); return false;">&nbspCetak</a>
          </td>
      </tr>
        <?php } ?>
  </tbody>
</table>
