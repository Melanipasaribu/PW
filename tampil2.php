<?php
$nama = $alamat = $umur = '';

if(isset($_REQUEST['submit'])){
    $nama = isset($_REQUEST['nama']) ? trim($_REQUEST['nama']) : '';
    $umur = isset($_REQUEST['umur']) ? trim($_REQUEST['umur']) : '';
    $alamat = isset($_REQUEST['alamat']) ? trim($_REQUEST['alamat']) : '';
}
?>
<html>
<head>
    <title>Welcome user</title>
    <style>
   body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .bungkus {
            max-width: 400px;
            margin: 50px auto; /* Center-align the form horizontally */
            background-color: #5cb315;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #fff;
            font-size: 36px; /* Increase the font size */
            margin-bottom: 20px;
        }

        b {
            display: block;
            margin-top: 20px;
            color: #fff;
            font-size: 18px;
            line-height: 1.6;
        }

        /* Optional: Add responsive styles */
        @media (max-width: 600px) {
            .bungkus {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="bungkus">
        <h1>Welcome User</h1>
        <b><?php echo "Nama :    $nama"; ?></b><br>
        <b><?php echo "Umur :    $umur"; ?></b><br>
        <b><?php echo "Alamat :    $alamat"; ?></b><br>
    </div>
</body>
</html>