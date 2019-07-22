<?php
include($_SERVER['DOCUMENT_ROOT']."/site_init.php");

$message="";
if(isset($_POST['name'])&& isset($_POST['email']) && isset($_POST['telefon']) && isset($_POST['zakaz'])){
	$name=strip_tags(substr($_POST['name'],0,40));
    $email=strip_tags(substr($_POST['email'],0,40));
	$email=str_replace('\r\n',"_",$email);
	$email=str_replace('\r',"_",$email);
	$email=str_replace('\n',"_",$email);

	$telefon=strip_tags(substr($_POST['telefon'],0,40));
	$telefon=str_replace('\r\n',"_",$telefon);
	$telefon=str_replace('\r',"_",$telefon);
	$telefon=str_replace('\n',"_",$telefon);

	$zakaz=strip_tags(substr($_POST['zakaz'],0,1000));
	$zakaz="Заказ на мебель.\nОт: $name\nemail: $email\nтелефон: $telefon\n\n$zakaz";

    $headers="From: $email\r\n"
    	."Content-Type: text/plain; charset=\"windows-1251\"\r\n"
    	."MIME-Version: 1.0\r\n"
    	."Content-Transfer-Encoding: 8bit";

    $tema="$telefon заказ на мебель";
    $tema="=?windows-1251?b?".base64_encode($tema)."?=";

	mail("$my_email", "$tema", "$zakaz", "$headers");
    $message="Ваш заказ принят!<br><br><br> Мы свяжемся с вами в ближайшее время!<br>(обычно это происходит в течение дня)<br>";
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Заказать мебель в Архангельске. Сделать заказ на изготовление мебели. Форма для заказа мебели через интернет.</title>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<LINK href="/MyStyles.css" type="text/css" rel="stylesheet">
<meta name="description" content="Заказать изготовление корпусной мебели в Архангельске. Сделать заказ на изготовление мебели. Заказать кухню, шкаф-купе, детскую, прихожую, гостиную, компьютерную мебель, офисную мебель.">
<meta name="keywords" content="Заказать,сделать заказ,мебель,заказать,купить,архангельск,производство,изготовление,модуль,модульная,магазины,продажа,детская,кухни,шкаф-купе,стол,компьютерный,прихожая,спальня">
<meta name="author" content="Смирнов Павел">
<script type="text/javascript">
<!--
function ClearZakaz(){
	document.getElementById('zakaz_text').value="";
}
function check_zakaz(){
	if (document.forms[0].name.value == "") {
		alert('Введите ваше ИМЯ');
		document.forms[0].name.focus();
		return false;
	}
	if ((document.forms[0].telefon.value == "")&&(document.forms[0].email.value == "")) {
		alert('Укажите ваш е-майл или номер телефона');
		document.forms[0].telefon.focus();
		return false;
	}
	document.forms[0].send.disabled = true;
	return true;
}
// -->
</script>
</head>
<body>
<?php $page="zakaz";
$menu="zakaz";
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
	        	<?php if($message!=""){
                     echo("<div class=\"green_mess\"><br><br>$message<br><br><br><br><br></div>");
	        	}?>
	        	<h1>Заказать мебель.</h1>

<p>Чтобы заказать мебель достаточно позвонить по телефону:
</p>
<p class="bold"><?php echo("$kontakt_tel");?></p>
<p><br>написать письмо на <?php echo("<a class=\"blue\" href=\"mailto:$my_email?subject=Заказ мебели\">$my_email</a>");?>
</p>
<p><br>или заполнить форму заказа:
</p>
<div class="form_zakaz">
<FORM METHOD="post" ACTION="" NAME="zakaz" onSubmit="return check_zakaz();">
<div>Ваше имя:&nbsp&nbsp<input name="name" type="text" maxlength="40"><br><br></div>
<div>Ваш email:&nbsp<input name="email" type="text" maxlength="40"><br><br></div>
<div>Ваш телефон:&nbsp<input name="telefon" type="text" maxlength="40"><br><br></div>
<div><textarea id="zakaz_text" name="zakaz" cols="53" rows="7">Здесь напишите, что вы хотите заказать, например:
&laquo;Встроенный шкаф-купе размером 3х2 с зеркалами&raquo;

или:
&laquo;Хочу обычную кухонную мебель на кухню размером 6 кв.метров&raquo;</textarea></div>
<div class="float_left"><input type="button" value="Очистить" OnClick="ClearZakaz();"></div>
<div><input type="submit" name="send" value="Отправить"></div>
</FORM>
</div>
<p>Помните, что до <a href="http://www.arhangelsk-mebel.ru/dogovor-na-izgotovlenie-mebeli.php">заключения договора на изготовление мебели</a> вы в любой момент можете отказаться от наших услуг. Все консультации по телефону, выезд мастера на замеры - <span class="orange">абсолютно бесплатные услуги</span> и ни к чему вас не обязывают!
</p>
<p><br>Примерная последовательность действий при заказе мебели:
</p>
<div>
<ol>
<li><p>Вы звоните по телефону (пишите письмо или заполняете форму на сайте) и озвучиваете свое желание заказать мебель. При этом желательно сообщить как можно больше информации о том, какую мебель вы желаете, какого цвета, какой модели и другую информацию. Это не обязательно, т.к., возможно вы ещё не определились, но - желательно. Оставляете свои контактные данные.
</p></li>
<li><p>После этого вам, перезвонит наш сотрудник, и вы договоритесь с ним о встрече, когда лучше всего к вам подъехать, чтобы сделать замеры и уточнить конструкцию мебели.
</p></li>
<li><p>Вы встречаетесь в удобное для вас время с мастером. Он делает необходимые замеры помещения. Вы объясняете ему, что именно вы хотите сделать. Если необходимо, то договариваетесь с ним об еще одной встрече, на которую он принесет эскиз мебели.
</p></li>
<li><p>Вы встречаетесь с мастером второй раз. При этом у него на руках будет эскиз вашей мебели и просчитана стоимость заказа. На этой встрече вы обсуждаете и корректируете конструкцию мебели. Возможно, что-то вы сами измените, или мастер вам посоветует. Таким образом, изменяя комплектацию мебели, можно скорректировать и цену конечного изделия. На встрече вы обсудите все нюансы, подберете цвет, фактуру, размеры мебели, уточните место ее установки. В общем, на второй встрече вы сможете полностью определиться с выбором мебели, её размерами, комплектацией и ценой.<br>
</p>
<p>Если вам удалось полностью определиться с мебелью, то вы договариваетесь о форме оплаты - наличный или безналичный расчет, размер предоплаты, возможность отсрочки платежа и способы внесения оставшейся суммы. И, наконец, подписываете <a href="http://www.arhangelsk-mebel.ru/dogovor-na-izgotovlenie-mebeli.php">договор на изготовление мебели</a>.
</p></li>
<li><p>После того, как мебель будет готова, вам позвонят, и вы договоритесь о времени установки мебели.
</p></li>
</ol>
</div>
<p>Это лишь примерная последовательность действий связанных с заказом мебели. Всё это крайне индивидуально. Кто-то уже при первой встрече знает, что ему нужно и подписывает договор на изготовление мебели, а кому-то требуется больше времени, чтобы определиться с выбором, тогда возможно потребуются дополнительные встречи и консультации.
</p>
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