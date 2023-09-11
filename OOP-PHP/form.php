<?php
// Membuat class FormMahasiswa
class FormMahasiswa {
    // Metode untuk menampilkan formulir
    public function generateForm() {
        echo '<label>Nama Mahasiswa</label><br>
                <input type="text" placeholder="Masukkan Nama Lengkap"><br>';
        echo '<label>Unggah Foto Diri</label><br>
                    <input type="file" placeholder="Masukkan Nama Lengkap"><br>';
        echo '<label>Fakultas</label><br>
                    <select class="select2" data-placeholder="Pilih Fakultas"><br>
                        <option>Hukum</option>
                        <option>Teknik</option>
                        <option>Ekonomi dan Bisnis</option>
                        <option>Pertanian</option>
                        <option>Matematika dan Ilmu Pengetahuan</option>
                        <option>Ilmu Sosial dan Ilmu Politik</option>
                        <option>Keguruan dan Ilmu Pendidikan</option>
                        <option>Kedokteran dan Ilmu Kesehatan</option>
                    </select><br>';
        echo '<label>Jurusan</label><br>
                    <select class="select2" data-placeholder="Pilih Jurusan">
                        <option>S1 Informatika</option>
                        <option>S1 Teknik Sipil</option>
                        <option>S1 Teknik Mesin</option>
                        <option>S1 Teknik Elektro</option>
                        <option>S1 Arsitektur</option>
                        <option>S1 Sistem Informasi</option>
                    </select><br>';
        echo '<label>Nomor Pokok Mahasiswa (NPM)</label><br>
                    <input type="text" placeholder="Masukkan NPM"><br>';
        echo '<label>Tanggal Lahir</label><br>
                    <input type="date" placeholder="Masukkan Tanggal Lahir"><br>';
        echo '<label>Jenis Kelamin</label><br>
                    <input type="radio" class="form-check-input" name="jk" id="laki-laki">
                        <label class="form-check-label" for="laki-laki">Laki-laki</label>';
        echo '<input type="radio" class="form-check-input" name="jk" id="perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label><br>';
        echo '<label>Email</label><br>
                    <input type="text" placeholder="Masukkan Alamat E-mail" class="form-control">';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulir Mahasiswa</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Formulir Mahasiswa</h1>
    </div>

    <div class="row">
        <?php
        // Membuat objek FormMahasiswa
        $formMahasiswa = new FormMahasiswa();

        // Menampilkan formulir menggunakan objek FormMahasiswa
        $formMahasiswa->generateForm();
        ?>
    </div>
</body>
</html>
