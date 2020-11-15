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
     <div class="col-lg-6" align="left">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Employees</li>
        </ol>
    </div>
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <a href="javascript:openclose('toggle');" class="jvm-btn-link">
                <i style="font-size: 14px;" class="fa fa-search-minus"></i>
            </a>
          </span>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <a href="<?php echo site_url('employees/create_employee'); ?>"><button type="button" class="jvm-btn btn-primary">CREATE</button>&nbsp;
      </div>
      <div id="nvb" class="col-lg-3 pull-right">
          <div class="float-xs-right">
              <a class="">1-12 / 12</a>
              <a href="#" class="btn-1"><i class="fa fa-chevron-left "></i></a>
              <a href="#" class="jvm-btn-link"><i class="fa fa-chevron-right"></i></a>
              <a href="<?php echo site_url('employees'); ?>" class="jvm-btn-link"><i class="fa fa-th"></i></a>
              <a href="<?php echo site_url('employees/employee_list_table'); ?>" class="jvm-btn-link">
              <i class="fa fa-list"></i></a>
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
                <b class="dropdown-item">Archived</b>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-caret-right"></i> Add Custom Filter</a>
                <a class="dropdown-item" href="#"><select><option>Absent Today</option></select> <i class="fa fa-trash"></i></a>
                <a class="dropdown-item" href="#"><select><option>Is true</option></select></a>
                <a class="dropdown-item"><button class="jvm-btn btn-primary">APPLY</button></a>
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
                <a class="dropdown-item"><i class="fa fa-caret-right"></i> Add custom Group</a>
                <a class="dropdown-item">
                  <td>
                    <select class="form-control">
                      <option>Bank Account Number</option>
                      <option>Coach</option>
                      <option>Created by</option>
                      <option>Date of Birth</option>
                      <option>Departement</option>
                      <option>Gender</option>
                      <option>Home Address</option>
                      <option>Identification No</option>
                      <option>Job Title</option>
                      <option>Last Message Date</option>
                      <option>Last Update by</option>
                      <option>Last Update on</option>
                      <option>Manager</option>
                      <option>Marital Status</option>
                      <option>Nasionality</option>
                      <option>Passport No</option>
                      <option>Resource</option>
                      <option>Resource Name</option>
                      <option>SIN No</option>
                      <option>SSN No</option>
                      <option>Work Email</option>
                      <option>Work Location</option>
                      <option>Work Mobile</option>
                      <option>Work Phone</option>
                      <option>Working Address</option>
                    </select>
                  </td>
                </a>
                <a class="dropdown-item"><button type="button" class="jvm-btn btn-primary  btn-sm">APPLY</button></a>
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