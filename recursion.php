<?php
$fptr = fopen("php://stdin", "r");

    
function factorial($n) {
    // Write your code here
    $factorial = 1;
    
    for($i = $n; $i>=1; $i--){
        $factorial = $factorial * $i;
    }
        return $factorial;
}

echo $result;


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = factorial($n);

fwrite($fptr, $result . "\n");

fclose($fptr);
