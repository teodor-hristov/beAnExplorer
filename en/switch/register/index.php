<?php 
if($_SESSION['is-logged'] != true) //is user logged checking
{
	?>
<form id="box" method="post" action="">
	<h2>Register</h2>
	<br />
	<input id="text-box" placeholder="Username:" type="text" name="username" value="" maxlength="50"></input>
	<br />
	
	<br />
	<input id="text-box" placeholder="Password:" type="password" name="password" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<input id="text-box" placeholder="Repeat password:" type="password" name="password2" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

 <select id="selection" name="area">
 <option value="1">District</option>
 <option value="1">Blagoevgrad</option>
 <option value="2">Burgas</option>
 <option value="3">Varna</option>
 <option value="4">Veliko Tarnovo</option>
 <option value="5">Vidin</option>
 <option value="6">Vratsa</option>
 <option value="7">Gabrovo</option>
 <option value="8">Dobrich</option>
 <option value="9">Kardzhali</option>
 <option value="10">Kyustendil</option>
 <option value="11">Lovech</option>
 <option value="12">Montana</option>
 <option value="13">Pazardzhik</option>
 <option value="14">Pernik</option>
 <option value="15">Pleven</option>
 <option value="16">Plovdiv</option>
 <option value="17">Razgrad</option>
 <option value="18">Ruse</option>
 <option value="19">Silistra</option>
 <option value="20">Sliven</option>
 <option value="21">Smolqn</option>
 <option value="22">Sofiq</option>
 <option value="23">Stara Zagora</option>
 <option value="24">Targovishte</option>
 <option value="25">Haskovo</option>
 <option value="26">Shumen</option>
 <option value="27">Qmbol</option>
 </select>

	<br />

	<br />
	<input id="text-box" placeholder="Е-mail:" type="text" name="email" value="" maxlength="150"></input>
	<br />
	<br />

	<br />
	<input id="text-box" placeholder="Name" type="text" name="name" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<br />
	<input id="text-box" placeholder="Surname" type="text" name="surname" value="" maxlength="150"></input>
	<br />
	<br />

	
	<button id="button" type="submit" name="register-me">Register</button>
	<br />
	<h5>Have an account? <a href="./?p=login">Sing in</a> now! </h5>
	<font color="red">


<?php
if(isset($_POST['register-me']))
{
	$username = trim(htmlspecialchars($_POST['username']));
	$password = md5(trim(htmlspecialchars($_POST['password'])));
	$password2 = md5(trim(htmlspecialchars($_POST['password2'])));  
	$email = trim(htmlspecialchars($_POST['email']));
	$area = trim(htmlspecialchars($_POST['area']));
	$name = trim(htmlspecialchars($_POST['name']));
	$surname = trim(htmlspecialchars($_POST['surname']));
	if($password !=$password2) //password confirmation
	{
		echo "Грешно повторена парола.";
	}
	else
	{

				if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) { //email validation
	     

	$check = mysql_query("SELECT `username` FROM `users` WHERE `username` = '$username'"); //member database checking
	$num = mysql_num_rows($check);
	if ($num > 0)
	{
		echo "Има такъв потребител.";
	}
	else
	{
	mysql_query("INSERT INTO `users` (`username`,`password`,`email`,`area`,`name`,`surname`)VALUES('$username','$password','$email','$area', '$name', '$surname')");
	header("Location: ./?p=login");
	}

		} else {
		     echo("Имейл адресът: '$email' не е валиден ");
		}

	}
		echo mysql_error();
}
}
else
{
	header("Location: ./?p=userpanel");
}
?>
</font>
</form>