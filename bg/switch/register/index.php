<?php 
if($_SESSION['is-logged'] != true) //is user logged checking
{
	?>
<form id="box" method="post" action="">
	<h2>Регистрация</h2>
	<br />
	<input id="text-box" placeholder="Потребител:" type="text" name="username" value="" maxlength="50"></input>
	<br />
	
	<br />
	<input id="text-box" placeholder="Парола:" type="password" name="password" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<input id="text-box" placeholder="Потвърди парола:" type="password" name="password2" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<select id="selection" name="area">
	<option value="0">Област</option>
	<option value="1">Благоевград</option>
	<option value="2">Бургас</option>
	<option value="3">Варна</option>
	<option value="4">Велико Търново</option>
	<option value="5">Видин</option>
	<option value="6">Враца</option>
	<option value="7">Габрово</option>
	<option value="8">Добрич</option>
	<option value="9">Кърджали</option>
	<option value="10">Кюстендил</option>
	<option value="11">Ловеч</option>
	<option value="12">Монтана</option>
	<option value="13">Пазарджик</option>
	<option value="14">Перник</option>
	<option value="15">Плевен</option>
    <option value="16">Пловдив</option>
	<option value="17">Разград</option>
	<option value="18">Русе</option>
	<option value="19">Силистра</option>
	<option value="20">Сливен</option>
	<option value="21">Смолян</option>
	<option value="22">София</option>
	<option value="23">Стара Загора</option>
    <option value="24">Търговище</option>
	<option value="25">Хасково</option>
	<option value="26">Шумен</option>
	<option value="27">Ямбол</option>
	</select>

	<br />

	<br />
	<input id="text-box" placeholder="Е-поща:" type="text" name="email" value="" maxlength="150"></input>
	<br />
	<br />

	<br />
	<input id="text-box" placeholder="Име" type="text" name="name" value="" minlength="3" maxlength="150"></input>
	<br />
	<br />

	<br />
	<input id="text-box" placeholder="Фамилия" type="text" name="surname" value="" maxlength="150"></input>
	<br />
	<br />

	
	<button id="button" type="submit" name="register-me">Регистрация</button>
	<br />
	<h5>Вече си създал профил? <a href="./?p=login">Влез</a> сега! </h5>
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