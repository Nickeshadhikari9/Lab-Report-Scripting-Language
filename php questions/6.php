<!DOCTYPE html>
<html>
<head>
    <title>Find Greatest Number</title>
</head>
<body>
<h2>Find Greatest Number</h2>
<form method="post" action="">
    <label for="num1">Number 1:</label><br>
    <input type="number" id="num1" name="num1" required><br><br>
    <label for="num2">Number 2:</label><br>
    <input type="number" id="num2" name="num2" required><br><br>
    <label for="num3">Number 3:</label><br>
    <input type="number" id="num3" name="num3" required><br><br>
    <input type="submit" name="submit" value="Find Greatest">
</form>
<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $greatest = max($num1, $num2,$num3);
    echo "The greatest number among $num1, $num2, and $num3 is: $greatest";
}
?>
</body>
</html>
