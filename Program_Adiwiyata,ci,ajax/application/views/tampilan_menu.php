<ul class="nav">
  <li><a href="<?php echo base_url('home'); ?>" ><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
  <li>
    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
    <div id="subPages" class="collapse ">
      <ul class="nav">
        
        <li><a href="<?php echo base_url(); ?>lingkungan" class="">Sekolah Lingkungan</a></li>

      </ul>
    </div>
  </li>
  <li><a href="<?php echo base_url(); ?>laporan"><i class="fa fa-map"></i> <span>Laporan</span></a></li>
  <li><a href="<?php echo base_url('home/logout'); ?>" class="glyphicon glyphicon-log-out"><i class="fa fa-logout"></i> <span>Logout</span></a></li>
</ul>
