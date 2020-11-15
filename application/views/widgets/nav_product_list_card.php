<div class="navbar bg-white" >
  <div class="row"> 
     <div class="col-xs-6">
   <ol class="breadcrumb">
        <a href="#">Products</a>
    </ol>
    </div>
        <div class="col-lg-6">
            <input class="form-control" type="text" placeholder="Search" />
    </div>
    </div>

            <div class="row">
            <div class="col-xs-6">
            <a href="<?php echo site_url('Product/prod_create_general_information'); ?>"> <button type="button" class="btn btn-primary btn-sm">CREATE</button></a>&nbsp; 
            </div>

            <div class="col-lg-6 col">
      <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-filter" aria-hidden="true"></span>
      Filters<span class="caret"></span></a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">Action</a>
                        <a class="dropdown-item">Another action</a>
                        <a class="dropdown-item">Something else here</a>
                    </div>
      </li>

      <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-align-justify" aria-hidden="true"></span>
      Group By<span class="caret"></span></a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">Action</a>
                        <a class="dropdown-item">Another action</a>
                        <a class="dropdown-item">Something else here</a>
                    </div>
      </li>

      <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-star" aria-hidden="true"></span>
      Favorites<span class="caret"></span></a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">Action</a>
                        <a class="dropdown-item">Another action</a>
                        <a class="dropdown-item">Something else here</a>
                    </div>
     </li>

        <div class="float-xs-right">
                <a class="">1-12/12</a>
                <a href="#" class="jvm-btn jvm-btn-default"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="jvm-btn jvm-btn-default"><i class="fa fa-chevron-right"></i></a>
                <a href="<?php echo site_url('Product'); ?>" class="jvm-btn jvm-btn-default"><i class="fa fa-th"></i></a>
                <a href="<?php echo site_url('Product/prod_list_tabel'); ?>" class="jvm-btn jvm-btn-default"><i class="fa fa-list"></i></a>
        </div>
        
    </div>
</div>
</div>