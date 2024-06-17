<?php
include "koneksi.php";

// Fungsi untuk menyaring input hanya berisi huruf dan angka
function sanitize_input($input) {
    return preg_replace("/[^a-zA-Z0-9]/", "", $input);
}

$npm = isset($_GET['id']) ? sanitize_input($_GET['id']) : '';

if (!empty($npm)) {
    $stmt = $db->prepare("DELETE FROM mahasiswa WHERE id = ?");
    $stmt->bind_param("s", $npm);
    $proses = $stmt->execute();

    if ($proses) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location.href='index.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                window.location.href='index.php';
            </script>";
    }
} else {
    echo "
        <script>
            alert('ID tidak valid');
            window.location.href='index.php';
        </script>";
}
?>
