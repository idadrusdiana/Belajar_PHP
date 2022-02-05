<?php

$nilai = 80;
$absen = 80;

if($nilai >= 88 && $absen >= 88)
{
    echo "Nilai Anda A" . PHP_EOL;
}else if($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
}else if($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
}
else if($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
}else{
    echo "Nilai Anda E";
}

//If Statement Dengan Colon (jarang digunakan)
if($nilai >= 88 && $absen >= 88):
    echo "Nilai Anda A" . PHP_EOL;
elseif($nilai >= 70 && $absen >= 70): 
    echo "Nilai Anda B" . PHP_EOL;
elseif($nilai >= 60 && $absen >= 60): 
    echo "Nilai Anda C" . PHP_EOL;
elseif($nilai >= 50 && $absen >= 50): 
    echo "Nilai Anda D" . PHP_EOL;
else:
    echo "Nilai Anda E" . PHP_EOL;
endif;

// switch 
$nilai = "E";
switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus". PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus". PHP_EOL;
        break;
    default:
    echo "mungkin Anda salah jurusan" . PHP_EOL;
}