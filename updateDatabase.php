<?php
session_start();
include("connection.php");

$receptNev = $_POST['receptNev'];
$receptLeiras = $_POST['receptLeiras'];
$receptHozzavalok = $_POST['receptHozzavalok'];
$user_id = $_SESSION['id'];

$sql_statement = "INSERT INTO `receptek` (`felhasznalo_id`, `recept_nev`, `recept_hozzavalok`, `recept_leiras`) VALUES ('$user_id', '$receptNev', '$receptHozzavalok', '$receptLeiras');";

if (mysqli_query($link,$sql_statement)){
	$message = "Recept mentve!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("Location:recipes.php");
}else{
	echo mysqli_connect_error($link);
}
?>