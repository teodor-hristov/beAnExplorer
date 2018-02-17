<?php  

if($_SESSION['is-logged'] != true) //is user logged checking
{
	?>
<form id="box" method="post" action="">
	<h2>Вход</h2>
	<br />
	<input id="text-box"  type="text" name="username" placeholder="Потребител" value="" maxlength="50"></input>
	<br /><br />
	<br />
	<input id="text-box" type="password" name="password" placeholder="Парола" value="" maxlength="50"></input>
	<br />
	<br />
	<button id="button" type="submit" name="log-me-in">Вход</button>
	<br />
	<font color="red">
<?php
if (isset($_POST['log-me-in'])) //member checking
{
 	$username = trim(htmlspecialchars($_POST['username']));
 	$password = md5(trim(htmlspecialchars($_POST['password'])));
 	$check = mysql_query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");
 	$num = mysql_num_rows($check);
 	if($num == 1)
 	{
 		$r = mysql_fetch_array($check);
 		$_SESSION['user'] = $r;
 		$_SESSION['is-logged'] = true;
 		header("Location: index.php?p=index");
 		exit;
 	}
 	else
 	{	
 		echo "Грешна парола или потребителско име.";
 	}
}
}
else{
	header("Location: ./?p=userpanel");
}
?>
</font>
<h5>Нямате профил? <a href="./?p=register">Регистрирайте</a> се днес! </h5>
<h5><a href="./?p=passrecovery">Забравена парола.</a></h5>
</form>

