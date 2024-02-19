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
    <h1>Tambah Biodata</h1>
    <hr>
    <form action="" method="POST">

        <label for="id">No. ID ( Nomor ID berupa Angka 1 - XXX )</label><br>
        <input type="text" id="id" name="id" placeholder="Masukkan ID Anda"><br>

        <label for="nama">Nama Lengkap</label><br>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required><br>
    
        <label for="tempat_lahir">Tempat Lahir</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Kota Lahir" required><br>

        <label for="tgl_lahir">Tgl. Lahir</label><br>
        <input type="date" id="tgl_lahir" name="tgl_lahir" required><br>

        <label for="agama">Agama</label><br>
        <select name="agama" id="agama" required>
            <option>- Pilih Agama -</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katolik">Katolik</option>
            <option value="hindu">Hindu</option>
            <option value="buddha">Buddha</option>
        </select>

        <label for="alamat">Alamat Lengkap</label><br>
        <textarea id="alamat" name="alamat" placeholder="Masukkan Alamat" required></textarea><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="Masukkan Email Aktif" required><br>

        <label for="no_hp">No. HP</label><br>
        <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan No. HP" required><br>

        <label for="sekolah">Sekolah</label><br>
        <input type="text" id="sekolah" name="sekolah" placeholder="Masukkan Sekolah" required><br>

        <label for="kelas">Kelas</label><br>
        <select id="kelas" name="kelas" required>
          <option value="pilih kelas">- Pilih Kelas -</option>
          <option value="X SIJA 1">X SIJA 1</option>
          <option value="X SIJA 2">X SIJA 2</option>
          <option value="XI SIJA 1">XI SIJA 1</option>
          <option value="XI SIJA 2">XI SIJA 2</option>
          <option value="XII SIJA 1">XII SIJA 1</option>
          <option value="XII SIJA 2">XII SIJA 2</option>
        </select><br>

        <label for="blog">Blog </label><br>
        <input type="text" id="blog" placeholder="Masukkan Nama Blog" name="blog"><br>

        <label for="peminatan">Peminatan</label><br>
        <select name="peminatan" id="peminatan" required>
            <option>- Pilih Peminatan -</option>
            <option value="Network Engineer">Network Engineer</option>
            <option value="Progammer">Progammer</option>
            <option value="Cloud Engineer">Cloud Engineer</option>
            <option value="Data Analist">Data Analist</option>
        </select>
        <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        include "konek.php";
        if(isset($_POST['submit'])){

            $id             = $_POST["id"];
            $nama           = $_POST["nama"];
            $tempatlahir    = $_POST["tempat_lahir"];
            $tgllahir       = $_POST["tgl_lahir"];
            $agama          = $_POST["agama"];
            $alamat         = $_POST["alamat"];
            $email          = $_POST["email"];
            $nohp           = $_POST["no_hp"];
            $sekolah        = $_POST["sekolah"];
            $kelas          = $_POST["kelas"];
            $blog           = $_POST["blog"];
            $peminatan      = $_POST["peminatan"];

            $sql= mysqli_query($con, "INSERT INTO tb_input VALUES ('', '$nama', '$tempatlahir', '$tgllahir', '$agama', '$alamat', '$email', '$nohp', '$sekolah', '$kelas', '$blog', '$peminatan')");

            if($sql){
                echo "<script>alert('Data Berhasil Disimpan'); window.location='index.php';</script>";
            } else {
                echo "<script>alert('Data Gagal Disimpan'); window.location='index.php';</script>";
            }
        }
        ?>
    </div>
</body>
</html>