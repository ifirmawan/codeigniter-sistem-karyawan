<div class="container-fluid" style="padding: 25px">
	<div align="right">
		<div class="breadcrumb">
			<a href="#" ><i class="fa fa-lg fa-archive"></i>&nbsp Active</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<label>Departement Name</label>
		</div>
		<div class="col-md-3">
			<div class="md-form">
                <input type="text" name="">
            </div>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-2">
			<label>Manager</label>
		</div>
		<div class="col-md-3">
			<div class="md-form">
                <select class="form-control">
                  <option value="0">choose one</option>
                </select>
            </div>
		</div>
		<div class="col-md-1">
			<button class="jvm-btn btn-sm jvm-btn-default" data-toggle="modal" data-target="#manager"><i class="fa fa-external-link"></i></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<label>Parent Departement</label>
		</div>
		<div class="col-md-3">
			<select class="form-control">
                <option value="0">choose one</option>
            </select>
		</div>
		<div class="col-md-1">
			<button class="jvm-btn btn-md jvm-btn-default" data-toggle="modal" data-target="#modal-contact"><i class="fa fa-external-link"></i></button>
		</div>
	</div>
</div>


<div class="modal fade modal-ext" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Open: Parent Departement</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
            	<div align="right">
                	<div class="breadcrumb">
                		<a href="#" ><i class="fa fa-lg fa-archive"></i>&nbsp Active</a>
                	</div>
                </div>
                <div class="row">
                	<div class="col-md-2">
                		<label><small>Departement Name</small></label>
                	</div>
                	<div class="col-md-3">
                		<input type="text" name="">
                	</div>
      				<div class="col-md-1">
      					
      				</div>
                	<div class="col-md-2">
                		<label><small>Manager</small></label>
                	</div>
                	<div class="col-md-3">
                		<select class="form-control">
                			<option value="0">choose one</option>
                		</select>
                	</div>
                	<div class="col-md-1">
                		<button class="jvm-btn jvm-btn-default"><i class="fa fa-external-link"></i></button>
                	</div>
                </div>
                <div class="row">
                	<div class="col-md-2">
                		<label><small>Parent</small></label>
                	</div>
                	<div class="col-md-3">
                		<select class="form-control">
                			<option value="0">choose one</option>
                		</select>
                	</div>
                	<div class="col-md-1">
                		<button class="jvm-btn jvm-btn-default"><i class="fa fa-external-link"></i></button>
                	</div>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
            	<div align="left">
                	<button type="button" class="jvm-btn btn-primary" data-dismiss="modal">SAVE</button>
                	<a href="#">DISCARD</a>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>


<div class="modal fade" id="manager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Open: Manager</h4>
      </div>
      <div class="modal-body">

        <div align="right">
          <ol class="breadcrumb">
            <div class="btn-group" role="group" aria-label="...">
              <a href="#"><i class="fa fa-archive"></i> Active</a>&nbsp
              <a href="#"><i class="fa fa-calendar"></i> Leaves Left</a>
            </div>
          </ol>
        </div>

        <br>

        <div class="row">
          <div class="col-md-10">
            <div class="md-form">
                <input type="text" id="form51" class="form-control" placeholder="Employee's Name">
                <label for="form51" class="">Name</label>
            </div>
          </div>
          <div class="col-md-2" align="center">
            <div class="md-form">
                <img src="<?php echo base_url('assets/img/placeholder.png');?>" width="60" height="60">
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col-md-2">
            <div class="md-form">
                <select class="form-control">
                        <option value="0">choose one</option>
                </select>
            </div>
        </div>
      </div> 


<!-- Nav tabs -->
<ul class="nav nav-tabs md-pills pills-ins" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab"> PUBLIC INFORMATION</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel12" role="tab"> PERSONAL INFORMATION</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel13" role="tab"> HR SETTING</a>
    </li>
</ul>

<!-- Tab panels -->
<div class="tab-content">

    <!--Panel 1-->
    <div class="tab-pane fade in active" id="panel11" role="tabpanel">
      
      <br>

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
            <option value="0">choose one</option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default" data-toggle="modal" data-target="#pop"><i class="fa fa-lg fa-external-link"></i></button>
      </div>
      <div class="col-md-2">
        <label class="small">Departement</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option value="0">choose one</option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default"><i class="fa fa-lg fa-external-link"></i></button>
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
            <option value="0">choose one</option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default"><i class="fa fa-lg fa-external-link"></i></button>
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
            <option value="0">choose one</option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default"><i class="fa fa-lg fa-external-link"></i></button>
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
            <option value="0">choose one</option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default"><i class="fa fa-lg fa-external-link"></i></button>
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
            <option value="0">choose one</option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default"><i class="fa fa-lg fa-external-link"></i></button>
      </div>
    </div>

        <div class="row">
          <div class="col-md-12">
            <textarea class="form-control" placeholder="Other Information ..."></textarea>
          </div>
        </div>

    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel12" role="tabpanel">
        <br>

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
            <option value="0">choose one</option>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <label class="small">Home Address</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option value="0">choose one</option>
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
            <option value="0">choose one</option>
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
            <option value="0">choose one</option>
            <option>Single</option>
            <option>Married</option>
            <option>Widower</option>
          </select>
        </div>
      </div>
    </div>

    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="panel13" role="tabpanel">
        <br>

        <div class="row">
          <div class="col-md-12">
            <h5>Status</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <label class="small">Related User</label>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <select class="form-control">
                <option value="0">choose one</option>
              </select>
            </div>
          </div>
          <div class="col-md-1">
          	<button class="jvm-btn jvm-btn-default"><i class="fa fa-external-link"></i></button>
          </div>

    </div>
    <!--/.Panel 3-->
</div>

</div>
      <div class="modal-footer">
        <div align="left">
            <button type="button" class="jvm-btn btn-primary" data-dismiss="modal">SAVE</button>
            <a href="#">DISCARD</a>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>