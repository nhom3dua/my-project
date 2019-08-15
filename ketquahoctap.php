<!--Trần Thị Phương - 07DHTH4-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	$diemHK1 = $_POST["txtDiemHK1"];
	$diemHK2 = $_POST["txtDiemHK2"];
	
	$ketqua = "";
	$xeploai = "";
	//-------------------------
	$thongbao = "";
	$ktra = true;
		if(($diemHK1 == "") || (!is_numeric($diemHK1))){
			$thongbao = "Nhập điểm học kỳ 1 là một số!";
			$ktra = false;
		}
		else if(($diemHK2 == "") || (!is_numeric($diemHK2))){
				$thongbao = "Nhập điểm học kỳ 2 là một số!";
				$ktra = false;
		}
		if($ktra == true){
			$diemTB = (float)($diemHK1 + $diemHK2)/2;
			if($diemTB < 4)
			{
				$ketqua = "Ở lại";
				$xeploai = "Kém";
			}
			else if($diemTB < 5)
			{
				$ketqua = "Ở lại";
				$xeploai = "Yếu";
			}
			else if($diemTB < 7)
			{
				$ketqua = "Lên lớp";
				$xeploai = "Trung bình";
			}
			else if($diemTB < 8)
			{
				$ketqua = "Lên lớp";
				$xeploai = "Khá";
			}
			else 
			{
				$ketqua = "Lên lớp";
				$xeploai = "Giỏi";
			}
		}
?>
<body>
	<form name "frm_Tong_Hieu" method = "post" action = "ketquahoctap.php">
		<table width="300" border="0" align="center" bgcolor="#00FA92" bordercolordark="#FF99FF">
			<tr align="center">
				<td colspan="2" bgcolor="#A166BD">KẾT QUẢ HỌC TẬP</td>
			</tr>
			<tr>
				<td>Điểm học kỳ 1: </td>
				<td><input name="txtDiemHK1" type="text" value="<?php echo $diemHK1; ?>" /></td>
			</tr>
			<tr>
				<td>Điểm học kỳ 2: </td>
				<td><input name="txtDiemHK2" type="text" value="<?php echo $diemHK2; ?>" /></td>
			</tr>
			<tr>
				<td>Điểm trung bình: </td>
				<td><input name="txtDiemTB" type="text" value="<?php echo $diemTB; ?>" readonly="readonly" /></td>
			</tr>
			<tr>
				<td>Kết quả: </td>
				<td><input name="txtKetQua" type="text" value="<?php echo $ketqua; ?>" readonly="readonly" /></td>
			</tr>
			<tr>
				<td>Xếp loại: </td>
				<td><input name="txtXepLoai" type="text" value="<?php echo $xeploai; ?>" readonly="readonly" /></td>
			</tr>
			<tr align="center">
				<td colspan="2"> <input name="submit" type="submit" value="Xem kết quả"/></td>
			</tr>
		</table>
	</form>
	<h3 style= "color:#006; text-align: center"> <?php echo $thongbao; ?></h3>
</body>
</html>