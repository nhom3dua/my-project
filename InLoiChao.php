<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IN LỜI CHÀO</title>
</head>
<?php
	$hoten = $_POST["txtHoten"];
	$loichao = "Chào bạn, ".$hoten;
?>
<body>
	<form name="frm_In_Loi_Chao" method = "post" action ="InLoiChao.php">
		<table width="400" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#00FF00">
			<tr align="center">
				<td colspan="2">IN LỜI CHÀO</td>
			</tr>
			<tr>
				<td>Nhập họ tên của bạn:</td>
				<td><input name="txtHoten" type="text" value="<?php echo $hoten; ?>" /></td>
			</tr>
			<tr align="center">
				<td colspan="2"> <?php echo $loichao; ?></td>
			</tr>
			<tr align="center">
				<td colspan="2"> <input name="submit" type="submit" value="Chào"/></td>
			</tr>
		</table>
	</form>
</body>
</html>