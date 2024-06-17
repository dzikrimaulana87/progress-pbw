<?php
include ('./tampilkan.php');
include ('./edit.php');
include ('./cari.php');

$data_edit = isset($_GET['id']) ? mysqli_fetch_assoc($proses_ambil) : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <!-- form -->
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Nilai Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="<?php echo isset($data_edit['id']) ? 'edit.php?id=' . $data_edit['id'] . '&proses=1' : 'proses.php'; ?>"
                            method="POST">
                            <div class="form-group">
                                <label for="nama">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="<?php echo isset($data_edit['nama']) ? $data_edit['nama'] : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="prodi">Prodi Mahasiswa</label>
                                <input type="text" class="form-control" id="prodi" name="prodi"
                                    value="<?php echo isset($data_edit['prodi']) ? $data_edit['prodi'] : ''; ?>">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="row mt-4">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Mahasiswa</h4>
                        <div style="float:right">
                            <form action="" method="GET">
                                Cari data
                                <input type="text" name="query">
                                <button type="submit" name="submit" class="btn btn-primary">Cari</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                        <thead>
                                <tr>
                                    <th>NPM Mahasiswa</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Prodi Mahasiswa</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php if($issearch){
                                
                            
                            ?>
                        <tbody>
                                <?php while ($data = mysqli_fetch_assoc($hasilcari)) { ?>
                                    <tr>
                                        <td><?php echo $data['id'] ?></td>
                                        <td><?php echo $data['nama'] ?></td>
                                        <td><?php echo $data['prodi'] ?></td>
                                        <td>
                                            <a href="index.php?id=<?php echo $data['id']; ?>"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="hapus.php?id=<?php echo $data['id']; ?>"
                                                class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } 
                                ?>
                            </tbody>
                            <?php
                            }else{
                            ?>
                        
                            <tbody>
                                <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?php echo $data['id'] ?></td>
                                        <td><?php echo $data['nama'] ?></td>
                                        <td><?php echo $data['prodi'] ?></td>
                                        <td>
                                            <a href="index.php?id=<?php echo $data['id']; ?>"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="hapus.php?id=<?php echo $data['id']; ?>"
                                                class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="library/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>