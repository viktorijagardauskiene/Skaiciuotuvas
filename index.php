<?php include 'function.php';?> <!-- nuoroda i php funkcijas -->
<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="script.js"></script> <!-- nuoroda i JavaScript funkcijas -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="jumbotron container text-center">
                <h1 class="display-2"><?= $result; ?></h1>
            </div>
        </div>
        <div class="row">
            <form name="calc" class="form-inline" action="" onsubmit="return validate()">
                <!-- Sukuriame forma, kuri po submit paspaudimo gris i ta pati puslapi -->
                <!-- Elementu name="" atributas nurodo busimojo kintamojo pavadinima, o value="" to kintamojo reiksme -->
                <div class="col-md-4">
                    <input class="form-control form-control-lg" type="text" name="arg1" placeholder="Argument 1" id="a1"> <!-- Pirmas argumentas -->
                </div>
                <div class="col-md-2">
                    <select class="custom-select form-control form-control-lg" name="operation"> <!-- Operacija -->
                      <option value="add">Add</option>
                      <option value="sub">Subract</option>
                      <option value="mul">Multiply</option>
                      <option value="div">Divide</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input class="form-control form-control-lg" type="text" name="arg2" placeholder="Argument 2" id="a2"> <!-- Antras argumentas -->
                </div>
                <div class="col-md-2">
                    <!-- Vykdymo mygtukas -->
                    <input class="btn btn-lg btn-primary" type="submit" value="Calculate!">
                </div>

            </form>
             
             </div>
             <div class="row" style="height: 30px;">
             	<div class="col-md-12">
             	<pre>
             	<?php 
             	print_r($_GET);
             	echo "<br />";
             	?>
             	<?php if ($rezultatas_lyginis) {
             		echo "skaicius lyginis";
             	} else {
             		echo "skaicius nelyginis";
             	}
			echo "<br />";
             	if (($_GET['arg1'] == 5 && $_GET['arg2'] == 4 && $result != 20) || ($_GET['arg2'] == 5 && $_GET['arg1'] == 4 && $result != 20)) {
            	echo "Tai nebuvo daugyba";
            }
             	?>


             	</pre>
             </div>
        </div>
    </div>
     
</body>
</html>
 
