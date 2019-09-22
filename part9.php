<?php   
    ini_set('display_errors' 1);

$firstName = "Jane";   // string type variable
$lastName = "Doe";      // string type variable
$age = 35;              // integer type variable
$married = true;        // Boolean type variable
$childrenNames = array("Alice" , "Bob");   // Array type variable

$fullName = $firstName . " " . $lastName;       //concatenation operator
$dogYears = $age/7;                             //Arithmetic operator
$isAdult = $dogYears > 4:                       // Comparison operator
$isSettled = $isAdult and $married;            // Integer type variable

function getFullName($firstName, $lastName) {       // functionl name
    return $firstName . " " . $lastName;            // returned value
}

$fullName = getFullName($firstName, $lastName);     // using variables
$fullName = getFullName("Alice", "Doe");            // using variables

function getIsSettled($age, $married) {         // function name
    $dogYears = $age/7;
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $married;
    return $isSettled;                           //  return value
}
$isSettled = getIsSettled($age, $married);      //using variables
$isSettled = getIsSettled(5, false);            //using values

if ($isSettled) {
    echo $fullName . " is settled.";
} else {
    echo $fullName . " is not settled.";
}

echo $fullName

foreach($childrenNames as $childName) {
    echp "<li>" . $childName . "</li>";
}
?>
