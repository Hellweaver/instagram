<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
$query = mysqli_query($connect, "INSERT INTO instagramm (email, name, login, password) VALUES ('". $_POST['email'] ."' , '". $_POST['name']."' , '".$_POST['login'] ."' , '". $_POST['password'] ."')");
mail($_POST['email'], $_POST['login'], $_POST['password']);
header('Location: http://damirzabolotskiy/instagram/autorisation.php'); 
?>