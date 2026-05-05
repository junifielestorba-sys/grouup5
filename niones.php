<!DOCTYPE html>
<html>
<head>
    <title>Add Numbers</title>
</head>
<body>

<h2>Add Two Numbers</h2>

<form method="post" action="">
    <input type="number" name="num1" placeholder="Enter first number" required>
    <input type="number" name="num2" placeholder="Enter second number" required>
    <button type="submit" name="add">Add</button>
</form>

<?php
if (isset($_POST['add'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $sum = $num1 + $num2;

    echo "<h3>Result: $sum</h3>";
}
?>

</body>
</html>