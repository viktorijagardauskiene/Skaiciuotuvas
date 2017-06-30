
    // formos tikrinimas su JavaScript
    function validate() {
        var a1 = document.forms["calc"]["a1"].value; // gauname formoje, kurios name="calc", elemento, kurio id="a1", reksme
        var a2 = document.forms["calc"]["a2"].value; // antras argumentas
        if (a1==null || a2==null) { // jei bent vienas kintamasis neturi reiksmes
            alert("Error: Argument is missing!"); // pranesimas
            return false; // graziname FALSE reiksme taip neleisdami vykdyti formos
        }
    }

    
