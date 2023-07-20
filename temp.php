<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="time.css">
</head>
<body>
    <div class="content">
        <div class="calculatorbody">
            <div class="content-box">
                  <h1>Temprature Conversion</h1>
                  <form action="tempcal.php" method="post">
                  <div class="inputbox">
                       <label>From</label>
                       <?php
                          if(isset($_GET['result'])){
                            $in=$_GET['invalue'];
                            $inunit=$_GET['inunit'];
                            $rval=$_GET['result'];
                            $outunit=$_GET['outunit'];
                       ?>
                       <input type="text" name="invalue" value=<?php echo $in;?>>
                       <select name="inunit" id="">
                        <?php  
                           if($inunit=="celcius"){
                        ?>
                        <option value="celcius" selected>celcius</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="kelvin"){
                        ?>
                        <option value="kelvin" selected>kelvin</option>
                        <?php  } ?>
                        <?php  
                           if($inunit=="fahrenheit"){
                        ?>
                        <option value="fahrenheit" selected>fahrenheit</option>
                        <?php  } ?>
                        
                       </select>
                       <?php }
                         else{
                         ?>
                           <input type="text" name="invalue">
                           <select name="inunit" id="">
                          <option value="celcius">celcius</option>
                          <option value="kelvin">kelvin</option>
                         <option value="fahrenheit">fahrenheit</option>
                        
                       </select>

                        <?php } ?>



                        
                        <label>To</label>
                        <?php
                        if(isset($_GET['result'])){
                            
                            
                       ?>
                       <input type="text"  value=<?php echo $rval;?>>
                       <select name="outunit" id="">
                       <?php  
                           if($outunit=="celcius"){
                        ?>
                        <option value="celcius" selected>celcius</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="kelvin"){
                        ?>
                        <option value="kelvin" selected>kelvin</option>
                        <?php  } ?>
                        <?php  
                           if($outunit=="fahrenheit"){
                        ?>
                        <option value="fahrenheit" selected>fahrenheit</option>
                        <?php  } ?>
                       
                       
                       </select>
                       <?php }
                         else{
                         ?>
                           <input type="text"  maxlength="0">
                           <select name="outunit" id="">
                           <option value="celcius">celcius</option>
                          <option value="kelvin">kelvin</option>
                         <option value="fahrenheit">fahrenheit</option>
                        
                       </select>

                        <?php } ?>
                        <input type="submit" value="=">
                        <a href="temp.php">clear </a>
                          

                  </div>
                  </form>

            </div>
        </div>
    </div>
</body>
</html>