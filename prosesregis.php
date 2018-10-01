<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$komen=$_POST['komen'];
$jumlah= count(explode(" ", $komen));

echo "<h1> HASIL INPUTAN </h1>";
echo "NIM: $nim <br /> Nama: $nama <br /> Email: $email <br /> Jumlah Kata: $jumlah <br /> Komentar: $komen  ";

if ($jumlah < 5) {
	echo "<br><br>kurang atuh";
}
else
{
die("<br><br>$komen");
}
?>
