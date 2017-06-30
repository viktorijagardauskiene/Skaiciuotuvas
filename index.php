<?php
    if ($_GET['operation'] == "div" && $_GET['arg2'] == 0) {
    	echo "<div class='alert alert-danger' role='alert'> <strong>Dalyba iš nulio</strong> Change Argument 2 and try submitting again.</div>";
    }



    $result = 0;
    // Tikriname ar buvo perduoti kintamieji iš formos (paspausta)
    if (isset($_GET['operation'])) {    // jei perduota $_GET['operation'] reiksme ..
       
        switch($_GET['operation']) {    // switch pagalba ivykdom viena is keturiu galimu operaciju (add,sub,mul,div)
            case "add":
                $result = $_GET['arg1'] + $_GET['arg2'];
                print_simbols($result);
            break;
            case "sub":
                $result = $_GET['arg1'] - $_GET['arg2'];
            break;
            case "mul":
                $result = $_GET['arg1'] * $_GET['arg2'];
            break;
            case "div":
                if($_GET['arg2'] == 0) { // dalindami, patikriname ar daliklis (antras argumentas) nelygus nuliui
                    $result = "Division by zero!";
                } else { // jei ne..
                    $result = $_GET['arg1'] / $_GET['arg2'];
                }
            break;
            default:
        }
    }
    function print_simbols($times) { // sudeties atveju, atspausdins tiek vienetu groteliu kiek yra suma
    	for ($i = 0; $i <= $times; $i++) {
    		echo "#";
    	}

    	}
    	// Kitas budas:
    	// $i = 0;
    	// while ($i <= $times) {
    	//	echo "#";
    	//	$i++;
    	//}
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
    </div>
     
</body>
</html>
 
<script>
    // formos tikrinimas su JavaScript
    function validate() {
        var a1 = document.forms["calc"]["a1"].value; // gauname formoje, kurios name="calc", elemento, kurio id="a1", reksme
        var a2 = document.forms["calc"]["a2"].value; // antras argumentas
        if (a1==null || a2==null) { // jei bent vienas kintamasis neturi reiksmes
            alert("Error: Argument is missing!"); // pranesimas
            return false; // graziname FALSE reiksme taip neleisdami vykdyti formos
        }
    }

    
    
</script>