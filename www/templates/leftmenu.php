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
//��� �������:---------------------
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

echo("<a class=\"$menu_class$m1\" href=\"$www_path\">������</a><br>\n");
echo("<a class=\"$menu_class$m2\" href=\"$www_path/kompaniya.php\">� ��������</a><br>\n");
echo("<a class=\"$menu_class$m3\" href=\"$www_path/mebel.php\">������ �� �����</a><br>\n");
//if($menu=="mebel"){	echo("<div class=\"left_podmenu\">");	echo("&#8226; <a class=\"$podmenu_class$m31\" href=\"$www_path/shkaf-kupe.php\">�����-����</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m41\" href=\"$www_path/peregorodki.php\">���������� �����������</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m32\" href=\"$www_path/kuhni.php\">�����</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m40\" href=\"$www_path/obed-grupp.php\">�����, ��������� ������</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m38\" href=\"$www_path/ofisnaya-mebel.php\">������� ������</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m37\" href=\"$www_path/kompyuternie-stoli.php\">������������ �����</a><br>\n");
    echo("&#8226; <a class=\"$podmenu_class$m33\" href=\"$www_path/detskaya.php\">�������</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m34\" href=\"$www_path/gostinye.php\">��������</a><br>\n");
    echo("&#8226; <a class=\"$podmenu_class$m35\" href=\"$www_path/prihozie.php\">��������</a><br>\n");
    echo("&#8226; <a class=\"$podmenu_class$m36\" href=\"$www_path/barnie-stoiki.php\">������ ������</a><br>\n");
	echo("&#8226; <a class=\"$podmenu_class$m39\" href=\"$www_path/korpusnaya-mebel.php\">������ ������</a><br>\n");
    echo("</div>");//}
//echo("<a class=\"$menu_class$m9\" style=\"background:yellow;\" href=\"$www_path/rasprodaza.php\">���������� �/� ������</a><br>\n");
echo("<a class=\"$menu_class$m4\" href=\"$www_path/fotogalereya.php\">�����������</a><br>\n");
echo("<a class=\"$menu_class$m6\" href=\"$www_path/zakaz.php\">��������</a><br>\n");
echo("<a class=\"$menu_class$m7\" href=\"$www_path/kontakt.php\">��������</a>\n");
echo("<hr>");
echo("<a class=\"$menu_class$m8\" href=\"$www_path/o-mebeli.php\">������ � ������</a>\n");
?>
<div class="new_links">
<b>�����:</b><br>
&#8226; <a href="/sovet/uhod-za-kuhnei.php">������ �� ����� �� �������� �������.</a><br>
&#8226; <a href="/sovet/cvet-kuhni.php">��� ������� ���� �����.</a><br>
&#8226; <a href="/sovet/vibor-kuhni-na-zakaz.php">����� ����� �� �����.</a><br>
&#8226; <a href="/sovet/zakaz-kuhni.php">��� ���������� �����.</a><br>
&#8226; <a href="/sovet/malenkie-kuhni.php">������ ��� ��������� �����.</a><br>
<br><b>�����-����:</b><br>
&#8226; <a href="/sovet/kak-vibrat-shkaf-kupe.php">��� ������� ����-����.</a><br>
&#8226; <a href="/napolnenie-shkafa-kupe.php">���������� �����-����.</a><br>
&#8226; <a href="/sovet/vstroenniy-ili-korpusniy.php">���������� ��� ���������?</a><br>
&#8226; <a href="/sovet/radiusnye-shkafi-kupe.php">��������� �����-����.</a><br>
&#8226; <a href="/sovet/uhod-za-shkafom-kupe.php">���� �� ������-����.</a><br>
<br><b>������� ������:</b><br>
&#8226; <a href="/sovet/ofisnaya-mebel-na-zakaz.php">������ ��� ����� �� �����.</a><br>
&#8226; <a href="/sovet/cvet-ofisnoi-mebeli.php">�������� ���� ��� �����.</a><br>
<br><b>� ������:</b><br>
&#8226; <a href="/sovet/mebel-v-arhangelske.php">��� ������ ������ � ������������.</a><br>
&#8226; <a href="/sovet/mdf-i-laminat.php">��� � ������� - ������ ����������� ������.</a><br>
&#8226; <a href="/sovet/mebel-na-zakaz.php">�������� ��� ������ �������?</a><br>
&#8226; <a href="/sovet/modulnaya-ili-vstroennaya.php">��������� ��� ����������, ����� �������?</a><br>
&#8226; <a href="/sovet/patinirovanie-krakolet.php">�������������. ��������.</a><br><br>
</div>
