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
  <div class="desc">Blagoevgrad</div>
</div>
<div class="district">
  <a href="index.php?p=burgas">
    <img src="img/burgas.jpg"  width="300" height="200">
  </a>
  <div class="desc">Burgas</div>
</div>
<div class="district">
  <a  href="index.php?p=varna">
    <img src="img/varna.jpg"  width="300" height="200">
  </a>
  <div class="desc">Varna</div>
</div>
<div class="district">
  <a  href="index.php?p=velikotyrnovo">
    <img src="img/velikotyrnovo.jpg"  width="300" height="200">
  </a>
  <div class="desc">Veliko Tarnovo</div>
</div>
<div class="district">
  <a  href="index.php?p=vidin">
    <img src="img/vidin.jpg"  width="300" height="200">
  </a>
  <div class="desc">Vidin</div>
</div>
<div class="district">
  <a  href="index.php?p=vraca">
    <img src="img/vraca.jpg"  width="300" height="200">
  </a>
  <div class="desc">Vratsa</div>
</div>
<div class="district">
  <a  href="index.php?p=gabrovo">
    <img src="img/gabrovo.jpg"  width="300" height="200">
  </a>
  <div class="desc">Gabrovo</div>
</div>
<div class="district">
  <a  href="index.php?p=dobrich">
    <img src="img/dobrich.jpg"  width="300" height="200">
  </a>
  <div class="desc">Dobrich</div>
</div>
<div class="district">
  <a  href="index.php?p=kyrjali">
    <img src="img/kyrjali.jpg"  width="300" height="200">
  </a>
  <div class="desc">Kyrdzhali</div>
</div>
<div class="district">
  <a  href="index.php?p=kyustendil">
    <img src="img/kyustendil.jpg"  width="300" height="200">
	</a>
  <div class="desc">Kyustendil</div>
</div>
<div class="district">
  <a  href="index.php?p=lovech">
    <img src="img/lovech.jpg"  width="300" height="200">
  </a>
  <div class="desc">Lovech</div>
</div>
<div class="district">
  <a  href="index.php?p=montana">
    <img src="img/montana.jpg"  width="300" height="200">
  </a>
  <div class="desc">Montana</div>
</div>
<div class="district">
  <a  href="index.php?p=pazarjik">
    <img src="img/pazarjik.jpg"  width="300" height="200">
  </a>
  <div class="desc">Pazardzhik</div>
</div>
<div class="district">
  <a  href="index.php?p=pernik">
    <img src="img/pernik.jpg"  width="300" height="200">
  </a>
  <div class="desc">Pernik</div>
</div>
<div class="district">
  <a  href="index.php?p=pleven">
    <img src="img/pleven.jpg"  width="300" height="200">
  </a>
  <div class="desc">Pleven</div>
</div>
<div class="district">
  <a  href="index.php?p=plovdiv">
    <img src="img/plovdiv.jpg"  width="300" height="200">
  </a>
  <div class="desc">Plovdiv</div>
</div>
<div class="district">
  <a  href="index.php?p=razgrad">
    <img src="img/razgrad.jpg"  width="300" height="200">
  </a>
  <div class="desc">Razgrag</div>
</div>
<div class="district">
  <a  href="index.php?p=ruse">
    <img src="img/ruse.jpg"  width="300" height="200">
  </a>
  <div class="desc">Ruse</div>
</div>
<div class="district">
  <a  href="index.php?p=silistra">
    <img src="img/silistra.jpg"  width="300" height="200">
  </a>
  <div class="desc">Silistra</div>
</div>
<div class="district">
  <a  href="index.php?p=sliven">
    <img src="img/sliven.jpg"  width="300" height="200">
  </a>
  <div class="desc">Sliven</div>
</div>
<div class="district">
  <a  href="index.php?p=smolqn">
    <img src="img/smolqn.jpg"  width="300" height="200">
  </a>
  <div class="desc">Smolqn</div>
</div>
<div class="district">
  <a  href="index.php?p=sofia">
    <img src="img/sofia.jpg"  width="300" height="200">
  </a>
  <div class="desc">Sofiq</div>
</div>
<div class="district">
  <a  href="index.php?p=starazagora">
    <img src="img/starazagora.jpg"  width="300" height="200">
  </a>
  <div class="desc">Stara Zagora</div>
</div>
<div class="district">
  <a  href="index.php?p=tyrgovishte">
    <img src="img/tyrgovishte.jpg"  width="300" height="200">
  </a>
  <div class="desc">Targovishte</div>
</div>
<div class="district">
  <a  href="index.php?p=haskovo">
    <img src="img/haskovo.jpg"  width="300" height="200">
  </a>
  <div class="desc">Haskovo</div>
</div>

<div class="district">
  <a  href="index.php?p=shumen">
    <img src="img/shumen.jpg"  width="300" height="200">
	</a>
  <div class="desc">Shumen</div>
</div>

<div class="district">
  <a  href="index.php?p=qmbol">
    <img src="img/qmbol.jpg"  width="300" height="200">
  </a>
  <div class="desc">Qmbol</div>
</div>
</table>
<?php
}
?>