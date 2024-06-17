<?php
include_once('./koneksi.php');

function sanitize_input($input) {
    return preg_replace("/[^a-zA-Z0-9\s]/", "", $input);
}

if (isset($_POST['submit'])) {
    $nama = sanitize_input($_POST['nama']);
    $npm = sanitize_input($_POST['prodi']);

    $stmt = $db->prepare("INSERT INTO mahasiswa (nama, prodi) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama, $npm);
    $action = $stmt->execute();

    if ($action) {
        echo "
            <script>
                alert('Data Berhasil Disimpan');
                window.location.href='index.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Disimpan');
                window.location.href='index.php';
            </script>";
    }
}


    //85 75 65
    // if ($nilai >= 85) {
    //     $huruf = 'A';
    // } else if ($nilai >= 75) {
    //     $huruf = 'B';
    // } else if ($nilai >= 65) {
    //     $huruf = 'C';
    // } else {
    //     $huruf = 'E';
    // }

    // for ($i = 0; $i < $perulangan; $i++) {
    //     echo ($i + 1) . " Mahasiswa dengan npm " . $npm . " memiliki nilai huruf " . $huruf . "<br>";
    // }