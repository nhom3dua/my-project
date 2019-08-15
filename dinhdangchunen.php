<!--Trần Thị Phương - 07DHTH4-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<?php
		$noidung = $_POST["txtNoiDung"];
		$mauchu = $_POST["txtMauNen"];
		$maunen = $_POST["txtMauChu"];
	?> 
<body>
<form id="form1" name="form1" method="post" action="dinhdangchunen.php">
  <table width="350" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#8C8C8C">
		
	<tr align="center">
	  <td colspan="2" bgcolor="#CC80DF">ĐỊNH DẠNG MÀU CHỮ VÀ MÀU NỀN</td>
	</tr>
			<tr>
				<td>Nhập nội dung</td>
				<td><input name="txtNoiDung" type="text" value="<?php echo $noidung; ?>" /></td>
			</tr>
			<tr>
				<td>Nhập màu nền</td>
				<td><input name="txtMauNen" type="text" value="<?php echo $maunen; ?>" /></td>

			</tr>
			<tr>
				<td>Nhập màu chữ</td>
				<td><input name="txtMauChu" type="text" value="<?php echo $mauchu; ?>"  /></td>
			</tr>
			
			<tr align="center">
				<td colspan="2"> <input name="submit" type="submit" value="Xem kết quả"/></td>
			</tr>
	</table>
  	<table width="350" border="0" align="center" cellpadding="2" cellspacing="2"bgcolor="#<?php echo $maunen;?>">
		<tr>
			<td align="center"> <font color="#<?php echo $mauchu;?>"><?php echo $noidung;?></font></td>
		</tr>
	</table>
  </form>


</body>
</html>
