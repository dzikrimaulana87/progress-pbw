<?php
include_once "koneksi.php";

// Fungsi untuk menyaring input hanya berisi huruf dan angka
function sanitize_input($input) {
    return preg_replace("/[^a-zA-Z0-9]/", "", $input);
}

$npm = $apakah_proses = '';

if (isset($_GET['id'])) {
    $npm = sanitize_input($_GET['id']);
}

if (isset($_GET['proses'])) {
    $apakah_proses = sanitize_input($_GET['proses']);
}

if (!empty($npm)) {
    $stmt = $db->prepare("SELECT * FROM mahasiswa WHERE id = ?");
    $stmt->bind_param("s", $npm);
    $stmt->execute();
    $proses_ambil = $stmt->get_result();
}

if ($apakah_proses == 1) {
    $nm_mhs = sanitize_input($_POST['nama']);
    $prodi_mhs = sanitize_input($_POST['prodi']);

    $stmt = $db->prepare("UPDATE mahasiswa SET nama = ?, prodi = ? WHERE id = ?");
    $stmt->bind_param("sss", $nm_mhs, $prodi_mhs, $npm);
    $proses_update_data = $stmt->execute();

    if ($proses_update_data) {
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
?>
