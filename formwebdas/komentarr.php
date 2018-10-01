<?php
$kom = $_POST['kom'];

if (count(explode(" ", $kom)) < 5) {
	?>
	<script>
		alert ("Komentar yang anda masukan terlalu pendek");
		location = "komentar.php"
	</script>
<?php
}else echo "Komentar : $kom";
?>