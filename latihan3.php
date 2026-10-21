<?php
class Mahasiswa {
    
    private $nama;
    private $nim;
    private $prodi;

    public function __construct($nama, $nim, $prodi){
        $this->nama=$nama;
        $this->nim=$nim;
        $this->prodi=$prodi;
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

}

$mhs1 = new Mahasiswa(
    "Cherly Ma'rifatul Ulwiyah", 
    "202457201017", 
    "Sistem Informasi");

echo "NIM : ".$mhs1->getNim();
echo "<br>";
echo "Nama : ".$mhs1->getNama();
echo "<br>";
echo "Program Studi : ".$mhs1->getProdi();
?>