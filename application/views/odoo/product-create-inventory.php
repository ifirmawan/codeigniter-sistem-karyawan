<div class="container">
<!--Section: Leave a reply (Not Logged In User)-->
<section class="section-content">
<ol class="breadcrumb">
  <li class="breadcrumb-item active col-md-2 offset-md-10"><i class="fa fa-archive"></i> Not Archived</li>
</ol>
    <!--Leave a reply form-->
    <div class="row">
        <div class="reply-form">
            <div class="col-lg-6">
                <div class="md-form">
                    <input type="text" id="form22" class="form-control">
                    <label for="form22">Product name</label>
                    <td><input class="checkbox" type="checkbox"></td>
                    <td>Can be Sold</td>
                </div>
            </div>
        <div class="float-xs-right">
            <a href="#">
            <img class="media-object" src="<?php echo base_url('assets/img/images.png');?>" height="50" width="50">
            </a>      
        </div>
        </div>
    </div>

<ul class="nav nav-tabs tabs-cyan" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link waves-light" data-toggle="tab" href="#home" role="tab" aria-controls="home">GENERAL INFORMATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link waves-light active" data-toggle="tab" href="#inventory" role="tab" aria-controls="inventory">INVENTORY</a>
  </li>
  <li class="nav-item">
    <a class="nav-link waves-light" data-toggle="tab" href="#sales" role="tab" aria-controls="sales">SALES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link waves-light" data-toggle="tab" href="#notes" role="tab" aria-controls="notes">NOTES</a>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane" id="home" role="tabpanel">...</div>
    <div class="tab-pane active" id="inventory" role="tabpanel">
    <br>
      <form action="" method="post">
        <div class="col-xs-12 col-md-6">
        <div class="form-group">
            <div class="col-xs-12 col-md-3">
              <label>Internal category</label>
            </div>

            <div class="col-xs-12 col-md-8">
              <select class="form-control">
                <option value="0">All</option>
                <option value="1">Option 1</option>
                 <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                   <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
            </select>
            </div>

            <div class="col-xs-12 col-md-1">
                <a href="#">
                <img class="media-object" src="Icon external.png" height="20" width="20">
                </a>
            </div>
        </div>
        </div>
      </form>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <div class="col-xs-12 col-md-4">
                <label>Weight</label>
                </div>
            <div class="col-xs-12 col-md-8">
                <input type="number" class="form-control" name="" />
            </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 col-md-4">
                <label>Volume</label>
                </div>
            <div class="col-xs-12 col-md-8">
                <input type="number" class="form-control" name="" />
            </div>
            </div>
        </div>
        <p><h5>Vendors<h5></p>
        <table class="table table-striped">
            <tr>
                <td>Vendor</td>
                <td>Minimal quantity</td>
                <td>Price</td>
                <td>Start date</td>
                <td>End date</td>
            </tr>

            <tr>
                <td><a href="#!">Add an item</td>
            </tr>
        </table>

    </div>
  <div class="tab-pane" id="sales" role="tabpanel">...</div>
  <div class="tab-pane" id="notes" role="tabpanel">...</div>
</div>