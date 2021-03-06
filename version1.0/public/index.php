<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Organic Extractor Machine</title>
  <!--BootStrap-Toggle-->
  <link href="../styles/toggle-button/style/bootstrap-toggle.css" rel="stylesheet">
  <link href="../styles/toggle-button/doc/stylesheet.css" rel="stylesheet">
  <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/styles/github.min.css" rel="stylesheet" > -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <!-- Bootstrap core CSS-->
  <link href="../styles/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../styles/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../styles/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../styles/css/sb-admin.css" rel="stylesheet">
  <!--fontawesome-->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="../styles/fontawesome-free-5.5.0-web/css/all.css" >
  <!--ToggleSwitch-->
  <link rel="stylesheet" href="../styles/toggle-button/style/toggleSwitch.css">

  <!-- style="
    background-image: url('../images/android.jpg');
    background-repeat: no-repeat;
    background-size: 100% 820px;" -->
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" >
    <?php 
            $status = "";
            include('../app/GPIO/light.php');
            include('../app/common/status-modal.php');
            require_once('../routes.php');
            include('../app/classes/tempandhumidity.php');
            // include('../app/classes/load.php');

            spl_autoload_register(function($class_name){
            
                //  if (file_exists('../app/controller/'.$class_name.'php')){
                //     require_once(__DIR__.'../app/controller/'.$class_name.'php');
                // }

            });
           
 
    ?>
    
    <!-- Bootstrap core JavaScript-->
    <script src="../styles/vendor/jquery/jquery.min.js"></script>
    <script src="../styles/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../styles/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <!-- <script src="../styles/vendor/chart.js/Chart.min.js"></script> -->
    <script src="../styles/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../styles/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../styles/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../styles/js/sb-admin-datatables.min.js"></script>
    <!-- <script src="../styles/js/sb-admin-charts.min.js"></script> -->
    <!--p5.js Library-->
    <!-- <script src="../p5.min.js"></script>
    <script src="../addons/p5.dom.min.js"></script>
    <script src="../addons/p5.sound.min.js"></script>
    <script src="../addons/timer.js"></script> -->
    <!--momnet.js-->
    <script src="../../node_modules/moment/min/moment.min.js"></script>
    <script src="../../node_modules/moment/moment.js"></script>
    <!--bootStrap Toggle-->
    <script src="../styles/toggle-button/doc/script.js"></script>
    <script src="../styles/toggle-button/js/bootstrap-toggle.js"></script>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/highlight.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <script src="../styles/"></script>
    <!--Timer Script-->
    <!-- <script src="../javascript/timer.js"></script> -->
    <script type="text/javascript">

            var timer;
            var timer1;
            
            var Box1_check_Timeleft;
           
            
            <?php include('../app/classes/load.php');?>
            
            // if(checkLoginStatus == 1){ }
                    
                    function UpdateTempAndHumidity()
                    {

                        var obj = new Object();
                        obj.getTempAndHumidity = 'ok';

                        $.ajax({
                            url: '../app/classes/tempandhumidity.php',
                            type: 'POST',
                            data: obj,
                            dataType: 'json',
                            success : function(data){
                                
                                $.each(data.data,function(index,temp){
                                    if(parseInt(temp.thres) <= parseInt(temp.temp))
                                    {
                                        if(parseInt(temp.id)==1 || parseInt(temp.id)==2)
                                        { $('#fan'+1).text('Fan: '+'On');$('#fan'+2).text('Fan: '+'On'); }
                                        if(parseInt(temp.id)==3 || parseInt(temp.id)==4)
                                        { $('#fan'+3).text('Fan: '+'On');$('#fan'+4).text('Fan: '+'On'); }
                                        if(parseInt(temp.id)==5 || parseInt(temp.id)==6 || parseInt(temp.id)==7)
                                        { $('#fan'+5).text('Fan: '+'On');$('#fan'+6).text('Fan: '+'On');$('#fan'+7).text('Fan: '+'On'); }
                                    }else {
                                        if(parseInt(temp.id)==1 || parseInt(temp.id)==2)
                                        { $('#fan'+1).text('Fan: '+'Off');$('#fan'+2).text('Fan: '+'Off'); }
                                        if(parseInt(temp.id)==3 || parseInt(temp.id)==4)
                                        { $('#fan'+3).text('Fan: '+'Off');$('#fan'+4).text('Fan: '+'Off'); }
                                        if(parseInt(temp.id)==5 || parseInt(temp.id)==6 || parseInt(temp.id)==7)
                                        { $('#fan'+5).text('Fan: '+'Off');$('#fan'+6).text('Fan: '+'Off');$('#fan'+7).text('Fan: '+'Off'); }
                                    }
                                    $('#temp'+temp.id).text('Temperature: '+temp.temp).append('&deg;C');
                                    $('#humid'+temp.id).text('Humidity: '+temp.humid+'%');
                                    
                                });
                            },
                            
                            error: function (request, textStatus, errorThrown) {
                                console.log("TempAndHumid AJAX error: " + request.statusText);
                            
                            }
                        });

                        
                    }

                    //Timer for the Humidity and temperature
                    timer_def = new _timerDefault(function(time){
                        UpdateTempAndHumidity();
                        if(time == 0){
                            timer_def.stop();
                        }
                    });
                    timer_def.reset(1);
                    timer_def.mode(1);
                    timer_def.start(1000);
                   
                    //check Box controller box1
                    var DayDiff     = <?php echo 7-$c1_daydiff; ?>; 
                    var controller  = <?php echo $c1_timerVal; ?>;
                    var obj         = new Object();
                    timer = new _timer(function (time) {
                            if (time == 0) {
								Box1_check_Timeleft = 0;
                                obj = "off-controller1";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 1 Turn Green LED');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                }); 

                                //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                                // alert('Green Light');
                                        console.log('Box 1 turn Green LED');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                timer.stop();
                                alert('Box 1 is harvest ready!');
                                $('#controller').prop('checked',false);

                                //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 1 Turn on Buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                                
                                $('#contStatus1').text('Status: '+'Start');
                                
                                // location.reload();
                            }
                    });
                    if(DayDiff >= 0){
                        
<<<<<<< HEAD
                        if(controller !== 0){
							 obj = "on-controller1-strt";
									$.ajax({
										type: "GET",
										url: '../app/GPIO/light.php',
										data: obj,
										success: function (newdata) {
													// alert('Green Light');
													console.log('Box 1 Turn On Green if equal to 0');
										},
										error: function (request, textStatus, errorThrown) {
											// bootbox.alert("AJAX error: " + request.statusText);
											console.log("AJAX error: " + request.statusText);
										}
									}); 
							$('#controller').prop('checked',true);
							$('#contStatus1').text('Status: '+'On going');
							timer.reset(controller);
							timer.mode(0);
							timer.start(1000);
						}else{
							console.log('Box 1 Load if 0');
							obj = "off-controller1";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                                // alert('Green Light');
                                                console.log('Box 1 Turn On Green if equal to 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                }); 
                                
                                 //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                                // alert('Green Light');
                                        console.log('Box 1 turn Green LED');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                
                                alert('Box 1 is harvest ready!');
                                

                                //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 1 Turn on Buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
						}
=======
                        obj = "on-controller1";

                            $.ajax({
                                type: "GET",
                                url: '../app/GPIO/light.php',
                                data: obj,
                                success: function (newdata) {
                                            // alert('Green Light');
                                            console.log('Box 1 Turn On Green if equal to 0');
                                },
                                error: function (request, textStatus, errorThrown) {
                                    // bootbox.alert("AJAX error: " + request.statusText);
                                    console.log("AJAX error: " + request.statusText);
                                }
                            }); 
                        $('#controller').prop('checked',true);
                        $('#contStatus1').text('Status: '+'On going');
                        timer.reset(controller);
                        timer.mode(0);
                        timer.start(1000);
>>>>>>> 1b045a8da52286972e3422820517edf371bfb79e
                    }else{
                        console.log('Box 1 Load if 0');
                        obj = "off-controller1";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                                // alert('Green Light');
                                                console.log('Box 1 Turn On Green if equal to 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                }); 
                    }

                    //check Box controller2
                    var c2_DayDiff = <?php echo 7 - $c2_daydiff; ?>; 
                    var c2_controller = <?php echo $c2_timerVal; ?>;
                    timer1 = new _timer1(function (time) {
                            if (time == 0) {
                                obj = "off-controller2";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                            console.log('Box 2 Turn On Green Light');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                         console.log('Box 2 Turn On Buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                timer1.stop();
                                alert('Box 2 is harvest ready!');
                                $('#controller1').prop('checked',false);
                                
                                 //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 2 turn off buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                $('#contStatus2').text('Status: '+'Start');
                                
                                //location.reload();
                            }
                    });
                    if(c2_DayDiff >= 0){
						if(c2_controller !== 0){
							obj = "on-controller2-strt";
									$.ajax({
										type: "GET",
										url: '../app/GPIO/light.php',
										data: obj,
										success: function (newdata) {
													// alert('Green Light');
													console.log('Box 2 Turn On Green if equal to 0');
										},
										error: function (request, textStatus, errorThrown) {
											// bootbox.alert("AJAX error: " + request.statusText);
											console.log("AJAX error: " + request.statusText);
										}
									}); 
							$('#controller1').prop('checked',true);
							$('#contStatus2').text('Status: '+'On going');
							timer1.reset(c2_controller);
							timer1.mode(0);
							timer1.start(1000);
                       }else{
						   // alert('Box 2 is harvest ready!');
							console.log('Box 2 Load if 0');
							obj = "off-controller2";
							$.ajax({
								type: "GET",
								url: '../app/GPIO/light.php',
								data: obj,
								success: function (newdata) {
									console.log('Box 2 Turn Green LED when 0');
								},
								error: function (request, textStatus, errorThrown) {
									// bootbox.alert("AJAX error: " + request.statusText);
										console.log("AJAX error: " + request.statusText);
								}
							});
							
							//Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                         console.log('Box 2 Turn On Buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                
                                alert('Box 2 is harvest ready!');
                                
                                
                                 //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 2 turn off buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });
						}
                    }else{
                       
                        // alert('Box 2 is harvest ready!');
                        console.log('Box 2 Load if 0');
                        //$('#controller1').prop('checked',false);
                        obj = "off-controller2";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 2 Turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                    }

                    //check Box controller3
                    var c3_DayDiff = <?php echo 7-$c3_daydiff; ?>; 
                    var c3_controller = <?php echo $c3_timerVal; ?>;
                    timer2 = new _timer2(function (time) { 
                            if (time == 0) {
                                //Turn Off Led
                                obj = "off-controller3";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 3 turn Red Led');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 3 Turn Buzzer On');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                timer2.stop();
                                alert('Box 3 ready to be harvest !');
                                $('#controller2').prop('checked',false);
                                
                                //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 3 turn off buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                $('#contStatus3').text('Status: '+'Start');
                                
                                //location.reload();
                            }
                    });
                    if(c3_DayDiff >= 0){
						if(c3_controller !== 0){
							obj = "on-controller3-strt";
							$.ajax({
								type: "GET",
								url: '../app/GPIO/light.php',
								data: obj,
								success: function (newdata) {
								// alert('Green Light');
									console.log('Box 3 Turn On Green if equal to 0');
								},
								error: function (request, textStatus, errorThrown) {
										// bootbox.alert("AJAX error: " + request.statusText);
									console.log("AJAX error: " + request.statusText);
								}
							}); 
							$('#controller2').prop('checked',true);
							$('#contStatus3').text('Status: '+'On going');
							timer2.reset(c3_controller);
							timer2.mode(0);
							timer2.start(1000);
						}else{
							// alert('Box 3 ready to be harvest !');
							console.log('Box 3 Load if 0');
							obj = "off-controller3";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                                // alert('Green Light');
                                        console.log('Bo 3 Turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                                
                                
                                 //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 3 Turn Buzzer On');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                
                                alert('Box 3 ready to be harvest !');
                                
                                
                                //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 3 turn off buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });
						}
                    }else{
                        // alert('Box 3 ready to be harvest !');
                        console.log('Box 3 Load if 0');
                        obj = "off-controller3";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                                // alert('Green Light');
                                        console.log('Bo 3 Turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                    }

                    //Check Box Controller 4
                    var c4_DayDiff = <?php echo 7-$c4_daydiff; ?>; 
                    var c4_controller = <?php echo $c4_timerVal; ?>;
                    timer3 = new _timer3(function (time) {                                
                            if (time == 0) {

                                //Turn LEd Off
                                obj = "off-controller4";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 4 Turn On Green Light');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 4 Turn Buzzer On');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                timer3.stop();
                                alert('Box 4 ready to be harvest!');
                                $('#controller3').prop('checked',false);
                               
                                //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 4 Turn Off Buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                $('#contStatus4').text('Status: '+'Start');
                                
                                //location.reload();
                            }
                    });
                    if(c4_DayDiff >= 0){
						if(c4_controller !== 0){
							obj = "on-controller4-strt";
									$.ajax({
										type: "GET",
										url: '../app/GPIO/light.php',
										data: obj,
										success: function (newdata) {
													// alert('Green Light');
													console.log('Box 4 Turn On Green if equal to 0');
										},
										error: function (request, textStatus, errorThrown) {
											// bootbox.alert("AJAX error: " + request.statusText);
											console.log("AJAX error: " + request.statusText);
										}
									}); 
							$('#controller3').prop('checked',true);
							$('#contStatus4').text('Status: '+'On going');
							timer3.reset(c4_controller);
							timer3.mode(0);
							timer3.start(1000);
						}else{
							 
							console.log('Box 4 Load if 0');
							//Turn LEd Green
							obj = "off-controller4";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 4 Turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });
                                
                                //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 4 Turn Buzzer On');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });

                                
                                alert('Box 4 ready to be harvest!');
                                
                               
                                //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 4 Turn Off Buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });
						}	
                    }else{     
                        // alert('Box 4 ready to be harvest !');
                        console.log('Box 4 Load if 0');
                        //Turn LEd Green
                        obj = "off-controller4";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 4 Turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        bootbox.alert("AJAX error: " + request.statusText);
                                    }
                                });
                    }

                    //Check Box Controller 5
                    var c5_DayDiff = <?php echo 7-$c5_daydiff; ?>; 
                    var c5_controller = <?php echo $c5_timerVal; ?>;
                    timer4 = new _timer4(function (time) {
                            if (time == 0) {

                                //Turn LED off
                                obj = "off-controller5";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 5 Led Green Execution was OK');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 5 Turn On Buzzer Execution was OK');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                timer4.stop();                              
                                alert('Box 5 ready to be harvest !');
                                $('#controller4').prop('checked',false);
                               
                               //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 5 Stop Buzzer Execution was OK');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                $('#contStatus5').text('Status: '+'Start');
                                
                                //location.reload();
                            }
                    });
                    if(c5_DayDiff >= 0){
						if(c5_controller !== 0){
							obj = "on-controller5-strt";
									$.ajax({
										type: "GET",
										url: '../app/GPIO/light.php',
										data: obj,
										success: function (newdata) {
													// alert('Green Light');
													console.log('Box 5 Turn On Green if equal to 0');
										},
										error: function (request, textStatus, errorThrown) {
											// bootbox.alert("AJAX error: " + request.statusText);
											console.log("AJAX error: " + request.statusText);
										}
									}); 
							$('#controller4').prop('checked',true);
							$('#contStatus5').text('Status: '+'On going');
							timer4.reset(c5_controller);
							timer4.mode(0);
							timer4.start(1000);
						}else{
							 // alert('Box 5 ready to be harvest !');
							console.log('Box 5 Load if 0');
							//Turn LED Green
                                obj = "off-controller5";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 5 turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                             //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 5 Turn On Buzzer Execution was OK');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                                    
                                alert('Box 5 ready to be harvest !');
                                
                               
                               //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 5 Stop Buzzer Execution was OK');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
						}
                    }else{
                        // alert('Box 5 ready to be harvest !');
                        console.log('Box 5 Load if 0');
                        //Turn LED Green
                                obj = "off-controller5";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 5 turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                    }

                    //Check Controller 6
                    var c6_DayDiff = <?php echo 7-$c6_daydiff; ?>; 
                    var c6_controller = <?php echo $c6_timerVal; ?>;
                    timer5 = new _timer5(function (time) {
                            if (time == 0) {
                                //Turn LED Off
                                obj = "off-controller6";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 6 turn Green LED');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 6 Turn On Buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                timer5.stop();
                                alert('Box 6 ready to be harvest !');                              
                                $('#controller5').prop('checked',false);
                               
                                 //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 6 Turn Off Buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                                $('#contStatus6').text('Status: '+'Start');
                                
                                // alert('Code Expired');
                                //location.reload();
                            }
                        });
                    if(c6_DayDiff >= 0){
						if(c6_controller !== 0){
							obj = "on-controller6-strt";
									$.ajax({
										type: "GET",
										url: '../app/GPIO/light.php',
										data: obj,
										success: function (newdata) {
													// alert('Green Light');
													console.log('Box 6 Turn On Green if equal to 0');
										},
										error: function (request, textStatus, errorThrown) {
											// bootbox.alert("AJAX error: " + request.statusText);
											console.log("AJAX error: " + request.statusText);
										}
									}); 
							$('#controller5').prop('checked',true);
							$('#contStatus6').text('Status: '+'On going');
							timer5.reset(c5_controller);
							timer5.mode(0);
							timer5.start(1000);
						}else{
							console.log('Box 6 Load if 0');
							//Turn LED Off
							obj = "off-controller6";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                                // alert('Green Light');
                                        console.log('Box 6 turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                             //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 6 Turn On Buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                alert('Box 6 ready to be harvest !');                              
                                
                                 //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 6 Turn Off Buzzer');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
						}
                    }else{
                        // alert('Box 6 ready to be harvest !');
                        console.log('Box 6 Load if 0');
                        //Turn LED Off
                        obj = "off-controller6";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                                // alert('Green Light');
                                        console.log('Box 6 turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                    }

                    // Check Controller 7
                    var c7_DayDiff = <?php echo 7-$c7_daydiff; ?>; 
                    var c7_controller = <?php echo $c7_timerVal; ?>;
                    timer6 = new _timer6(function (time) {
                            if (time == 0) {
                                //Turn Led off
                                obj = "off-controller7";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 7 Turn On Green LED');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                 //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 7 turn Buzzer On');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                timer6.stop();
                                alert('Box 7 ready to be harvest !');
                                $('#controller6').prop('checked',false);
                                
                                //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 7 Turn Buzzer Off');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                                $('#contStatus7').text('Status: '+'Start');
                                
                                //location.reload();
                            }
                        });
                    if(c7_DayDiff >= 0){
						if(c7_controller !== 0){
							obj = "on-controller7-strt";
									$.ajax({
										type: "GET",
										url: '../app/GPIO/light.php',
										data: obj,
										success: function (newdata) {
													// alert('Green Light');
													console.log('Box 7 Turn On Green if equal to 0');
										},
										error: function (request, textStatus, errorThrown) {
											// bootbox.alert("AJAX error: " + request.statusText);
											console.log("AJAX error: " + request.statusText);
										}
									}); 
							$('#controller6').prop('checked',true);
							$('#contStatus7').text('Status: '+'On going');
							timer6.reset(c7_controller);
							timer6.mode(0);
							timer6.start(1000);
						}else{
							// alert('Box 7 ready to be harvest !');
							console.log('Box 7 Load if 0');
							 //Turn Led off
							 obj = "off-controller7";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 7 Turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                              
                                //Turn On Buzzer
                                obj = "on-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 7 turn Buzzer On');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });

                                
                                alert('Box 7 ready to be harvest !');
                       
                                
                                //Turn Off Buzzer
                                obj = "off-buzz";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/buzzer.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 7 Turn Buzzer Off');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
						}
                    }else{
                        // alert('Box 7 ready to be harvest !');
                        console.log('Box 7 Load if 0');
                         //Turn Led off
                         obj = "off-controller7";
                                $.ajax({
                                    type: "GET",
                                    url: '../app/GPIO/light.php',
                                    data: obj,
                                    success: function (newdata) {
                                        console.log('Box 7 Turn Green LED when 0');
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        // bootbox.alert("AJAX error: " + request.statusText);
                                        console.log("AJAX error: " + request.statusText);
                                    }
                                });
                    }
                
                    
                    $("#controller").change(function(){

                        var obj = new Object();
                        if($('#controller').prop('checked')){
                            obj = "on-controller1";
                            console.log('Box 1 was checked');
                        }
                        else{
                            obj = "off-controller1";
                            console.log('Box 1 was checked');
                                    // alert('On');
                        }

                        $.ajax({
                            type: "GET",
                            url: '../app/GPIO/light.php',
                            data: obj,
                            success: function (newdata) {
                                console.log('Box 1 sent signal to light.php and savetimer.php');
                            },
                            error: function (request, textStatus, errorThrown) {
                                // bootbox.alert("AJAX error: " + request.statusText);
                                console.log("Box 1AJAX error: " + request.statusText);
                            }
                        });
            
                    
                        if($(this).prop('checked') == true)
                        {
                            console.log('Box 1 was started');
                            //day = 86400(s)
                            //7 days = 604800
                            $('#contStatus1').text('Status: '+'On going');
                            timer.reset(604800);
                            timer.mode(0);
                            timer.start(1000);
                        }else{
                            $('#contStatus1').text('Status: '+'Start');
                            console.log('this should stop');
                            // timer.reset(604800);
                            // timer.mode(0);
                            
                            timer.stop();
                            
                        }
                        
                    });

                    $("#controller1").change(function(){
                        var obj = new Object();
                        if($('#controller1').prop('checked')){
                                    obj = "on-controller2";
                                    // alert('On'); 
                        }
                        else{
                                    obj = "off-controller2";
                                    // alert('On');
                        }

                        $.ajax({
                            type: "GET",
                            url: '../app/GPIO/light.php',
                            data: obj,
                            success: function (newdata) {
                                        // alert('FUCK YEAH');
                            },
                            error: function (request, textStatus, errorThrown) {
                                bootbox.alert("AJAX error: " + request.statusText);
                            }
                        });

                        if($(this).prop('checked') == true)
                        {
                            $('#contStatus2').text('Status: '+'On going');
                            timer1.reset(604800);
                            timer1.mode(0);
                            timer1.start(1000);
                        }else{
                            console.log('timer1 stop');
                            $('#contStatus2').text('Status: '+'Start');
                            timer1.stop();
                        }
                    });

                    $("#controller2").change(function(){
                        var obj = new Object();
                        if($('#controller2').prop('checked')){
                                    obj = "on-controller3";
                                    // alert('On'); 
                        }
                        else{
                                    obj = "off-controller3";
                                    // alert('On');
                        }

                        $.ajax({
                            type: "GET",
                            url: '../app/GPIO/light.php',
                            data: obj,
                            success: function (newdata) {
                                        // alert('FUCK YEAH');
                            },
                            error: function (request, textStatus, errorThrown) {
                                bootbox.alert("AJAX error: " + request.statusText);
                            }
                        });
                        if($(this).prop('checked') == true)
                        {
                        
                            $('#contStatus3').text('Status: '+'On going');
                            timer2.reset(604800);
                            timer2.mode(0);
                            timer2.start(1000);
                        }else{
                            $('#contStatus3').text('Status: '+'Start');
                            timer2.stop();
                        }
                    });

                    $("#controller3").change(function(){
                        var obj = new Object();
                        if($('#controller3').prop('checked')){
                                    obj = "on-controller4";
                                    // alert('On'); 
                        }
                        else{
                                    obj = "off-controller4";
                                    // alert('On');
                        }

                        $.ajax({
                            type: "GET",
                            url: '../app/GPIO/light.php',
                            data: obj,
                            success: function (newdata) {
                                        // alert('FUCK YEAH');
                            },
                            error: function (request, textStatus, errorThrown) {
                                bootbox.alert("AJAX error: " + request.statusText);
                            }
                        });
                        if($(this).prop('checked') == true)
                        {
                            $('#contStatus4').text('Status: '+'On going');
                            timer3.reset(604800);
                            timer3.mode(0);
                            timer3.start(1000);
                        }else{
                            
                            timer3.stop();
                            $('#contStatus4').text('Status: '+'Start');
                        }
                    });

                    $("#controller4").change(function(){
                        var obj = new Object();
                        if($('#controller4').prop('checked')){
                                    obj = "on-controller5";
                                    // alert('On'); 
                        }
                        else{
                                    obj = "off-controller5";
                                    // alert('On');
                        }

                        $.ajax({
                            type: "GET",
                            url: '../app/GPIO/light.php',
                            data: obj,
                            success: function (newdata) {
                                        // alert('FUCK YEAH');
                            },
                            error: function (request, textStatus, errorThrown) {
                                bootbox.alert("AJAX error: " + request.statusText);
                            }
                        });
                        if($(this).prop('checked') == true)
                        {
                            $('#contStatus5').text('Status: '+'On going');
                            timer4.reset(604800);
                            timer4.mode(0);
                            timer4.start(1000);
                        }else{
                            timer4.stop();
                            $('#contStatus5').text('Status: '+'Start');
                        }
                    });

                    $("#controller5").change(function(){
                        var obj = new Object();
                        if($('#controller5').prop('checked')){
                                    obj = "on-controller6";
                                    // alert('On'); 
                        }
                        else{
                                    obj = "off-controller6";
                                    // alert('On');
                        }

                        $.ajax({
                            type: "GET",
                            url: '../app/GPIO/light.php',
                            data: obj,
                            success: function (newdata) {
                                        // alert('FUCK YEAH');
                            },
                            error: function (request, textStatus, errorThrown) {
                                bootbox.alert("AJAX error: " + request.statusText);
                            }
                        });
                        if($(this).prop('checked') == true)
                        {
                        
                            $('#contStatus6').text('Status: '+'On going');
                            timer5.reset(604800);
                            timer5.mode(0);
                            timer5.start(1000);
                        }else{
                            timer5.stop();
                            $('#contStatus6').text('Status: '+'Start');
                        }
                    });

                    $("#controller6").change(function(){
                        var obj = new Object();
                        if($('#controller6').prop('checked')){
                                    obj = "on-controller7";
                                    // alert('On'); 
                        }
                        else{
                                    obj = "off-controller7";
                                    // alert('On');
                        }

                        $.ajax({
                            type: "GET",
                            url: '../app/GPIO/light.php',
                            data: obj,
                            success: function (newdata) {
                                        // alert('FUCK YEAH');
                            },
                            error: function (request, textStatus, errorThrown) {
                                bootbox.alert("AJAX error: " + request.statusText);
                            }
                        });
                        if($(this).prop('checked') == true)
                        {
                            $('#contStatus7').text('Status: '+'On going');
                            timer6.reset(604800);
                            timer6.mode(0);
                            timer6.start(1000);
                        }else{
                            timer6.stop();
                            $('#contStatus7').text('Status: '+'Start');
                        }
                    });

                    function _timer(callback) {
                            var time = 0;     //  The default time of the timer
                            var mode = 1;     //    Mode: count up or count down
                            var status = 0;    //    Status: timer is running or stoped
                            var timer_id;    //    This is used by setInterval function

                            // this will start the timer ex. start the timer with 1 second interval timer.start(1000) 
                            this.start = function (interval) {
                                interval = (typeof (interval) !== 'undefined') ? interval : 1000;

                                if (status == 0) {
                                    status = 1;
                                    timer_id = setInterval(function () {
                                        switch (mode) {
                                            default:
                                                if (time) {
                                                    time--;
                                                    generateTime();
                                        
                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;

                                            case 1:
                                                if (time < 86400) {
                                                    time++;
                                                    generateTime();

                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;
                                        }
                                    }, interval);
                                }
                            }

                            //  Same as the name, this will stop or pause the timer ex. timer.stop()
                            this.stop = function () {
                                if (status == 1) {
                                    console.log('this was stopped');
                                    status = 0;
                                    clearInterval(timer_id);
                                }
                            }

                            // Reset the timer to zero or reset it to your own custom time ex. reset to zero second timer.reset(0)
                            this.reset = function (sec) {
                                sec = (typeof (sec) !== 'undefined') ? sec : 0;
                                time = sec;
                                generateTime(time);
                            }

                            // Change the mode of the timer, count-up (1) or countdown (0)
                            this.mode = function (tmode) {
                                mode = tmode;
                            }

                            // This methode return the current value of the timer
                            this.getTime = function () {
                                return time;
                            }

                            // This methode return the current mode of the timer count-up (1) or countdown (0)
                            this.getMode = function () {
                                return mode;
                            }

                            // This methode return the status of the timer running (1) or stoped (1)
                            this.getStatus
                            {
                                return status;
                            }

                            // This methode will render the time variable to hour:minute:second format
                            function generateTime() {


                                var second = time % 60;
                                var minute = Math.floor(time / 60) % 60;
                                var hour = Math.floor(time / 3600) % 60;
                                var days = Math.floor(time/86400) ;

                                second = (second < 10) ? '0' + second : second;
                                minute = (minute < 10) ? '0' + minute : minute;
                                hour = (hour < 10) ? '0' + hour : hour;
                                hour = (hour > 24) ? Math.floor(hour/2) : hour;
                                days = (days < 10) ? '0' + days : days;
                                
                                // console.log('Box 1'+hour);
                                
                                //$('#timer').html('<span><strong> Remaining Days :  </strong >' +days+'day(s):'+hour+'hr(s)</span >');
                                // $('#timer').html('<span><strong> Remaining Days :  </strong >' +days+'day(s)'+hour+'hr(s):'+minute+'min(s)'+second+'sec(s)</span >');
                                $('#timer').html('<span><strong> Remaining Days :  </strong >' +days+'day(s):'+hour+'hr(s):'+minute+'min(s)</span >');
                                //$('#timer').html('<span><strong> No of Day(s) Left:  </strong >' +days+'day(s)</span >');
                            }
                            
                    }

                    function _timer1(callback) {
                            var time = 0;     //  The default time of the timer
                            var mode = 1;     //    Mode: count up or count down
                            var status = 0;    //    Status: timer is running or stoped
                            var timer_id;    //    This is used by setInterval function

                            // this will start the timer ex. start the timer with 1 second interval timer.start(1000) 
                            this.start = function (interval) {
                                interval = (typeof (interval) !== 'undefined') ? interval : 1000;

                                if (status == 0) {
                                    status = 1;
                                    timer_id = setInterval(function () {
                                        switch (mode) {
                                            default:
                                                if (time) {
                                                    time--;
                                                    generateTime2();
                                                    
                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;

                                            case 1:
                                                if (time < 86400) {
                                                    time++;
                                                    generateTime2();

                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;
                                        }
                                    }, interval);
                                }
                            }

                            //  Same as the name, this will stop or pause the timer ex. timer.stop()
                            this.stop = function () {
                                if (status == 1) {
                                    status = 0;
                                    clearInterval(timer_id);
                                }
                            }

                            // Reset the timer to zero or reset it to your own custom time ex. reset to zero second timer.reset(0)
                            this.reset = function (sec) {
                                sec = (typeof (sec) !== 'undefined') ? sec : 0;
                                time = sec;
                                generateTime2(time);
                            }

                            // Change the mode of the timer, count-up (1) or countdown (0)
                            this.mode = function (tmode) {
                                mode = tmode;
                            }

                            // This methode return the current value of the timer
                            this.getTime = function () {
                                return time;
                            }

                            // This methode return the current mode of the timer count-up (1) or countdown (0)
                            this.getMode = function () {
                                return mode;
                            }

                            // This methode return the status of the timer running (1) or stoped (1)
                            this.getStatus
                            {
                                return status;
                            }

                            // This methode will render the time variable to hour:minute:second format
                            function generateTime2() {
                                var second = time % 60;
                                var minute = Math.floor(time / 60) % 60;
                                var hour = Math.floor(time / 3600) % 60;
                                var days = Math.floor(time/86400) ;

                                second = (second < 10) ? '0' + second : second;
                                minute = (minute < 10) ? '0' + minute : minute;
                                hour = (hour < 10) ? '0' + hour : hour;
                                hour = (hour > 24) ? Math.floor(hour/2) : hour;
                                days = (days < 10) ? '0' + days : days;

                                // console.log('Box 2'+hour);
								box1_sec_left = second;
                                 //$('#timer1').html('<span><strong> Remaining Days : </strong >' +days+'day(s):'+hour+'hr(s)</span >');
                                // $('#timer1').html('<span><strong> Remaining Days :  </strong >' +days+'day(s)'+hour+'hr(s):'+minute+'min(s)'+second+'sec(s)</span >');
                                $('#timer1').html('<span><strong> Remaining Days :  </strong >' +days+'day(s):'+hour+'hr(s):'+minute+'min(s)</span >');
                                //$('#timer1').html('<span><strong> No Day(s) Left : </strong >' +days+'day(s)</span >');
                            }
                    }

                    function _timer2(callback) {
                            var time = 0;     //  The default time of the timer
                            var mode = 1;     //    Mode: count up or count down
                            var status = 0;    //    Status: timer is running or stoped
                            var timer_id;    //    This is used by setInterval function

                            // this will start the timer ex. start the timer with 1 second interval timer.start(1000) 
                            this.start = function (interval) {
                                interval = (typeof (interval) !== 'undefined') ? interval : 1000;

                                if (status == 0) {
                                    status = 1;
                                    timer_id = setInterval(function () {
                                        switch (mode) {
                                            default:
                                                if (time) {
                                                    time--;
                                                    generateTime3();
                                                    
                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;

                                            case 1:
                                                if (time < 86400) {
                                                    time++;
                                                    generateTime3();

                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;
                                        }
                                    }, interval);
                                }
                            }

                            //  Same as the name, this will stop or pause the timer ex. timer.stop()
                            this.stop = function () {
                                if (status == 1) {
                                    status = 0;
                                    clearInterval(timer_id);
                                }
                            }

                            // Reset the timer to zero or reset it to your own custom time ex. reset to zero second timer.reset(0)
                            this.reset = function (sec) {
                                sec = (typeof (sec) !== 'undefined') ? sec : 0;
                                time = sec;
                                generateTime3(time);
                            }

                            // Change the mode of the timer, count-up (1) or countdown (0)
                            this.mode = function (tmode) {
                                mode = tmode;
                            }

                            // This methode return the current value of the timer
                            this.getTime = function () {
                                return time;
                            }

                            // This methode return the current mode of the timer count-up (1) or countdown (0)
                            this.getMode = function () {
                                return mode;
                            }

                            // This methode return the status of the timer running (1) or stoped (1)
                            this.getStatus
                            {
                                return status;
                            }

                            // This methode will render the time variable to hour:minute:second format
                            function generateTime3() {
                                var second = time % 60;
                                var minute = Math.floor(time / 60) % 60;
                                var hour = Math.floor(time / 3600) % 60;
                                var days = Math.floor(time/86400) ;

                                second = (second < 10) ? '0' + second : second;
                                minute = (minute < 10) ? '0' + minute : minute;
                                hour = (hour < 10) ? '0' + hour : hour;
                                hour = (hour > 24) ? Math.floor(hour/2) : hour;
                                days = (days < 10) ? '0' + days : days;
                                
                                //$('#timer2').html('<span><strong> Remaining Days :   </strong >' +days+'day(s):'+hour+'hr(s)</span >');
                                // $('#timer2').html('<span><strong> Remaining Days :  </strong >' +days+hour+'hr(s):'+minute+'min(s)'+second+'sec(s)</span >');
                                $('#timer2').html('<span><strong> Remaining Days :  </strong >' +days+'day(s):'+hour+'hr(s):'+minute+'min(s)</span >');
                                //$('#timer2').html('<span><strong> No of Day(s) Left :   </strong >' +days+'day(s)</span >');
                            }
                    }

                    function _timer3(callback) {
                            var time = 0;     //  The default time of the timer
                            var mode = 1;     //    Mode: count up or count down
                            var status = 0;    //    Status: timer is running or stoped
                            var timer_id;    //    This is used by setInterval function

                            // this will start the timer ex. start the timer with 1 second interval timer.start(1000) 
                            this.start = function (interval) {
                                interval = (typeof (interval) !== 'undefined') ? interval : 1000;

                                if (status == 0) {
                                    status = 1;
                                    timer_id = setInterval(function () {
                                        switch (mode) {
                                            default:
                                                if (time) {
                                                    time--;
                                                    generateTime4();
                                                    
                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;

                                            case 1:
                                                if (time < 86400) {
                                                    time++;
                                                    generateTime4();

                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;
                                        }
                                    }, interval);
                                }
                            }

                            //  Same as the name, this will stop or pause the timer ex. timer.stop()
                            this.stop = function () {
                                if (status == 1) {
                                    status = 0;
                                    clearInterval(timer_id);
                                }
                            }

                            // Reset the timer to zero or reset it to your own custom time ex. reset to zero second timer.reset(0)
                            this.reset = function (sec) {
                                sec = (typeof (sec) !== 'undefined') ? sec : 0;
                                time = sec;
                                generateTime4(time);
                            }

                            // Change the mode of the timer, count-up (1) or countdown (0)
                            this.mode = function (tmode) {
                                mode = tmode;
                            }

                            // This methode return the current value of the timer
                            this.getTime = function () {
                                return time;
                            }

                            // This methode return the current mode of the timer count-up (1) or countdown (0)
                            this.getMode = function () {
                                return mode;
                            }

                            // This methode return the status of the timer running (1) or stoped (1)
                            this.getStatus
                            {
                                return status;
                            }

                            // This methode will render the time variable to hour:minute:second format
                            function generateTime4() {
                                var second = time % 60;
                                var minute = Math.floor(time / 60) % 60;
                                var hour = Math.floor(time / 3600) % 60;
                                var days = Math.floor(time/86400) ;

                                second = (second < 10) ? '0' + second : second;
                                minute = (minute < 10) ? '0' + minute : minute;
                                hour = (hour < 10) ? '0' + hour : hour;
                                hour = (hour > 24) ? Math.floor(hour/2) : hour;
                                days = (days < 10) ? '0' + days : days;

                                //$('#timer3').html('<span><strong> Remaining Days :  </strong >' +days+'day(s):'+hour+'hr(s)</span >');
                                //$('#timer3').html('<span><strong> No of Day(s) Left :  </strong >' +days+'day(s)</span >');
                                $('#timer3').html('<span><strong> Remaining Days :  </strong >' +days+'day(s):'+hour+'hr(s):'+minute+'min(s)</span >');
                            }
                    }

                    function _timer4(callback) {
                            var time = 0;     //  The default time of the timer
                            var mode = 1;     //    Mode: count up or count down
                            var status = 0;    //    Status: timer is running or stoped
                            var timer_id;    //    This is used by setInterval function

                            // this will start the timer ex. start the timer with 1 second interval timer.start(1000) 
                            this.start = function (interval) {
                                interval = (typeof (interval) !== 'undefined') ? interval : 1000;

                                if (status == 0) {
                                    status = 1;
                                    timer_id = setInterval(function () {
                                        switch (mode) {
                                            default:
                                                if (time) {
                                                    time--;
                                                    generateTime5();
                                                    
                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;

                                            case 1:
                                                if (time < 86400) {
                                                    time++;
                                                    generateTime5();

                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;
                                        }
                                    }, interval);
                                }
                            }

                            //  Same as the name, this will stop or pause the timer ex. timer.stop()
                            this.stop = function () {
                                if (status == 1) {
                                    status = 0;
                                    clearInterval(timer_id);
                                }
                            }

                            // Reset the timer to zero or reset it to your own custom time ex. reset to zero second timer.reset(0)
                            this.reset = function (sec) {
                                sec = (typeof (sec) !== 'undefined') ? sec : 0;
                                time = sec;
                                generateTime5(time);
                            }

                            // Change the mode of the timer, count-up (1) or countdown (0)
                            this.mode = function (tmode) {
                                mode = tmode;
                            }

                            // This methode return the current value of the timer
                            this.getTime = function () {
                                return time;
                            }

                            // This methode return the current mode of the timer count-up (1) or countdown (0)
                            this.getMode = function () {
                                return mode;
                            }

                            // This methode return the status of the timer running (1) or stoped (1)
                            this.getStatus
                            {
                                return status;
                            }

                            // This methode will render the time variable to hour:minute:second format
                            function generateTime5() {
                                var second = time % 60;
                                var minute = Math.floor(time / 60) % 60;
                                var hour = Math.floor(time / 3600) % 60;
                                var days = Math.floor(time/86400) ;

                                second = (second < 10) ? '0' + second : second;
                                minute = (minute < 10) ? '0' + minute : minute;
                                hour = (hour < 10) ? '0' + hour : hour;
                                days = (days < 10) ? '0' + days : days;
                                
                                //$('#timer4').html('<span><strong> Remaining Days :   </strong >' +days+'day(s):'+hour+'hr(s)</span >');
                                $('#timer4').html('<span><strong> Remaining Days :   </strong >' +days+'day(s):'+hour+'hr(s):'+minute+'mins(s)</span >');
                                //$('#timer4').html('<span><strong> No of Day(s) Left :   </strong >' +days+'day(s):</span >');
                            }
                    }

                    function _timer5(callback) {
                            var time = 0;     //  The default time of the timer
                            var mode = 1;     //    Mode: count up or count down
                            var status = 0;    //    Status: timer is running or stoped
                            var timer_id;    //    This is used by setInterval function

                            // this will start the timer ex. start the timer with 1 second interval timer.start(1000) 
                            this.start = function (interval) {
                                interval = (typeof (interval) !== 'undefined') ? interval : 1000;

                                if (status == 0) {
                                    status = 1;
                                    timer_id = setInterval(function () {
                                        switch (mode) {
                                            default:
                                                if (time) {
                                                    time--;
                                                    generateTime6();
                                                    
                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;

                                            case 1:
                                                if (time < 86400) {
                                                    time++;
                                                    generateTime6();

                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;
                                        }
                                    }, interval);
                                }
                            }

                            //  Same as the name, this will stop or pause the timer ex. timer.stop()
                            this.stop = function () {
                                if (status == 1) {
                                    status = 0;
                                    clearInterval(timer_id);
                                }
                            }

                            // Reset the timer to zero or reset it to your own custom time ex. reset to zero second timer.reset(0)
                            this.reset = function (sec) {
                                sec = (typeof (sec) !== 'undefined') ? sec : 0;
                                time = sec;
                                generateTime6(time);
                            }

                            // Change the mode of the timer, count-up (1) or countdown (0)
                            this.mode = function (tmode) {
                                mode = tmode;
                            }

                            // This methode return the current value of the timer
                            this.getTime = function () {
                                return time;
                            }

                            // This methode return the current mode of the timer count-up (1) or countdown (0)
                            this.getMode = function () {
                                return mode;
                            }

                            // This methode return the status of the timer running (1) or stoped (1)
                            this.getStatus
                            {
                                return status;
                            }

                            // This methode will render the time variable to hour:minute:second format
                            function generateTime6() {
                                var second = time % 60;
                                var minute = Math.floor(time / 60) % 60;
                                var hour = Math.floor(time / 3600) % 60;
                                var days = Math.floor(time/86400) ;

                                second = (second < 10) ? '0' + second : second;
                                minute = (minute < 10) ? '0' + minute : minute;
                                hour = (hour < 10) ? '0' + hour : hour;
                                hour = (hour > 24) ? Math.floor(hour/2) : hour;
                                days = (days < 10) ? '0' + days : days;
                                
                                $//('#timer5').html('<span><strong> Remaining Days :   </strong >' +days+'day(s):'+hour+'hr(s)</span >');
                                $('#timer5').html('<span><strong> Remaining Days :   </strong >' +days+'day(s):'+hour+'hr(s):'+minute+'min(s)</span >');
                                //$('#timer5').html('<span><strong> No of Day(s) Left :   </strong >' +days+'day(s)</span >');
                            }
                    }

                    function _timer6(callback) {
                            var time = 0;     //  The default time of the timer
                            var mode = 1;     //    Mode: count up or count down
                            var status = 0;    //    Status: timer is running or stoped
                            var timer_id;    //    This is used by setInterval function

                            // this will start the timer ex. start the timer with 1 second interval timer.start(1000) 
                            this.start = function (interval) {
                                interval = (typeof (interval) !== 'undefined') ? interval : 1000;

                                if (status == 0) {
                                    status = 1;
                                    timer_id = setInterval(function () {
                                        switch (mode) {
                                            default:
                                                if (time) {
                                                    time--;
                                                    generateTime7();
                                                    
                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;

                                            case 1:
                                                if (time < 86400) {
                                                    time++;
                                                    generateTime7();

                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;
                                        }
                                    }, interval);
                                }
                            }

                            //  Same as the name, this will stop or pause the timer ex. timer.stop()
                            this.stop = function () {
                                if (status == 1) {
                                    status = 0;
                                    clearInterval(timer_id);
                                }
                            }

                            // Reset the timer to zero or reset it to your own custom time ex. reset to zero second timer.reset(0)
                            this.reset = function (sec) {
                                sec = (typeof (sec) !== 'undefined') ? sec : 0;
                                time = sec;
                                generateTime7(time);
                            }

                            // Change the mode of the timer, count-up (1) or countdown (0)
                            this.mode = function (tmode) {
                                mode = tmode;
                            }

                            // This methode return the current value of the timer
                            this.getTime = function () {
                                return time;
                            }

                            // This methode return the current mode of the timer count-up (1) or countdown (0)
                            this.getMode = function () {
                                return mode;
                            }

                            // This methode return the status of the timer running (1) or stoped (1)
                            this.getStatus
                            {
                                return status;
                            }

                            // This methode will render the time variable to hour:minute:second format
                            function generateTime7() {
                                var second = time % 60;
                                var minute = Math.floor(time / 60) % 60;
                                var hour = Math.floor(time / 3600) % 60;
                                var days = Math.floor(time/86400) ;

                                second = (second < 10) ? '0' + second : second;
                                minute = (minute < 10) ? '0' + minute : minute;
                                hour = (hour < 10) ? '0' + hour : hour;
                                hour = (hour > 24) ? Math.floor(hour/2) : hour;
                                days = (days < 10) ? '0' + days : days;
                                
                                $('#timer6').html('<span><strong> Remaining Days :  </strong >' +days+'day(s):'+hour+'hr(s):'+minute+'min(s)</span >');
                                //$('#timer6').html('<span><strong> Remaining Days :  </strong >' +days+'day(s):'+hour+'hr(s)</span >');
                                //$('#timer6').html('<span><strong> No of Day(s) Left :  </strong >' +days+'day(s)</span >');
                            }
                    }

                    function _timerDefault(callback) {
                            var time = 0;     //  The default time of the timer
                            var mode = 1;     //    Mode: count up or count down
                            var status = 0;    //    Status: timer is running or stoped
                            var timer_id;    //    This is used by setInterval function

                            // this will start the timer ex. start the timer with 1 second interval timer.start(1000) 
                            this.start = function (interval) {
                                interval = (typeof (interval) !== 'undefined') ? interval : 1000;

                                if (status == 0) {
                                    status = 1;
                                    timer_id = setInterval(function () {
                                        switch (mode) {
                                            default:
                                                if (time) {
                                                    time--;
                                                    generateTime();
                                        
                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;

                                            case 1:
                                                if (time < 86400) {
                                                    time++;
                                                    generateTime();

                                                    if (typeof (callback) === 'function') callback(time);
                                                }
                                                break;
                                        }
                                    }, interval);
                                }
                            }

                            //  Same as the name, this will stop or pause the timer ex. timer.stop()
                            this.stop = function () {
                                if (status == 1) {
                                    console.log('this was stopped');
                                    status = 0;
                                    clearInterval(timer_id);
                                }
                            }

                            // Reset the timer to zero or reset it to your own custom time ex. reset to zero second timer.reset(0)
                            this.reset = function (sec) {
                                sec = (typeof (sec) !== 'undefined') ? sec : 0;
                                time = sec;
                                generateTime(time);
                            }

                            // Change the mode of the timer, count-up (1) or countdown (0)
                            this.mode = function (tmode) {
                                mode = tmode;
                            }

                            // This methode return the current value of the timer
                            this.getTime = function () {
                                return time;
                            }

                            // This methode return the current mode of the timer count-up (1) or countdown (0)
                            this.getMode = function () {
                                return mode;
                            }

                            // This methode return the status of the timer running (1) or stoped (1)
                            this.getStatus
                            {
                                return status;
                            }

                            // This methode will render the time variable to hour:minute:second format
                            function generateTime() {


                                var second = time % 60;
                                var minute = Math.floor(time / 60) % 60;
                                var hour = Math.floor(time / 3600) % 60;
                                var days = Math.floor(time/86400) ;

                                second = (second < 10) ? '0' + second : second;
                                minute = (minute < 10) ? '0' + minute : minute;
                                hour = (hour < 10) ? '0' + hour : hour;
                                days = (days < 10) ? '0' + days : days;
                                // console.log(days+'(days)'+hour+'(hr)'+ minute +'(min)'+second+'(s)' );
                                //$('div.timer span.second').html(second);
                                //$('div.timer span.minute').html(minute);
                                //$('div.timer span.hour').html(hour);

                                // $('#timer').html('<span><strong> Remaining Days :  </strong >' +days+'day(s):'+hour+'hr(s)'+second+'</span >');
                                // $('#timer').html('<span><strong> Remaining Days :  </strong >' +days+'day(s)'+hour+'hr(s):'+minute+'min(s)'+second+'sec(s)</span >');
                            
                            }
                            
                    }


            
   
   </script>

  <script type="text/javascript">
			$(document).ready(function(e){
				window.setInterval(getDateTimeNow,1000);
			});
			
			function getDateTimeNow()
			{
				var d = new Date();
				var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
				document.getElementById("lbldatetimenow").innerHTML = ' <strong>Date :</strong>' + d.toLocaleDateString("en-US", options) + '<strong>	Time :</strong>' + d.toLocaleTimeString();
			}
  </script>
                                           
  </div>
</body>

</html>

