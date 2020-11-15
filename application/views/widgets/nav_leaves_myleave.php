<nav class="navbar bg-white" >
    <div class="row">
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Allocation Request</a></li>
                <li class="breadcrumb-item active">New</li>
            </ol>

            <button class="jvm-btn btn-primary" data-toggle="modal" data-target="#test">SAVE</button>
            <a href="#"><small>DISCARD</small></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <button class="jvm-btn btn-primary">APPROVE</button>
            <a href="#"><small>REFUSE</small></a>
        </div>
        <div class="col-md-6" align="right">
            <button class="jvm-btn btn-primary disabled">TO SUBMIT</button>
            <button class="jvm-btn btn-primary">APPROVE</button>
            <button class="jvm-btn btn-primary disabled">APPROVED</button>
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
                <h4 class="modal-title" id="myModalLabel">Create : Leaves</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <form>    

    <div class="row">

        <!--First column-->
        <div class="col-md-2">
            <div class="md-form">
                <label for="form41" class="">Resource</label>
            </div>
        </div>

        <!--Second column-->
        <div class="col-md-9">
            <div class="md-form">
                <select class="form-control">
                        <option></option>
                </select>
            </div>
        </div>

    </div>

    <div class="row">

        <!--First column-->
        <div class="col-md-2">
            <div class="md-form">
                <label for="form41" class="">Reason</label>
            </div>
        </div>

        <!--Second column-->
        <div class="col-md-9">
            <div class="md-form">
                <input type="text" id="form51" class="form-control">
                <label for="form51" class=""></label>
            </div>
        </div>

    </div>

    <div class="row">

        <!--First column-->
        <div class="col-md-2">
            <div class="md-form">
                <label for="form41" class="">Leave Request</label>
            </div>
        </div>

        <!--Second column-->
        <div class="col-md-9">
            <div class="md-form">
                <select class="form-control">
                        <option></option>
                </select>
            </div>
        </div>

    </div>

    <div class="row">

        <!--First column-->
        <div class="col-md-2">
            <div class="md-form">
                <label for="form41" class="">Working Time</label>
            </div>
        </div>

        <!--Second column-->
        <div class="col-md-9">
            <div class="md-form">
                <select class="form-control">
                        <option></option>
                </select>
            </div>
        </div>

    </div>

    <div class="row">

        <!--First column-->
        <div class="col-md-2">
            <div class="md-form">
                <label for="form41" class="">Duration</label>
            </div>
        </div>

        <!--Second column-->
        <div class="col-md-4">
            <div class="md-form">
                <select class="form-control">
                        <option></option>
                </select>
            </div>
        </div>

        <div class="col-xs-1" align="center">
            <div class="md-form">
                <label>-</label>
            </div>
        </div>

        <!--Third-->
        <div class="col-md-4">
            <div class="md-form">
                <select class="form-control">
                        <option></option>
                </select>
            </div>
        </div>

    </div>

</form>

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