<div align="center">
<button type="button" class="jvm-btn btn-primary" data-toggle="modal" data-target="#workingaddress" data-whatever="@mdo">Modal Working Address</button>
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
              <label for="radio1">Individual</label>
              <input name="group2" type="radio" id="radio2">
              <label for="radio2">Company</label>
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
                <label>Address</label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="" placeholder="Street">
                </div>
              </div>
              <div class="col-md-2">
                <label>Phone</label>
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
                <label>Mobile</label>
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
                <label>Fax</label>
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
                <label>Email</label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <label>nuriyatusamin12@gmail.com</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <label>Website</label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="">
                </div>
              </div>
              <div class="col-md-2">
                <label>Language</label>
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
                                            <label>Contact Name</label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <input type="text" id="form1" class="form-control">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label>Title</label>
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
                                                                <label>Title</label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <input type="text" id="form1" name="">
                                                              </div>
                                                              <div class="col-md-2">
                                                                <label>Abbreviation</label>
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
                                            <label>Job Position</label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <input type="text" id="form2" class="form-control">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label>Email</label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <input type="text" id="form3" class="form-control">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label>Phone</label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <input type="text" id="form4" class="form-control">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label>Mobile</label>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="sm-form">
                                              <input type="text" id="form5" class="form-control">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2">
                                            <label>Notes</label>
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
                          <label>Is a customer</label>
                        </div>
                        <div class="col-md-4">
                          <fieldset class="form-group">
                              <input type="checkbox" class="filled-in" id="checkbox2">
                          </fieldset>
                        </div>
                        <div class="col-md-2">
                          <label>Is a vendor</label>
                        </div>
                        <div class="col-md-4">
                          <fieldset class="form-group">
                              <input type="checkbox" class="filled-in" id="checkbox3">
                          </fieldset>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <label>Salesperson</label>
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
                          <label>Internal Reference</label>
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

<!-------------------------------------------------Modal1------------------------------------------------------------------------------>

  <div align="center"><button type="button" class="jvm-btn btn-primary" data-toggle="modal" data-target="#departement" >Modal Departement</button>
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
                <label>Departement Name</label>
              </div>
              <div class="col-md-4">
                <div class="md-form">
                  <input type="text" name="">
                </div>
              </div>
              <div class="col-md-2">
                <label>Manager</label>
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
                <label>Parent Departement</label>
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

<!-------------------------------------------------Modal1------------------------------------------------------------------------------>

  <div align="center"><button type="button" class="jvm-btn btn-primary" data-toggle="modal" data-target="#jobtitle" data-whatever="@mdo">Modal Job Title</button>
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
                <label for="form1" class="">Job Title</label>
                <input type="text" id="form1" class="form-control" placeholder="Sample">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
                <label>Departement</label>
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
              <label>Expected New Employees
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
                <label for="form1" class="">Job Description</label>
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

<!-------------------------------------------------Modal1------------------------------------------------------------------------------>

   <div align="center"><button type="button" class="jvm-btn btn-primary" data-toggle="modal" data-target="#manager" data-whatever="@mdo">Modal Manager</button>
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
        <label>Working Address</label>
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
        <label>Departement</label>
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
        <label>Work Mobile</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label>Job Title</label>
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
        <label>Work Location</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label>Manager</label>
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
        <label>Work Email</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label>Coach</label>
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
        <label>Work Phone</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label>Working Time</label>
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
        <label>Nationality (Country)</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control">
            <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <label>Home Address</label>
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
        <label>Identification No</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label>Passport No</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label>Bank Account Number</label>
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
        <label>Gender</label>
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
        <label>Date of Birth</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="date" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label>Marital Status</label>
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
    <div class="tab-pane fade" id="panel13" role="tabpanel">
        <br>

        <div class="row">
          <div class="col-md-12">
            <h5>Status</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <label>Related User</label>
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

