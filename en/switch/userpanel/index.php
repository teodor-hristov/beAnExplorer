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
    <td id="title-box">Basic information</td>
    <td style="width: 10%;"></td>
    <td id="title-box">Website information</td> 

  </tr>
  <tr>
    <td>
    			<?php $avatar = $_SESSION['user']['avatar']; //avatar 
				if($avatar > 0)
				{
					echo '<img src=".$avatar." height="150px" width="150px" style="float: left; border: 2px solid #330000;" />';
				}	
				else
				{
					echo '<img src="img/avatar.jpg" height="150px" width="150px" style="float: left; border: 2px solid #330000;" />';
				}
				?>
    </td>
    <td>
    <h4><big>Username:</big> <font color="#FF3333"><?php echo $_SESSION['user']['username'];?></font></h4>
	<h4><big>Е-mail:</big> <font color="#FF3333"><?php echo $_SESSION['user']['email'];?></font></h4>
	<h4><big>Residence:</big> <?php echo $_SESSION['user']['area'];?></h4>
    </td>
    <td></td>

    <td>
    	<h4><big>Checked districts:</big><font color="red"><br />
 
		 <?php
		 $r = $_SESSION['user']['districts'];

		if($r > 0)
		{
				echo $_SESSION['user']['districts'];

		}
		else
		{
			echo "You haven't mark your visitations! <br /> Check them ..here..";
		}

		 ?>
		 </font>
		 </h4>
	
<h4><big>Uploaded images:</big><font color="red"><br />
 
		 <?php
		 $r = $_SESSION['user']['images'];

		if($r > 0)
		{
				echo $_SESSION['user']['images'];

		}
		else
		{
			echo "You haven't uploaded any images yet! <br /> Upload it ..here.. now";
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