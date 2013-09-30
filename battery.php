<?php

//$ret = exec("acpi");

$ret = "Battery 0: Full, 100%";

$per = strpos($ret, "%");

$per_value = (int) substr($ret, $per-3, 3);

if ($per_value < 20 || $per_value > 95){
    exec("zenity --warning --text 'Check you Battery Status'");
    
}

    

