<?php 
if($_SESSION['is-logged'] != true)
{
  header("Location: ./?p=login");
}
else
{
?>
<table>
<div class="district">
<a href="index.php?p=blagoevgrad">
   <img  src="img/blagoevgrad.jpg"  width="300" height="200">
 </a>
  <div class="desc">Благоевград</div>
</div>
<div class="district">
  <a href="index.php?p=burgas">
    <img src="img/burgas.jpg"  width="300" height="200">
  </a>
  <div class="desc">Бургас</div>
</div>
<div class="district">
  <a  href="index.php?p=varna">
    <img src="img/varna.jpg"  width="300" height="200">
  </a>
  <div class="desc">Варна</div>
</div>
<div class="district">
  <a  href="index.php?p=velikotyrnovo">
    <img src="img/velikotyrnovo.jpg"  width="300" height="200">
  </a>
  <div class="desc">Велико Търново</div>
</div>
<div class="district">
  <a  href="index.php?p=vidin">
    <img src="img/vidin.jpg"  width="300" height="200">
  </a>
  <div class="desc">Видин</div>
</div>
<div class="district">
  <a  href="index.php?p=vraca">
    <img src="img/vraca.jpg"  width="300" height="200">
  </a>
  <div class="desc">Враца</div>
</div>
<div class="district">
  <a  href="index.php?p=gabrovo">
    <img src="img/gabrovo.jpg"  width="300" height="200">
  </a>
  <div class="desc">Габрово</div>
</div>
<div class="district">
  <a  href="index.php?p=dobrich">
    <img src="img/dobrich.jpg"  width="300" height="200">
  </a>
  <div class="desc">Добрич</div>
</div>
<div class="district">
  <a  href="index.php?p=kyrjali">
    <img src="img/kyrjali.jpg"  width="300" height="200">
  </a>
  <div class="desc">Кърджали</div>
</div>
<div class="district">
  <a  href="index.php?p=kyustendil">
    <img src="img/kyustendil.jpg"  width="300" height="200">
	</a>
  <div class="desc">Кюстендил</div>
</div>
<div class="district">
  <a  href="index.php?p=lovech">
    <img src="img/lovech.jpg"  width="300" height="200">
  </a>
  <div class="desc">Ловеч</div>
</div>
<div class="district">
  <a  href="index.php?p=montana">
    <img src="img/montana.jpg"  width="300" height="200">
  </a>
  <div class="desc">Монтана</div>
</div>
<div class="district">
  <a  href="index.php?p=pazarjik">
    <img src="img/pazarjik.jpg"  width="300" height="200">
  </a>
  <div class="desc">Пазарджик</div>
</div>
<div class="district">
  <a  href="index.php?p=pernik">
    <img src="img/pernik.jpg"  width="300" height="200">
  </a>
  <div class="desc">Перник</div>
</div>
<div class="district">
  <a  href="index.php?p=pleven">
    <img src="img/pleven.jpg"  width="300" height="200">
  </a>
  <div class="desc">Плевен</div>
</div>
<div class="district">
  <a  href="index.php?p=plovdiv">
    <img src="img/plovdiv.jpg"  width="300" height="200">
  </a>
  <div class="desc">Пловдив</div>
</div>
<div class="district">
  <a  href="index.php?p=razgrad">
    <img src="img/razgrad.jpg"  width="300" height="200">
  </a>
  <div class="desc">Разград</div>
</div>
<div class="district">
  <a  href="index.php?p=ruse">
    <img src="img/ruse.jpg"  width="300" height="200">
  </a>
  <div class="desc">Русе</div>
</div>
<div class="district">
  <a  href="index.php?p=silistra">
    <img src="img/silistra.jpg"  width="300" height="200">
  </a>
  <div class="desc">Силистра</div>
</div>
<div class="district">
  <a  href="index.php?p=sliven">
    <img src="img/sliven.jpg"  width="300" height="200">
  </a>
  <div class="desc">Сливен</div>
</div>
<div class="district">
  <a  href="index.php?p=smolqn">
    <img src="img/smolqn.jpg"  width="300" height="200">
  </a>
  <div class="desc">Смолян</div>
</div>
<div class="district">
  <a  href="index.php?p=sofia">
    <img src="img/sofia.jpg"  width="300" height="200">
  </a>
  <div class="desc">София</div>
</div>
<div class="district">
  <a  href="index.php?p=starazagora">
    <img src="img/starazagora.jpg"  width="300" height="200">
  </a>
  <div class="desc">Стара Загора</div>
</div>
<div class="district">
  <a  href="index.php?p=tyrgovishte">
    <img src="img/tyrgovishte.jpg"  width="300" height="200">
  </a>
  <div class="desc">Търговище</div>
</div>
<div class="district">
  <a  href="index.php?p=haskovo">
    <img src="img/haskovo.jpg"  width="300" height="200">
  </a>
  <div class="desc">Хасково</div>
</div>

<div class="district">
  <a  href="index.php?p=shumen">
    <img src="img/shumen.jpg"  width="300" height="200">
	</a>
  <div class="desc">Шумен</div>
</div>

<div class="district">
  <a  href="index.php?p=qmbol">
    <img src="img/qmbol.jpg"  width="300" height="200">
  </a>
  <div class="desc">Ямбол</div>
</div>
</table>
<?php
}
?>
