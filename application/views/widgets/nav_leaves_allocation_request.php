<nav class="navbar bg-white" >
<div class="row">
  <div class="col-xs-6">
     <ol class="breadcrumb">
        <li class="breadcrumb-item">Allocation Request</li>
     </ol>
  </div>
  <div class="col-xs-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="jvm-btn btn-primary" type="button">
          <i class="fa fa-search" aria-hidden="true"></i>
        </span>
        </button>
      </span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
        <a href="<?php echo site_url('leaves/allocation_request_new'); ?>"><button class="jvm-btn btn-primary">CREATE</button></a>
        <a href="#"><small>IMPORT</small></a>
  </div>
  <div class="col-md-6" align="right">
    <button class="jvm-btn jvm-btn-default"><i class="fa fa-list-ul" aria-hidden="true"></i></button>
        <span>&nbsp</span>
    <a href="<?php echo site_url('leaves/allocation_request_new'); ?>"><button class="jvm-btn jvm-btn-default"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
  </div> 
</div>
</nav>
