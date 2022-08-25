<!DOCTYPE html>
<html>
<head>
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Halo, Selamat Datang <?= $_["nama"]; ?></h1>
<?php endif; ?>

<form action="latihan4post.php" method="post">
    Masukan nama :
    <input type="text" name="nama">
    <br>
    <button type="submit">Kirim!</button>
</form>

</body>
</html> 