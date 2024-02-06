<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input form</title>
    <!-- <style type="text/css">
       body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            max-width: 400px;
            background-color: #5cb315;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #57a148,;
            color: #55cc83;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a082;
        }
</style -->
</head>
<body>
    <form name="Input1" method="post" action="#" target="_self" enctype="multipart/form-data">
        <label>Masukkan Nama Anda : </label>
        <input type="text" name="nama"><br>

        <label>Masukkan Umur Anda : </label>
        <input type="number" name="umur" required><br>

        <label>Masukkan Alamat Anda : </label>
        <input type="text" name="alamat" required>
        <input type="submit" name="submit" value="Kirim">
        <hr>
    </form>
</body>
</html>
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
