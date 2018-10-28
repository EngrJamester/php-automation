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

?>