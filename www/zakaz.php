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
	$zakaz="����� �� ������.\n��: $name\nemail: $email\n�������: $telefon\n\n$zakaz";

    $headers="From: $email\r\n"
    	."Content-Type: text/plain; charset=\"windows-1251\"\r\n"
    	."MIME-Version: 1.0\r\n"
    	."Content-Transfer-Encoding: 8bit";

    $tema="$telefon ����� �� ������";
    $tema="=?windows-1251?b?".base64_encode($tema)."?=";

	mail("$my_email", "$tema", "$zakaz", "$headers");
    $message="��� ����� ������!<br><br><br> �� �������� � ���� � ��������� �����!<br>(������ ��� ���������� � ������� ���)<br>";
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>�������� ������ � ������������. ������� ����� �� ������������ ������. ����� ��� ������ ������ ����� ��������.</title>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<LINK href="/MyStyles.css" type="text/css" rel="stylesheet">
<meta name="description" content="�������� ������������ ��������� ������ � ������������. ������� ����� �� ������������ ������. �������� �����, ����-����, �������, ��������, ��������, ������������ ������, ������� ������.">
<meta name="keywords" content="��������,������� �����,������,��������,������,�����������,������������,������������,������,���������,��������,�������,�������,�����,����-����,����,������������,��������,�������">
<meta name="author" content="������� �����">
<script type="text/javascript">
<!--
function ClearZakaz(){
	document.getElementById('zakaz_text').value="";
}
function check_zakaz(){
	if (document.forms[0].name.value == "") {
		alert('������� ���� ���');
		document.forms[0].name.focus();
		return false;
	}
	if ((document.forms[0].telefon.value == "")&&(document.forms[0].email.value == "")) {
		alert('������� ��� �-���� ��� ����� ��������');
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
	        	<h1>�������� ������.</h1>

<p>����� �������� ������ ���������� ��������� �� ��������:
</p>
<p class="bold"><?php echo("$kontakt_tel");?></p>
<p><br>�������� ������ �� <?php echo("<a class=\"blue\" href=\"mailto:$my_email?subject=����� ������\">$my_email</a>");?>
</p>
<p><br>��� ��������� ����� ������:
</p>
<div class="form_zakaz">
<FORM METHOD="post" ACTION="" NAME="zakaz" onSubmit="return check_zakaz();">
<div>���� ���:&nbsp&nbsp<input name="name" type="text" maxlength="40"><br><br></div>
<div>��� email:&nbsp<input name="email" type="text" maxlength="40"><br><br></div>
<div>��� �������:&nbsp<input name="telefon" type="text" maxlength="40"><br><br></div>
<div><textarea id="zakaz_text" name="zakaz" cols="53" rows="7">����� ��������, ��� �� ������ ��������, ��������:
&laquo;���������� ����-���� �������� 3�2 � ���������&raquo;

���:
&laquo;���� ������� �������� ������ �� ����� �������� 6 ��.������&raquo;</textarea></div>
<div class="float_left"><input type="button" value="��������" OnClick="ClearZakaz();"></div>
<div><input type="submit" name="send" value="���������"></div>
</FORM>
</div>
<p>�������, ��� �� <a href="http://www.arhangelsk-mebel.ru/dogovor-na-izgotovlenie-mebeli.php">���������� �������� �� ������������ ������</a> �� � ����� ������ ������ ���������� �� ����� �����. ��� ������������ �� ��������, ����� ������� �� ������ - <span class="orange">��������� ���������� ������</span> � �� � ���� ��� �� ���������!
</p>
<p><br>��������� ������������������ �������� ��� ������ ������:
</p>
<div>
<ol>
<li><p>�� ������� �� �������� (������ ������ ��� ���������� ����� �� �����) � ����������� ���� ������� �������� ������. ��� ���� ���������� �������� ��� ����� ������ ���������� � ���, ����� ������ �� �������, ������ �����, ����� ������ � ������ ����������. ��� �� �����������, �.�., �������� �� ��� �� ������������, �� - ����������. ���������� ���� ���������� ������.
</p></li>
<li><p>����� ����� ���, ���������� ��� ���������, � �� ������������ � ��� � �������, ����� ����� ����� � ��� ���������, ����� ������� ������ � �������� ����������� ������.
</p></li>
<li><p>�� ������������ � ������� ��� ��� ����� � ��������. �� ������ ����������� ������ ���������. �� ���������� ���, ��� ������ �� ������ �������. ���� ����������, �� ��������������� � ��� �� ��� ����� �������, �� ������� �� �������� ����� ������.
</p></li>
<li><p>�� ������������ � �������� ������ ���. ��� ���� � ���� �� ����� ����� ����� ����� ������ � ���������� ��������� ������. �� ���� ������� �� ���������� � ������������� ����������� ������. ��������, ���-�� �� ���� ��������, ��� ������ ��� ����������. ����� �������, ������� ������������ ������, ����� ��������������� � ���� ��������� �������. �� ������� �� �������� ��� ������, ��������� ����, �������, ������� ������, �������� ����� �� ���������. � �����, �� ������ ������� �� ������� ��������� ������������ � ������� ������, � ���������, ������������� � �����.<br>
</p>
<p>���� ��� ������� ��������� ������������ � �������, �� �� ��������������� � ����� ������ - �������� ��� ����������� ������, ������ ����������, ����������� �������� ������� � ������� �������� ���������� �����. �, �������, ������������ <a href="http://www.arhangelsk-mebel.ru/dogovor-na-izgotovlenie-mebeli.php">������� �� ������������ ������</a>.
</p></li>
<li><p>����� ����, ��� ������ ����� ������, ��� ��������, � �� ������������ � ������� ��������� ������.
</p></li>
</ol>
</div>
<p>��� ���� ��������� ������������������ �������� ��������� � ������� ������. �� ��� ������ �������������. ���-�� ��� ��� ������ ������� �����, ��� ��� ����� � ����������� ������� �� ������������ ������, � ����-�� ��������� ������ �������, ����� ������������ � �������, ����� �������� ����������� �������������� ������� � ������������.
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