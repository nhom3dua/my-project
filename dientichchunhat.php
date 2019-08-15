<!--Trần Thị Phương - 07DHTH4-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	$dai = $_POST["txtChieuDai"];
	$rong = $_POST["txtChieuRong"];
	//------------------------------------
	$thongbao = "";
	$ktra = true;
		if(($dai == "") || (!is_numeric($dai))){
			$thongbao = "Nhập chiều dài là một số!";
			$ktra = false;
		}
		else if(($rong == "") || (!is_numeric($rong))){
				$thongbao = "Nhập chiều rộng là một số!";
				$ktra = false;
		}
		if($ktra == true)
			$dientich = $dai*$rong;
?>
<body>
	<form name "frm_Dien_Tich" method = "post" action = "dientichchunhat.php">
		<table width="300" border="0" align="center" bgcolor="#FF99FF" bordercolordark="#FF99FF">
			<tr align="center">
				<td colspan="2">DIỆN TÍCH HÌNH CHỮ NHẬT</td>
			</tr>
			<tr>
				<td>Nhập chiều dài</td>
				<td><input name="txtChieuDai" type="text" value="<?php echo $dai; ?>" /></td>
			</tr>
			<tr>
				<td>Nhập chiều rộng</td>
				<td><input name="txtChieuRong" type="text" value="<?php echo $rong; ?>" /></td>
			</tr>
			<tr>
				<td>Diện tích</td>
				<td><input name="txtDienTich" type="text" value="<?php echo $dientich; ?>" readonly="readonly" /></td>
			</tr>
			<tr align="center">
				<td colspan="2"> <input name="submit" type="submit" value="Tính"/></td>
			</tr>
		</table>
	</form>
	<h3 style= "color:#006; text-align: center"> <?php echo $thongbao; ?></h3>
</body>
</html>