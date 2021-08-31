<?php

$names = array("Henrik", "Pauline", "William", "Agnes", "Freya");
$arrayLength = count($names);

//Får error i CLI: PHP Notice:  Undefined offset: 5 in /home/runner/PHPTestingEnvironmentCLI/main.php on line 7
// for($x = 0; $x <= $arrayLength; $x++) {
//     echo "$names[$x]\r\n";
// }

//Löste det med hjälp av ett If statement som checkar av och stoppar om sista indexet är lika med NULL. Jag har då valt att sätta tomt där.
//Hittade lösning på https://www.geeksforgeeks.org/how-to-avoid-undefined-offset-error-in-php/
for($x = 0; $x <= $arrayLength; $x++) {
    if(isset($names[$x])) {
        echo "$names[$x]\r\n";
    }
    else {
        echo "";
    }
}