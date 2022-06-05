<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">

<div class="box">
       <div class="row">
         <h1 class="Page-header">Data
           <small>Adiwiyata</small>
           <div class="pull-right"><a href="javascript:;" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Barang</a></div>
         </h1>
       </div>
<!-- <button type="button" class="btn btn-primary fa fa-plus" data-toggle="modal" data-target=".bd-example-modal-lg" id="add_book">Tambah</button> -->
<div class="row">
  <div id="reload">
    <table class="table table-hover table-striped table-bordered" id="mydata">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Sekolah</th>
          <th>Alamat Sekolah</th>
          <th>Kontak Person</th>
          <th>No HP</th>
          <th class="glyphicon glyphicon-cog">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
        </tr>
      </thead>
      <tbody id="show_data">

      </tbody>
    </table>
    </div>
  </div>
</div>

<!-- modal add -->
<div class="modal fade bd-example-modal-lg" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal_form">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
 		     <h3 class="panel-heading" align="center" id="myModalLabel">Sekolah Berbudaya Lingkungan Kota Cirebon</h3>
      </div>

      <div class="modal-body form">
        <form class="form-horizontal" onclick="return cekform();">
          <p id="pesan"></p>
      <div class="modal-body">
          <div class="form-body">
              <div class="form-group">
              <label class="control-label col-md-3">Kode Sekolah &nbsp&nbsp&nbsp&nbsp *</label>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text-danger" id="kdpesan"></span>
                <div class="col-md-2">
                  <input type="text" name="kode" value="" placeholder="Kode Sekolah" class="form-control" style="width:190px;" id="id" autofocus autocomplete="off">
                </div>
            </div>
          </div>

          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">&nbsp &nbsp &nbsp &nbsp &nbsp &nbspNama Sekolah &nbsp&nbsp&nbsp&nbsp *</label>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <span class="text-danger" id="nmpesan"></span>
                <div class="col-md-1">
                  <input type="text" name="nm_sekolah" value="" placeholder="Nama Sekolah" class="form-control input-lg" style="width:400px;" id="nm_sekolah" autocomplete="off">
                </div>
            </div>
          </div>

          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">&nbsp &nbsp &nbsp &nbsp Alamat Sekolah &nbsp&nbsp&nbsp&nbsp *</label>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <span class="text-danger" id="alpesan"></span>
                <div class="col-md-1">
                  <textarea class="form-control input-lg" placeholder="Alamat Sekolah" rows="2" name="alamat_sekolah" autocomplete="off" title="Isi Alamat Sekolah" id="alamat_sekolah" style="width:400px;"></textarea>
                </div>
            </div>
          </div>

          <div class="form-body">
            <div class="form-group">
                <label class="control-label col-md-3">Kontak Person &nbsp&nbsp&nbsp&nbsp  *</label>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <span class="text-danger" id="ktkpesan"></span>
                <div class="col-md-1">
                  <input type="text" name="kontak_person" value="" placeholder="Kontak Person" class="form-control input-lg" style="width:300px;" id="kontak_person" autocomplete="off">
                </div>
            </div>
          </div>

          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">No Hp &nbsp&nbsp&nbsp&nbsp  *</label>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <span class="text-danger" id="nopesan"></span>
                <div class="col-md-1">
                  <input type="text" name="no_hp" value="" placeholder="NO HP" class="form-control input-lg" style="width:300px;" id="no_hp" autocomplete="off">
                </div>
              </div>
            </div>
            <hr Width = "800px;">
              <label class="control-label" style="margin-left:80px;">A.Data Umum</label>
              <br><br>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3">Luas Lahan</label>
                  <div class="col-md-9">
                    <input type="text" name="luas_lahan" value="" placeholder="Luas Lahan" class="form-control input-lg" style="width:200px;" id="luas_lahan">
                  </div>
                </div>
              </div>

                <div class="form-body">
                  <div class="form-group">
                  <label class="control-label col-md-3">Luas Bangunan</label>
                    <div class="col-md-9">
                      <input type="text" name="luas_bangunan" value="" placeholder="Luas Bangunan" class="form-control input-lg" style="width:200px;" id="luas_bangunan">
                    </div>
                  </div>
                </div>

                <div class ="form-body">
                  <div class="form-group">
                    <label class="control-label col-md-3">Koordinat Sekolah</label>
                      <div class="col-md-9">
                        <input type="text" name="koordinat_sekolah" value="" placeholder="Koordinat Sekolah" class="form-control input-lg" style="width:400px;" id="koordinat_sekolah">
                      </div>
                    </div>
                  </div>

                  <div class ="form-body">
                      <div class="form-group">
                        <label class="control-label col-md-3">Jumlah Siswa</label>
                          <div class="col-md-9">
                              <input type="text" name="jumlah_siswa" value="" placeholder="Jumlah Siswa" class="form-control input-lg" style="width:200px;" id="jumlah_siswa">
                          </div>
                       </div>
                  </div>

                  <div class ="form-body">
                      <div class="form-group">
                        <label class="control-label col-md-3">Jumlah Siswi</label>
                          <div class="col-md-9">
                             <input type="text" name="jumlah_siswi" value="" placeholder="Jumlah Siswi" class="form-control input-lg" style="width:200px;" id="jumlah_siswi">
                          </div>
                        </div>
                  </div>

                <div class ="form-body">
                    <div class="form-group">
                      <label class="control-label col-md-3">Jumlah Guru</label>
                        <div class="col-md-9">
                            <input type="text" name="jumlah_guru" value="" placeholder="Jumlah Guru" class="form-control input-lg" style="width:200px;" id="jumlah_guru">
                        </div>
                     </div>
                </div>

              <div class="form-body">
                <div class="form-group">
                  <label class="control-label col-md-6" style="margin-left:2px;">&nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  Capaian Sekolah Adiwiyata</label>
                  &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp   &nbsp   &nbsp   &nbsp
                <div class="col-md-3">
                  <select class="form-control" style="Width:120px;" id="capai_sekolah" name="capai_sekolah">
                    <option value=""></option>
										<option value="Sudah">Sudah</option>
										<option value="Belum">Belum</option>
									</select>
                </div>
                </div>
              </div>

                <div class ="form-body">
                    <div class="form-group">
                      <label class="control-label col-md-6">Sekolah Adiwiyata Kota Cirebon</label>
                        <div class="col-md-3">
                            <input type="text" name="sekolah_kota_cirebon" value="" placeholder="Tahun" class="form-control input-lg" style="width:150px;" id="sekolah_kota_cirebon">
                        </div>
                     </div>
                </div>

                <div class ="form-body">
                    <div class="form-group">
                      <label class="control-label col-md-6">Sekolah Adiwiyata Provinsi Jawa Barat</label>
                        <div class="col-md-3">
                            <input type="text" name="sekolah_adiwiyata_provinsi_jabar" value="" placeholder="Tahun" class="form-control input-lg" style="width:150px;" id="sekolah_adiwiyata_provinsi_jabar">
                        </div>
                     </div>
                </div>
                <div class ="form-body">
                    <div class="form-group">
                      <label class="control-label col-md-6">Sekolah Adiwiyata Nasional</label>
                        <div class="col-md-3">
                            <input type="text" name="sekolah_adiwiyata_nasional" value="" placeholder="Tahun" class="form-control input-lg" style="width:150px;" id="sekolah_adiwiyata_nasional">
                        </div>
                     </div>
                </div>
                <div class ="form-body">
                    <div class="form-group">
                      <label class="control-label col-md-6">Sekolah Adiwiyata Mandiri</label>
                        <div class="col-md-3">
                            <input type="text" name="sekolah_adiwiyata_mandiri" value="" placeholder="Tahun" class="form-control input-lg" style="width:150px;" id="sekolah_adiwiyata_mandiri">
                        </div>
                     </div>
                </div>
                <hr Width = "800px;">
                <label class="control-label" style="margin-left:80px;">Kebijakan Berwawasan Lingkungan</label>
                <br><br>
                <div class="form-body">
                  <div class="form-group">
                    <label class="control-label col-md-3">Visi Sekolah</label>
                      <div class="col-md-9">
                        <textarea name="visi_sekolah" rows="3" placeholder="Visi Sekolah" id="visi_sekolah" class="form-control input-lg"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="form-body">
                    <div class="form-group">
                      <label class="control-label col-md-3">Misi Sekolah</label>
                        <div class="col-md-9">
                          <textarea name="misi_sekolah" rows="3" placeholder="Misi Sekolah" id="misi_sekolah" class="form-control input-lg" ></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="form-body">
                      <div class="form-group">
                        <label class="control-label col-md-3">Tujuan</label>
                          <div class="col-md-9">
                            <textarea name="tujuan" rows="3" placeholder="Visi Sekolah" id="tujuan" class="form-control input-lg" ></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="form-body">
                        <div class="form-group">
                          <label class="control-label col-md-3">Kurikulum</label>
                            <div class="col-md-9">
                              <textarea name="kurikulum" rows="3" placeholder="Kurikulum" id="kurikulum" class="form-control input-lg" ></textarea>
                            </div>
                          </div>
                        </div>

                        <div class="form-body">
                          <div class="form-group">
                            <label class="control-label col-md-7">Alokasi Anggaran terkait kegiatan Lingkungan Hidup</label>
                              <div class="col-md-3">
                                <input type="text" name="lokasi_anggaran_kegiatan_hdp" class="form-control input-lg" autocomplete="off" id="lokasi_anggaran_kegiatan_hdp" style="Width:100px;" id="lokasi_anggaran_kegiatan_hdp">
                              </div>
                            </div>
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-info" id="btn_simpan">Simpan</button>
                          </div>
        </form>
      </div>
    </div>

