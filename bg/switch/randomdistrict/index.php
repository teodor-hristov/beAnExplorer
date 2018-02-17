 <?php
 if($_SESSION['is-logged'] != true)
 {
 	header("Location: ./?p=login");
 }
 else
 {
$num = Rand (1,27);
switch ($num) {
case 1: header('Location: ./?p=blagoevgrad');
break;
case 2: header('Location: ./?p=burgas');
break;
case 3: header('Location: ./?p=varna');
break;
case 4: header('Location: ./?p=velikotyrnovo');
break;
case 5: header('Location: ./?p=vidin');
break;
case 6: header('Location: ./?p=vraca');
break;
case 7: header('Location: ./?p=gabrovo');
break;
case 8: header('Location: ./?p=dobrich');
break;
case 9: header('Location: ./?p=kyrjali');
break;
case 10: header('Location: ./?p=kyustendil');
break;
case 11: header('Location: ./?p=lovech');
break;
case 12: header('Location: ./?p=montana');
break;
case 13: header('Location: ./?p=pazarjik');
break;
case 14: header('Location: ./?p=pernik');
break;
case 15: header('Location: ./?p=pleven');
break;
case 16: header('Location: ./?p=plovdiv');
break;
case 17: header('Location: ./?p=razgrad');
break;
case 18: header('Location: ./?p=ruse');
break;
case 19: header('Location: ./?p=silistra');
break;
case 20: header('Location: ./?p=sliven');
break;
case 21: header('Location: ./?p=sofiq');
break;
case 21: header('Location: ./?p=starazagora');
break;
case 21: header('Location: ./?p=tyrgovishte');
break;
case 21: header('Location: ./?p=smolqn');
break;
case 22: header('Location: ./?p=haskovo');
break;
case 23: header('Location: ./?p=shumen');
break;
case 24: header('Location: ./?p=qmbol');
break;
}
}
?> 