<!-------------------------------------------------Modal1------------------------------------------------------------------------------>

  <div align="center"><button type="button" class="jvm-btn btn-primary" data-toggle="modal" data-target="#coach">Modal Coach</button>
  </div>

  <div class="modal fade" id="coach" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Open: Coach</h4>
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
                <a class="nav-link active" data-toggle="tab" href="#pane1" role="tab"> PUBLIC INFORMATION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pane2" role="tab"> PERSONAL INFORMATION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pane3" role="tab"> HR SETTING</a>
            </li>
        </ul>

      <!-- Tab panels -->
      <div class="tab-content">

          <!--Panel 1-->
          <div class="tab-pane fade in active" id="pane1" role="tabpanel">
            
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
              <label>Working Address</label>
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
              <label>Departement</label>
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
              <label>Work Mobile</label>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="text">
              </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-2">
              <label>Job Title</label>
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
              <label>Work Location</label>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="text">
              </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-2">
              <label>Manager</label>
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
              <label>Work Email</label>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="text">
              </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-2">
              <label>Coach</label>
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
              <label>Work Phone</label>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="text">
              </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-2">
              <label>Working Time</label>
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
          <div class="tab-pane fade" id="pane2" role="tabpanel">
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
              <label>Nationality (Country)</label>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select class="form-control">
                  <option></option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <label>Home Address</label>
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
              <label>Identification No</label>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="text">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label>Passport No</label>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="text">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label>Bank Account Number</label>
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
              <label>Gender</label>
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
              <label>Date of Birth</label>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="date" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label>Marital Status</label>
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
          <div class="tab-pane fade" id="pane3" role="tabpanel">
              <br>

              <div class="row">
                <div class="col-md-12">
                  <h5>Status</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Related User</label>
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


<!-------------------------------------------------Modal1------------------------------------------------------------------------------>


  <div align="center"><button type="button" class="jvm-btn btn-primary" data-toggle="modal" data-target="#work" data-whatever="@mdo">Modal Working Time</button>
  </div>

  <div class="modal fade" id="work" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Open: Working Time</h4>
      </div>

      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <label>Name</label>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="text">
              </div>
            </div>
            <div class="col-md-3">
              <label>Workgroup Manager</label>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select class="form-control">
                  <option></option>
                </select>
              </div>
            </div>
            <div class="col-md-1">
              <button class="jvm-btn btn-sm jvm-btn-default" data-toggle="modal" data-target="#workinwork"><i class="fa fa-lg fa-external-link"></i></button>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label>Working Time</label>
            </div>
          </div>

          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Day of Week</th>
                <th>Work from</th>
                <th>Work to</th>
                <th>Starting Date</th>
                <th>End Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#">Add an item</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>

          <br><br>

          <div class="row">
            <div class="col-md-12">
              <label>Leaves</label>
            </div>
          </div>

          <table class="table table-striped">
            <thead>
              <tr>
                <th>Reason</th>
                <th>Resource</th>
                <th>Working Time</th>
                <th>Start Date</th>
                <th>End Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#">Add an item</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>

     <div class="modal-footer">
        <div align="left">
          <button type="button" class="jvm-btn btn-primary" data-dismiss="modal">SAVE</button>
          <a href="#">DISCARD</a>
        </div>
      </div>

      <!-- Modal dalam modal -->
      <div class="modal fade" id="workinwork" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <!--Content-->
              <div class="modal-content">
                  <!--Header-->
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">Open: Workgroup Manager</h4>
                  </div>
                  <!--Body-->
                  <div class="modal-body">
                    <br>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="md-form">
                            <input placeholder="Nuriyatus Amin" type="text" id="form5" class="form-control">
                            <label for="form2">Name</label>
                        </div>
                      </div>
                      <div class="col-md-4" align="right">
                        <img src="<?php echo base_url('assets/img/placeholder.png'); ?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="md-form">
                            <input placeholder="nuriyatusamin12@gmail.com" type="text" id="form5" class="form-control">
                            <label for="form3">Email Address</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <label>Phone</label>
                      </div>
                      <div class="col-md-9">
                        <input type="text" id="form4" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <label>Mobile</label>
                      </div>
                      <div class="col-md-9">
                        <input type="text" id="form4" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <label>Fax</label>
                      </div>
                      <div class="col-md-9">
                        <input type="text" id="form4" class="form-control">
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
</div>

<ul class="cd-accordion-menu">
  <li class="has-children">
    <input type="checkbox" name ="group-1" id="group-1" checked>
    <label for="group-1">Group 1</label>
 
      <ul>
        <li class="has-children">
          <input type="checkbox" name ="sub-group-1" id="sub-group-1">
        <label for="sub-group-1">Sub Group 1</label>
 
        <ul>
          <li><a href="#0">Image</a></li>
          <li><a href="#0">Image</a></li>
          <li><a href="#0">Image</a></li>
        </ul>
        </li>
        <li><a href="#0">Image</a></li>
      <li><a href="#0">Image</a></li>
      </ul>
  </li>
 
  <li><a href="#0">Image</a></li>
  <li><a href="#0">Image</a></li>
</ul> <!-- cd-accordion-menu -->