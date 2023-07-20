<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mainstyle.css">
    <link rel="stylesheet" href="simple.css">
</head>

<body>
    <div class="content">
        <div class="calculatorbody" style="gap:70px;">
            <h1 style="font-size: 35px;">Simple Calculator</h1>
            <div class="operation-section">
                
                <form action="simplecalc.php" method="post">
                <div class="form">
                   <div class="input">
                   <?php
                   
                   if(isset($_GET["result"])){
                    $firstval=$_GET["first"];
                    $secondval=$_GET["second"];
                    echo "<input type=\"text\" name=\"firstvalue\" value=$firstval>";
                    echo "<input type=\"text\" name=\"secondvalue\" value=$secondval>";
                   }
                   else{
                    echo "<input type=\"text\" name=\"firstvalue\">";
                    echo "<input type=\"text\" name=\"secondvalue\">";
                   }
                   ?>
                   </div>
                   <div class="operation">
                    <select name="operation" class="select">
                        <option value="add">+</option>
                        <option value="sub">-</option>
                        <option value="mul">*</option>
                        <option value="square">^</option>
                        <option value="squareroot">square root</option>
                    </select>
                    <input type="submit" value="=">

                   </div>
                   <div class="result">
                    <?php 
                
                    if(isset($_GET["result"])){
                    $num=$_GET["result"];
                    $oper=$_GET["operation"];
                    echo "<p>The result of $oper </p>";
                    echo "<div class=\"resultvalue\">$num</div>";}
                    
                    else{
                        echo "<div class=\"resultvalue\"></div>";
                    }
                    ?>
                   </div>
                </div>
                </form>
                <a href="simple.php">clear</a>

             </div>
                
                

        </div>
    </div>
</body>
</html>