<html>
<body>
<?php
/*if ($_POST["operators"] == "+")
{
    echo $_POST["value1"]+$_POST["value2"];
}

if ($_POST["operators"] == "-")
{
    echo $_POST["value1"]-$_POST["value2"];
}

if ($_POST["operators"] == "/")
{
    echo $_POST["value1"]/$_POST["value2"];
}

if ($_POST["operators"] == "*")
{
    echo $_POST["value1"]*$_POST["value2"];
}*/
?>

<?php
switch ($_POST["operators"]) {
    case "+":
        echo $_POST["value1"]+$_POST["value2"];
        break;
    case "-":
        echo $_POST["value1"]-$_POST["value2"];
        break;
    case "*":
        echo $_POST["value1"]*$_POST["value2"];
        break;
    case "/":
        echo $_POST["value1"]/$_POST["value2"];
        break;
    default:
        echo "default";
}
?>
</body>
</html>