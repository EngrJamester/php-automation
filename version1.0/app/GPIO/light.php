<?php 

    $setmode22 = shell_exec("/usr/local/bin/gpio -g mode 22 out");

    if(isset($_GET['on-controller1'])){
        //This is to turn LED Red On
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }
    else if(isset($_GET['off-controller1'])){
        $name="controller1";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

        //This is to turn LED Red off
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";

        //This is to turn LED Green On
        $on_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_on = shell_exec($on_green);
        echo "On";
        // echo
        // '<script type="text/javascript">

        // alert("TIMER SAVED!");

        // </script>';
    }

    if(isset($_GET['on-controller2'])){
        
        //This is to turn LED red On
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller2'])){
        $name="controller2";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";

        //This is to turn LED Green On
        $on_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_on = shell_exec($on_green);
        echo "On";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller3'])){
  
        //This is to turn Red LED On
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller3'])){
        $name="controller3";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';

        //This is to turn LED Red Off
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";

         //This is to turn LED Green On
         $on_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
         $gpio_green_on = shell_exec($on_green);
         echo "On";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller4'])){
  
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller4'])){
        $name="controller4";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";

        
         //This is to turn LED Green On
        $on_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_on = shell_exec($on_green);
         echo "On";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller5'])){
  
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller5'])){
        $name="controller5";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller6'])){
  
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller6'])){
        $name="controller6";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";

         //This is to turn LED Green On
        $on_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_on = shell_exec($on_green);
        echo "On";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller7'])){
  
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";

        //This is to turn LED Green Off
        $off_green = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_green_off = shell_exec($off_green);
        echo "Off";
    }else if(isset($_GET['off-controller7'])){
        $name="controller7";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

?>