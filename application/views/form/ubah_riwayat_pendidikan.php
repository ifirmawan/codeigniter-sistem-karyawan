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

<h1 align="center">Ubah Riwayat Pendidikan</h1>

<br>

<form class="form-horizontal">
  <div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Sekolah Dasar (SD)</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="sd" placeholder="Sekolah Dasar (SD)">
    </div>
  </div>
  <div class="form-group">
    <label for="bagian" class="col-sm-2 control-label">Sekolah Menengah Pertama (SMP)</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="smp" placeholder="Sekolah Menengah Pertama (SMP)">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Sekolah Menengah Atas / Kejuruan (SMA/SMK)</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" name="sma" placeholder="Sekolah Menengah Atas / Kejuruan (SMA/SMK)">
    </div>
  </div>
   <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Kampus / Universitas</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" name="kampus" placeholder="Kampus / Universitas">
    </div>
  </div>
  <div align="center">
    <a href="<?php echo site_url('Hrd/detail_pegawai2');?>" class="btn btn-default" aria-haspopup="true"> Batal </a>
    <a href="<?php echo site_url('Hrd/detail_pegawai2');?>" class="btn btn-default" aria-haspopup="true"> Simpan </a>
  </div>
</div>
</form>
