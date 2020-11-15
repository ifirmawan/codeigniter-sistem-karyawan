<div class="container">

<!--Section: Leave a reply (Not Logged In User)-->
<section class="section-content">

   <div class="row">
    <div class="col-xs-6">
        <h4>Name</h4>
        <h4>#</h4>
        <input class="form-control" type="text" placeholder="" />
    </div>

  <div align="right">
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object" src="<?php echo base_url('assets/img/Capture1.PNG');?>" alt="...">
        </a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-2">
     <h6>Send messages by email</h6>
      <h6>Description</h6>
  </div>
    <div class="col-xs-12 col-md-10">
        <input class="checkbox" type="checkbox"></td>
        <div class="md-form">
            <textarea type="text" rows="5" id="form7" class="md-textarea"></textarea>
            <label for="form7">Topics discussed in this group</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-2">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
    </div>
    
        <div class="col-xs-12 col-md-4">
        <input type="text" class="form-control pull-right" placeholder="" />
        </div>
        <div class="col-md-4" style="padding-top:15px;">@jvm-pegawai.oddo</div>
    
</div>

<div class="row">
    <div class="col-xs-12 col-md-2">
        <i class="fa fa-lock" aria-hidden="true"></i>
    </div>
    <div class="col-xs-12 col-md-4">
        <select class="mdb-select col-xs-12">
            <option value="0" disabled selected>Choose one</option>
            <option value="1">Everyone</option>
            <option value="2"></option>
            <option value="3"></option>
        </select>
    </div>
</div>

<!-- Nav tabs -->
<br>
<br>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#privacy" role="tab" aria-controls="privacy">PRIVACY</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#members" role="tab" aria-controls="members">MEMBERS</a>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="privacy" role="tabpanel">
    <div class="tab-pane fade in active" id="panel51" role="tabpanel">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <b>Who can follow the group's activites?</b>
            </div>
            <div class="col-xs-12 col-md-5">
                <fieldset class="form-group">
                    <input name="group2" type="radio" class="with-gap" id="radio4">
                    <label for="radio4">Everyone</label>
                </fieldset>

                <fieldset class="form-group">
                    <input name="group2" type="radio" class="with-gap" id="radio5">
                    <label for="radio5">Invited people only</label>
                </fieldset>

                <fieldset class="form-group">
                    <input name="group2" type="radio" class="with-gap" id="radio6">
                    <label for="radio6">Selected group of user</label>
                </fieldset>
            </div>  
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <p>Auto Subscription</p>
            </div>
            <div class="col-xs-12 col-md-8">
                <select class="mdb-select col-xs-12">
                    <option value="0" disabled selected></option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                </select>
            </div>

        </div>
    </div>
  </div>
  <div class="tab-pane" id="members" role="tabpanel">...</div>
</div>
</section>