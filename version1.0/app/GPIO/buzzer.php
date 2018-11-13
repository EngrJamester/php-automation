<?php
    $setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out"); 
    if(isset($_GET['on-buzz'])){
        
        $onbuz = shell_exec("/usr/local/bin/gpio -g write 21 0");
        $gpio_buzzer = shell_exec($onbuz);

    }if(isset($_GET['off-buzz'])){
        $onbuz = shell_exec("/usr/local/bin/gpio -g write 21 1");
        $gpio_buzzer = shell_exec($onbuz);
        
    }
?>