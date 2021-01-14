<?php
include "../includes/connect.php";
$sql = "SELECT * FROM siswa";
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6);
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <!-- Table Siswa -->
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr data-id="<?= $siswa["id"] ?>">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Ability</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <?php $i = 1; ?>
                <?php foreach ($result as $siswa) : ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $siswa['nama'] ?></td>
                        <td><?= $siswa['jurusan'] ?></td>
                        <td><?= $siswa['kelas'] ?></td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#updateModel<?= $siswa["id"] ?>">Update</a>

                            <div class="modal" id="updateModel<?= $siswa["id"] ?>" tabindex="-1" aria-labelledby="updateModelLabel<?= $siswa["id"] ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="updateModelLabel">Update Data Siswa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="" method="POST">
                                            <input type="hidden" name="<?= $siswa['id'] ?>" value="<?= $siswa['id'] ?>">
                                            <div class="modal-body ">
                                                <input type="text" class="form-control mb-2" id="namaUpdate<?= $siswa['id'] ?>" name="namaUpdate" value="<?= $siswa['nama'] ?>" required>
                                                <input type="text" class="form-control mb-2" id="jurusanUpdate<?= $siswa['id'] ?>" name="jurusanUpdate" value="<?= $siswa['jurusan'] ?>" required>
                                                <input type="text" class="form-control" id="kelasUpdate<?= $siswa['id'] ?>" name="kelasUpdate" value="<?= $siswa['kelas'] ?>" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" data-dismiss="modal" onclick="return updateData(<?= $siswa['id'] ?>)" class="btn btn-primary">Update Data</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <a href="" onclick="return deleteData(<?= $siswa['id'] ?>)">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Table Siswa Akhir -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>