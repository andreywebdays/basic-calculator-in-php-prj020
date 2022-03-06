<?php
    
declare(strict_types = 1);
include 'incAutoLoader.php';

$operator = $_POST["operator"];
$num_1 = $_POST["num_1"];
$num_2 = $_POST["num_2"];

$calc = new clsCalculate($operator, (int)$num_1, (int)$num_2);

try 
{
    echo $calc->calculate();
} 
catch (TypeError $e) 
{
    echo "Error!: " . $e->getMessage();
}
