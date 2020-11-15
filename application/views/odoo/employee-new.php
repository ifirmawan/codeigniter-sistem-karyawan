<div class="jvm-arc-header">
<div class="row">
  <div class="col-xs-12 col-md-9">
    
  </div>
  <div class="col-xs-12 col-md-3">
    <a class="btn-box-arch" style="float: right;padding: 5%;">
      <i class="fa fa-archive"></i> &nbsp Archive
    </a>
  </div>
</div>
<div class="container">
  
<div class="row" style="padding: 5px;">
  <div class="col-xs-12 col-md-9">  
  <div class="form-group">
      <label class="small">Name</label>
      <input type="email" class="form-control" placeholder="Employee's Name" />
    </div>
    <select class="form-control">
      <option value="0">e.g. partime</option>
      <option value="1">partime</option>
    </select>
  </div>
  <div class="col-xs-12 col-md-3">
    <img src="<?php echo base_url('assets/img/placeholder.png');?>" class="col-xs-12 col-lg-6 pull-right"  />
  </div>
</div>

<div class="row">
<ul class="nav classic-tabs tabs-cyan" role="tablist">
        <li class="nav-item">
            <a class="nav-link waves-light active" data-toggle="tab" href="#panel51" role="tab">PUBLIC INFORMATION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel52" role="tab">PERSONAL INFORMATION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel53" role="tab">HR SETTING</a>
        </li>
</ul>

<!-- Tab panels -->
<div class="tab-content card" style="padding: 10px;">

    <!--Panel 1-->
    <div class="tab-pane fade in active" id="panel51" role="tabpanel">
      <form action="" method="post">
    <div class="row">
      <div class="col-md-6">
        <h5>Contact Information</h5>
      </div>
      <div class="col-md-6">
        <h5>Position</h5>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label class="small">Working Address</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <a class="jvm-btn btn-sm jvm-btn-default" data-toggle="modal" href="#workingaddress"><i class="fa fa-lg fa-external-link"></i></a>
      </div>
      <div class="col-md-2">
        <label class="small">Departement</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <a class="jvm-btn btn-sm jvm-btn-default" data-toggle="modal" href="#departement"><i class="fa fa-lg fa-external-link"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label class="small">Work Mobile</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label class="small">Job Title</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <a class="jvm-btn btn-sm jvm-btn-default" data-toggle="modal" href="#jobtitle"><i class="fa fa-lg fa-external-link"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label class="small">Work Location</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label class="small">Manager</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <a class="jvm-btn btn-sm jvm-btn-default" data-toggle="modal" href="#manager"><i class="fa fa-lg fa-external-link"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label class="small">Work Email</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label class="small">Coach</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <a class="jvm-btn btn-sm jvm-btn-default" data-toggle="modal" href="#coach"><i class="fa fa-lg fa-external-link"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label class="small">Work Phone</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label class="small">Working Time</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <a class="jvm-btn btn-sm jvm-btn-default" data-toggle="modal" href="#workingtime"><i class="fa fa-lg fa-external-link"></i></a>
      </div>
    </div>

        <div class="row">
          <div class="col-md-12">
            <textarea class="form-control" placeholder="Other Information ..."></textarea>
          </div>
        </div>
      </form>

    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel52" role="tabpanel">
        <form action="" method="post">
            <div class="row">
        <div class="col-md-6">
          <h5>Citizenship & Other Information</h5>
        </div>
        <div class="col-md-6">
          <h5>Contact Information</h5>
        </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label class="small">Nationality (Country)</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <label class="small">Home Address</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label class="small">Identification No</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label class="small">Passport No</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label class="small">Bank Account Number</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
          <h5>Status</h5>
        </div>
        <div class="col-md-6">
          <h5>Birth</h5>
        </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label class="small">Gender</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <label class="small">Date of Birth</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="date" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label class="small">Marital Status</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
            <option>Single</option>
            <option>Married</option>
            <option>Widower</option>
          </select>
        </div>
      </div>
    </div>
        </form>

    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="panel53" role="tabpanel">
        <form action="" method="post">
          <div class="row">
          <div class="col-md-12">
            <h5>Status</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <label class="small">Related User</label>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <select class="form-control">
                <option></option>
              </select>
            </div>
          </div>
          <div class="col-md-1">
            <a class="jvm-btn jvm-btn-default"><i class="fa fa-external-link"></i></a>
          </div>
        </form>
    </div>
    <!--/.Panel 3-->

</div>
</div>
</div> 


