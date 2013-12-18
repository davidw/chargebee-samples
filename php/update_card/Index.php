<?php
   require_once('../partials/header.php');
?>
<div class="jumbotron">
<div class=" col-sm-6 col-sm-offset-3">
        <div class="panel panel-success">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <form class="form-horizontal" action="profile">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Customer Id</label>
                      <div class="col-sm-8">
                        <input type="text" name="customer_id" class="form-control" placeholder="Enter User Name" value='john@acmeinc.com'>
                        <small class="text-danger"></small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="Enter Password" value="thisismypassword">
                        <small class="text-danger"></small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">&nbsp;</label>                    
                        <div class="col-sm-8">
                            <input type="submit" class="btn btn-success" value="Login">
                        </div>
                  	</div>
                </form>
            </div>
        </div>
   </div> 
</div>

<?php
require_once('../partials/footer.php');
?>
