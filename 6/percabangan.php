<?php

// Membuat variabel
$nama_mahasiswa = "Ariel Tatum";
$nama_kamu = "Andi";
$pekerjaan = "aktris";

if ($nama_mahasiswa == "Ariel Tatum") {
    if($pekerjaan == "aktris"){
        $gender = "perempuan";
        $gaji = 1000000000;
    }else{
        $gender = "perempuan";
        $gaji = 2000000;

    }
} else if ($nama_kamu == "Andi") {
    $gender = "Lelaki";
} else $gender = "???";

// Menampilkan pesan
echo "Hallo ".$nama_mahasiswa.", Selamat <br> datang, saya ".$nama_kamu."
        jenis kelamin kamu adalah ".$gender." gaji kamu sebesar ".$gaji;
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PBW 4</title>
</head>
<body>
    <br>
        Calon pacar saya...
</body>
</html>
