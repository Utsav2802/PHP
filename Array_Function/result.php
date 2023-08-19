<?php
    $sub1 = 95;
    $sub2 = 85;
    $sub3 = 74;
    $sub4 = 64;
    $sub5 = 53;

    $total = NULL;
    $avg = NULL;
    $percentage = NULL;
    $grade = NULL;

    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $avg = $total / 5.0;
    $percentage = ($total/500.0) * 100;

    
    if ($avg >= 90)
        $grade = "A";

    elseif ($avg >= 80 && $avg <90)
        $grade = "B";

    elseif ($avg >= 70 && $avg < 80)
        $grade = "C";

    elseif ($avg >= 60 && $avg < 70)
        $grade = "D";

    else
        $grade = "E";

    echo "The total mark = ". $total . "/500\n";
    echo "The average mark = ". $avg . "\n";
    echo "The percentage = ". $percentage . "%\n";
    echo " Thegrade =". $grade . "\n";

?>