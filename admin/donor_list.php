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
  #he{
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      padding: 3px 7px;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
      align:center
  }
</style>
</head>

</div>
<div id="sidebar">
<?php $active="list"; include 'sidebar.php'; ?>

</div>
<div id="content" >
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

          <h1 class="page-title">Donor List</h1>

        </div>

      </div>
      <hr>
      

       <div class="table-responsive">
      <table class="table table-bordered" style="text-align:center">
          <thead style="text-align:center">
          <th style="text-align:center">S.no</th>
          <th style="text-align:center">Name</th>
          <th style="text-align:center">Mobile Number</th>
          <th style="text-align:center">Email Id</th>
          <th style="text-align:center">Age</th>
          <th style="text-align:center">Gender</th>
          <th style="text-align:center">Blood Group</th>
          <th style="text-align:center">Address</th>
          <th style="text-align:center">Action</th>
          </thead>
          <tbody>
           
         
          </tbody>
      </table>
    </div>
  





<div class="table-responsive"style="text-align:center;align:center">
   
       <form method="post" name="" action="login.php" class="form-horizontal">
         <div class="form-group">
           <div class="col-sm-8 col-sm-offset-4" style="float:left">

             <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
           </div>
         </div>
       </form>
  
</body>
</html>
