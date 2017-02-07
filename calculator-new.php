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
        function evaluateSolution() {
            var size= x.length;
            var i=0;
            var j=0;
            var arri=0;
            var oppi=0;
            var arr=[];
            var opp=[];
            var ans=0;
            while(i<size) {
                if(x.charCodeAt(i)<48 && x.charCodeAt(i)!=46) {
                    len=i-j;
                    arr.push(x.substr(j,len));
                    j=i+1;
                }

                i+=1;
            }
            alert(arr[0]+arr[1]);
        }
    </script>
</head>
<body>
<div>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="container">
            <div>
                <div id="solution" class="solutionArea">
                </div>
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
            <input class="custom-number" type="button" value="=" name="equal" onclick="evaluateSolution()">
        </div>
    </form>
</div>
</body>
</html>