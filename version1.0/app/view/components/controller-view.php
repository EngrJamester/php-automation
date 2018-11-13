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
           <!-- <div class="well" style="background-color:dimgrey;margin-bottom:10px;">
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
           </div> -->
          
          <!-- Icon Cards-->
          <div class="Home">
                
                <div  class="row" style="margin-top:10px;margin:auto;">
             
                    <div class="col-md-3" style="margin-bottom:10px;">
                        <div class="card" style="margin-top:10px;margin:auto;">
                          
                            <div class="card-header" >
                              <h5 class="card-title">
                                <i class="fas fa-spa"style="margin:auto;" ></i>
                                Box 1
                               
                              </h5>
                              
                            </div>
                            <div class="card-body">
                              <form method="post">
                                  <!-- <input type="checkbox" id="controller" name="time_left" value="yes"checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> -->
                                  <label class="switch">
                                    <input type="checkbox" id="controller">
                                    <span class="slider2 round" data-on="start" data-off="stop"></span>
                                  </label>
                                  
                              </form>
                              <label id="contStatus1">Status: Start</label>
                              <p class="card-text" id="timer" style="font-size:13px;"><b>Remaining Day(s):</b> 7 Days </p>
                              <p class="card-text" id="temp1" style="font-size:13px;"><b>Temperature:</b> N/A</p>
                              <p class="card-text" id="humid1" style="font-size:13px;"><b>Humidity:</b> N/A</p>
                              <p class="card-text" id="fan1" style="font-size:13px;"><b>Fan:</b> Off </p>
                            </div>
                          
                        </div>
                    </div>
               
                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin:auto;">
                        <div class="card-header">
                          <h5 class="card-title">
                            <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                            Box 2</h5>
                        </div>
                        <div class="card-body">
                          <form method="post">
                          <!-- <input type="checkbox" id="controller1" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> -->
                            <label class="switch">
                                    <input type="checkbox" id="controller1">
                                    <span class="slider2 round" ></span>
                            </label>
                          </form>
                          <label id="contStatus2">Status: Start</label>
                          <p class="card-text" id="timer1" style="font-size:13px;"><b>Remaining Day(s):</b> 7 Days</p>
                          <p class="card-text" id="temp2" style="font-size:13px;"><b>Temperature:</b> 100 deg </p>
                          <p class="card-text" id="humid2" style="font-size:13px;"><b>Humidity:</b> 100 deg </p>
                          <p class="card-text" id="fan2" style="font-size:13px;"><b>Fan:</b> Off </p>
                          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin:auto;">
                      
                      <div class="card-header">
                        <h5 class="card-title">
                          <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                        Box 3</h5>
                      </div>
                       
                        <div class="card-body">
                          <form method="post">
                             <!-- <input type="checkbox" id="controller2" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> -->
                             <label class="switch">
                                    <input type="checkbox" id="controller2">
                                    <span class="slider2 round" ></span>
                             </label>
                          </form>
                          <label id="contStatus3">Status: Start</label>
                          <p class="card-text" id="timer2" style="font-size:13px;"><b>Remaining Day(s):</b> 7 Days </p>
                          <p class="card-text" id="temp3" style="font-size:13px;"><b>Temperature:</b> N/A</p>
                          <p class="card-text" id="humid3" style="font-size:13px;"><b>Humidity:</b> N/A</p>
                          <p class="card-text" id="fan3" style="font-size:13px;"><b>Fan:</b> Off </p>
                          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin:auto;">
                        <div class="card-header">
                          <h5 class="card-title">
                          <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                          Box 4</h5>
                        </div>
                        
                        <div class="card-body">
                          <form method="post">
                          <!-- <input type="checkbox" id="controller3" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> -->
                              <label class="switch">
                                    <input type="checkbox" id="controller3">
                                    <span class="slider2 round" ></span>
                              </label>
                          </form>
                          <label id="contStatus4">Status: Start</label>
                          <p class="card-text" id="timer3" style="font-size:13px;"><b>Remaining Day(s):</b> 7 Days </p>
                          <p class="card-text" id="temp4" style="font-size:13px;"><b>Temperature:</b> N/A</p>
                          <p class="card-text" id="humid4" style="font-size:13px;"><b>Humidity:</b> N/A</p>
                          <p class="card-text" id="fan4" style="font-size:13px;"><b>Fan:</b> Off </p>
                          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin-top:10px;margin:auto;">
                        <div class="card-header">
                          <h5 class="card-title">
                            <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                          Box 5</h5>
                        </div>
                       
                        <div class="card-body">
                          <form method="post">
                             <!-- <input type="checkbox" id="controller4" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> -->
                             <label class="switch">
                                    <input type="checkbox" id="controller4">
                                    <span class="slider2 round" ></span>
                             </label>
                          </form>
                          <label id="contStatus5">Status: Start</label>
                          <p class="card-text" id="timer4" style="font-size:13px;"><b>Remaining Day(s):</b> 7 Days </p>
                          <p class="card-text" id="temp5" style="font-size:13px;"><b>Temperature:</b> N/A</p>
                          <p class="card-text" id="humid5" style="font-size:13px;"><b>Humidity:</b> N/A</p>
                          <p class="card-text" id="fan5" style="font-size:13px;"><b>Fan:</b> Off </p>
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin-top:10px;margin:auto;">
                        <div class="card-header">
                          <h5 class="card-title">
                            <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                          Box 6</h5>
                        </div>
                       
                        <div class="card-body">
                          
                          <form method="post">
                              <!-- <input type="checkbox" id="controller5" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> -->
                              <label class="switch">
                                    <input type="checkbox" id="controller5">
                                    <span class="slider2 round" ></span>
                              </label>
                          </form>
                          
                          <label id="contStatus6">Status: Start</label>
                          <p class="card-text" id="timer5" style="font-size:13px;"><b>Remaining Day(s):</b> 7 Days </p>
                          <p class="card-text" id="temp6" style="font-size:13px;"><b>Temperature:</b> N/A</p>
                          <p class="card-text" id="humid6" style="font-size:13px;"><b>Humidity:</b> N/A</p>
                          <p class="card-text" id="fan6" style="font-size:13px;"><b>Fan:</b> Off </p>
                         
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3" style="margin-bottom:10px;">
                      <div class="card" style="margin-top:10px;margin:auto;">
                        <div class="card-header">
                          <h5 class="card-title">
                            <i class="fas fa-spa" style="margin:auto;margin-top:5px;"></i>
                          Box 7</h5>
                        </div>
                        <div class="card-body">
                          <form method="post">
                          <!-- <input type="checkbox" id="controller6" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> -->
                              <label class="switch">
                                    <input type="checkbox" id="controller6">
                                    <span class="slider2 round" ></span>
                              </label>
                          <form>
                          <label id="contStatus7">Status: Start</label>
                          <p class="card-text" id="timer6" style="font-size:13px;"><b>Remaining Day(s):</b> 7 Days </p>
                          <p class="card-text" id="temp7" style="font-size:13px;"><b>Temperature:</b> N/A</p>
                          <p class="card-text" id="humid7" style="font-size:13px;"><b>Humidity:</b> N/A</p>
                          <p class="card-text" id="fan7" style="font-size:13px;"><b>Fan:</b> Off </p>
                         
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

