<?php
$title="crup app for kindergarten";
include "headerr.php"?>


<!-- creating form for program in kindergarten-->

<form  method="post"  action=""> 


 <div class="row">
    <div class="col-md-3">
    <input type="text" name="pname" required placeholder="Activities Name" class="form-control" ></div>
    
    <div class="col-md-3">
    <input type="text" name="description" required placeholder="Description" class="form-control"> <br></div>


 <div class="row">
   <div class="col-md-3">
   <input type="date" name="startdate" required placeholder="Please Enter Activity Start Date" class="form-control" > </div>

   <div class="col-md-3">
   <input type="date" name="enddate" required placeholder="Please Enter Activity End Date" class="form-control" > <br> </div>
 </div>

 <div class="row">
   <div class="col-md-3">
   <input type="int" name="capacity" required placeholder="Capacity" class="form-control" >  <br> </div>
 </div>


 <div class="row">
   <div class="col-md-3">
   <input type="int" name="kidsid" required placeholder="Kidsid" class="form-control" > <br> </div>
 </div>

 <div class="row">
   <div class="col-md-3">
   <input type="int" name="teid" required placeholder="Teid" class="form-control" >  <br> </div>
 </div>
 


 <div class="row"> 
   <div class="col-md-3">
   <input type="submit" value="Submit" name="Submit"></div>
 </div>
</form>


<?php
//Getting values from end user
if(isset($_POST['Submit'])){
    $aname=$_POST['pname'];
    $description=$_POST['description'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    $capacity=$_POST['capacity'];
    $kidsid=$_POST['kidsid'];
    $teid=$_POST['teid'];
    include 'db.php';
    $sql="insert into activitieslist(pname,description,startdate,enddate,capacity,kidsid,teid)
    values('$aname','$description', '$startdate', '$enddate' , '$kidsid', '$teid')";
    if($conn->query($sql)===TRUE){
                
      echo"Your datas are added successfully";

  }
  else{

      echo"Error:" .$conn->error;

  }
}
?>

<?php include "footer1.php" ?>