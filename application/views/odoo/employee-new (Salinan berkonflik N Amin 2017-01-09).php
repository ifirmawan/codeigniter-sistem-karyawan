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
    <img src="<?php echo base_url('assets/img/placeholder.png');?>" style="margin-top: 25px;" class="col-xs-12" />
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


<div class="modal fade" id="workingaddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Open: Working Address</h4>
      </div>
      <div class="modal-body">
      <div align="right">
        <ol class="breadcrumb">
          <div class="btn-group" role="group" aria-label="...">
            <button class="jvm-btn btn-md jvm-btn-default"><i class="fa fa-archive"></i> Active</button>
            <button class="jvm-btn btn-md jvm-btn-default"><i class="fa fa-calendar"></i> Meeting</button>
            <button class="jvm-btn btn-md jvm-btn-default"><i class="fa fa-clock-o"></i> Activities</button>
          </div>
        </ol>
      </div>
            <fieldset class="form-group">
              <input name="group1" type="radio" id="radio1">
              <label for="radio1"><small>Individual</small></label>
              <input name="group2" type="radio" id="radio2">
              <label for="radio2"><small>Company</small></label>
            </fieldset>
          
            <div class="row">
              <div class="col-md-10">
                <div class="md-form">
                  <input type="text" name="" placeholder="Name">
                </div>
              </div>
              <div class="col-md-2" align="right">
                <div class="md-form">
                  <img src="<?php echo base_url('assets/img/placeholder.png'); ?>" width="70" height="70">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <label><small>Address</small></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="" placeholder="Street">
                </div>
              </div>
              <div class="col-md-2">
                <label><small>Phone</small></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <label></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="" placeholder="Street 2">
                </div>
              </div>
              <div class="col-md-2">
                <label><small>Mobile</small></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <label></label>
              </div>
              <div class="col-md-1">
                <div class="md-form">
                  <input type="text" name="" placeholder="City">
                </div>
              </div>
              <div class="col-md-2">
                <div class="md-form">
                  <select class="form-control">
                    <option>State</option>
                  </select>
                </div>
              </div>
              <div class="col-md-1">
                <div class="md-form">
                  <input type="text" name="" placeholder="Zip">
                </div>
              </div>
              <div class="col-md-2">
                <label><small>Fax</small></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <label></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <select class="form-control">
                    <option>Indonesia</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <label><small>Email</small></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <label>nuriyatusamin12@gmail.com</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <label><small>Website</small></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="">
                </div>
              </div>
              <div class="col-md-2">
                <label><small>Language</small></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <select class="form-control">
                    <option>English</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row container-fluid">
              <ul class="nav nav-tabs md-pills pills-ins" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab"> CONTACT & ADDRESSES</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#panel12" role="tab"> INTERNAL NOTES</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#panel13" role="tab"> SALES & PURCHASES</a>
                  </li>
              </ul>

              <div class="tab-content">

                  <!--Panel 1-->
                  <div class="tab-pane fade in active" id="panel11" role="tabpanel">
                      <br>

                      <button class="jvm-btn btn-primary" data-toggle="modal" data-target="#create">CREATE</button>
                          <!-- Modal -->
                          <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                  <!--Content-->
                                  <div class="modal-content">
                                      <!--Header-->
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Create: Contact</h4>
                                      </div>
                                      <!--Body-->
                                      <div class="modal-body">
                                        <div class="row">
                                          <div class="col-md-3">
                                              <fieldset class="form-group">
                                                  <input name="group1" type="radio" id="radio1">
                                                  <label for="radio1">Contact</label>
                                              </fieldset>
                                          </div>
                                          <div class="col-md-3">
                                              <fieldset class="form-group">
                                                  <input name="group1" type="radio" id="radio1">
                                                  <label for="radio1">Invoice Address</label>
                                              </fieldset>
                                          </div>
                                          <div class="col-md-3">
                                              <fieldset class="form-group">
                                                  <input name="group1" type="radio" id="radio1">
                                                  <label for="radio1">Shipping Address</label>
                                              </fieldset>
                                          </div>
                                          <div class="col-md-3">
                                              <fieldset class="form-group">
                                                  <input name="group1" type="radio" id="radio1">
                                                  <label for="radio1">Other Address</label>
                                              </fieldset>
                                          </div> 
                                        </div>
                                        <hr>

                                        <div class="row">
                                          <div class="col-md-2">
                                            <label><small>Contact Name</small></label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <input type="text" id="form1" class="form-control">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label><small>Title</small></label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <select class="form-control">
                                                <option></option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-md-1">
                                            <button class="jvm-btn btn-md jvm-btn-default" data-toggle="modal" data-target="#opentitle"><i class="fa fa-lg fa-external-link"></i></button>
                                              <!-- Modal -->
                                              <div class="modal fade" id="opentitle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg" role="document">
                                                      <!--Content-->
                                                      <div class="modal-content">
                                                          <!--Header-->
                                                          <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                              <h4 class="modal-title" id="myModalLabel">Open: Title</h4>
                                                          </div>
                                                          <!--Body-->
                                                          <div class="modal-body">
                                                            <div class="row">
                                                              <div class="col-md-2">
                                                                <label><small>Title</small></label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <input type="text" id="form1" name="">
                                                              </div>
                                                              <div class="col-md-2">
                                                                <label><small>Abbreviation</small></label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <input type="text" id="form2" name="">
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
                                              <!-- /.Live preview-->
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label><small>Job Position</small></label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <input type="text" id="form2" class="form-control">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label><small>Email</small></label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <input type="text" id="form3" class="form-control">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label><small>Phone</small></label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <input type="text" id="form4" class="form-control">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label><small>Mobile</small></label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <input type="text" id="form5" class="form-control">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label><small>Notes</small></label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <textarea  type="text" id="form9" class="md-textarea" placeholder="Internal note.."></textarea>
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                      <!--Footer-->
                                      <div class="modal-footer">
                                        <div align="left">
                                          <button type="button" class="jvm-btn btn-sm btn-primary" data-dismiss="modal">SAVE & CLOSE</button>
                                          <button type="button" class="jvm-btn btn-sm btn-primary" data-dismiss="modal">SAVE & NEW</button>
                                          <a href="">DISCARD</a>
                                        </div>
                                      </div>
                                  </div>
                                  <!--/.Content-->
                              </div>
                          </div>
                          <!-- /.Live preview-->
                  </div>
                  <!--/.Panel 1-->

                  <!--Panel 2-->
                  <div class="tab-pane fade" id="panel12" role="tabpanel">
                      <br>

                      <div class="col-md-12">
                        <div class="sm-form">
                          <textarea  type="text" id="form7" class="md-textarea" placeholder="Internal note.."></textarea>
                        </div>
                      </div>

                  </div>
                  <!--/.Panel 2-->

                  <!--Panel 3-->
                  <div class="tab-pane fade" id="panel13" role="tabpanel">
                      <br>

                      <div class="row">
                        <div class="col-md-6">
                          <h5>SALE</h5>
                        </div>
                        <div class="col-md-6">
                          <h5>PURCHASE</h5>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <label><small>Is a customer</small></label>
                        </div>
                        <div class="col-md-4">
                          <fieldset class="form-group">
                              <input type="checkbox" class="filled-in" id="checkbox2">
                          </fieldset>
                        </div>
                        <div class="col-md-2">
                          <label><small>Is a vendor</small></label>
                        </div>
                        <div class="col-md-4">
                          <fieldset class="form-group">
                              <input type="checkbox" class="filled-in" id="checkbox3">
                          </fieldset>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <label><small>Salesperson</small></label>
                        </div>
                        <div class="col-md-4">
                          <div class="md-form">
                            <select class="form-control">
                              <option></option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <h5>MISC</h5>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <label><small>Internal Reference</small></label>
                        </div>
                        <div class="col-md-4">
                          <div class="md-form">
                            <input type="text" name="">
                          </div>
                        </div>
                      </div>
                  </div>
                  <!--/.Panel 3-->
            </div>
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

