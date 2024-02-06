<?php
$nama = "";
$alamat = "";
$umur = 0 ;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = anti_inject($_POST['nama']);
    $alamat = anti_inject($_POST ['alamat']);
    $umur = anti_inject($_POST ['umur']);
}
function anti_inject($data){
    $data = trim($data); //mengahapus spasi kosong di kanan
    $data = stripslashes($data); //menghilangkan karakter 
    $data = htmlspecialchars($data); //menghilangkan simbol karakter khusus
    $data = preg_replace("/[^ a-zA-Z0-9]/","", $data);

    return $data;
}
echo "Nama Kamu    :".$nama."<br>";
echo "Alamat Kamu  :".$alamat."<br>";
echo "Umur Kamu    :".$umur."thn";

?>
