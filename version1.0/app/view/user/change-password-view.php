<?php include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/view/nav/nav-view.php'); ?>       
<div class="content-wrapper" >

    <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="settings">Controller Settings</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="user">Change User password</a>
            </li>
          </ol>
          <!-- Icon Cards-->
          <div class="card card-register mx-auto mt-5" style="background-color:dimgray;">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
              <form method="post" action="change-password" id="contactForm">
                <?php 
                include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/server.php');
                include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/common/errors.php');
                ?>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                      <label for="exampleInputName">Username</label>
                      <input class="form-control" id="exampleInputName" type="text"  name="username" value="<?php echo $login_username; ?>" disabled>
                    </div>
                    
                  </div>
                </div>
              
                <div class="form-group" >
                  <div class="form-row">

                    <div class="col-md-6">
                      <label for="exampleInputPassword1">New Password</label>
                      <input class="form-control" id="exampleInputPassword1" type="password" name="password_1" >
                    </div>

                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Confirm New Password</label>
                        <input class="form-control" id="exampleInputPassword2" type="password" name="password_2" >
                    </div>

                  </div>
                </div>
                <button type="submit" id="submit" class="btn btn-primary btn-block" name="change_pass" >Update Password</button>
                      <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>  
  
              </form>
            </div>
      </div>


      </div>
    </div>
 
</div>


