<?php
	include "database.php";
	$obj = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="save-data.php" method="post">
		<label>Name</label>
		<input type="text" name="sname"><br><br>

		<label>Age</label>
		<input type="number" name="sage"><br><br>

		<label>City</label>
		<select name="scity" id="">
			<?php
				$obj->select('citytb');
				$result = $obj->getResult();

				foreach ($result as list("cid"=>$cid,"cname"=>$cname)) {
					echo "<option value='$cid'>$cname</option>";
				}
			?>
			
		</select>	
		<br><br>
		<input type="submit" value="Save">
	</form>
</body>
</html>