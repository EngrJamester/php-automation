<?php 

    $setmode22 = shell_exec("/usr/local/bin/gpio -g mode 22 out");

    if(isset($_GET['on'])){
        $on = shell_exec("/usr/local/bin/gpio -g write 22 1");
        $gpio_on = shell_exec($on);
        echo "On";
    }
    else if(isset($_GET['off'])){
        $off = shell_exec("/usr/local/bin/gpio -g write 22 0");
        $gpio_off = shell_exec($off);
        echo "Off";
    }

?>