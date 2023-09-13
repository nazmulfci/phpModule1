<?php
$sub_1 = 95;
$sub_2 = 85;
$sub_3 = 74;


$total = $sub_1 + $sub_2 + $sub_3;
$average = $total / 3;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "F";

 
echo "Your Average mark is =  $average' <br>";
echo "Your Grade  is       = '$grade'" ;