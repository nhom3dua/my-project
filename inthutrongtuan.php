<!--Trần Thị Phương - 07DHTH4-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IN THỨ TRONG TUẦNt</title>
</head>
<?php
	$thu = $_POST["txtThu"];
	$ketqua = "";
	//---------------------------
	$thongbao = "";
	$ktra = true;
		if(($thu == "") || (!is_numeric($thu))  || ($thu < 1) || ($thu > 7)){
			$thongbao = "Nhập thứ là một số từ 1 đến 7!";
			$ktra = false;
		}
	
		if($ktra == true){
			switch($thu){
				case 1:
					$ketqua = "Sunday";
					break;
				case 2:
					$ketqua = "Monday";
					break;
				case 3:
					$ketqua = "Tuesday";
					break;
				case 4:
					$ketqua = "Webnesday";
					break;
				case 5:
					$ketqua = "Thursday";
					break;
				case 6:
					$ketqua = "Friday";
					break;
				case 7:
					$ketqua = "Saturday";
					break;
				default:
					break;
			}
		}
?>
<body>
	<form name "frm_Tong_Hieu" method = "post" action = "inthutrongtuan.php">
		<table width="300" border="0" align="center" bgcolor="#00FA92" bordercolordark="#FF99FF">
			<tr align="center">
				<td colspan="2" bgcolor="#A166BD">IN THỨ TRONG TUẦN</td>
			</tr>
			<tr>
				<td>Nhập n: </td>
				<td><input name="txtThu" type="text" value="<?php echo $thu; ?>" /></td>
			</tr>
		
			<tr>
				<td>Kết quả: </td>
				<td><input name="txtKetQua" type="text" value="<?php echo $ketqua; ?>" readonly="readonly" /></td>
			</tr>
			
			<tr align="center">
				<td colspan="2"> <input name="submit" type="submit" value="Xem kết quả"/></td>
			</tr>
		</table>
	</form>
	<h3 style= "color:#006; text-align: center"> <?php echo $thongbao; ?></h3>
</body>
</html>




























