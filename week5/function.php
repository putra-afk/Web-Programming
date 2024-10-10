<?php
//function perkenalan()
//{
//echo "Assalamualaikum, ";
//echo "Perkenalkan, nama saya Elok<br/>";
//echo "Senang berkenalan dengan Anda<br/>";
//}
//perkenalan();

//make a function
//function perkenalan($nama, $salam)
//{
//echo $salam . ", ";
//echo "Perkenalkan, nama saya " . $nama . " <br>";
//echo "Senang berkenalan dengan anda <br>";
//}

//panggil function
//perkenalan("Hamdana", "Hello");

//echo "<hr>";

//$saya = "Elok";
//$ucapanSalam = "Selamat pagi";

//panggil function
//perkenalan($saya, $ucapanSalam);

//function perkenalan($nama, $salam = "Assalamualaikum")
//{
//echo $salam . ", ";
//echo "Perkenalkan, nama saya " . $nama . "<br/>";
//echo "Senang berkenalan dengan Anda<br/>";
//}

//perkenalan("Nindy", "Hallo");

//echo "<hr>";

//$saya = "Nindy";
//$ucapanSalam = "Selamat Pagi";

//perkenalan($saya);

//make a function
function hitungumur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungumur(2005, 2024) . " tahun";
