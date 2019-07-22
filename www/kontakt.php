<?php
include($_SERVER['DOCUMENT_ROOT']."/site_init.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Контактная информация. Схема проезда в Архангельске. Контакты.</title>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<LINK href="/MyStyles.css" type="text/css" rel="stylesheet">
<meta name="description" content="Телефоны, адрес, контактная информация о компании. Схема проезда. Контактные телефоны.">
<meta name="keywords" content="телефон,контакная информация,схема,проезда,адрес,мебель,заказать,купить,архангельск,производство,изготовление,модуль,модульная,магазины,продажа,детская,кухни,шкаф-купе,стол,компьютерный,прихожая,спальня">
<meta name="author" content="Смирнов Павел">
</head>
<body>
<?php $page="kontakt";
$menu="kontakt";
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
	        	<h1>Контактная информация.</h1>
<p>Компания <?php echo($company_name);?> занимается изготовлением корпусной мебели на заказ. Если вы хотите заказать <a href="http://www.arhangelsk-mebel.ru/kuhni.php">кухню в Архангельске</a>, шкаф купе или другую корпусную мебель, вы всегда можете связаться с нами по телефону или электронной почте. Мы всегда ответим на ваши вопросы, проконсультируем вас в вопросах изготовления мебели на заказ и поможем определиться с выбором модели, цвета, фактуры и размера мебели.
</p>
<p>Наши контактные данные:
</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Вопросы по заказу мебели: <span class="tel_text"><?php echo("$kontakt_tel");?></span>
</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Любые вопросы: <?php echo("<a class=\"blue\" href=\"mailto:$my_email?subject=Заказ мебели\">$my_email</a>");?>
</p>
<br>Как нас найти:<br>
<div>
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=eHYV7Ptb4sZ_kXxGdzthf82eoAmXA_-s&width=600&height=450"></script>
</div>



	        	</div>
	        	<div class="all_bottom">
	        	<?php include ("$site_dir/templates/all_bottom.php"); ?>
	        	</div>
	        </td>
		</tr>
	</table>
	<?php include ("$site_dir/templates/podval.php"); ?>
</div>
</div>
</body>
</html>