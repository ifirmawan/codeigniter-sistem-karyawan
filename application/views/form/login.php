
<?php if (isset($errors_log)) : ?>
  <div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
		</button>
    <?php echo $errors_log;?>
    </div>  
<?php endif; ?>
<form action="<?php echo site_url('login/submit'); ?>" method="post"> 
<div ><h3 align="center"><label>Please Sign In First</label></h3></div>
  <div class="form-group">
    <label for="user_name"></label>
    <input type="text" class="form-control" name="user_name" placeholder="Username">
  </div>
  	<div class="form-group">
    	<label for="user_password"></label>
    	<input type="password" class="form-control" name="user_password" placeholder="Password">
	</div>
	<div class="form-group" style="padding-left:25px ;">
  		<div class="checkbox">
    	<input type="checkbox"> Remember me
  		</div>
  	</div>
   <!-- Tombol untuk menampilkan modal-->
  <div class="panel">
  	<div class="panel panel-footer text-right">
  		<a data-toggle="modal" data-target="#myModal">  Forgot password ?</a>
  		<button type="button" class="btn btn-default ">Reset</button>
  		<button type="submit" class="btn btn-primary ">Sign in</button>
  	</div>
  </div>
  
</form>


<!-- Modal -->

<div id="myModal" class="modal fade" role="dialog">
<form action="<?php echo site_url('login/doforget'); ?>" method="post"> 

    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reset Password</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
          </div>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
    </form>
</div>
