<?php
$file = fopen("numbers.txt", "r");
$numbers = [100];
while(!feof($file)) {
    $i = fgets($file);
    if(trim($i)) {
        $i = trim($i);
        if (strpos($i, '0') === 0) {
            $i = substr($i, 1);
        }
        $i = str_replace(array('-', ' '), '', $i);
        if (strpos($i, '+212') !== 0) {
            $i = '+212' . $i;
            
        }
        array_push($numbers, $i);
        echo $numbers[$i] ;
    }
}

fclose($file);
?>