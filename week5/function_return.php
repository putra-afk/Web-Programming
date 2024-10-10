<?php
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";

    //memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(2005, 2024) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil dungsi perekenalan
perkenalan("Bayu");
