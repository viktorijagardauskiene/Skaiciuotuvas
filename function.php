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
                //print_simbols($result);
            break;
            case "sub":
                $result = $_GET['arg1'] - $_GET['arg2'];
            break;
            case "mul":
                $result = $_GET['arg1'] * $_GET['arg2'];
                staciakampis($_GET['arg1'], $_GET['arg2']);
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

    $rezultatas_lyginis = false; // rezultata issaukia index faile apacioje (apie 50 eilute)
    if ($result %2 == 0) {
        $rezultatas_lyginis = true;
    } else {
        $rezultatas_lyginis = false;
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

function staciakampis($a, $b) {
    $h = 0;
    
        // sugalvoti kaip panaudoti antra for funkcija kad atspausdintu staciakampi
        for ($i=0; $i < $a ; $i++) { 
        echo "#";

    }
    
        $h++;
        if ($h == $b) {
            echo "<br />";
            $hp =0;
        }
    }
       
?>
 