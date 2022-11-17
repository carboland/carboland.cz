<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
	echo "you have sended a POST request brah!!";
	echo "Fiel is ".$_POST['username'];
	die();
}
echo '<form method="POST"><table>';
echo '<tr><td>Username</td><td><input type="text" name="username" value="';
if(isset($_POST['username'])){
	echo htmlspecialchars($_POST['username']);
}
echo '" required autofocus></td></tr>';
echo '<tr><td>Password</td><td><input type="password" name="pass" required></td></tr>';
echo '<tr><td colspan="2"><input type="submit" value="Login"></td></tr>';
echo '</table></form>';
//echo file_put_contents("tttxt.txt",var_dump($_POST));
$cookie_name = "user";
$cookie_name2 = "user2";
$cookie_value = "JohnDoe";
$cookie_value2 = "Zdenek";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/"); // 86400 = 1 day
echo "<br/>";
$headers =  getallheaders();
foreach($headers as $key=>$val){
  echo $key . ': ' . $val . '<br>';
}
?>