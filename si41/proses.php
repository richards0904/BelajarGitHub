<?php
if(isset($_POST['submitform'])){
    $a1 = $_POST['nilai1'];
    $a2 = $_POST['nilai2'];
    echo "Angka 1 Adalah ".$a1;
    echo "<br>";
    echo "Angka 2 adalah ".$a2;
    if (isset($_POST['attributes'])) {
        $a3 = $_POST['attributes'];
        foreach ($a3 as $tampil) {
            echo "<br>" . $tampil;
        }
    }
}
class Nilai{
    public $hasil;
    public function setNilai($nilai){
        if($nilai>55){
            $this->hasil="Lulus";
        }else{
            $this->hasil="Tidak Lulus";        
        }
    } 
}
$objek1 = new Nilai();
$objek1 -> setNilai($a1);
echo $objek->hasil;
?>