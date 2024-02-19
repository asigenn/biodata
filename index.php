<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <center><h1 style=" size: 25px;
        line-height: 30.24px;
        font-weight: bold;
        margin-top: 25px;">Daftar Biodata</h1></center>
        <a href="tambah.php" class="btn btn-primary mt-4" style="margin-bottom: 15px;">Tambah Data</a>
        
        <table class="table nt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kota Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Sekolah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Blog</th>
                    <th scope="col">Karir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "konek.php";
                    $query = "SELECT * FROM tb_input";
                    $no = 1;
                    $hasil  = mysqli_query($con, $query);
                    if(mysqli_num_rows($hasil) > 0){
                        while($data = mysqli_fetch_array($hasil)) { ?>

                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama'];?></td>
                            <td><?= $data['tempat_lahir'];?></td>
                            <td><?= $data['tgl_lahir'];?></td>
                            <td><?= $data['agama'];?></td>
                            <td><?= $data['alamat'];?></td>
                            <td><?= $data['email'];?></td>
                            <td><?= $data['no_hp'];?></td>
                            <td><?= $data['sekolah'];?></td>
                            <td><?= $data['kelas'];?></td>
                            <td><?= $data['blog'];?></td>
                            <td><?= $data['peminatan'];?></td>
                            <td>
                                <a href="edit.php?id=<?=$data['id'];?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?id=<?=$data['id'];?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
            <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>