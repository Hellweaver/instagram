<?php 
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
    $query = mysqli_query($connect, "SELECT * FROM posts INNER JOIN instagramm ON posts.users_id = instagramm.id ORDER BY posts.id DESC");
    $query2 = mysqli_query($connect, "SELECT * FROM instagramm WHERE id ='". $_GET['id'] ."'");
    $result = $query2->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
      <meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php echo $result['login'] ?>
<h2>Добавить новый инста пост:</h2>
<form method="POST" action="insert.php" enctype="multipart/form-data">
 	<input type="file" name="img">
 	<?php echo '<input type="hidden" name="users_id" value= "' . $result['id'] . '">'?>
 	<input type="text" name="text" placeholder="введите текст" style="border-radius: 5px">
	<button>Добавить</button>
</form>
</body>
</html>

<?php 
		for ($i=0; $i < $query->num_rows; $i++) { 
			$opa = $query->fetch_assoc();
?>
    <div class="col-3">
		<?php echo '<img  class="rounded-circle w-50" src="' . $opa['avatar'] . '">'?>
		<p><?php echo $opa['login'] ?></p>
	</div>
<?php
	echo '<div><img  class="img-fluid" src="' . $opa['img'] . '"></div>';
?>
	<div><p><?php echo $opa['text'] ?></p></div>
	<?php 
		}
	 ?>