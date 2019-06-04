<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
$delete = mysqli_query( $connect , "DELETE FROM instagramm WHERE id ='" . $_POST['id'] . "'");
header('Location: http://damirzabolotskiy/instagram/post.php');
$result = mysqli_query($connect, $query); ?>