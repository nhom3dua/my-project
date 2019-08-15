<!--Trần Thị Phương - 07DHTH4-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php 
	$a = $_POST["txtA"];
	$b = $_POST["txtB"];
	$ketqua = "";
	//-------------------
	$thongbao = "";
	$ktra = true;
		if(($a == "") || (!is_numeric($a))){
			$thongbao = "Nhập a là một số!";
			$ktra = false;
		}
		else if(($b== "") || (!is_numeric($b))){
				$thongbao = "Nhập b là một số!";
				$ktra = false;
		}
		if($ktra == true)
		{
			if($a == 0)
			{
				if($b == 0)
					$ketqua = "Phương trình vô số nghiệm";
				else 
					$ketqua = "Phương trình vô nghiệm";
			}
			else
				$ketqua = "Phương trình có nghiệm x = ".(float)-$b/$a;
		}
?>
<body>
<form name "frm_Tong_Hieu" method = "post" action = "phuongtrinhbac1.php">
		<table width="500" height= "150" border="0" align="center" bgcolor="#DEB104" bordercolordark="#FF99FF">
			//<tr align="center" >
				<td colspan="4" height= "50" bgcolor="#9D994A">GIẢI PHƯƠNG TRÌNH BẬC NHẤT DẠNG AX + B = 0 </td>
			</tr>
			
			<tr>	
					
				<td width="20"><input name="txtA" type="text" value="<?php echo $a; ?>" /></td>
				<td width="20">X + </td>
				<td width="20"><input name="txtB" type="text" value="<?php echo $b; ?>" /></td>
				<td width="20"> = 0</td>
			</tr>
			
			
			<tr align="center">
				<td colspan="4"> <input name="submit" type="submit" value="Xem kết quả"/></td>
			</tr>
			
			<tr>
				<td><?php echo $ketqua; ?></td>
			</tr>
			
		</table>
	</form>
	<h3 style= "color:#006; text-align: center"> <?php echo $thongbao; ?></h3>
</body>
</html>












