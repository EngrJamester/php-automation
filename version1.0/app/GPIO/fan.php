<?php
    
        $setmode07 = shell_exec("/usr/local/bin/gpio -g mode 7 out");
        $setmode20 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
        $setmode16 = shell_exec("/usr/local/bin/gpio -g mode 16 out");
                        
            if(isset($_GET['on-fan1'])){
                $onFan = shell_exec("/usr/local/bin/gpio -g write 7 0");
                $gpio_onFan = shell_exec($onFan);
            }else if(isset($_GET['off-fan1'])){
                $off_fan = shell_exec("/usr/local/bin/gpio -g write 7 1");
                $gpio_off_fan = shell_exec($off_fan);
            }      

            if(isset($_GET['on-fan2'])){
                $OnFan = shell_exec("/usr/local/bin/gpio -g write 20 0");
                $gpio_OnFan = shell_exec($OnFan);
            }else if(isset($_GET['off-fan2'])){
                $off_fan = shell_exec("/usr/local/bin/gpio -g write 20 1");
                $gpio_off_fan = shell_exec($off_fan);
            }

            if(isset($_GET['on-fan3'])){
                $OnFan = shell_exec("/usr/local/bin/gpio -g write 16 0");
                $gpio_On_fan = shell_exec($OnFan);
            }else if(isset($_GET['off-fan3'])){
                $off_fan = shell_exec("/usr/local/bin/gpio -g write 16 1");
                $gpio_off_fan = shell_exec($off_fan);
            }
?>
