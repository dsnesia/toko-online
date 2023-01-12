<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$id_game = $_POST['id_game'];
	$phone = $_POST['phone'];

	$message = "Nama: ".$name."\nEmail: ".$email."\nID Game: ".$id_game."\nNomor HP: ".$phone;

	$url = "https://api.whatsapp.com/send?phone=6288220195739&text=".$message;

	header("Location: ".$url);
}
?>
