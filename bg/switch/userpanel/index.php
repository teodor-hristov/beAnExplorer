	<div class="info">
	<?php
if($_SESSION['is-logged'] != true) //log in checking
{
	header("Location:./?p=login");
}
else
{

	?>
<table style="width: 90%;">
  <tr>
  	<td></td>
    <td id="title-box">Обща информация</td>
    <td style="width: 10%;"></td>
    <td id="title-box">Сайт информация</td> 

  </tr>
  <tr>
    <td>
    			<?php $avatar = $_SESSION['user']['avatar']; //avatar 
				if($avatar > 0)
				{
					echo '<img src=".$avatar." height="150px" width="150px" style="float: left; border: 2px solid;" />';
				}	
				else
				{
					echo '<img src="img/avatar.jpg" height="150px" width="150px" style="float: left; border: 2px solid;" />';
				}
				?>
    </td>
    <td>
    <h4><big>Профил:</big> <font color="#FF3333"><?php echo $_SESSION['user']['username'];?></font></h4>
	<h4><big>Електронна поща:</big> <font color="#FF3333"><?php echo $_SESSION['user']['email'];?></font></h4>
	<h4><big>Местожителство:</big> <?php echo $_SESSION['user']['area'];?></h4>
    </td>
    <td></td>

    <td>
    	<h4><big>Посетени области:</big><font color="red"><br />
 
		 <?php
		 $r = $_SESSION['user']['districts'];

		if($r > 0)
		{
				echo $_SESSION['user']['districts'];

		}
		else
		{
			echo "Не сте отбелязвали своите посещения! <br /> Отбележете ги от тук: ...";
		}

		 ?>
		 </font>
		 </h4>
	
<h4><big>Качени снимки:</big><font color="red"><br />
 
		 <?php
		 $r = $_SESSION['user']['images'];

		if($r > 0)
		{
				echo $_SESSION['user']['images'];

		}
		else
		{
			echo "Не сте качвали снимки! <br /> Добавете от тук:";
		}
}	


		 ?>
		 </font>
		 </h4>

    </td> 
  </tr>
</table>
</div>
</div>