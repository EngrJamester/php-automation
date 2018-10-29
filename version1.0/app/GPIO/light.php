<?php 

    $setmode22 = shell_exec("/usr/local/bin/gpio -g mode 22 out");

    if(isset($_GET['on-controller1'])){
        
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";
    }
    else if(isset($_GET['off-controller1'])){
        $name="controller1";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller2'])){
  
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";
    }else if(isset($_GET['off-controller2'])){
        $name="controller1";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller3'])){
  
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";
    }else if(isset($_GET['off-controller3'])){
        $name="controller1";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller4'])){
  
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";
    }else if(isset($_GET['off-controller4'])){
        $name="controller1";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller5'])){
  
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";
    }else if(isset($_GET['off-controller5'])){
        $name="controller1";
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
    }else if(isset($_GET['off-controller6'])){
        $name="controller1";
        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/savetimer.php';
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";
        echo
        '<script type="text/javascript">

        alert("TIMER SAVED!");

        </script>';
    }

    if(isset($_GET['on-controller7'])){
  
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";
    }else if(isset($_GET['off-controller7'])){
        $name="controller1";
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