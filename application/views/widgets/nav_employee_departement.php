<script type="text/javascript">
    function showhide(toggle) {
        //change target element mode
        var elementmode = document.getElementById(toggle).style;
        elementmode.display = (!elementmode.display) ? 'none' : '';
    }
    function openclose(toggle) {
        showhide(toggle);
    }
</script>

<div class="navbar bg-white" >
  <div class="row"> 
     <div class="col-lg-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Departement</li>
        </ol>
    </div>
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="jvm-btn jvm-btn-default" type="button"><a href="javascript:openclose('toggle');"><i class="fa fa-search-plus"></i></a></button>
          </span>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <a href="<?php echo site_url('employees/emp_new_departement'); ?>"><button type="button" class="jvm-btn jvm-btn-sm btn-primary">CREATE</button>&nbsp;
      </div>
      <div id="nvb" class="col-lg-3 pull-right">
          <div class="float-xs-right">
              <a class="">1-12 / 12</a>
              <a href="#" class="jvm-btn jvm-btn-default"><i class="fa fa-chevron-left"></i></a>
              <a href="#" class="jvm-btn jvm-btn-default"><i class="fa fa-chevron-right"></i></a>
              <a href="<?php echo site_url('employees/emp_departement'); ?>" class="jvm-btn jvm-btn-default"><i class="fa fa-th"></i></a>
              <a href="<?php echo site_url('employees/emp_departement_list_table'); ?>" class="jvm-btn jvm-btn-default"><i class="fa fa-list"></i></a>
          </div>
      </div>
      <div class="col-lg-3 pull-right" id="toggle">
        <li class="nav-item btn-group">
          <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-filter" aria-hidden="true"></span>Filters<span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <a class="dropdown-item">Absent Today</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item">Unread Messages</a>
                <a class="dropdown-item">Archived</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"><i class="fa fa-caret-right"></i> Add Custom Filter</a>
             </div>
        </li>
        <li class="nav-item btn-group">
          <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-align-justify" aria-hidden="true"></span>Group By<span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <a class="dropdown-item">Manager</a>
                <a class="dropdown-item">Coach</a>
                <a class="dropdown-item">Departement</a>
                <a class="dropdown-item">Job</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"><i class="fa fa-caret-right"></i> Add Custom Group</a>
              </div>
        </li>
        <li class="nav-item btn-group">
          <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-star" aria-hidden="true"></span>Favorites<span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <a class="dropdown-item"><span class="" aria-hidden="true"><i class="fa fa-caret-down"></i> Save current search</span></a>
                <a class="dropdown-item"><input type="text" placeholder=""></a>
                <a class="dropdown-item"><td><input class="checkbox" type="checkbox"></td>
                  <td>Use by default</td>
                </a>
                <a class="dropdown-item"><td><input class="checkbox" type="checkbox"></td>
                  <td>Share with all user</td> <i class="fa fa-users"></i>
                </a>
                <a class="dropdown-item"><button type="button" class="jvm-btn btn-primary  btn-sm">Save</button></a>
              </div>
        </li>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>