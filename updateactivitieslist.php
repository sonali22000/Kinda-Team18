<?php

$title = "Update your info";

include "headerr.php";
include 'db.php';

$a = $_GET['id'];
$result = mysqli_query($conn, "select * from studentInfo where id = '$a'");

$row = mysqli_fetch_array($result)

?>
<h2> Update your information below </h2>

<form  name="update"  method="post"  action=""> 
 <div class="row">
    <div class="col">
    <input type="text" name="aname" required placeholder="Activities Name"  value = "<?php echo $row['aname'];?>" class="form-control" ></div>
    
    <div class="col">
    <input type="text" name="description" required placeholder="Description" value = "<?php echo $row['description'];?>" class="form-control"></div>

    <div class="col">
    <input type="text" name="location" required placeholder="Location" value = "<?php echo $row['location'];?>" class="form-control"> <br></div>
 </div> 


 <div class="row">
   <div class="col">
   <input type="text" name="startdate" required placeholder="Start Date" value = "<?php echo $row['startdate'];?>" class="form-control" > </div>

   <div class="col">
   <input type="text" name="enddate" required placeholder="End Date" value = "<?php echo $row['enddate'];?>" class="form-control" > </div>

   <div class="col">
   <input type="text" name="capacity" required placeholder="Capacity" value = "<?php echo $row['capacity'];?>" class="form-control" ><br> </div>
 </div>


 <div class="row"> 
   <div class="col">
   <input type="submit" value="Enter New Activities" name="Update"></div>
   <div class="col">
   <input type="submit" value="Delete Activity List" name="Delet"></div>
 </div>
</form>

<?php

    if (isset($_POST['update'])){
        $aname=$_POST['aname'];
        $description=$_POST['description'];
        $location=$_POST['location'];
        $startdate=$_POST['startdate'];
        $enddate=$_POST['enddate'];
        $capacity=$_POST['capacity'];
        $query = mysqli_query($conn, "UPDATE activitieslist set 
        aname = '$aname', description = '$description', location = '$location', startdate = '$startdate',
        enddate = '$enddate', capacity = '$capacity'
        where id = '$a'");

            if ($query){

                echo "<h2>  updated Successfully </h2>";
            }
            else{
                echo "<h2> Not update </h2>";
            }
    }
    if (isset($_POST['delete'])){
        $aname=$_POST['aname'];
        $description=$_POST['description'];
        $location=$_POST['location'];
        $startdate=$_POST['startdate'];
        $enddate=$_POST['enddate'];
        $capacity=$_POST['capacity'];
        $query = mysqli_query($conn, "DELETE activitieslist set 
        aname = '$aname', description = '$description', location = '$location', startdate = '$startdate',
        enddate = '$enddate', capacity = '$capacity'
        where id = '$a'");

            if ($query){

                echo "<h2>  updated Successfully </h2>";
            }
            else{
                echo "<h2> Not update </h2>";
            }
    }

?>

<?php include "footer1.php" ?>
