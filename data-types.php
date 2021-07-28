<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
$int = 12;
$dec = 4.0;
$str = "is the best place to learn and practice coding!";
// Read and save an integer, double, and String to your variables.
$int = fgets($handle);
$dec = fgets($handle);
$str = fgets($handle);
// Print the sum of both integer variables on a new line.
echo $int + $i;
// Print the sum of the double variables on a new line.
echo "\n";
echo number_format($dec + $d, 1);
// Concatenate and print the String variables on a new line
echo "\n";
echo "$s"."$str";
// The 's' variable above should be printed first.

fclose($handle);
