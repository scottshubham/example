<?php
/**
 * Created by PhpStorm.
 * User: scottshubham
 * Date: 6/2/17
 * Time: 11:03 AM
 */
$rev=0;
$num=$_GET['number'];
$a=(int)$num;
//Taking as a String
$rev=strrev($num);
//Taking as a Number
$sum=0;
while($a>0) {
    $b=$a%10;
    $sum=($sum*10)+$b;
    $a=(int)($a/10);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reverse number</title>
</head>
<body>
    <div>
        <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div>
                <label>Enter the number:</label>
                <input type="number" name="number"/>
            </div>
            <div>
                <?php echo("As string: ".$rev);?>
            </div>
            <div>
                <?php echo("As integer: ".$sum);?>
            </div>
        </form>
    </div>
</body>
</html>
