<?php

class Hrd extends Apps{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->app_view('home-profile-dropdown');
	}

	function leaves(){
		$this->leaves_view('leave-menu-allocations');
	}

	function leaves_summary(){
		$this->myleaves_summary_view('leave-menu-myleave-summary');
	}

	function report(){
		$this->report_view('leave-menu-report');
	}



	function forgot(){
      $this->app_view('form/forgot_password');
	}

	function cuti(){
		$this->app_view('pages/cuti');
	}

	function presensi(){
		$this->app_view('pages/presensi');
	}

	function pegawai(){
		$this->app_view('pages/pegawai');
	}
	function buat_pengajuan_cuti(){
		$this->app_view('pages/buat_pengajuan_cuti');
	}


}
