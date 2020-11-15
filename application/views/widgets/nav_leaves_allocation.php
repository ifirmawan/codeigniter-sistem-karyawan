<nav class="navbar bg-white" >
    <div class="row">
        <div class="col-md-6">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Allocation Request</a></li>
            <li class="breadcrumb-item active">New</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <button class="jvm-btn btn-primary" data-toggle="modal" data-target="#test">SAVE</button>
            <a href="#"><small>DISCARD</small></a>
        </div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6" align="right">
            <button class="jvm-btn disabled">TO SUBMIT</button>
            <button class="jvm-btn btn-primary">TO APPROVE</button>
            <button class="jvm-btn disabled">APPROVED</button>
        </div>
    </div>
</nav>

<!-- Modal Subscription -->
<div class="modal fade modal-ext" id="test" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Odoo Warning <small>- Validation error</small></h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <p>The record has been modofied, your changes will be discarded. Are you sure you want to leave this page ?</p>
            </div>
            <!--Footer-->
            <hr>
            <div>
                <button class="jvm-btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<br>