<!-- <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->

</div>
</div>
</div>
 <!-- End modal add -->

 <!-- modal edit -->
 <div class="modal fade bd-example-modal-lg" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal_form">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  		     <h3 class="panel-heading" align="center" id="myModalLabel">Sekolah Berbudaya Lingkungan Kota Cirebon</h3>
       </div>

       <div class="modal-body form">
         <form class="form-horizontal" >
       <div class="modal-body">
           <div class="form-body">
               <div class="form-group">
               <label class="control-label col-md-3">Kode Sekolah</label>
                 <div class="col-md-9">
                   <input type="text" name="id_edit" value="" placeholder="Kode Sekolah" class="form-control" style="width:190px;" id="id2">
                 </div>
             </div>
           </div>

           <div class="form-body">
             <div class="form-group">
               <label class="control-label col-md-3">&nbsp &nbsp &nbsp &nbsp &nbsp &nbspNama Sekolah</label>
                 <div class="col-md-9">
                   <input type="text" name="nm_sekolah_edit" value="" placeholder="Nama Sekolah" class="form-control input-lg" style="width:400px;" id="nm_sekolah2">
                 </div>
             </div>
           </div>

           <div class="form-body">
             <div class="form-group">
               <label class="control-label col-md-3">&nbsp &nbsp &nbsp &nbsp Alamat Sekolah</label>
                 <div class="col-md-9">
                   <textarea class="form-control input-lg" placeholder="Alamat Sekolah" rows="2" name="alamat_sekolah_edit" autocomplete="off" title="Isi Alamat Sekolah" id="alamat_sekolah2" style="width:400px;"></textarea>
                 </div>
             </div>
           </div>

           <div class="form-body">
             <div class="form-group">
               <label class="control-label col-md-3">Kontak Person</label>
                 <div class="col-md-9">
                   <input type="text" name="kontak_person_edit" value="" placeholder="Kontak Person" class="form-control input-lg" style="width:300px;" id="kontak_person2">
                 </div>
             </div>
           </div>

           <div class="form-body">
             <div class="form-group">
               <label class="control-label col-md-3">No Hp</label>
                 <div class="col-md-9">
                   <input type="text" name="no_hp_edit" value="" placeholder="NO HP" class="form-control input-lg" style="width:300px;" id="no_hp2">
                 </div>
               </div>
             </div>
             <hr Width = "800px;">
               <label class="control-label" style="margin-left:80px;">A.Data Umum</label>
               <br><br>
             <div class="form-body">
               <div class="form-group">
                 <label class="control-label col-md-3">Luas Lahan</label>
                   <div class="col-md-9">
                     <input type="text" name="luas_lahan_edit" value="" placeholder="Luas Lahan" class="form-control input-lg" style="width:200px;" id="luas_lahan2">
                   </div>
                 </div>
               </div>

                 <div class="form-body">
                   <div class="form-group">
                   <label class="control-label col-md-3">Luas Bangunan</label>
                     <div class="col-md-9">
                       <input type="text" name="luas_bangunan_edit" value="" placeholder="Luas Bangunan" class="form-control input-lg" style="width:200px;" id="luas_bangunan2">
                     </div>
                   </div>
                 </div>

                 <div class ="form-body">
                   <div class="form-group">
                     <label class="control-label col-md-3">Koordinat Sekolah</label>
                       <div class="col-md-9">
                         <input type="text" name="koordinat_sekolah_edit" value="" placeholder="Koordinat Sekolah" class="form-control input-lg" style="width:400px;" id="koordinat_sekolah2">
                       </div>
                     </div>
                   </div>

                   <div class ="form-body">
                       <div class="form-group">
                         <label class="control-label col-md-3">Jumlah Siswa</label>
                           <div class="col-md-9">
                               <input type="text" name="jumlah_siswa_edit" value="" placeholder="Jumlah Siswa" class="form-control input-lg" style="width:200px;" id="jumlah_siswa2">
                           </div>
                        </div>
                   </div>

                   <div class ="form-body">
                       <div class="form-group">
                         <label class="control-label col-md-3">Jumlah Siswi</label>
                           <div class="col-md-9">
                              <input type="text" name="jumlah_siswi_edit" value="" placeholder="Jumlah Siswi" class="form-control input-lg" style="width:200px;" id="jumlah_siswi2">
                           </div>
                         </div>
                   </div>

                 <div class ="form-body">
                     <div class="form-group">
                       <label class="control-label col-md-3">Jumlah Guru</label>
                         <div class="col-md-9">
                             <input type="text" name="jumlah_guru_edit" value="" placeholder="Jumlah Guru" class="form-control input-lg" style="width:200px;" id="jumlah_guru2">
                         </div>
                      </div>
                 </div>

             <div class="form-body">
               <div class="form-group">
                 <label class="control-label col-md-6" style="margin-left:2px;">&nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  Capaian Sekolah Adiwiyata</label>
                 &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp   &nbsp   &nbsp   &nbsp
               <div class="col-md-3">
                 <select class="form-control" style="Width:120px;" id="capai_sekolah2" name="capai_sekolah_edit">
                   <option value=""></option>
										<option value="Sudah">Sudah</option>
										<option value="Belum">Belum</option>
									</select>
               </div>
               </div>
             </div>

                 <div class ="form-body">
                     <div class="form-group">
                       <label class="control-label col-md-6">Sekolah Adiwiyata Kota Cirebon</label>
                         <div class="col-md-3">
                             <input type="text" name="sekolah_kota_cirebon_edit" value="" placeholder="Jumlah Guru" class="form-control input-lg" style="width:150px;" id="sekolah_kota_cirebon2">
                         </div>
                      </div>
                 </div>

                 <div class ="form-body">
                     <div class="form-group">
                       <label class="control-label col-md-6">Sekolah Adiwiyata Provinsi Jawa Barat</label>
                         <div class="col-md-3">
                             <input type="text" name="sekolah_adiwiyata_provinsi_jabar_edit" value="" placeholder="Jumlah Guru" class="form-control input-lg" style="width:150px;" id="sekolah_adiwiyata_provinsi_jabar2">
                         </div>
                      </div>
                 </div>
                 <div class ="form-body">
                     <div class="form-group">
                       <label class="control-label col-md-6">Sekolah Adiwiyata Nasional</label>
                         <div class="col-md-3">
                             <input type="text" name="sekolah_adiwiyata_nasional_edit" value="" placeholder="Jumlah Guru" class="form-control input-lg" style="width:150px;" id="sekolah_adiwiyata_nasional2">
                         </div>
                      </div>
                 </div>
                 <div class ="form-body">
                     <div class="form-group">
                       <label class="control-label col-md-6">Sekolah Adiwiyata Mandiri</label>
                         <div class="col-md-3">
                             <input type="text" name="sekolah_adiwiyata_mandiri_edit" value="" placeholder="Jumlah Guru" class="form-control input-lg" style="width:150px;" id="sekolah_adiwiyata_mandiri2">
                         </div>
                      </div>
                 </div>
                 <hr Width = "800px;">
                 <label class="control-label" style="margin-left:80px;">Kebijakan Berwawasan Lingkungan</label>
                 <br><br>
                 <div class="form-body">
                   <div class="form-group">
                     <label class="control-label col-md-3">Visi Sekolah</label>
                       <div class="col-md-9">
                         <textarea name="visi_sekolah_edit" rows="3" placeholder="Visi Sekolah" id="visi_sekolah2" class="form-control input-lg"></textarea>
                       </div>
                     </div>
                   </div>

                   <div class="form-body">
                     <div class="form-group">
                       <label class="control-label col-md-3">Misi Sekolah</label>
                         <div class="col-md-9">
                           <textarea name="misi_sekolah_edit" rows="3" placeholder="Misi Sekolah" id="misi_sekolah2" class="form-control input-lg" ></textarea>
                         </div>
                       </div>
                     </div>

                     <div class="form-body">
                       <div class="form-group">
                         <label class="control-label col-md-3">Tujuan</label>
                           <div class="col-md-9">
                             <textarea name="tujuan_edit" rows="3" placeholder="Visi Sekolah" id="tujuan2" class="form-control input-lg" ></textarea>
                           </div>
                         </div>
                       </div>

                       <div class="form-body">
                         <div class="form-group">
                           <label class="control-label col-md-3">Kurikulum</label>
                             <div class="col-md-9">
                               <textarea name="kurikulum_edit" rows="3" placeholder="Kurikulum" id="kurikulum2" class="form-control input-lg" ></textarea>
                             </div>
                           </div>
                         </div>

                         <div class="form-body">
                           <div class="form-group">
                             <label class="control-label col-md-7">Alokasi Anggaran terkait kegiatan Lingkungan Hidup</label>
                               <div class="col-md-3">
                                 <input type="text" name="lokasi_anggaran_kegiatan_hdp_edit" class="form-control input-lg" autocomplete="off" id="lokasi_anggaran_kegiatan_hdp2" style="Width:100px;">
                               </div>
                             </div>
                           </div>

                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="button"class="btn btn-info" id="btn_update">Simpan</button>
                           </div>
         </form>
       </div>
     </div>

 <!-- <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->

 </div>
 </div>
 </div>

