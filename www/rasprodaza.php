<?php
include($_SERVER['DOCUMENT_ROOT']."/site_init.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Распродажа б/у мебели.</title>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<LINK href="/MyStyles.css" type="text/css" rel="stylesheet">
<meta name="description" content="Бывшая в употреблении мебель недорого.">
<meta name="keywords" content="мебель,не дорого,распродажа,бу">
<meta name="author" content="Смирнов Павел">
</head>
<body>
<?php $page="rasprodaza";
$menu="rasprodaza";
?>
<div class="main_div">
<div class="main_div2">
	<?php include ("$site_dir/templates/shapka.php");?>
	<table class="main_table">
		<tr>
			<td class="menu_td">
	            <div class="left_menu">
	            <?php include ("$site_dir/templates/leftmenu.php");
	            ?>
	        	</div>
	        </td>

			<td class="main_td">
				<div class="all_top">
	        	<?php include ("$site_dir/templates/all_top.php"); ?>
	        	</div>
	        	<div class="main">
	        	<h1>Распродажа б/у мебели.</h1>
<p></p>
	        	</div>
	        	<div class="all_bottom">
	        	<?php include ("$site_dir/templates/all_bottom.php");?>
	        	</div>
	        </td>
		</tr>
	</table>
	<?php include ("$site_dir/templates/podval.php"); ?>
</div>
</div>
</body>
</html>