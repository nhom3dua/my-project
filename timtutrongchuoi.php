<!--Trần Thị Phương - 07DHTH4-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	$tu= $_POST["txtTu"];
	$chuoi= $_POST["txtChuoi"];
	
	//$kq= strpos($chuoi,$tu); //Hàm strpos($string, $needle): Tìm vị trí của chuỗi $needle trong chuỗi $string, kết quả trả về 							vị trí đầu tiên của $needle nếu tìm thấy và false nếu không tìm thấy.
	
	//------------------------------
	$thongbao = "";
	$ktra = true;
		if($tu == ""){
			$thongbao = "Nhập từ!";
			$ktra = false;
		}
		else if($chuoi == ""){
			$thongbao = "Nhập chuỗi!";
			$ktra = false;
		}
		
		if($ktra == true){
			$kq= strpos($chuoi,$tu);
			if ($kq !== false)
			{ 
				$kq= "Tìm thấy từ $tu trong chuỗi ở vị trí thứ $kq";
			}
			else $kq= "Không tìm thấy từ nào!";
		}
?>
<body>
	<form id="frm_timtutrongchuoi" name="timtutrongchuoi" method="post" action="timtutrongchuoi.php">
  		<table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#8C8C8C">
	  		<tr align="center">
	  			<td colspan="2" bgcolor="#CC80DF">TÌM TỪ TRONG CHUỖI</td>
			</tr>
			
			<tr>
				<td width="117" bgcolor="#99978E">Chuỗi:</td>
				<td width="298" bgcolor="#99978E"><input type="text" name="chuoi" value="<?php echo $chuoi;?>" /></td>
			</tr>
			
			<tr>
				<td  bgcolor="#99978E">Từ cần tìm:</td>
				<td bgcolor="#99978E"><input type="text" name="tu" value="<?php echo $tu;?>"/></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center" bgcolor="#8D860D"><input name="submit" type="submit" value="Xem kết quả" /></td>
			</tr>

			<tr align="center">
				<td bgcolor="#99978E"></td>
				<td colspan="2" bgcolor="#99978E"><input type="text" name="kq"id="kq" value="<?php echo $kq;?>" size="40" /></td>
			</tr>
		</table>
	</form>
	<h3 style= "color:#006; text-align: center"> <?php echo $thongbao; ?></h3>
</body>
</html>