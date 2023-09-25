<?php
function Sum($num1, $num2) {
    return $num1 + $num2;
}

function Difference($num1, $num2){
    return $num1 - $num2;
}

function Product($num1, $num2){
    return $num1 * $num2;
}

function Division($num1, $num2){
    if ($num2 != 0) {
        $quotient = $num1 / $num2;
        $remainder = $num1 % $num2;
        echo "Quotient = $quotient\n";
        echo "Remainder = $remainder\n";
    } else {
        echo "Division by zero is not allowed.\n";
    }
}

while (TRUE) {
    $num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");
$operation = readline("1.Add\t2.Subtraction\t3.Multiplication\t4.Division\nq. to exit");

if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Invalid input. Please enter numeric values.\n";
    exit(1);
}

if ($operation == 1){
    $op = Sum($num1, $num2);
    echo "The sum of $num1 and $num2 is: $op\n";
}
elseif($operation == 2){
    $op = Difference($num1, $num2);
    echo "The difference of $num1 and $num2 is: $op\n";
}
elseif ($operation == 3) {
    $op = Product($num1, $num2);
    echo "The product of $num1 and $num2 is: $op\n";
}
elseif ($operation == 4) {
    Division($num1, $num2);
}
elseif ($operation == "q"){
    break;
}
else{
    echo "Invalid operation.\n";
}
}

?>
