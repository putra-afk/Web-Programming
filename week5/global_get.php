<?php

$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error ketika keynya kosong
$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan error ketika keynya kosong

echo "Hallo {$nama}! Apakah benar anda berusia {$usia} tahun?";
