<?php
include_once ('./koneksi.php');

$issearch = False;
if (isset($_GET['query'])) {
    $issearch = True;
    $query = $_GET['query'];
    $id = (int) $query;

    // var_dump($query);
    $hasilcari = mysqli_query($db, "SELECT * FROM `mahasiswa` WHERE nama LIKE '%$query' OR prodi='$query' OR id=$id;");
    

}


// var_dump($hasil);
// foreach($hasil as $data){
//     echo $data['nama'];
// }