<div class="modal fade" id="departement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Open: Departement</h4>
      </div>
      <div class="modal-body">
      <div align="right">
        <ol class="breadcrumb">
          <div class="btn-group" role="group" aria-label="...">
            <button class="jvm-btn btn-md jvm-btn-default"><i class="fa fa-archive"></i> Active</button>
          </div>
        </ol>
      </div>
            <div class="row">
              <div class="col-md-2">
                <label><small>Departement Name</small></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="">
                </div>
              </div>
              <div class="col-md-2">
                <label><small>Manager</small></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <select class="form-control">
                    <option></option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <label><small>Parent Departement</small></label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="">
                </div>
              </div>
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

  <div class="modal fade" id="jobtitle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Open: Job Title</h4>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <a href="#">STOP RECRUITMENT</a>
        </div>
        <div class="col-md-6" align="right">
          <div class="btn-group" role="group" aria-label="...">
            <button class="jvm-btn btn-md Active">RECRUITMENT IN PROGRESS</button>
            <button class="jvm-btn btn-md jvm-btn-default">NOT RECRUITING</button>
          </div>
        </div>
      </div>
      </div>

      <hr>
          <div class="container-fluid">
            <div class="row">
            <div class="col-md-9">
              <div class="sm-form">
                <label for="form1" class=""><small>Job Title</small></label>
                <input type="text" id="form1" class="form-control" placeholder="Sample">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
                <label><small>Departement</small></label>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <select class="form-control">
                    <option></option>
                  </select>
                </div>
              </div>
              <div class="col-md-1">
                <button class="jvm-btn jvm-btn-default"  data-toggle="modal" data-target="#jobtitle"><i class="fa fa-lg fa-external-link"></i></button>
              </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <label><small>Expected New Employees</small></label>
            </div>
            <div class="col-md-6">
              <div class="sm-form">
                <input type="text" id="form1" class="form-control">
              </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
              <div class="sm-form">
                <label for="form1" class=""><small>Job Description</small></label>
                <textarea  type="text" id="form7" class="md-textarea"></textarea>
              </div>
            </div>
          </div>
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
              <button class="jvm-btn btn-md jvm-btn-default"><i class="fa fa-archive"></i> Active</button>
              <button class="jvm-btn btn-md jvm-btn-default"><i class="fa fa-calendar"></i> Leaves Left</button>
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
                        <option></option>
                </select>
            </div>
        </div>
      </div> 


