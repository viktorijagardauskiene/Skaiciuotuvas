<?php
	if(isset($_GET['argumentas1']) && $_GET["argumentas1"] != null) { // null yra nieko, neturi reiksmes

		switch($_GET["operation"]) {
			case "sum":
				$rezultatas = $_GET["argumentas1"] + $_GET["argumentas2"]; 
			break;
			case "sub":
				$rezultatas = $_GET["argumentas1"] - $_GET["argumentas2"];
			break;
			case "mul":
				$rezultatas = $_GET["argumentas1"] * $_GET["argumentas2"];
			break;
			case "divi":
				$rezultatas = $_GET["argumentas1"] / $_GET["argumentas2"];
			break;
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
		
		<input type="text" name="argumentas1" placeholder="Argumentas 1" value="<?php echo $_GET['argumentas1']; ?>">  <!-- placeholder tai uzrasas kuris bus ant langelio, o value tai default reiksme kuri bus uzkrovus puslapi-->
		<select name="operation">
			<option value="sum">Add</option>
			<option value="sub">Subtract</option>
			<option value="mul">Multiply</option>
			<option value="divi">Divide</option>
		</select>
			<input type="text" name="argumentas2" placeholder="Argumentas 2">
			<input type="submit" value="Skaiciuok!">
	</form>


</body>
</html>

// namu darbai bootstrap
patikrinti ar yra ivesta reiksme argument 1, input gali tureti ID (javascript) getelementbyid form validation