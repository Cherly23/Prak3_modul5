<?php
class Mahasiswa {
    
    private $nama;
    private $nim;
    private $prodi;
    private $nilai;

    public function __construct($nama, $nim, $prodi){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function setNilai($nilai){
        if($nilai >= 0 && $nilai <= 100){
            $this->nilai = $nilai;
        } else {
            echo "<b>Peringatan:</b> Nilai harus berada antara 0 sampai 100.<br>";
            $this->nilai = 0; // Memberikan nilai aman jika input tidak valid
        }
    }

    public function getGrade(){
        // Menggunakan nilai dari properti objek langsung
        $nilai = $this->nilai;
        
        if($nilai >= 80){
            return "A";
        } else if($nilai >= 70){
            return "B";
        } else if($nilai >= 60){
            return "C";
        } else if($nilai >= 50){
            return "D";
        } else {
            return "E";
        }
    }

    public function getNama(){
        return $this->nama;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getProdi(){
        return $this->prodi;
    }

    public function getNilai(){
        return $this->nilai;
    }
}

// Contoh Penggunaan
$mhs1 = new Mahasiswa("Cherly Ma'rifatul Ulwiyah", "202457201017", "Sistem Informasi");

// Coba masukkan nilai valid
$mhs1->setNilai(95);

// Jika Anda mencoba memasukkan nilai > 100 (Contoh: $mhs1->setNilai(110);), 
// maka akan memicu pesan peringatan.

echo "NIM : " . $mhs1->getNim() . "<br>";
echo "Nama : " . $mhs1->getNama() . "<br>";
echo "Program Studi : " . $mhs1->getProdi() . "<br>";
echo "Nilai : " . $mhs1->getNilai() . "<br>";
echo "Grade : " . $mhs1->getGrade() . "<br>";
?>