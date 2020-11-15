<nav class="navbar bg-white" >
    <div class="row">
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Product Categories</a></li>
                <li class="breadcrumb-item active">All</li>
            </ol>
                <button class="jvm-btn btn-primary" data-toggle="modal" data-target="#mdl">SAVE</button>
                    <a href="#"><small>DISCARD</small></a>
        </div>
    </div>
</nav>
<!--/.Navbar-->


<div class="modal fade" id="mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Create : Parent Category</small></h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <form>    
    
    <div class="row">
        <div class="col-md-10">
            <label for="form11">Category Name</label>   
            <div class="md-form">
                <input type="text" id="form11" class="form-control" placeholder="e.g. Lamps">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <div class="md-form">
                <h4>Category Type</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <div class="md-form">
                <label for="form5" class=""><small>Parent Category</small></label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="md-form">
                <select class="form-control">
                        <option></option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="md-form">
                <label for="form51" class=""><small>Category Type</small></label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="md-form">
                <select class="form-control">
                        <option>Normal</option>
                </select>
            </div>
        </div>
    </div>

</form>
            </div>
            <!--Footer-->
            <hr>
            <div>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">SAVE</button>
                <a href="#"><small>DISCARD</small></a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>

