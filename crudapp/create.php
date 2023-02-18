<?php
$title="crup app for kindergarten";
include "headerr.php" ?>


<!-- creating form for kidsinfo-->

    <form  method="post"  action="">
    
<div class="row">

    <div class="col">
    <input type="text" name="fname" required placeholder="Kids First Name" class="form-control" > </div>
    
    <div class="col">
    <input type="text" name="lname" required placeholder="Last Name" class="form-control"></div>

</div>


<div class="row">

   <div class="col">
   <input type="text" name="bdate" required placeholder="Birth Date" class="form-control" > </div>
    
   <div class="col">
   <input type="text" name="color" required placeholder="Select fav Color" class="form-control" > </div>

   <input type="submit" value="Submit">

</div>




</form>






<?php include "footer1.php" ?>