<?php
$m1="";$m2="";$m3="";$m4="";$m5="";$m6="";$m7="";$m8="";$m9="";
$m31="";$m32="";$m33="";$m34="";$m35="";$m36="";$m37="";$m38="";$m39="";$m40="";$m41="";
$m81="";$m82="";$m83="";$m84="";$m85="";$m86="";
$menu_class="menulink";
$podmenu_class="podmenulink";
if($menu=="index") $m1="_ch";
if($menu=="kompaniya") $m2="_ch";

if($page=="mebel")$m3="_ch";
if($page=="shkaf-kupe")$m31="_ch";
if($page=="kuhni")$m32="_ch";
//Для Антураж:---------------------
if($page=="obed-grupp")$m40="_ch";
if($page=="peregorodki")$m41="_ch";
//----------------------------------
if($page=="detskie")$m33="_ch";
if($page=="gostinye")$m34="_ch";
if($page=="prihozie")$m35="_ch";
if($page=="barnie-stoiki")$m36="_ch";
if($page=="komp-stoli")$m37="_ch";
if($page=="ofisnaya-mebel")$m38="_ch";
if($page=="korpusnaya-mebel")$m39="_ch";

if($menu=="fotogalereya") $m4="_ch";
if($menu=="pokupatelyu") $m5="_ch";
if($menu=="zakaz") $m6="_ch";
if($menu=="kontakt") $m7="_ch";
if($menu=="o-mebeli") $m8="_ch";
if($page=="modul-mebel")$m81="_ch";
if($page=="mebel-ot-proizvoditelya")$m82="_ch";
if($page=="fasad_mdf")$m83="_ch";
if($page=="plenki-pvh")$m84="_ch";
if($page=="frezerovka")$m85="_ch";
if($page=="stoleshnica")$m86="_ch";
if($page=="rasprodaza")$m9="_ch";

echo("<a class=\"$menu_class$m1\" href=\"$www_path\">Мебель</a><br>\n");
echo("<a class=\"$menu_class$m2\" href=\"$www_path/kompaniya.php\">О компании</a><br>\n");
echo("<a class=\"$menu_class$m3\" href=\"$www_path/mebel.php\">Мебель на заказ</a><br>\n");
//if($menu=="mebel"){	echo("<div class=\"left_podmenu\">");	echo("&#8226; <a class=\"$podmenu_class$m31\" href=\"$www_path/shkaf-kupe.php\">Шкафы-купе</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m41\" href=\"$www_path/peregorodki.php\">Стеклянные перегородки</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m32\" href=\"$www_path/kuhni.php\">Кухни</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m40\" href=\"$www_path/obed-grupp.php\">Столы, обеденные группы</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m38\" href=\"$www_path/ofisnaya-mebel.php\">Офисная мебель</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m37\" href=\"$www_path/kompyuternie-stoli.php\">Компьютерные столы</a><br>\n");
    echo("&#8226; <a class=\"$podmenu_class$m33\" href=\"$www_path/detskaya.php\">Детские</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m34\" href=\"$www_path/gostinye.php\">Гостиные</a><br>\n");
    echo("&#8226; <a class=\"$podmenu_class$m35\" href=\"$www_path/prihozie.php\">Прихожие</a><br>\n");
    echo("&#8226; <a class=\"$podmenu_class$m36\" href=\"$www_path/barnie-stoiki.php\">Барные стойки</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m39\" href=\"$www_path/korpusnaya-mebel.php\">Другая мебель</a><br>\n");
    echo("</div>");//}
//echo("<a class=\"$menu_class$m9\" style=\"background:yellow;\" href=\"$www_path/rasprodaza.php\">Распродажа б/у мебели</a><br>\n");
echo("<a class=\"$menu_class$m4\" href=\"$www_path/fotogalereya.php\">Фотогалерея</a><br>\n");
echo("<a class=\"$menu_class$m6\" href=\"$www_path/zakaz.php\">Заказать</a><br>\n");
echo("<a class=\"$menu_class$m7\" href=\"$www_path/kontakt.php\">Контакты</a>\n");
echo("<hr>");
echo("<a class=\"$menu_class$m8\" href=\"$www_path/o-mebeli.php\">Статьи и советы</a>\n");
?>
<div class="new_links">
<b>Кухни:</b><br>
&#8226; <a href="/sovet/uhod-za-kuhnei.php">Советы по уходу за кухонной мебелью.</a><br>
&#8226; <a href="/sovet/cvet-kuhni.php">Как выбрать цвет кухни.</a><br>
&#8226; <a href="/sovet/vibor-kuhni-na-zakaz.php">Выбор кухни на заказ.</a><br>
&#8226; <a href="/sovet/zakaz-kuhni.php">Как заказывают кухню.</a><br>
&#8226; <a href="/sovet/malenkie-kuhni.php">Мебель для маленькой кухни.</a><br>
<br><b>Шкафы-купе:</b><br>
&#8226; <a href="/sovet/kak-vibrat-shkaf-kupe.php">Как выбрать шкаф-купе.</a><br>
&#8226; <a href="/napolnenie-shkafa-kupe.php">Наполнение шкафа-купе.</a><br>
&#8226; <a href="/sovet/vstroenniy-ili-korpusniy.php">Встроенный или корпусный?</a><br>
&#8226; <a href="/sovet/radiusnye-shkafi-kupe.php">Радиусные шкафы-купе.</a><br>
&#8226; <a href="/sovet/uhod-za-shkafom-kupe.php">Уход за шкафом-купе.</a><br>
<br><b>Офисная мебель:</b><br>
&#8226; <a href="/sovet/ofisnaya-mebel-na-zakaz.php">Мебель для офиса на заказ.</a><br>
&#8226; <a href="/sovet/cvet-ofisnoi-mebeli.php">Выбираем цвет для офиса.</a><br>
<br><b>О мебели:</b><br>
&#8226; <a href="/sovet/mebel-v-arhangelske.php">Как купить мебель в Архангельске.</a><br>
&#8226; <a href="/sovet/mdf-i-laminat.php">МДФ и ламинат - основа современной мебели.</a><br>
&#8226; <a href="/sovet/mebel-na-zakaz.php">Заказать или купить готовую?</a><br>
&#8226; <a href="/sovet/modulnaya-ili-vstroennaya.php">Модульная или встроенная, какую выбрать?</a><br>
&#8226; <a href="/sovet/patinirovanie-krakolet.php">Патинирование. Краколет.</a><br><br>
</div>
