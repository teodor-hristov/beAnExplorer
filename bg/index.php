<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
session_start();
ob_start();
require_once "conf.php";
  ?>
<html>
  <head>
		<title>BeAnExplorerOfBulgaria</title>
    	<link rel="icon" type="image/ico" href="favicon.ico">
		  <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css"/>
    	<script type="text/javascript" charset="utf-8" src="scripts/scripts.js" ></script>
		  <meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
    	<meta charset="utf-8">
    	 	<style>
	 	       @font-face { font-family: Stylo; src: url('stylo.ttf'); } 
		        body {
		      font-family: Stylo
			</style>
  </head>
  <body>
  <center>
  <img src="img/bg.jpg" id="full-screen-background-image">
  			<div class="header">
          <a href="../en/?p=index" style="float:left;">
          <img src="img/en.jpg" style="height:20px; width:30px; position: static;" class="social">
          </a>
          <a href="./?p=index" style="text-decoration: none;">
  				<h1><big><big><span>BeAnExplorerOfBulgaria</span></big></big></h1>
          </a>
  			</div>

 <!-- Start of navigation menu -->
<ul >
  <li><a href="./?p=index">Начало</a></li>
  <li><a href="./?p=district">Области</a></li>
  <li><a href="./?p=randomdistrict">Случайна област</a>
  <li><a href="./?p=gallery">Галерия</a></li>

  

  											<!--Start Logged user checking-->
<?php 
if($_SESSION['is-logged'] != true)
{
?>
          <li style="float:right;"><a href="index.php?p=register">Регистрация</a></li>
  				<li style="float:right;"><a href="index.php?p=login" >Вход</a></li></ul>



<?php
}
else
{
	?>

				<li style="float:right;"><a href="index.php?p=logout">Изход</a></li>
        <li style="float:right;"><a href="index.php?p=userpanel">Потребителски панел</a>
        <li  style="float:right;"><a>Здравей,<?php echo $_SESSION['user']['username']; ?></a></li>
        <li  style="float:right;"> 
        <?php
      $avatar = $_SESSION['user']['avatar']; //avatar 
      if($avatar > 0)
        {
          echo '<img src=".$avatar." height="30px" width="30px" style="margin:2px; border: 2px solid;" />';
        } 
        else
        {
          echo '<img src="img/avatar.jpg" height="30px" width="30px" style="margin:2px; border: 2px solid;" />';
        }
        ?>
        </li>
    </li>
        </ul>


				<?php
}
?>
			</div>
											<!-- End of navigation menu -->

									   <!--End of logged user checking-->

                     <!--  Start of social links -->
  <a href="https://www.facebook.com/Beanexplorerofbulgaria-1526163811012279/?skip_nax_wizard=true" target="_blank">
  <h2 class="social" style="background-color: #3b5998; right: 0;"><big>F</big></h2>
  </a>
  <a href="https://plus.google.com/" target="_blank">
  <h2 class="social" style="background-color: #DD4B39;"><big>G+</big></h2>
  </a>
                      <!-- End of social links -->
											<!-- Start of php switch -->
<?php
$p = $_GET['p'];
$file = "switch/".$p."/index.php";
if(file_exists($file))
{
  include $file;
}

else{
  include "switch/index/index.php";
}
?>

											<!-- End of PHP switch -->
			<div class="footer">
    			<footer>
    				    <p> Copyright &copy BeAnExplorerOfBulgaria <?php echo date("Y");?>. Всички права запазени.</p>
    			</footer>
    	</div>
      </center>
  </body>
</html>