<?php 
require_once "includes/hitung.php";
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Kalkulator</title>
</head>
<body>
<!-- Container -->
<div class="container">
<h2 class="judul">Kalkulator</h2>
<!-- Form input -->
<form action="index.php" method="POST">
<input type="text" name="bilangan1" class="bilangan" autocomplete="off" placeholder="Masukan Bilangan1">
<input type="text" name="bilangan2" class="bilangan" autocomplete="off" placeholder="Masukan Bilangan2">
<select class="opt" name="operator">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
<option value="%">%</option>
</select>
<button name="hitung" class="tombol">Hitung</button>
</form>
<!-- Hitung hasil input -->
<?php if(isset($_POST["hitung"])){?>
<input type="text" class="bilangan" value="Hasil dari <?php echo "$bilangan1 $operator $bilangan2 ="; ?> <?php echo $hasil; ?>">
<?php }else { ?>
<input type="text" class="bilangan" value="0">
<?php }?>

<!-- Author -->
<h2 class="author">Create by: Kuching</h2>
</div>
</body>
</html>