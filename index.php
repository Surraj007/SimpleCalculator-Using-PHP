<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<center>
<body>
    
<h2>Simple PHP Calculator</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="num1">Number 1:</label>
<input type="number" id="num1" name="num1" step="any" required> <br> <br>

<label for="num2">Number 2:</label>
<input type="number" id="num2" name="num2" step="any" required> <br> <br>

<label for="operation">Operation:</label>
<select name="operation" id="operation" required>
    <option value="add">Addition (+)</option>
<option value="subtract">Subtract (-)</option>
<option value="multiply">Multiplication(*)</option>
<option value="divide">Division(/)</option>


</select>
<br><br>
 
<button type="submit" name="calculate">Calculate</button>
</form>



<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    // Take input
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            $symbol = '+';
            break;
        case 'subtract':
            $result = $num1 - $num2;
            $symbol = '-';
            break;
        case 'multiply':
            $result = $num1 * $num2;
            $symbol = '*';
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                $symbol = '/';
            } else {
                $result = "Error! Division by zero.";
                $symbol = '/';
            }
            break;
        default:
            $result = "Invalid operation selected";
            $symbol = '';
            break;
    }

    
    echo "<h3>Result: $num1 $symbol $num2 = $result</h3>";
}
?>

</center>
</body>
</html>