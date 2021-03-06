
<?php include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/server.php') ?>
<?php 
// echo password_hash('admin',PASSWORD_BCRYPT);
 ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../../public/style-test.css" rel="stylesheet">
  <title>Php & RaspberryPI</title>
  
  <!-- Bootstrap core CSS-->
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
  <!-- Custom styles for this template-->
  <!-- <link href="css/sb-admin.css" rel="stylesheet"> -->
</head>

<body >
  <div class="container" id="loginForm">

    <div class="card card-login mx-auto mt-3" >

        <div class="card-header">Login</div>
      
        <div class="card-body">
      
            <form method="post"  enctype="multipart/form-data" >

                <?php include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/common/errors.php'); ?>

                <div class="form-group">
                    <label for="InputUsername">Username</label>
                    <input class="form-control"  type="text"  name="username">
                </div>

                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input class="form-control"  type="password" name="password">
                </div>

                <div class="form-group">
                    <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember Password</label>
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
            </form>

          
        </div>

    </div>

  </div>
  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- Core plugin JavaScript-->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
</body>

</html>
