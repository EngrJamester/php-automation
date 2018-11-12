<?php 

    $setmode22 = shell_exec("/usr/local/bin/gpio -g mode 22 out");

    if(isset($_GET['on-controller1'])){
        $name="controller1";
        $perment_status = 1;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        //This is to turn LED Red On
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 27 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }
    else if(isset($_GET['off-controller1'])){
        $name="controller1";
        $perment_status = 0;
        // echo "<script type='text/javascript'>console.log('This was executed');</script>";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';

        //This is to turn LED Red off
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";

        //This is to turn LED Green On
        $on_green = shell_exec("/usr/local/bin/gpio -g write 27 1");
        $gpio_green_on = shell_exec($on_green);
        echo "On";
        // echo
        // '<script type="text/javascript">

        // alert("TIMER SAVED!");

        // </script>';
    }

    if(isset($_GET['on-controller2'])){
        $name="controller2";
        $perment_status = 1;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        //This is to turn LED red On
        $on = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 4 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller2'])){
        $name="controller2";
        $perment_status = 0;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 17 0");
        $gpio_off = shell_exec($off);
        echo "Off";

        //This is to turn LED Green On
        $on_green = shell_exec("/usr/local/bin/gpio -g write 4 1");
        $gpio_green_on = shell_exec($on_green);
        echo "On";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller3'])){
        $name="controller3";
        $perment_status = 1;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        //This is to turn Red LED On
        $on = shell_exec("/usr/local/bin/gpio -g write 18 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 23 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller3'])){
        $name="controller3";
        $perment_status = 0;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

        //This is to turn LED Red Off
        $off = shell_exec("/usr/local/bin/gpio -g write 18 0");
        $gpio_off = shell_exec($off);
        echo "Off";

         //This is to turn LED Green On
         $on_green = shell_exec("/usr/local/bin/gpio -g write 23 1");
         $gpio_green_on = shell_exec($on_green);
         echo "On";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller4'])){
        $name="controller4";
        $perment_status = 1;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $on = shell_exec("/usr/local/bin/gpio -g write 24 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 25 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller4'])){
        $name="controller4";
        $perment_status = 0;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

        //This is to turn LED Red Off
        $off = shell_exec("/usr/local/bin/gpio -g write 24 0");
        $gpio_off = shell_exec($off);
        echo "Off";

        
         //This is to turn LED Green On
        $on_green = shell_exec("/usr/local/bin/gpio -g write 25 1");
        $gpio_green_on = shell_exec($on_green);
         echo "On";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller5'])){
        $name="controller5";
        $perment_status = 1;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        //This is to turn LED Red On
        $on = shell_exec("/usr/local/bin/gpio -g write 12 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 16 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller5'])){
        $name="controller5";
        $perment_status = 0;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

        //this is to turn on LED Red Off
        $off = shell_exec("/usr/local/bin/gpio -g write 12 0");
        $gpio_off = shell_exec($off);
        echo "Off";

         //This is to turn LED Green On
         $off_green = shell_exec("/usr/local/bin/gpio -g write 16 1");
         $gpio_green_off = shell_exec($off_green);
         echo "Off";
        // echo
        // '<script type="text/javascript">

        // alert("TIMER SAVED!");

        // </script>';
    }

    if(isset($_GET['on-controller6'])){
        $name="controller6";
        $perment_status = 1;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        //This is to turn LED Red On
        $on = shell_exec("/usr/local/bin/gpio -g write 20 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 21 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller6'])){
        $name="controller6";
        $perment_status = 0;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

        //This is to turn LED Red Off
        $off = shell_exec("/usr/local/bin/gpio -g write 20 0");
        $gpio_off = shell_exec($off);
        echo "Off";

         //This is to turn LED Green On
        $on_green = shell_exec("/usr/local/bin/gpio -g write 21 1");
        $gpio_green_on = shell_exec($on_green);
        echo "On";
        // echo
        // '<script type="text/javascript">

        // alert("TIMER SAVED!");

        // </script>';
    }

    if(isset($_GET['on-controller7'])){
        $name="controller7";
        $perment_status = 1;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        //This is to turn LED Red On
        $on = shell_exec("/usr/local/bin/gpio -g write 26 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 19 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller7'])){
        $name="controller7";
        $perment_status = 0;
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/permentstatus.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

        //this is to turn LED Red Off
        $off = shell_exec("/usr/local/bin/gpio -g write 26 0");
        $gpio_off = shell_exec($off);
        echo "Off";

         //This is to turn LED Green On
         $off_green = shell_exec("/usr/local/bin/gpio -g write 19 1");
         $gpio_green_off = shell_exec($off_green);
         echo "Off";
        // echo
        // '<script type="text/javascript">

        // alert("TIMER SAVED!");

        // </script>';
    }



?>