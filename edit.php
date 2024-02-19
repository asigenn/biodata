<?php
include "konek.php";
$id = null;
if(!empty($_GET['id'])){
    $id = $_GET['id'];
} else{
    header("Location: index.php");
}
if(!empty($_POST)){
    $Nama           = $_POST['nama'];
    $Tempatlahir    = $_POST['tempat_lahir'];
    $Tgllahir       = $_POST['tgl_lahir'];
    $Agama          = $_POST['agama'];
    $Alamat         = $_POST['alamat'];
    $Email          = $_POST['email'];
    $Nohp           = $_POST['no_hp'];
    $Sekolah        = $_POST['sekolah'];
    $Kelas          = $_POST['kelas'];
    $Blog           = $_POST['blog'];
    $Peminatan      = $_POST['peminatan'];

    $sql = mysqli_query($con, "UPDATE tb_input SET nama='$Nama', tempat_lahir='$Tempatlahir', tgl_lahir='$Tgllahir', agama='$Agama', alamat='$Alamat', email='$Email', no_hp='$Nohp', sekolah='$Sekolah', 
    kelas='$Kelas', blog='$Blog', peminatan='$Peminatan' WHERE id=$id") or die (mysqli_error($con));

    if($sql){
        echo "<script>alert('Data Berhasil Diedit'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Diedit'); window.location='index.php';</script>";
    }

} else {
    $query          = mysqli_query($con, "SELECT * FROM tb_input WHERE id = '$id'");
    $data           = mysqli_fetch_array($query);
    $nama           = $data['nama'];
    $tempatlahir    = $data["tempat_lahir"];
    $tgllahir       = $data["tgl_lahir"];
    $agama          = $data["agama"];
    $alamat         = $data["alamat"];
    $email          = $data["email"];
    $nohp           = $data["no_hp"];
    $sekolah        = $data["sekolah"];
    $kelas          = $data["kelas"];
    $blog           = $data["blog"];
    $peminatan      = $data["peminatan"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <link rel="stylesheet" href="stylev.css">
</head>
<body>
    <div class="container">
    <h1>Edit Biodata</h1>
    <hr>
    <form action="" method="POST">

        <label for="id">ID</label><br>
        <input type="text" id="id" name="id" value="<?= $id ?>" placeholder="Masukkan ID Anda"><br>

        <label for="nama">Nama Lengkap</label><br>
        <input type="text" id="nama" name="nama" value="<?= $nama ?>" placeholder="Masukkan Nama" required><br>
    
        <label for="tempat_lahir">Tempat Lahir</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?= $tempatlahir ?>"  placeholder="Masukkan Kota Lahir" required><br>

        <label for="tgl_lahir">Tgl. Lahir</label><br>
        <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?= $tgllahir ?>" required><br>

        <label for="agama">Agama</label><br>
        <select name="agama" id="agama" value="<?= $agama ?>" required>
            <option>- Pilih Agama -</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katolik">Katolik</option>
            <option value="hindu">Hindu</option>
            <option value="buddha">Buddha</option>
        </select>

        <label for="alamat">Alamat Lengkap</label><br>
        <textarea id="alamat" name="alamat" placeholder="Masukkan Alamat" required><?= $alamat ?></textarea><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"  placeholder="Masukkan Email Aktif" value="<?= $email ?>" required><br>

        <label for="no_hp">No. HP</label><br>
        <input type="text" id="no_hp" name="no_hp"  placeholder="Masukkan No. HP" value="<?= $nohp ?>" required><br>

        <label for="sekolah">Sekolah</label><br>
        <input type="text" id="sekolah" name="sekolah" placeholder="Masukkan Sekolah" value="<?= $sekolah ?>" required><br>

        <label for="kelas">Kelas</label><br>
        <select id="kelas" name="kelas" value="<?= $kelas ?>" required>
          <option value="pilih kelas">- Pilih Kelas -</option>
          <option value="X SIJA 1">X SIJA 1</option>
          <option value="X SIJA 2">X SIJA 2</option>
          <option value="XI SIJA 1">XI SIJA 1</option>
          <option value="XI SIJA 2">XI SIJA 2</option>
          <option value="XII SIJA 1">XII SIJA 1</option>
          <option value="XII SIJA 2">XII SIJA 2</option>
        </select><br>

        <label for="blog">Blog </label><br>
        <input type="text" id="blog" value="<?= $blog ?>" placeholder="Masukkan Nama Blog" name="blog"><br>

        <label for="peminatan">Peminatan</label><br>
        <select name="peminatan" id="peminatan" value="<?= $blog ?>" required>
            <option>- Pilih Peminatan -</option>
            <option value="Network Engineer">Network Engineer</option>
            <option value="rogammer">Progammer</option>
            <option value="Cloud Engineer">Cloud Engineer</option>
            <option value="Data Analist">Data Analist</option>
        </select>
        <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>