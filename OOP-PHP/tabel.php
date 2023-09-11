<?php
// Membuat kelas MahasiswaTable
class MahasiswaTable {
    // Properti untuk menyimpan data mahasiswa
    private $mahasiswaData;

    // Konstruktor untuk menginisialisasi properti
    public function __construct($mahasiswaData) {
        $this->mahasiswaData = $mahasiswaData;
    }

    // Metode untuk menghasilkan tabel HTML
    public function generateTable() {
        echo '<table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="max-width: 10px">NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Fakultas</th>
                        <th>Jurusan</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>';
        
        // Loop melalui data mahasiswa dan menambahkannya ke dalam tabel
        foreach ($this->mahasiswaData as $mahasiswa) {
            echo '<tr>
                    <td>' . $mahasiswa['NPM'] . '</td>
                    <td>' . $mahasiswa['Nama_Mahasiswa'] . '</td>
                    <td>' . $mahasiswa['Fakultas'] . '</td>
                    <td>' . $mahasiswa['Jurusan'] . '</td>
                    <td>' . $mahasiswa['Tanggal_Lahir'] . '</td>
                    <td>' . $mahasiswa['Email'] . '</td>
                    <td>' . $mahasiswa['Jenis_Kelamin'] . '</td>
                </tr>';
        }

        echo '</tbody>
            </table>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mahasiswa Table</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Tabel Mahasiswa</h1>
    </div>

    <?php
    // Mengimpor (require) kelas MahasiswaTable dari file eksternal
    require_once 'tabel.php';

    // Data mahasiswa
    $mahasiswaData = [
        [
            'NPM' => 'G1A021008',
            'Nama_Mahasiswa' => 'Elisa',
            'Fakultas' => 'Teknik',
            'Jurusan' => 'S1 Informatika',
            'Tanggal_Lahir' => '4-6-2004',
            'Email' => 'elisamv@gmail.com',
            'Jenis_Kelamin' => 'Perempuan'
        ],
        [
            'NPM' => 'G1A021050',
            'Nama_Mahasiswa' => 'Fakhri',
            'Fakultas' => 'Teknik',
            'Jurusan' => 'S1 Informatika',
            'Tanggal_Lahir' => '15-3-2004',
            'Email' => 'payiell@gmail.com',
            'Jenis_Kelamin' => 'Laki-laki'
        ],
        [
            'NPM' => 'G1A021100',
            'Nama_Mahasiswa' => 'Dora',
            'Fakultas' => 'Teknik',
            'Jurusan' => 'S1 Informatika',
            'Tanggal_Lahir' => '28-9-2004',
            'Email' => 'anakfakhri@gmail.com',
            'Jenis_Kelamin' => 'Perempuan'
        ],
    ];

    // Membuat objek MahasiswaTable
    $mahasiswaTable = new MahasiswaTable($mahasiswaData);

    // Menampilkan tabel menggunakan objek MahasiswaTable
    $mahasiswaTable->generateTable();
    ?>

</body>
</html>
