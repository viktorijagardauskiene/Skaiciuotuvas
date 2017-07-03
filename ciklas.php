<?php
$a = 5;
$b = 4;
$c = 3;
$d = 6;

function generate($a,$b,$c,$d) {

for ($u = 0; $u < $d; $u++) {
	for ($i=0; $i < $a ; $i++) { 
		echo "X";
	}

	for ($n=0; $n < $b ; $n++) { 
		echo "Y";
	}
	for ($v=0; $v < $c ; $v++) { 
		echo "Z";
	}
	echo "<br />";
}


}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>
<?php
generate($a,$b,$c,$d);
?>



</body>
</html>