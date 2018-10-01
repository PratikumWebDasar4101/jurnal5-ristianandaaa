<?php

$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$email = $_POST['email'];

if (strlen($_POST['NIM'])>10) {
	?>
<script>
	alert("Karakter NIM terlalu panjang");
	location = "registrasi.php";
</script>
<?php
}
else echo "Nim: $nim<br>"; {
}
if (strlen($_POST['Nama'])>25) {
	?>
<script>
	alert("Karakter Nama terlalu panjang");
	location = "registrasi.php";
</script>
<?php
}
else echo "Nama: $nama<br>"; {
}
echo "Email: $email";
?>