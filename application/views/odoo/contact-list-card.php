
<div class="conteiner-fluid" style="margin-top:25px">
  <div class="col-md-3">
    <div class="card">
      <div class="card-block">
        <div class="row">
          <div class="col-md-4" align="center">
            <a href="#">
              <img src="<?php echo base_url('assets/img/Icon building.png');?>" alt="..." class="img-rounded" height="70" width="70">
            </a>
          </div>
          <div class="col-md-8">
             <div class="media-body">
              
              <?php
              //var_dump($emp_list); 
              foreach ($emp_list as $key => $value) {
              echo $value['id_employee'];
              echo $value['id_company'];
              
              }
              //foreach($emp_list as $){
              ?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


