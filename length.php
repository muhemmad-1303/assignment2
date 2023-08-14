<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="unit.css">
</head>
<body>
    <div class="content">
    <?php include "nav.php"  ?>
        <div class="calculatorbody">
            <div class="content-box">
                  <h1>Length Conversion</h1>
                  <form action="lengthcal.php" method="post">
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
                           if($inunit=="millimeter"){
                        ?>
                        <option value="millimeter" selected>millimeter</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="centimeter"){
                        ?>
                        <option value="centimeter" selected>centimeter</option>
                        <?php  } ?>
                        <?php  
                           if($inunit=="meter"){
                        ?>
                        <option value="meter" selected>meter</option>
                        <?php  } ?>
                        <?php  
                           if($inunit=="kilometer"){
                        ?>
                        <option value="kilometer" selected>kilometer</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="inch"){
                        ?>
                        <option value="inch" selected>inch</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="yard"){
                        ?>
                        <option value="yard" selected>yard</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="foot"){
                        ?>
                        <option value="foot" selected>foot</option>
                        <?php }?>
                        <?php  
                           if($inunit=="mile"){
                        ?>
                        <option value="mile" selected>mile</option>
                        <?php }?>
    
                       </select>
                       <?php }
                         else{
                         ?>
                           <input type="text" name="invalue">
                           <select name="inunit" id="">
                          <option value="millimeter">millimeter</option>
                          <option value="centimeter">centimeter</option>
                         <option value="meter">meter</option>
                         <option value="kilometer">kilometer</option>
                         <option value="inch">inch</option>
                         <option value="yard">yard</option>
                         <option value="foot">foot</option>
                          <option value="mile">mile</option>
                         
                       </select>

                        <?php } ?>



                        
                        <label>To</label>
                        <?php
                        if(isset($_GET['result'])){
                            
                            
                       ?>
                       <input type="text" name="invalue" value=<?php echo $rval;?>>
                       <select name="outunit" id="">
                       <?php  
                           if($outunit=="millimeter"){
                        ?>
                        <option value="millimeter" selected>millimeter</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="centimeter"){
                        ?>
                        <option value="centimeter" selected>centimeter</option>
                        <?php  } ?>
                        <?php  
                           if($outunit=="meter"){
                        ?>
                        <option value="meter" selected>meter</option>
                        <?php  } ?>
                        <?php  
                           if($outunit=="kilometer"){
                        ?>
                        <option value="kilometer" selected>kilometer</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="inch"){
                        ?>
                        <option value="inch" selected>inch</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="yard"){
                        ?>
                        <option value="yard" selected>yard</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="foot"){
                        ?>
                        <option value="foot" selected>foot</option>
                        <?php }?>
                        <?php  
                           if($outunit=="mile"){
                        ?>
                        <option value="mile" selected>mile</option>
                        <?php }?>
                       </select>
                       <div class='subres'>
                     <input type="submit" value="=">
                     <input type="text" name="invalue" value=<?php echo $rval; ?>>
                     </div>
                       <?php }
                         else{
                         ?>
                           <input type="text"  maxlength="0">
                           <select name="outunit" id="">
                           <option value="millimeter">millimeter</option>
                          <option value="centimeter">centimeter</option>
                         <option value="meter">meter</option>
                         <option value="kilometer">kilometer</option>
                         <option value="inch">inch</option>
                         <option value="yard">yard</option>
                         <option value="foot">foot</option>
                          <option value="mile">mile</option>
            
                       </select>
                       <div class="subres">
                       <input type="submit" value="=">
                       <input type="text"  maxlength="0">
                       
                       </div>

                        <?php } ?>
                        
                        <a href="length.php">clear </a>
                          

                  </div>
                  </form>

            </div>
        </div>
    </div>
</body>
</html>