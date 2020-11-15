<br>
<div class="container">
<div class="panel-body">

<ol class="breadcrumb">
  <li class="breadcrumb-item active col-md-2 offset-md-10"><i class="fa fa-archive"></i> Not Archived</li>
</ol>

<form>    
    <div class="row">
        <div class="col-md-10">
            <div class="md-form">
                <label>Product Name</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="md-form">
                <input type="text" class="form-control" placeholder="e.g. Example">
            </div>
        </div>
        <div class="col-md-2" align="center">
            <div class="md-form">
                <img src="http://images.yuktravel.com/images/upload/webpage/dmeu_pr045a_1_std.lang.all.png" width="120" height="120">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <div class="md-form">
                <input type="checkbox"> Can be Sold
            </div>
        </div>
    </div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#general" role="tab" aria-controls="general">GENERAL INFORMATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#inventory" role="tab" aria-controls="inventory">INVENTORY</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#sales" role="tab" aria-controls="sales">SALES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#notes" role="tab" aria-controls="notes">NOTES</a>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane" id="general" role="tabpanel">Ini halaman untuk General Information</div>
  <div class="tab-pane" id="inventory" role="tabpanel">Ini adalah halaman untuk Inventory</div>
  <div class="tab-pane" id="sales" role="tabpanel">Ini adalah halaman untuk Sales</div>
  <div class="tab-pane active" id="notes" role="tabpanel">
    <div class="row">
        <!--First column-->
        <div class="col-md-12">
            <div class="sm-form">
                <h5>Description for Quotations</h5>
                <textarea class="sm-textarea" placeholder="This note will be displayed on the quotations"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="sm-form">
                <h5>Description for Vendor</h5>
                <textarea class="sm-textarea" placeholder="This note will be displayed on requests for quotations"></textarea>
            </div>
        </div>
    </div>
  </div>
</div>

<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>

</form>
</div>
</div>

