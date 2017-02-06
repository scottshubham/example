<?php
/**
 * Created by PhpStorm.
 * User: scottshubham
 * Date: 6/2/17
 * Time: 12:03 PM
 */
$firstNumber=(int)$_GET['firstNumber'];
$secondNumber=(int)$_GET['secondNumber'];
$ans=0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator</title>
    <link href="css/calc.css" rel="stylesheet"/>
</head>
<body>
<div>
    <form id="mainBody" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div id="numberTabs">
            <div>
                <label>Enter first number:</label>
                <input type="number" name="firstNumber"/>
            </div>
            <div>
                <label>Enter second number:</label>
                <input type="number" name="secondNumber"/>
            </div>
        </div>
        <div id="operators">
            <input type="submit" value="+" name="add"/>
            <input type="submit" value="-" name="minus"/>
            <input type="submit" value="/" name="divide"/>
            <input type="submit" value="%" name="mod"/>
            <input type="submit" value="*" name="multiply"/>
        </div>
        <div>
            <?php
                if(isset($_GET['add'])) {
                    $ans=$firstNumber+$secondNumber;
                } elseif(isset($_GET['minus'])) {
                    $ans=$firstNumber-$secondNumber;
                } elseif(isset($_GET['divide'])) {
                    if($secondNumber == 0) {
                        $ans="Error";
                    } else {
                        $ans=$firstNumber/$secondNumber;
                    }
                } elseif(isset($_GET['mod'])) {
                    $ans=$firstNumber%$secondNumber;
                } elseif(isset($_GET['multiply'])) {
                    $ans=$firstNumber*$secondNumber;
                }
                echo("Result : " . $ans); ?>
        </div>
    </form>
</div>
</body>
</html>

