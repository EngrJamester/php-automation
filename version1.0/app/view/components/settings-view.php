<?php include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/view/nav/nav-view.php');?>

<div class="content-wrapper">
    <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="settings">Controller Settings</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="change-password">Change User password</a>
            </li>
          </ol>
          <div class="row" >
            <div class="col-md-3" style="margin-bottom:10px;">
                    <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                        <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                        <div class="card-body">
                        <h5 class="card-title">Controller 1</h5>
                
                        <div style="margin:auto;">
                            <script>
                               function myFunction() {
                                    document.getElementById("ThresField").disabled = false;
                                    document.getElementById("saveBtn").disabled = false;
                                    document.getElementById("editBtn").disabled = true;
                                    // document.getElementById('editBtn1').style.visibility = 'hidden';
                                    // document.getElementById("saveBtn1").hidden = false;
                                }
                                function save(){
                                    document.getElementById("ThresField").disabled = true;
                                    document.getElementById("saveBtn").disabled = true;
                                    document.getElementById("editBtn").disabled = false;
                                    // document.getElementById("editBtn1").style.visibility = "visible";
                                    // document.getElementById("saveBtn1").hidden = true;
                                } 
                                
                               
                            </script>
                            <label>Threshold (degrees)</label>
                                <div>
                                    <input type="number" name="points" min="0" max="100" step="1" value="00" id="ThresField" disabled>
                                    <button type="submit"  onclick="myFunction()" id="editBtn" ><span class="fas fa-edit"></span></button>
                                    <button type="submit"  onclick="save()" id="saveBtn" disabled><span class="fas fa-save"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>

            <div class="col-md-3" style="margin-bottom:10px;">
                    <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                        <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                        <div class="card-body">
                        <h5 class="card-title">Controller 2</h5>
                
                        <div style="margin:auto;">
                            <script>
                                function myFunction1() {
                                    document.getElementById("ThresField1").disabled = false;
                                    document.getElementById("saveBtn1").disabled = false;
                                    document.getElementById("editBtn1").disabled = true;
                                    // document.getElementById('editBtn1').style.visibility = 'hidden';
                                    // document.getElementById("saveBtn1").hidden = false;
                                }
                                function save1(){
                                    document.getElementById("ThresField1").disabled = true;
                                    document.getElementById("saveBtn1").disabled = true;
                                    document.getElementById("editBtn1").disabled = false;
                                    // document.getElementById("editBtn1").style.visibility = "visible";
                                    // document.getElementById("saveBtn1").hidden = true;
                                }
                               
                            </script>
                            <label>Threshold (degrees)</label>
                                <div>
                                    <input type="number" name="points" min="0" max="100" step="1" value="00" id="ThresField1" disabled>
                                    <button type="submit"  onclick="myFunction1()" id="editBtn1"><i class="fas fa-edit"></i></button>
                                    <button type="submit"  onclick="save1()" id="saveBtn1" disabled><span class="fas fa-save"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>

            <div class="col-md-3" style="margin-bottom:10px;">
                    <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                        <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                        <div class="card-body">
                        <h5 class="card-title">Controller 3</h5>
                
                        <div style="margin:auto;">
                            <script>
                               function myFunction2() {
                                    document.getElementById("ThresField2").disabled = false;
                                    document.getElementById("saveBtn2").disabled = false;
                                    document.getElementById("editBtn2").disabled = true;
                                    // document.getElementById('editBtn1').style.visibility = 'hidden';
                                    // document.getElementById("saveBtn1").hidden = false;
                                }
                                function save2(){
                                    document.getElementById("ThresField2").disabled = true;
                                    document.getElementById("saveBtn2").disabled = true;
                                    document.getElementById("editBtn2").disabled = false;
                                    // document.getElementById("editBtn1").style.visibility = "visible";
                                    // document.getElementById("saveBtn1").hidden = true;
                                }
                            </script>
                            <label>Threshold (degrees)</label>
                                <div>
                                    <input type="number" name="points" min="0" max="100" step="1" value="00" id="ThresField2" disabled>
                                    <button type="submit"  onclick="myFunction2()" id="editBtn2"><i class="fas fa-edit"></i></button>
                                    <button type="submit"  onclick="save2()" id="saveBtn2" disabled><span class="fas fa-save"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>

            <div class="col-md-3" style="margin-bottom:10px;">
                    <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                        <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                        <div class="card-body">
                        <h5 class="card-title">Controller 4</h5>
                
                        <div style="margin:auto;">
                            <script>
                                function myFunction3() {
                                    document.getElementById("ThresField3").disabled = false;
                                    document.getElementById("saveBtn3").disabled = false;
                                    document.getElementById("editBtn3").disabled = true;
                                    // document.getElementById('editBtn1').style.visibility = 'hidden';
                                    // document.getElementById("saveBtn1").hidden = false;
                                }
                                function save3(){
                                    document.getElementById("ThresField3").disabled = true;
                                    document.getElementById("saveBtn3").disabled = true;
                                    document.getElementById("editBtn3").disabled = false;
                                    // document.getElementById("editBtn1").style.visibility = "visible";
                                    // document.getElementById("saveBtn1").hidden = true;
                                
                                }
                            </script>
                            <label>Threshold (degrees)</label>
                                <div>
                                    <input type="number" name="points" min="0" max="100" step="1" value="00" id="ThresField3" disabled>
                                    <button type="submit"  onclick="myFunction3()" id="editBtn3"><i class="fas fa-edit"></i></button>
                                    <button type="submit"  onclick="save3()" id="saveBtn3" disabled><span class="fas fa-save"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>

            <div class="col-md-3" style="margin-bottom:10px;">
                    <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                        <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                        <div class="card-body">
                        <h5 class="card-title">Controller 5</h5>
                
                        <div style="margin:auto;">
                            <script>
                                function myFunction4() {
                                    document.getElementById("ThresField4").disabled = false;
                                    document.getElementById("saveBtn4").disabled = false;
                                    document.getElementById("editBtn4").disabled = true;
                                    // document.getElementById('editBtn1').style.visibility = 'hidden';
                                    // document.getElementById("saveBtn1").hidden = false;
                                }
                                function save4(){
                                    document.getElementById("ThresField4").disabled = true;
                                    document.getElementById("saveBtn4").disabled = true;
                                    document.getElementById("editBtn4").disabled = false;
                                    // document.getElementById("editBtn1").style.visibility = "visible";
                                    // document.getElementById("saveBtn1").hidden = true;
                                } 
                            </script>
                            <label>Threshold (degrees)</label>
                            <div>
                            <input type="number" name="points" min="0" max="100" step="1" value="00" id="ThresField4" disabled>
                            <button type="submit"  onclick="myFunction4()" id="editBtn4"><i class="fas fa-edit"></i></button>
                            <button type="submit"  onclick="save4()" id="saveBtn4" disabled><span class="fas fa-save"></span></button>
                            </div>
                            </div>
                        </div>
                    </div>
                    
            </div>

            <div class="col-md-3" style="margin-bottom:10px;">
                    <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                        <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                        <div class="card-body">
                        <h5 class="card-title">Controller 6</h5>
                
                        <div style="margin:auto;">
                            <script>
                                function myFunction5() {
                                    document.getElementById("ThresField5").disabled = false;
                                    document.getElementById("saveBtn5").disabled = false;
                                    document.getElementById("editBtn5").disabled = true;
                                    // document.getElementById('editBtn1').style.visibility = 'hidden';
                                    // document.getElementById("saveBtn1").hidden = false;
                                }
                                function save5(){
                                    document.getElementById("ThresField5").disabled = true;
                                    document.getElementById("saveBtn5").disabled = true;
                                    document.getElementById("editBtn5").disabled = false;
                                    // document.getElementById("editBtn1").style.visibility = "visible";
                                    // document.getElementById("saveBtn1").hidden = true;
                                } 
                            </script>
                            <label>Threshold (degrees)</label>
                                <div>
                                    <input type="number" name="points" min="0" max="100" step="1" value="00" id="ThresField5" disabled>
                                    <button type="submit"  onclick="myFunction5()" id="editBtn5"><i class="fas fa-edit"></i></button>
                                    <button type="submit"  onclick="save5()" id="saveBtn5" disabled><span class="fas fa-save"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>

            <div class="col-md-3" style="margin-bottom:10px;">
                    <div class="card" style="max-width: 17rem;margin-top:10px;margin:auto;">
                        <i class="fas fa-spa" style="margin:auto;font-size:6rem;margin-top:5px;"></i>
                        <div class="card-body">
                        <h5 class="card-title">Controller 7</h5>
                
                        <div style="margin:auto;">
                            <script>
                               function myFunction6() {
                                    document.getElementById("ThresField6").disabled = false;
                                    document.getElementById("saveBtn6").disabled = false;
                                    document.getElementById("editBtn6").disabled = true;
                                    // document.getElementById('editBtn1').style.visibility = 'hidden';
                                    // document.getElementById("saveBtn1").hidden = false;
                                }
                                function save6(){
                                    document.getElementById("ThresField6").disabled = true;
                                    document.getElementById("saveBtn6").disabled = true;
                                    document.getElementById("editBtn6").disabled = false;
                                    // document.getElementById("editBtn1").style.visibility = "visible";
                                    // document.getElementById("saveBtn1").hidden = true;
                                } 
                            </script>
                            <label>Threshold (degrees)</label>
                            <div>
                                <input type="number" name="points" min="0" max="100" step="1" value="00" id="ThresField6" disabled>
                                <button type="submit"  onclick="myFunction6()" id="editBtn6"><i class="fas fa-edit"></i></button>
                            <button type="submit"  onclick="save6()" id="saveBtn6" disabled><span class="fas fa-save"></span></button>
                            </div>
                            
                            
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
</div>

   

