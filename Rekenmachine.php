<?php

function getNumber($text) {
    return (float)readline($text);
}

function getOperation() {
    return readline("Geef een operator): ");
}

function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            return ($num2 != 0) ? $num1 / $num2 : "Je kan niet delen door 0";
        default:
            return "Slechte operator is ingevoerd";
    }
}

while (true) {
    echo "\nSimpele Rekenmachine\n";

    $num1 = getNumber("geef eerste nummer: ");
    $operation = getOperation();
    $num2 = getNumber("geef tweede nummer: ");

    $result = calculate($num1, $num2, $operation);
    echo "Resultaat: $result\n";

    $again = readline("Alweer (y/n): ");
    if (strtolower($again) != "y") {
        break;
    }
}

echo "Rekenmachine is afgesloten.\n";
