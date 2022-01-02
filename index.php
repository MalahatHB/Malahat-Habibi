<?php include 'Calculator.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <meta name="author" content="Malahat Habibi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="style/default.css">-->
</head>
<body>
<h1>Calculator</h1>
<form method="post">
    <input size="30px" style="padding: 5px;" name="input" placeholder="Please enter a math phrase">
    <input style="padding: 5px;" type="submit" name="submit-button" class="button" value="Calculate">
</form>
</body>

<?php
$pattern = "[A-Za-z]";
if(array_key_exists('submit-button', $_POST)) {
    $input = $_REQUEST['input'];
    echo calc($input);
}
?>