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
                  <h1>Area Conversion</h1>
                  <form action="areacalc.php" method="post">
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
                           if($inunit=="sqmilli"){
                        ?>
                        <option value="sqmilli" selected>square millimeter</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="sqcm"){
                        ?>
                        <option value="sqcm" selected>square centimeter</option>
                        <?php  } ?>
                        <?php  
                           if($inunit=="sqm"){
                        ?>
                        <option value="sqm" selected>square meter</option>
                        <?php  } ?>
                        <?php  
                           if($inunit=="sqkm"){
                        ?>
                        <option value="sqkm" selected>square kilometer</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="acre"){
                        ?>
                        <option value="acre" selected>acre</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="hectare"){
                        ?>
                        <option value="day" selected>hectare</option>
                        <?php } ?>
                       </select>
                       <?php }
                         else{
                         ?>
                           <input type="text" name="invalue">
                           <select name="inunit" id="">
                          <option value="sqmilli">square millimeter</option>
                          <option value="sqcm">square centimeter</option>
                         <option value="sqm">square meter</option>
                         <option value="sqkm">square kilometer</option>
                         <option value="acre">acre</option>
                         <option value="hectare">hectare</option>
                        
                       </select>

                        <?php } ?>



                        
                        <label>To</label>
                        <?php
                        if(isset($_GET['result'])){
                            
                            
                       ?>
                       <input type="text" name="invalue" value=<?php echo $rval;?>>
                       <select name="outunit" id="">
                       <?php  
                           if($outunit=="sqmilli"){
                        ?>
                        <option value="sqmilli" selected>square millimeter</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="sqcm"){
                        ?>
                        <option value="sqcm" selected>square centimeter</option>
                        <?php  } ?>
                        <?php  
                           if($outunit=="sqm"){
                        ?>
                        <option value="sqm" selected>square meter</option>
                        <?php  } ?>
                        <?php  
                           if($outunit=="sqkm"){
                        ?>
                        <option value="sqkm" selected>square kilometer</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="acre"){
                        ?>
                        <option value="acre" selected>acre</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="hectare"){
                        ?>
                        <option value="houtunit" selected>hectare</option>
                        <?php } ?>
                       
                       </select>
                       <?php }
                         else{
                         ?>
                           <input type="text"  maxlength="0">
                           <select name="outunit" id="">
                           <option value="sqmilli">square millimeter</option>
                          <option value="sqcm">square centimeter</option>
                         <option value="sqm">square meter</option>
                         <option value="sqkm">square kilometer</option>
                         <option value="acre">acre</option>
                         <option value="hectare">hectare</option>
                       </select>

                        <?php } ?>
                        <input type="submit" value="=">
                        <a href="area.php">clear </a>
                          

                  </div>
                  </form>

            </div>
        </div>
    </div>
</body>
</html>