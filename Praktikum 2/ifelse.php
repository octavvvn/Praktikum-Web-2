<?php

$nilai = 90;

$keterangan = "";

if($nilai > 90){
    $keterangan = "Sanggat Baik";
} elseif($nilai > 70 ||  $niai <= 90) {
    $keterangan = "Lumayan baik";
} else {
    $keterangan = "Oke dah";
}

echo "<h1>$keterangan</h1>";