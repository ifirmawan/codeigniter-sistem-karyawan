<nav class="navbar bg-white" >
    <div class="row">
        <div class="col-xs-6">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Leave Type</a></li>
            <li class="breadcrumb-item active">Legas Leaves 2016</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <button class="jvm-btn btn-primary" data-toggle="modal" data-target="#mdl2">APPROVE</button>
            <a href="#"><small>REFUSE</small></a>
        </div>
        <div class="col-xs-6" align="right">
            <a href="#">1 / 4</a><span>&nbsp</span>
            <a class="jvm-btn jvm-btn-default" aria-hidden="true"><i class="fa fa-chevron-left"></i></a>
            <a class="jvm-btn jvm-btn-default" aria-hidden="true"><i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</nav>


<div class="modal fade" id="mdl2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <p>The record has been modified, your changes will be discarded. Are you sure you want to leave this page?</p>
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