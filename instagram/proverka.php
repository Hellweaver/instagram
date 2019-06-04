<?php  
$connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
$query = mysqli_query($connect, "SELECT * FROM instagramm WHERE email ='". $_POST['email'] ."' AND password= '". $_POST['password'] ."'");
$id = $query->fetch_assoc();
if($query->num_rows == 0){
header('Location: http://damirzabolotskiy/instagram/autorisation.php?error=нет такого пользователя');
} else{
 header('Location: http://damirzabolotskiy/instagram/post.php?id=' . $id['id']);
}
?>