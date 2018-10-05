<div>
                
   
       
    <?php 

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "dbtest";

        //Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sqll = "SELECT  * from controllers ";

        if (mysqli_query($conn, $sqll)) 
        {
          echo "";
        } 
        else 
        {
          echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
        }

        $result = mysqli_query($conn, $sqll);

        if (mysqli_num_rows($result) > 0)
        {
          
          // output data of each row
          while($row = mysqli_fetch_assoc($result))
          { 
    ?>
    <?php
          }
        } 
          else
        {
          echo '0 results';
        }
    ?>
      <div class="content-wrapper">
       <div class="container-fluid" >
          <div class="row">
              <div class="col-md-3" style="margin-bottom:10px;">

                <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                  <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                  <div class="card-body">
                    <h5 class="card-title">Controller 1</h5>
                    <div class="row"> 
                            <div [hidden]="control"class="col">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div [hidden]="!control" class="col">
                                <i class="far fa-lightbulb"></i>
                            </div>
                    </div>
                    <p class="card-text"><b>Days Remaining:</b> 100</p>
                    <p class="card-text"><b>Temperature:</b> 100 deg </p>
                    <p class="card-text"><b>Fan:</b> Off </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
                </div>
                </div>

                 <div class="col-md-3" style="margin-bottom:10px;">
                  <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                    <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                    <div class="card-body">
                      <h5 class="card-title">Controller 2</h5>
                      <div class="row"> 
                            <div [hidden]="control"class="col">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div [hidden]="!control" class="col">
                                <i class="far fa-lightbulb"></i>
                            </div>
                    </div>
                    <p class="card-text"><b>Days Remaining:</b> 100</p>
                    <p class="card-text"><b>Temperature:</b> 100 deg </p>
                    <p class="card-text"><b>Fan:</b> Off </p>
                      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                  </div>
                </div>

                 <div class="col-md-3" style="margin-bottom:10px;">
                  <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                    <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                    <div class="card-body">
                      <h5 class="card-title">Controller 3</h5>
                      <div class="row"> 
                            <div [hidden]="control"class="col">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div [hidden]="!control" class="col">
                                <i class="far fa-lightbulb"></i>
                            </div>
                    </div>
                    <p class="card-text"><b>Days Remaining:</b> 100</p>
                    <p class="card-text"><b>Temperature:</b> 100 deg </p>
                    <p class="card-text"><b>Fan:</b> Off </p>
                      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                  </div>
                </div>

                <div class="col-md-3" style="margin-bottom:10px;">
                  <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                    <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                    <div class="card-body">
                      <h5 class="card-title">Controller 4</h5>
                      <div class="row"> 
                            <div [hidden]="control"class="col">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div [hidden]="!control" class="col">
                                <i class="far fa-lightbulb"></i>
                            </div>
                    </div>
                    <p class="card-text"><b>Days Remaining:</b> 100</p>
                    <p class="card-text"><b>Temperature:</b> 100 deg </p>
                    <p class="card-text"><b>Fan:</b> Off </p>
                      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                  </div>
                </div>

                 <div class="col-md-3" style="margin-bottom:10px;">
                  <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                    <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                    <div class="card-body">
                      <h5 class="card-title">Controller 5</h5>
                      <div class="row"> 
                            <div [hidden]="control"class="col">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div [hidden]="!control" class="col">
                                <i class="far fa-lightbulb"></i>
                            </div>
                    </div>
                    <p class="card-text"><b>Days Remaining:</b> 100</p>
                    <p class="card-text"><b>Temperature:</b> 100 deg </p>
                    <p class="card-text"><b>Fan:</b> Off </p>
                      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                  </div>
                </div>

                 <div class="col-md-3" style="margin-bottom:10px;">
                  <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                    <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                    <div class="card-body">
                      <h5 class="card-title">Controller 6</h5>
                      <div class="row"> 
                            <div [hidden]="control"class="col">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div [hidden]="!control" class="col">
                                <i class="far fa-lightbulb"></i>
                            </div>
                    </div>
                    <p class="card-text"><b>Days Remaining:</b> 100</p>
                    <p class="card-text"><b>Temperature:</b> 100 deg </p>
                    <p class="card-text"><b>Fan:</b> Off </p>
                      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                  </div>
                </div>

                 <div class="col-md-3" style="margin-bottom:10px;">
                  <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                    <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                    <div class="card-body">
                      <h5 class="card-title">Controller 7</h5>
                      <div class="row"> 
                            <div [hidden]="control"class="col">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div [hidden]="!control" class="col">
                                <i class="far fa-lightbulb"></i>
                            </div>
                    </div>
                    <p class="card-text"><b>Days Remaining:</b> 100</p>
                    <p class="card-text"><b>Temperature:</b> 100 deg </p>
                    <p class="card-text"><b>Fan:</b> Off </p>
                      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
</div>