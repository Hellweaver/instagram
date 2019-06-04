<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="card container" style="width: 15rem;">
	<img src="2.png" class="card-img-top">
<form method="POST" action="proverka.php">
    <input type="" name="email" placeholder="Эл. почта" style="border-radius: 5px">
    <input type="password" name="password" placeholder="Пароль" style="border-radius: 5px">
    <button class="btn btn-primary" type="submit">Войти</button>
  </form>
  <?php 
  echo $_GET['error'] ?>
</div>
</body>
</html>