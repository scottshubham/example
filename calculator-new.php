<?php
/**
 * Created by PhpStorm.
 * User: scottshubham
 * Date: 6/2/17
 * Time: 12:51 PM
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator-New</title>
    <link href="css/calc-new.css" rel="stylesheet"/>
    <script>var x = "";</script>
    <script>
        function myFunction(i) {
            x = x+i;
            document.getElementById('entry').innerHTML=x;
        }
        function clearAll() {
            x = "";
            document.getElementById('entry').innerHTML=x;
        }
        function evaluate() {

        }
    </script>
</head>
<body>
<div>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="container">
            <div>
                <div class="solutionArea"><?php echo("$ans") ?></div>
            </div>
            <div>
                <div id="entry" class="entryArea" >
                </div>
            </div>
            <?php
            $i = 9;
            while ($i >= 0) { ?>
                <input class="custom-number" type="button" value=<?php echo("$i")?> name="num<?php echo("$i");?>" onclick="myFunction(<?php echo("$i")?>)">
                <?php $i -= 1;
            }
            ?>
            <input class="custom-number" type="button" value="." name="dot" onclick="myFunction(dot.value)">
            <input class="custom-number" type="button" value="c" name="clear" onclick="clearAll()">
            <input class="custom-number" type="button" value="+" name="add" onclick="myFunction(add.value)">
            <input class="custom-number" type="button" value="-" name="minus" onclick="myFunction(minus.value)">
            <input class="custom-number" type="button" value="*" name="multiply" onclick="myFunction(multiply.value)">
            <input class="custom-number" type="button" value="/" name="divide" onclick="myFunction(divide.value)">
            <input class="custom-number" type="button" value="%" name="mod" onclick="myFunction(mod.value)">
            <input class="custom-number" type="button" value="=" name="equal" onclick="evaluate()">
        </div>
    </form>
</div>
</body>
</html>

