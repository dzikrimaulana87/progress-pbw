<?php
include_once('./koneksi.php');
$result = mysqli_query($db, "SELECT * FROM mahasiswa") or die(mysqli_error($db));