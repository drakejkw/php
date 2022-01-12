<!DOCTYPE html>
<html>
<head>
    <title>MIKLUHO MAKLAY PAPUA</title>
</head>

<body bgcolor=silver>
    <header>
		<img src="image/ymmp.jpg" alt="ini gambar" height="100" width="100" style="border-radius: 50%;"> <br>
		<img src="image/pusat.jpg" alt="ini gambar" height="100" width="100" style="border-radius: 50%;"><br>
		<h2 align=center>инновационный центр Пуапуа</h2>
        <h1 align=center>MIKLUHO MAKLAY PAPUA</h1>
        <h3 align=center>регистрация нового студента</h3>
    </header>
    <hr>
    <h4>меню</h4>
    <nav>
	
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

 <address><b>Alamat</b> :komp wolker perumnas 3 waena</address>
  <address><b>Contact person</b> : +6281240895859</address>
   <address><b>Email</b> :Mikluho-maklay@gmail.com</address>

    </body>
</html>
