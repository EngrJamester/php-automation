<div>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/view/nav/nav-view.php');
  include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/server.php');
?>            
   
<div class="content-wrapper">
    <div class="container-fluid" >

           <!-- Breadcrumbs-->
           <!-- <ol class="breadcrumb">
              <h1>Home Automation</h1><br />
              <p class="breadcrumb-item active">This was built with <strong>Php</strong> + <strong>Raspberry PI<strong></p>  
           </ol> -->
           <div class="well" style="background-color:dimgrey;margin-bottom:10px;">
              <div class="container-fluid">
                <div class="row" style="margin:auto;">
                    <h1 style="color:snow;">Home Automation</h1><br />
                </div>
                <div class="row" style="margin:auto;">
                  <p class="breadcrumb-item active" style="color:snow;">
                    This was built with <strong>Php</strong> + <strong>Raspberry PI<strong>
                  </p>  
                </div>
              </div>
           </div>
          
          <!-- Icon Cards-->
          <div class="Home">
                
                <div  class="row" style="margin-top:10px;margin:auto;">
             
                    <div class="col-md-3" style="margin-bottom:10px;">
                        <div class="card" style="margin-top:10px;margin:auto;">
                          
                            <div class="card-header">
                              <h5 class="card-title">
                              <i class="fas fa-spa"style="margin:auto;" ></i>
                              Controller 1</h5>
                            </div>
                            <div class="card-body">
                              <div class="row"> 
                                      <!-- <div [hidden]="control"class="col">
                                          <i class="fas fa-lightbulb"></i>
                                      </div>
                                      <div [hidden]="!control" class="col">
                                          <i class="far fa-lightbulb"></i>
                                      </div> -->
                                      <form method="post">
                                        <input type="checkbox" id="controller" name="time_left" value="yes"checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                      </form>
                                      
                              </div>
                              <p class="card-text" id="timer"><b>Remaining Day(s):</b> 7 Days </p>
                              <p class="card-text"><b>Temperature:</b> 100 deg </p>
                              <p class="card-text"><b>Fan:</b> Off </p>
                            </div>
                          
                        </div>
                    </div>
               
                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin:auto;">
                        <div class="card-header">
                          <h5 class="card-title">
                            <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                            Controller 2</h5>
                        </div>
                        <div class="card-body">
                          
                          <div class="row"> 
                                <!-- <div [hidden]="control"class="col">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <div [hidden]="!control" class="col">
                                    <i class="far fa-lightbulb"></i>
                                </div> -->
                                <input type="checkbox" id="controller1" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                        </div>
                        <p class="card-text" id="timer1"><b>Remaining Day(s):</b> 7 Days</p>
                        <p class="card-text"><b>Temperature:</b> 100 deg </p>
                        <p class="card-text"><b>Fan:</b> Off </p>
                          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin:auto;">
                      
                      <div class="card-header">
                        <h5 class="card-title">
                          <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                        Controller 3</h5>
                      </div>
                       
                        <div class="card-body">
                          
                          <div class="row"> 
                                <!-- <div [hidden]="control"class="col">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <div [hidden]="!control" class="col">
                                    <i class="far fa-lightbulb"></i>
                                </div> -->
                                <input type="checkbox" id="controller2" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                        </div>
                        <p class="card-text" id="timer2"><b>Remaining Day(s):</b> 7 Days </p>
                        <p class="card-text"><b>Temperature:</b> 100 deg </p>
                        <p class="card-text"><b>Fan:</b> Off </p>
                          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin:auto;">
                        <div class="card-header">
                          <h5 class="card-title">
                          <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                          Controller 4</h5>
                        </div>
                        
                        <div class="card-body">
                         
                          <div class="row"> 
                                <!-- <div [hidden]="control"class="col">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <div [hidden]="!control" class="col">
                                    <i class="far fa-lightbulb"></i>
                                </div> -->
                                <input type="checkbox" id="controller3" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                        </div>
                        <p class="card-text" id="timer3"><b>Remaining Day(s):</b> 7 Days </p>
                        <p class="card-text"><b>Temperature:</b> 100 deg </p>
                        <p class="card-text"><b>Fan:</b> Off </p>
                          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin-top:10px;margin:auto;">
                        <div class="card-header">
                          <h5 class="card-title">
                            <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                          Controller 5</h5>
                        </div>
                       
                        <div class="card-body">
                          
                          <div class="row"> 
    
                                <input type="checkbox" id="controller4" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                          </div>
                        <p class="card-text" id="timer4"><b>Remaining Day(s):</b> 7 Days </p>
                        <p class="card-text"><b>Temperature:</b> 100 deg </p>
                        <p class="card-text"><b>Fan:</b> Off </p>
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin-top:10px;margin:auto;">
                        <div class="card-header">
                          <h5 class="card-title">
                            <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                          Controller 6</h5>
                        </div>
                       
                        <div class="card-body">
                          
                          <div class="row"> 
                                <!-- <div [hidden]="control"class="col">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <div [hidden]="!control" class="col">
                                    <i class="far fa-lightbulb"></i>
                                </div> -->
                                <input type="checkbox" id="controller5" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                        </div>
                        <p class="card-text" id="timer5"><b>Remaining Day(s):</b> 7 Days </p>
                        <p class="card-text"><b>Temperature:</b> 100 deg </p>
                        <p class="card-text"><b>Fan:</b> Off </p>
                         
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin-top:10px;margin:auto;">
                        <div class="card-header">
                          <h5 class="card-title">
                            <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                          Controller 7</h5>
                        </div>
                        <div class="card-body">
                         
                          <div class="row"> 
                               
                                <input type="checkbox" id="controller6" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                        </div>
                        <p class="card-text" id="timer6"><b>Remaining Day(s):</b> 7 Days </p>
                        <p class="card-text"><b>Temperature:</b> 100 deg </p>
                        <p class="card-text"><b>Fan:</b> Off </p>
                         
                        </div>
                      </div>
                    </div>

                </div>
                
          </div>
    </div>

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
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
</div>

