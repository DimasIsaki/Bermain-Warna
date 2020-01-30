<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bermain Warna</title>
</head>
<?php
    if(!empty($_GET["color"]))
    {
?>
    <style>
        body{
        background: <?php echo $_GET["color"]?>;
}
    </style>
<?php
}
?>
<body>
    <form action="" method="GET">
        <label>Pilih Background Warna</label><br>
        <input type="color" name="color"><hr>
        <button>Simpan</button>
    </form>
</body>
</html>