<?php



$n = intval(trim(fgets(STDIN)));

for($i=1; $i<11; $i++){
    echo $n." x ".$i." = ".$n * $i."\n";
}
