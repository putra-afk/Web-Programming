<?php

$pattern = '/[a-z]/';
$text = 'This is a Sample Text';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditumukan.";
} else {
    echo "Tidak ada huruf kecil";
}


$pattern = '/[0-9]/';
$text = 'There are 123 apples';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan" . $matches[0];
} else {
    echo "Tidak ada yang cocok.";
}

$pattern = '/apple/';
$repleace = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $repleace, $text);
echo $new_text;

$pattern = '/[o]{1,3}/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan" . $matches[0];
} else {
    echo "Tidak ada yang cocok.";
}
