
<?php include($_SERVER['DOCUMENT_ROOT'].'/php-automation/app/view/nav-view.php');?>
  <div class="content-wrapper">
    <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
          </ol>
          <!-- Icon Cards-->
              <div class="Home">

                <div class="jumbotron">
                      <h1><fa-icon [icon]="['fas', 'microchip']" id="robot"></fa-icon>Home Automation</h1>
                      <p>
                        This was built with <strong>Php</strong> + <strong>Raspberry PI<strong>
                      </p>
                </div>

                <div class="container-fuild" id="body-container">

                  <div class="row">

                    <div class="col-md-5">
                        <div class="card" style="min-width: 21rem;margin-right: 10px;">
                            <img class="card-img-top" src="../../assets/images/IoT3.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Power Status</h5>
                              <!-- <p class="card-text">Status of Raspebrry PI.</p> -->
                              <!-- <a href="#" class="btn btn-primary">Turn On..</a> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card" style="min-width: 23rem;margin-left:20px;">
                            <img class="card-img-top" src="../../assets/images/self-service.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">No of Hrs Online</h5>
                              <!-- <p class="card-text">Display the No Of hrs Raspberry has been On.</p> -->
                              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    </div>
                    
                  </div>
                </div>
              
              </div>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
          </div>
          <div class="modal-body">Proceed To Log out?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
   

