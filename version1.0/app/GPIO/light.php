<?php 

    $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
    $setmode27 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
    $setmode22 = shell_exec("/usr/local/bin/gpio -g mode 22 out");
    $setmode16 = shell_exec("/usr/local/bin/gpio -g mode 10 out");
    $setmode9 = shell_exec("/usr/local/bin/gpio -g mode 9 out");
    $setmode11 = shell_exec("/usr/local/bin/gpio -g mode 11 out");
    $setmode0 = shell_exec("/usr/local/bin/gpio -g mode 0 out");
    $setmode1 = shell_exec("/usr/local/bin/gpio -g mode 1 out");
    $setmode5 = shell_exec("/usr/local/bin/gpio -g mode 5 out");
    $setmode6 = shell_exec("/usr/local/bin/gpio -g mode 6 out");
    $setmode13 = shell_exec("/usr/local/bin/gpio -g mode 13 out");
    $setmode19 = shell_exec("/usr/local/bin/gpio -g mode 19 out");
    $setmode26 = shell_exec("/usr/local/bin/gpio -g mode 26 out");
    $setmode20 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
    

    if(isset($_GET['on-controller1'])){
        $name="controller1";
        $ferment_status = 1;
        echo "<script type='text/javascript'>console.log('Box 1 Set On');</script>";
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

		//This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 27 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";

    }
    else if(isset($_GET['off-controller1'])){
        $name="controller1";
        $ferment_status = 0;
        echo "<script type='text/javascript'>console.log('Box 1 Set off');</script>";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/resettimer.php';
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';

		//This is to turn GREEN  On
        $onred = shell_exec("/usr/local/bin/gpio -g write 17 0");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 27 1");
        $gpio_offgreen = shell_exec($offgreen);
        echo "Off";

        // echo
        // '<script type="text/javascript">

        // alert("TIMER SAVED!");

        // </script>';
    }

    if(isset($_GET['on-controller2'])){
        $name="controller2";
        $ferment_status = 1;
        echo "<script type='text/javascript'>console.log('Box 2 Set On');</script>";
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        
        //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 10 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";
        
    }else if(isset($_GET['off-controller2'])){
        $name="controller2";
        $ferment_status = 0;
        echo "<script type='text/javascript'>console.log('Box 2 Set off');</script>";
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/resettimer.php';
        
        //This is to turn LED GREEN On
        $onred = shell_exec("/usr/local/bin/gpio -g write 10 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_offgreen = shell_exec($offgreen);
       
    }

    if(isset($_GET['on-controller3'])){
        $name="controller3";
        $ferment_status = 1;
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

        //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 9 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 11 0");
        $gpio_offgreen = shell_exec($offgreen);
        

    }else if(isset($_GET['off-controller3'])){
        $name="controller3";
        $ferment_status = 0;
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/resettimer.php';

        //This is to turn LED GREEN On
        $onred = shell_exec("/usr/local/bin/gpio -g write 11 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 9 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "Off";

        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller4'])){
        $name="controller4";
        $ferment_status = 1;
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
	
	    //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 0 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 1 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";

    }else if(isset($_GET['off-controller4'])){
        $name="controller4";
        $ferment_status = 0;
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/resettimer.php';

	    //This is to turn LED Green On
        $onred = shell_exec("/usr/local/bin/gpio -g write 1 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 0 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "Off";

        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller5'])){
        $name="controller5";
        $ferment_status = 1;
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

	    //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 5 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 6 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";

    }else if(isset($_GET['off-controller5'])){
        $name="controller5";
        $ferment_status = 0;
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/resettimer.php';

	    //This is to turn LED GREEN On
        $onred = shell_exec("/usr/local/bin/gpio -g write 6 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 5 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";

        // '<script type="text/javascript">

        // alert("TIMER SAVED!");

        // </script>';
    }

    if(isset($_GET['on-controller6'])){
        $name="controller6";
        $ferment_status = 1;
        echo "<script type='text/javascript'>console.log('Box 6 Set On');</script>";
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

	    //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 13 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 19 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";

    }else if(isset($_GET['off-controller6'])){
        $name="controller6";
        $ferment_status = 0;
        echo "<script type='text/javascript'>console.log('Box 6 Set Off');</script>";
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/resettimer.php';

	    //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 19 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 13 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";

        // echo
        // '<script type="text/javascript">

        // alert("TIMER SAVED!");

        // </script>';
    }

    if(isset($_GET['on-controller7'])){
        $name="controller7";
        $ferment_status = 1;
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
	
	    //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 26 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 20 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";

    }else if(isset($_GET['off-controller7'])){
        $name="controller7";
        $ferment_status = 0;
        echo "<script type='text/javascript'>console.log('Box 7 Set On');</script>";
        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/resettimer.php';

	    //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 20 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 26 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";

        // echo
        // '<script type="text/javascript">

        // alert("TIMER SAVED!");

        // </script>';
    }

    //For Auto StartUp
    if(isset($_GET['on-controller1-strt'])){
        echo "<script type='text/javascript'>console.log('Box 1 start Set On');</script>";
		//This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 27 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";
    }
    if(isset($_GET['on-controller2-strt'])){
        echo "<script type='text/javascript'>console.log('Box 2 start Set On');</script>";
        //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 10 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";
        
    }
    if(isset($_GET['on-controller3-strt'])){
        //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 9 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 11 0");
        $gpio_offgreen = shell_exec($offgreen);
    }
    if(isset($_GET['on-controller4-strt'])){
	    //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 0 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 1 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";
    }
    if(isset($_GET['on-controller5-strt'])){
	    //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 5 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 6 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";
    }
    if(isset($_GET['on-controller6-strt'])){
        echo "<script type='text/javascript'>console.log('Box 6 Set On');</script>";
	    //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 13 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 19 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";
    }
    if(isset($_GET['on-controller7-strt'])){

	    //This is to turn LED Red On
        $onred = shell_exec("/usr/local/bin/gpio -g write 26 1");
        $gpio_onred = shell_exec($onred);
        $offgreen = shell_exec("/usr/local/bin/gpio -g write 20 0");
        $gpio_offgreen = shell_exec($offgreen);
        echo "On";
    }

function offRG($pinRed,$pinGreen)
{
	$offRed = shell_exec("/usr/local/bin/gpio -g write $pinRed 0");
    $gpioOffRed = shell_exec($offRed);
    
    $offRed = shell_exec("/usr/local/bin/gpio -g write $pinGreen 1");
    $gpioOffRed = shell_exec($offRed);
    
}

?>
