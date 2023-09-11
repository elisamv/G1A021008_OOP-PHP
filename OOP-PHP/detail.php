<?php
// Membuat class Mahasiswa
class Mahasiswa {
    // Properti-Properti Mahasiswa
    private $npm;
    private $nama;
    private $fakultas;
    private $jurusan;
    private $tanggalLahir;
    private $email;
    private $jenisKelamin;

    // Konstruktor untuk inisialisasi objek Mahasiswa
    public function __construct($npm, $nama, $fakultas, $jurusan, $tanggalLahir, $email, $jenisKelamin) {
        $this->npm = $npm;
        $this->nama = $nama;
        $this->fakultas = $fakultas;
        $this->jurusan = $jurusan;
        $this->tanggalLahir = $tanggalLahir;
        $this->email = $email;
        $this->jenisKelamin = $jenisKelamin;
    }

    // Getter untuk mengambil nilai properti NPM
    public function getNpm() {
        return $this->npm;
    }

    // Getter untuk mengambil nilai properti Nama
    public function getNama() {
        return $this->nama;
    }

    // Getter untuk mengambil nilai properti Fakultas
    public function getFakultas() {
        return $this->fakultas;
    }

    // Getter untuk mengambil nilai properti Jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Getter untuk mengambil nilai properti Tanggal Lahir
    public function getTanggalLahir() {
        return $this->tanggalLahir;
    }

    // Getter untuk mengambil nilai properti Email
    public function getEmail() {
        return $this->email;
    }

    // Getter untuk mengambil nilai properti Jenis Kelamin
    public function getJenisKelamin() {
        return $this->jenisKelamin;
    }
}

// Data mahasiswa Elisa
$dataElisa = new Mahasiswa(
    'G1A021008',
    'Elisa',
    'Teknik',
    'S1 Informatika',
    '4-6-2004',
    'elisamv@gmail.com',
    'Perempuan'
);

// Contoh penggunaan data mahasiswa Elisa
echo '<h2>Detail Mahasiswa</h2>';
echo 'NPM: ' . $dataElisa->getNpm() . '<br>';
echo 'Nama: ' . $dataElisa->getNama() . '<br>';
echo 'Fakultas: ' . $dataElisa->getFakultas() . '<br>';
echo 'Jurusan: ' . $dataElisa->getJurusan() . '<br>';
echo 'Tanggal Lahir: ' . $dataElisa->getTanggalLahir() . '<br>';
echo 'Email: ' . $dataElisa->getEmail() . '<br>';
echo 'Jenis Kelamin: ' . $dataElisa->getJenisKelamin() . '<br>';

// Menambahkan tombol Edit dan Hapus
echo '<button onclick="editMahasiswa()">Edit</button>';
echo '<button onclick="hapusMahasiswa()">Hapus</button>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
</head>

</html>
