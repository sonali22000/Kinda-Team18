<?php
$title="crup app for kindergarten";
include "headerr.php"?>


<!-- creating form for kidsinfo-->

<form  method="post"  action=""> 
 <div class="row">
    <div class="col">
    <input type="text" name="aname" required placeholder="Activities Name" class="form-control" ></div>
    
    <div class="col">
    <input type="text" name="description" required placeholder="Description" class="form-control"></div>

    <div class="col">
    <input type="text" name="location" required placeholder="Location" class="form-control"> <br></div>
 </div> 


 <div class="row">
   <div class="col">
   <input type="text" name="startdate" required placeholder="Start Date" class="form-control" > </div>

   <div class="col">
   <input type="text" name="enddate" required placeholder="End Date" class="form-control" > </div>

   <div class="col">
   <input type="text" name="capacity" required placeholder="Capacity" class="form-control" ><br> </div>
 </div>


 <div class="row"> 
   <div class="col">
   <input type="submit" value="Submit" name="Submit"></div>
 </div>
</form>


<?php
//Getting values from end user
if(isset($_POST['submit'])){
    $aname=$_POST['aname'];
    $description=$_POST['description'];
    $location=$_POST['location'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    $capacity=$_POST['capacity'];
    include 'db.php';
    $sql="insert into kidsinfo(aname,description,location,startdate,enddate,capacity)
    values('$aname','$description','$location', '$startdate', '$enddate', '$capacity')";
    if($conn->query($sql)===TRUE){
        echo"Your information is added successfully";
    }
    else{
        echo"Erro: .$conn->error";
    }
}
?>

<?php include "footer1.php" ?>