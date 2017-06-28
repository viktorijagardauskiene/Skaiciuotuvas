<?php
	if(isset($_GET['argumentas1']) && $_GET["argumentas1"] != null) { // null yra nieko, neturi reiksmes

		switch($_GET["operation"]) {
			case "add":
				$rezultatas = intval($_GET["argumentas1"]) + intval($_GET["argumentas2"]);
			break;
			case "sub":
				$rezultatas = intval($_GET["argumentas1"]) - intval($_GET["argumentas2"]);
			break;
			case "mul":
				$rezultatas = intval($_GET["argumentas1"]) * intval($_GET["argumentas2"]);
			break;
			case "divi":
				$rezultatas = intval($_GET["argumentas1"]) / intval($_GET["argumentas2"]);
			break;
			default:
			
		}

		echo $rezultatas;
	} else {
		echo "Argumento1 nera";
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Skaiciuotuvas</title>
</head>
<body>
	<form action=""> <!-- grisim i ta pati puslapi, jei reik i kita nurodom kita sukurta puslapi-->
		
		<input type="text" name="argumentas1">
		<select name = "operation">
			<option value="sum">Add</option>
			<option value="sub">Subtract</option>
			<option value="mul">Multiply</option>
			<option value="divi">Divide</option>
		</select>
			<input type="text" name="argumentas2">
			<input type="submit" value="Skaiciuok!">
	</form>


</body>
</html>