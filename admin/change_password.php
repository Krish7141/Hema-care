<?php include 'session.php'; ?>

<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

#sidebar{position:relative;margin-top:-20px}
#content{position:relative;margin-left:210px}
@media screen and (max-width: 600px) {
  #content {
    position:relative;margin-left:auto;margin-right:auto;
  }
}
</style>
</head>

<body style="color:black">
<div id="header">
<?php include 'header.php';
?>
</div>
<div id="sidebar">
<?php 
$active="";
include 'sidebar.php'; ?>

</div>
<div id="content">
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

          <h1 class="page-title">Change Password</h1>
        </div>
      </div>
          <div class="row">
            <div class="col-md-10">
              <div class="panel panel-default">
                <div class="panel-heading">Password Fields</div>
                <div class="panel-body">
                  <form method="post" name="chngpwd" class="form-horizontal">

                    <div class="form-group" method="post">
                      <label class="col-sm-4 control-label">Current Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="currpassword" id="password" required>
                      </div>
                    </div>
                    <div class="hr-dashed"></div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">New Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="newpassword" id="newpassword" required>
                      </div>
                    </div>
                    <div class="hr-dashed"></div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Confirm Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required>
                      </div>
                    </div>
                    <div class="hr-dashed"></div>



                    <div class="form-group">
                      <div class="col-sm-8 col-sm-offset-4">

                        <button class="btn btn-primary" name="submit" type="submit">Save changes</button>
                      </div>
                    </div>

                  </form>

                </div>
              </div>
            </div>
            </div>

    <form method="post" name="" action="login.php" class="form-horizontal">
      <div class="form-group">
        <div class="col-sm-8 col-sm-offset-4" style="float:left">

          <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
        </div>
      </div>
    </form>

</div>
</div>
</div>
</body>
</html>
