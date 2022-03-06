<?php
    declare(strict_types = 1);
    include 'includes/AutoLoaderIncluded.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator in PHP</title>
</head>
<body>
    
    <form action="includes/CalculateIncluded.php" method="POST">
        <p>Basic Calculator in PHP</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="operator">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="div">Divide</option>
            <option value="mul">Multiply</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>

</body>
</html>