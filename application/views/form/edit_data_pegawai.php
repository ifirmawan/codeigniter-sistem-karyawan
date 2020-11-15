<div class="container">
<div class="row">
  <div class="col-md-4"><ul class="nav nav-pills">
  <li role="presentation"><a href="<?php echo site_url('Hrd/dashboard');?>">Beranda</a></li>
  <li role="presentation"><a href="<?php echo site_url('Hrd/cuti');?>"">Cuti</a></li>
  <li role="presentation" class="active"><a href="<?php echo site_url('Hrd/pegawai');?>"">Pegawai</a></li>
  <li role="presentation"><a href="<?php echo site_url('Hrd/presensi');?>"">Presensi</a></li>
</ul></div>
  <div class="col-md-4 col-md-offset-4" align="right"><a href="<?php echo site_url('Hrd/detail_pegawai'); ?>"> Iwan Firmawan</a>
  <img src="https://pbs.twimg.com/profile_images/539455638498054146/k5vCD0BD.png" class="img-circle" width="30" height="30">
    <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-default"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
  </div>
  </div>

<h1 align="center">Edit Data Pegawai</h1>

<br>

<form class="form-horizontal">
<form action="<?php echo site_url('submit/edit_data_pegawai'); ?>" method="post"> 
  <div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
    </div>
  </div>
  <div class="form-group">
    <label for="bagian" class="col-sm-2 control-label">Bagian</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="bagian" placeholder="Bagian">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="lamakerja" class="col-sm-2 control-label">Lama Bekerja</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="lamakerja" placeholder="Lama Bekerja">
    </div>
  </div>
  <div align="center">
    <button type="submit" name="submit" class="btn btn-default">Simpan</button>
  </div>
</form>
</div>

