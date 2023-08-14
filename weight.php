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
            <h1>weight Conversion</h1>
            <form action="weightcalc.php" method="post">
               <div class="inputbox">
                  <label>From</label>
                  <?php
                  if (isset($_GET['result'])) {
                     $in = $_GET['invalue'];
                     $inunit = $_GET['inunit'];
                     $rval = $_GET['result'];
                     $outunit = $_GET['outunit'];
                  ?>
                     <input type="text" name="invalue" value=<?php echo $in; ?>>
                     <select name="inunit" id="">
                        <?php
                        if ($inunit == "milligram") {
                        ?>
                           <option value="milligram" selected>milligram</option>
                        <?php } ?>
                        <?php
                        if ($inunit == "gram") {
                        ?>
                           <option value="gram" selected>gram</option>
                        <?php  } ?>
                        <?php
                        if ($inunit == "kilogram") {
                        ?>
                           <option value="kilogram" selected>kilogram</option>
                        <?php  } ?>
                        <?php
                        if ($inunit == "metric") {
                        ?>
                           <option value="metric" selected>metric</option>
                        <?php } ?>
                        <?php
                        if ($inunit == "ton") {
                        ?>
                           <option value="ton" selected>ton</option>
                        <?php } ?>
                        <?php
                        if ($inunit == "pound") {
                        ?>
                           <option value="pound" selected>pound</option>
                        <?php } ?>
                        <?php
                        if ($inunit == "ounce") {
                        ?>
                           <option value="ounce" selected>ounce</option>
                        <?php } ?>

                     </select>
                  <?php } else {
                  ?>
                     <input type="text" name="invalue">
                     <select name="inunit">
                        <option value="milligram">milligram</option>
                        <option value="gram">gram</option>
                        <option value="kilogram">kilogram</option>
                        <option value="metric">metric</option>
                        <option value="ton">ton</option>
                        <option value="pound">pound</option>
                        <option value="ounce">ounce</option>
                     </select>

                  <?php } ?>




                  <label>To</label>
                  <?php
                  if (isset($_GET['result'])) {


                  ?>
                     <select name="outunit" id="">
                        <?php
                        if ($outunit == "milligram") {
                        ?>
                           <option value="milligram" selected>milligram</option>
                        <?php } ?>
                        <?php
                        if ($outunit == "gram") {
                        ?>
                           <option value="gram" selected>gram</option>
                        <?php  } ?>
                        <?php
                        if ($outunit == "kilogram") {
                        ?>
                           <option value="kilogram" selected>kilogram</option>
                        <?php  } ?>
                        <?php
                        if ($outunit == "metric") {
                        ?>
                           <option value="metric" selected>metric</option>
                        <?php } ?>
                        <?php
                        if ($outunit == "ton") {
                        ?>
                           <option value="ton" selected>ton</option>
                        <?php } ?>
                        <?php
                        if ($outunit == "pound") {
                        ?>
                           <option value="pound" selected>pound</option>
                        <?php } ?>
                        <?php
                        if ($outunit == "once") {
                        ?>
                           <option value="ounce" selected>ounce</option>
                        <?php } ?>
                     </select>
                     <div class='subres'>
                     <input type="submit" value="=">
                     <input type="text" name="invalue" value=<?php echo $rval; ?>>
                     </div>
                  <?php } else {
                  ?>
                     <select name="outunit" id="">
                        <option value="milligram">milligram</option>
                        <option value="gram">gram</option>
                        <option value="kilogram">kilogram</option>
                        <option value="metric">metric</option>
                        <option value="ton">ton</option>
                        <option value="pound">pound</option>
                        <option value="ounce">ounce</option>
                     </select>
                     <div class="subres">
                     <input type="submit" value="=">
                     <input type="text" maxlength="0">
                     </div>
                  <?php } ?>
                  

                  <a href="weight.php">clear </a>


               </div>
            </form>

         </div>
      </div>
   </div>
</body>

</html>