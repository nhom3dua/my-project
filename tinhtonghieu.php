<!--Trần Thị Phương - 07DHTH4-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TÍNH TỔNG HIỆU</title>
</head>
<?php
	$a = $_POST["txtSoA"];
	$b = $_POST["txtSoB"];
	//----------------------------
	$thongbao = "";
	$ktra = true;
		if(($a == "") || (!is_numeric($a))){
			$thongbao = "Nhập a là một số!";
			$ktra = false;
		}
		else if(($b == "") || (!is_numeric($b))){
				$thongbao = "Nhập b là một số!";
				$ktra = false;
		}
		if($ktra == true){
			$tong = $a + $b;
			$hieu = $a - $b;
		}
?>
<body>
	<form name "frm_Tong_Hieu" method = "post" action = "tinhtonghieu.php">
		<table width="300" border="0" align="center" bgcolor="#FF99FF" bordercolordark="#FF99FF">
			<tr align="center">
				<td colspan="2">TÍNH TỔNG HIỆU HAI SỐ</td>
			</tr>
			<tr>
				<td>Nhập số A</td>
				<td><input name="txtSoA" type="text" value="<?php echo $a; ?>" /></td>
			</tr>
			<tr>
				<td>Nhập số B</td>
				<td><input name="txtSoB" type="text" value="<?php echo $b; ?>" /></td>
			</tr>
			<tr>
				<td>Tổng</td>
				<td><input name="txtTong" type="text" value="<?php echo $tong; ?>" readonly="readonly" /></td>
			</tr>
			<tr>
				<td>Hiệu</td>
				<td><input name="txtHieu" type="text" value="<?php echo $hieu; ?>" readonly="readonly" /></td>
			</tr>
			<tr align="center">
				<td colspan="2"> <input name="submit" type="submit" value="Tính"/></td>
			</tr>
		</table>
	</form>
	<h3 style= "color:#006; text-align: center"> <?php echo $thongbao; ?></h3>
</body>
</html>