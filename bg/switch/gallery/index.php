<?php 
if($_SESSION['is-logged'] != true)
{
	 header("Location: ./?p=login");
}
else
{
?>
<div id="container">
<img src="img/img1.jpg" id="img"/>
<div id="left_holder"><img onClick="slide(-1)" class="left" src="img/arrow_left.png"/></div>
<div id="right_holder"><img onClick="slide(1)" class="right" src="img/arrow_right.png"/></div>
</div>
<?php
}
?>