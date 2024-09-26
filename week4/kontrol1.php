<?php

$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($grades);
array_shift($grades);
array_shift($grades);
array_pop($grades);
array_pop($grades);
$totalGrades = array_sum($grades);

echo "Total grades after removing the highest and lowest grades: $totalGrades";
