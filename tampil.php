<?php
if(isset($_get['sumbit'])){
    $nama=trim($_get['nama']);
}else{
    $nama="";
}
?>
<html>
    <head>
        <title>Tampil</title>
</head>
<body>
    <b>Welcome User : </b><b><?php echo $nama; ?></b>
</body>
</html>