<!-- Nav tabs -->
<ul class="nav nav-tabs md-pills pills-ins" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#publicinf" role="tab"> PUBLIC INFORMATION</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#personal" role="tab"> PERSONAL INFORMATION</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#setting" role="tab"> HR SETTING</a>
    </li>
</ul>

<!-- Tab panels -->
<div class="tab-content">

    <!--Panel 1-->
    <div class="tab-pane fade in active" id="publicinf" role="tabpanel">
      
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
        <label><small>Working Address</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default" data-toggle="modal" data-target="#pop"><i class="fa fa-lg fa-external-link"></i></button>
      </div>
      <div class="col-md-2">
        <label><small>Departement</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default"><i class="fa fa-lg fa-external-link"></i></button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label><small>Work Mobile</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label><small>Job Title</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default"><i class="fa fa-lg fa-external-link"></i></button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label><small>Work Location</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label><small>Manager</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default"><i class="fa fa-lg fa-external-link"></i></button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label><small>Work Email</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label><small>Coach</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button class="jvm-btn btn-sm jvm-btn-default"><i class="fa fa-lg fa-external-link"></i></button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label><small>Work Phone</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label><small>Working Time</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
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
    <div class="tab-pane fade" id="personal" role="tabpanel">
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
        <label><small>Nationality (Country)</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <label><small>Home Address</small></label>
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
        <label><small>Identification No</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label><small>Passport No</small></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label><small>Bank Account Number</small></label>
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
        <label><small>Gender</small></label>
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
        <label><smalll>Date of Birth</smalll></label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="date" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label><small>Marital Status</small></label>
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

    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="setting" role="tabpanel">
        <br>

        <div class="row">
          <div class="col-md-12">
            <h5>Status</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <label><small>Related User</small></label>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <select class="form-control">
                <option></option>
              </select>
            </div>
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