<!-- end modal edit -->
<!-- modal cetak -->
<div class="modal fade bd-example-modal-lg" id="Modalacetak" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal_form">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="panel-heading" align="center" id="myModalLabel">Sekolah Berbudaya Lingkungan Kota Cirebon</h3>
      </div>
    </div>
  </div>
</div>
<!-- end modal cetak -->
        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data Sekolah</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">

                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus data ini?</p></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tampil_data_barang();

    $('#mydata').dataTable({
      "bLengthChange":false,
      "bFilter":true,
    });

    function tampil_data_barang(){
      $.ajax({
        type : 'ajax',
        url  : '<?php echo base_url() ?>lingkungan/data_lingkungan',
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var no = '1';
          for (var i = 0; i < data.length; i++) {
            html += '<tr>'+
                        '<td>'+ no++ +'</td>'+
                        '<td>'+data[i].nm_sekolah+'</td>'+
                        '<td>'+data[i].alamat_sekolah+'</td>'+
                        '<td>'+data[i].kontak_person+'</td>'+
                        '<td>'+data[i].no_hp+'</td>'+
                        '<td style="text-align:left;">'+
                                '<a href="javascript:;" class="btn btn-primary glyphicon glyphicon-edit item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                '<a href="javascript:;" class="btn btn-danger glyphicon glyphicon-trash  item_hapus" data="'+data[i].id+'">Hapus</a>'+

                        '</td>'+
                    '</tr>';
          }
        $('#show_data').html(html);
        }
      });
    }
    //Simpan barang
    $('#btn_simpan').on('click',function(){
      var hasil = document.getElementById("kdpesan")
      if (!$("#id").val()) {
        alert('Maaf id tidak boleh kosong');
        $("#id").focus();
        hasil.innerHTML = "Kode Sekolah Kosong";
        return false;
      }
      if (!$("#nm_sekolah").val()) {
        var hasil = document.getElementById("nmpesan")
        alert('Maaf Nama Sekolah tidak boleh kosong');
        $("#nm_sekolah").focus();
        hasil.innerHTML = "Nama Sekolah Kosong";
        return false;
      }
      if (!$("#alamat_sekolah").val()) {
        var hasil = document.getElementById("alpesan")
        alert('Maaf Alamat Sekolah tidak boleh kosong');
        $("#alamat_sekolah").focus();
        hasil.innerHTML = "Alamat Sekolah kosong";
        return false;
      }
      if (!$("#kontak_person").val()) {
        var hasil = document.getElementById("ktkpesan")
        alert('Maaf kontak_person tidak bo1eh kosong');
        $("#kontak_person").focus();
        hasil.innerHTML = "Kontak Person Kosong";
        return false;
      }
      if (!$("#no_hp").val()) {
        var hasil = document.getElementById("nopesan")
        alert('Maaf no_hp tidak boleh kosong');
        $("#no_hp").focus();
        hasil.innerHTML = "No Hp Kosong";
        return false;
      }
      var kode = $('#id').val();
      var nm_sekolah= $('#nm_sekolah').val();
      var alamat_sekolah=$('#alamat_sekolah').val();
      var kontak_person=$('#kontak_person').val();
      var no_hp=$('#no_hp').val();
      var luas_lahan=$('#luas_lahan').val();
      var luas_bangunan=$('#luas_bangunan').val();
      var koordinat_sekolah=$('#koordinat_sekolah').val();
      var jumlah_siswa=$('#jumlah_siswa').val();
      var jumlah_siswi=$('#jumlah_siswi').val();
      var jumlah_guru=$('#jumlah_guru').val();
      var capai_sekolah=$('#capai_sekolah').val();
      var sekolah_kota_cirebon=$('#sekolah_kota_cirebon').val();
      var sekolah_adiwiyata_provinsi_jabar=$('#sekolah_adiwiyata_provinsi_jabar').val();
      var sekolah_adiwiyata_nasional=$('#sekolah_adiwiyata_nasional').val();
      var sekolah_adiwiyata_mandiri=$('#sekolah_adiwiyata_mandiri').val();
      var visi_sekolah=$('#visi_sekolah').val();
      var misi_sekolah=$('#misi_sekolah').val();
      var tujuan=$('#tujuan').val();
      var kurikulum=$('#kurikulum').val();
      var lokasi_anggaran_kegiatan_hdp=$('#lokasi_anggaran_kegiatan_hdp').val();
      $.ajax({
        type:"POST",
        url :"<?php echo base_url('lingkungan/simpan_lingkungan'); ?>",
        dataType:"JSON",
        data: {kode:kode,nm_sekolah:nm_sekolah,alamat_sekolah:alamat_sekolah,
               kontak_person:kontak_person,no_hp:no_hp,luas_lahan:luas_lahan,
               luas_bangunan:luas_bangunan,koordinat_sekolah:koordinat_sekolah,jumlah_siswa:jumlah_siswa,
               jumlah_siswi:jumlah_siswi,jumlah_guru:jumlah_guru,
               capai_sekolah:capai_sekolah,sekolah_kota_cirebon:sekolah_kota_cirebon,
               sekolah_adiwiyata_provinsi_jabar:sekolah_adiwiyata_provinsi_jabar,
               sekolah_adiwiyata_nasional:sekolah_adiwiyata_nasional,
               sekolah_adiwiyata_mandiri:sekolah_adiwiyata_mandiri,
               visi_sekolah:visi_sekolah,misi_sekolah:misi_sekolah,tujuan:tujuan,
               kurikulum:kurikulum,lokasi_anggaran_kegiatan_hdp:lokasi_anggaran_kegiatan_hdp
        },
        success: function(data){
          $('[name = "kode"]').val("");
          $('[name = "nm_sekolah"]').val("");
          $('[name = "alamat_sekolah"]').val("");
          $('[name = "kontak_person"]').val("");
          $('[name = "no_hp"]').val("");
          $('[name = "luas_lahan"]').val("");
          $('[name = "luas_bangunan"]').val("");
          $('[name = "koordinat_sekolah"]').val("");
          $('[name = "jumlah_siswa"]').val("");
          $('[name = "jumlah_siswi"]').val("");
          $('[name = "jumlah_guru"]').val("");
          $('[name = "capai_sekolah"]').val("");
          $('[name = "sekolah_kota_cirebon"]').val("");
          $('[name = "sekolah_adiwiyata_provinsi_jabar"]').val("");
          $('[name = "sekolah_adiwiyata_nasional"]').val("");
          $('[name = "sekolah_adiwiyata_mandiri"]').val("");
          $('[name = "visi_sekolah"]').val("");
          $('[name = "misi_sekolah"]').val("");
          $('[name = "tujuan"]').val("");
          $('[name = "kurikulum"]').val("");
          $('[name = "lokasi_anggaran_kegiatan_hdp"]').val("");
          $('#ModalaAdd').modal('hide');
          tampil_data_barang().load();
        }
      });
      return false;
    });

    		//GET HAPUS
    		$('#show_data').on('click','.item_hapus',function(){
                var id=$(this).attr('data');
                $('#ModalHapus').modal('show');
                $('[name="kode"]').val(id);
            });

                    //Hapus Barang
                    $('#btn_hapus').on('click',function(){
                        var kode=$('#textkode').val();
                        $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url('lingkungan/hapus_barang')?>",
                        dataType : "JSON",
                                data : {kode: kode},
                                success: function(data){
                                        $('#ModalHapus').modal('hide');
                                        tampil_data_barang();
                                }
                            });
                            return false;
                        });
                        $('#show_data').on('click','.item_edit',function(){
                                var id=$(this).attr('data');
                                $.ajax({
                                    type : "GET",
                                    url  : "<?php echo base_url('lingkungan/get_lingkungan')?>",
                                    dataType : "JSON",
                                    data : {id:id},
                                    success: function(data){
                                    	$.each(data,function(id, nm_sekolah, alamat_sekolah,kontak_person,no_hp,luas_lahan,luas_bangunan,
                                              koordinat_sekolah,jumlah_siswa,jumlah_siswi,jumlah_guru,capai_sekolah,sekolah_kota_cirebon,
                                            sekolah_adiwiyata_provinsi_jabar,sekolah_adiwiyata_nasional,sekolah_adiwiyata_mandiri,visi_sekolah,
                                          misi_sekolah,tujuan,kurikulum,lokasi_anggaran_kegiatan_hdp){
                                        	$('#ModalaEdit').modal('show');
                                			$('[name="id_edit"]').val(data.id);
                                			$('[name="nm_sekolah_edit"]').val(data.nm_sekolah);
                                			$('[name="alamat_sekolah_edit"]').val(data.alamat_sekolah);
                                      $('[name="kontak_person_edit"]').val(data.kontak_person);
                                      $('[name="no_hp_edit"]').val(data.no_hp);
                                      $('[name="luas_lahan_edit"]').val(data.luas_lahan);
                                      $('[name="luas_bangunan_edit"]').val(data.luas_bangunan);
                                      $('[name="koordinat_sekolah_edit"]').val(data.koordinat_sekolah);
                                      $('[name="jumlah_siswa_edit"]').val(data.jumlah_siswa);
                                      $('[name="jumlah_siswi_edit"]').val(data.jumlah_siswi);
                                      $('[name="jumlah_guru_edit"]').val(data.jumlah_guru);
                                      $('[name="capai_sekolah_edit"]').val(data.capai_sekolah);
                                      $('[name="sekolah_kota_cirebon_edit"]').val(data.sekolah_kota_cirebon);
                                      $('[name="sekolah_adiwiyata_provinsi_jabar_edit"]').val(data.sekolah_adiwiyata_provinsi_jabar);
                                      $('[name="sekolah_adiwiyata_nasional_edit"]').val(data.sekolah_adiwiyata_nasional);
                                      $('[name="sekolah_adiwiyata_mandiri_edit"]').val(data.sekolah_adiwiyata_mandiri);
                                      $('[name="visi_sekolah_edit"]').val(data.visi_sekolah);
                                      $('[name="misi_sekolah_edit"]').val(data.misi_sekolah);
                                      $('[name="tujuan_edit"]').val(data.tujuan);
                                      $('[name="kurikulum_edit"]').val(data.kurikulum);
                                      $('[name="lokasi_anggaran_kegiatan_hdp_edit"]').val(data.lokasi_anggaran_kegiatan_hdp);
                                		});
                                    }
                                });
                                return false;
                            });
                            $('#btn_update').on('click',function(){
                              var kode = $('#id2').val();
                              var nm_sekolah= $('#nm_sekolah2').val();
                              var alamat_sekolah=$('#alamat_sekolah2').val();
                              var kontak_person=$('#kontak_person2').val();
                              var no_hp=$('#no_hp2').val();
                              var luas_lahan=$('#luas_lahan2').val();
                              var luas_bangunan=$('#luas_bangunan2').val();
                              var koordinat_sekolah=$('#koordinat_sekolah2').val();
                              var jumlah_siswa=$('#jumlah_siswa2').val();
                              var jumlah_siswi=$('#jumlah_siswi2').val();
                              var jumlah_guru=$('#jumlah_guru2').val();
                              var capai_sekolah=$('#capai_sekolah2').val();
                              var sekolah_kota_cirebon=$('#sekolah_kota_cirebon2').val();
                              var sekolah_adiwiyata_provinsi_jabar=$('#sekolah_adiwiyata_provinsi_jabar2').val();
                              var sekolah_adiwiyata_nasional=$('#sekolah_adiwiyata_nasional2').val();
                              var sekolah_adiwiyata_mandiri=$('#sekolah_adiwiyata_mandiri2').val();
                              var visi_sekolah=$('#visi_sekolah2').val();
                              var misi_sekolah=$('#misi_sekolah2').val();
                              var tujuan=$('#tujuan2').val();
                              var kurikulum=$('#kurikulum2').val();
                              var lokasi_anggaran_kegiatan_hdp=$('#lokasi_anggaran_kegiatan_hdp2').val();
                                    $.ajax({
                                        type : "POST",
                                        url  : "<?php echo base_url('lingkungan/update_lingkungan')?>",
                                        dataType : "JSON",
                                        data : {kode:kode,nm_sekolah:nm_sekolah,alamat_sekolah:alamat_sekolah,
                                               kontak_person:kontak_person,no_hp:no_hp,luas_lahan:luas_lahan,
                                               luas_bangunan:luas_bangunan,koordinat_sekolah:koordinat_sekolah,
                                               jumlah_siswa:jumlah_siswa,
                                               jumlah_siswi:jumlah_siswi,jumlah_guru:jumlah_guru,
                                               capai_sekolah:capai_sekolah,sekolah_kota_cirebon:sekolah_kota_cirebon,
                                               sekolah_adiwiyata_provinsi_jabar:sekolah_adiwiyata_provinsi_jabar,
                                               sekolah_adiwiyata_nasional:sekolah_adiwiyata_nasional,
                                               sekolah_adiwiyata_mandiri:sekolah_adiwiyata_mandiri,
                                               visi_sekolah:visi_sekolah,misi_sekolah:misi_sekolah,tujuan:tujuan,
                                               kurikulum:kurikulum,lokasi_anggaran_kegiatan_hdp:lokasi_anggaran_kegiatan_hdp
                                      },
                                        success: function(data){
                                          $('[name = "kode_edit"]').val("");
                                          $('[name = "nm_sekolah_edit"]').val("");
                                          $('[name = "alamat_sekolah_edit"]').val("");
                                          $('[name = "kontak_person_edit"]').val("");
                                          $('[name = "no_hp_edit"]').val("");
                                          $('[name = "luas_lahan_edit"]').val("");
                                          $('[name = "luas_bangunan_edit"]').val("");
                                          $('[name = "koordinat_sekolah_edit"]').val("");
                                          $('[name = "jumlah_siswa_edit"]').val("");
                                          $('[name = "jumlah_siswi_edit"]').val("");
                                          $('[name = "jumlah_guru_edit"]').val("");
                                          $('[name = "capai_sekolah_edit"]').val("");
                                          $('[name = "sekolah_kota_cirebon_edit"]').val("");
                                          $('[name = "sekolah_adiwiyata_provinsi_jabar_edit"]').val("");
                                          $('[name = "sekolah_adiwiyata_nasional_edit"]').val("");
                                          $('[name = "sekolah_adiwiyata_mandiri_edit"]').val("");
                                          $('[name = "visi_sekolah_edit"]').val("");
                                          $('[name = "misi_sekolah_edit"]').val("");
                                          $('[name = "tujuan_edit"]').val("");
                                          $('[name = "kurikulum_edit"]').val("");
                                          $('[name = "lokasi_anggaran_kegiatan_hdp_edit"]').val("");
                                            $('#ModalaEdit').modal('hide');
                                            tampil_data_barang();
                                        }
                                    });
                                    return false;
                                });


  });

</script>
<tr>
  <td></td>
</tr>
