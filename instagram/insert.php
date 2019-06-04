<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
	$query = mysqli_query($connect, "INSERT INTO posts (img, text, users_id) VALUES ('" . $_FILES['img']['name'] . "', '" . $_POST['text'] . "', '" . $_POST['users_id'] . "')");

	header('Location: http://damirzabolotskiy/instagram/post.php?id=' . $_POST['users_id']);
?>
