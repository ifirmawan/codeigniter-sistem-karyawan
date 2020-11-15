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
                <img class="media-object" src="Icon Nocamera.png" height="50" width="50">
                </a>
            </div>
      </div>
      </div>


<ul class="nav nav-tabs tabs-pink" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link waves-light active" data-toggle="tab" href="#home" role="tab" aria-controls="home">GENERAL INFORMATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link waves-light" data-toggle="tab" href="#inventory" role="tab" aria-controls="inventory">INVENTORY</a>
  </li>
  <li class="nav-item">
    <a class="nav-link waves-light" data-toggle="tab" href="#sales" role="tab" aria-controls="sales">SALES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link waves-light" data-toggle="tab" href="#notes" role="tab" aria-controls="notes">NOTES</a>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">
  <br>
    <form action="" method="post">
        <div class="col-xs-12 col-md-6">
        <div class="form-group">
            <div class="col-xs-12 col-md-4">
              <label>Product Type</label>
            </div>

            <div class="col-xs-12 col-md-8">
              <select class="form-control">
                <option value="0">Consumable</option>
                <option value="1">Option 1</option>
                 <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                   <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
            </select>
            </div>
                <div class="col-xs-12 col-md-4">
                    <label>Internal References</label>
                </div>
                 <div class="col-xs-12 col-md-8">
                    <input type="text" class="form-control" name="" />
                </div>
                 <div class="col-xs-12 col-md-4">
                    <label>Barcode</label>
                </div>
                 <div class="col-xs-12 col-md-8">
                    <input type="text" class="form-control" name="" />
                </div>

        </div>
        </div>
      </form>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <div class="col-xs-12 col-md-4">
                <label>Sale price</label>
                </div>
            <div class="col-xs-12 col-md-8">
                <input type="number" class="form-control" name="" />
            </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 col-md-4">
                <label>Cost</label>
                </div>
            <div class="col-xs-12 col-md-4">
                <input type="number" class="form-control" name="" />
            </div>
            </div>
        </div>

  </div>
  <div class="tab-pane" id="inventory" role="tabpanel">
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
  <div class="tab-pane" id="sales" role="tabpanel">
  <br>
    <h4><p class="black-text">Description for Question</p></h4>
        <div class="row">
        <div class="reply-form">
            <div class="col-lg-11">
                <div class="md-form">
                    <textarea class="sm-textarea" placeholder="This note will be displayed on the quotations."></textarea>
                </div>
            </div>
        </div>
        </div>

      <h4><p class="black-text">Description for Vendors</p></h4>
        <div class="row">
        <div class="reply-form">
            <div class="col-lg-11">
                <div class="md-form">
                    <textarea class="sm-textarea" placeholder="This note will be displayed on requests for quotation."></textarea>
                </div>
            </div>
        </div>
        </div>
  </div>
  <div class="tab-pane" id="notes" role="tabpanel">
    <br>
      <h4><p class="black-text">Sale Conditions</p></h4>
        <div class="row">
            <!--First column-->
            <div class="col-md-2">
                <div class="md-form">
                    <label for="form41" class="">Warranty</label>
                </div>
            </div>

            <!--Second column-->
            <div class="col-md-2">
                <div class="md-form">
                    <input type="number" id="form51" class="form-control" name="">
                    <label for="form51" class=""></label>
                </div>
            </div>
            <div class="">
                    <label for="form41" class="">Months</label>
            </div>
        </div>
  </div>
</div>

</section>
<!--/Section: Leave a reply (Not Logged In User)-->
</div>