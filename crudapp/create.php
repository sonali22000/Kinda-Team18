<?php
$title="crup app for kindergarten";
include "headerr.php" ?>


<!-- creating form for kidsinfo-->

<form  method="post"  action=""> 
 <div class="row">
    <div class="col">
    <input type="text" name="fname" required placeholder="Kids First Name" class="form-control" > </div>
    
    <div class="col">
    <input type="text" name="lname" required placeholder="Kids Last Name" class="form-control"></div>

    <div class="col">
    <input type="text" name="parentsname" required placeholder="Parents Name" class="form-control"></div>
 </div> 


 <div class="row">
   <div class="col">
   <input type="text" name="dob" required placeholder="Birth Date" class="form-control" > </div>

   <div class="col">
   <input type="text" name="phone" required placeholder="Phone Number" class="form-control" > </div>

   <div class="col">
   <input type="text" name="address" required placeholder="Address" class="form-control" > </div>
 </div>


 <div class="row"> 
   <div class="col">
   <input type="submit" value="Submit" name="Submit"></div>
 </div>
</form>






<?php include "footer1.php" ?>