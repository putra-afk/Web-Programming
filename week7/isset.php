<?php
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan";
}

$data = array("nama" => "Jane", "umur" => 25);
if (isset($data["Nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'umur' tidak ditemukan dalam array";
}
