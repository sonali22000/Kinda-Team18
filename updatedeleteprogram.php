<?php

$title = "Update and delete  your data";

include "headerr.php";
include 'db.php';

$a = $_GET['programid'];
$result = mysqli_query($conn, "select * from program where programid = '$a'");

$row = mysqli_fetch_array($result)

?>
<h2> Update your information below </h2>

<form  name="update"  method="post"  action=""> 
 <div class="row">
 <div class="col-md-6">
   <select name="pname"  value = "<?php echo $row['pname'];?>">
    <option value="CURRICULAR ACTIVITIES"> CURRICULAR ACTIVITIES </option>
    <option value="SPORTS ACTIVITIES"> SPORTS ACTIVITIES </option>
    <option value="EXCURSIONS"> EXCURSIONS </option>
    </select><br> <br>

   <input type="text" name="description" required value = "<?php echo $row['description'];?>" placeholder="Description" class="form-control"> <br>


  <input type="date" name="startdate" required value = "<?php echo $row['startdate'];?>" placeholder="Please Enter Program Start Date" class="form-control" > <br>

  <input type="date" name="enddate" required value = "<?php echo $row['enddate'];?>" placeholder="Please Enter Program End Date" class="form-control" > <br>


  <input type="int" name="capacity" required value = "<?php echo $row['capacity'];?>" placeholder="Capacity" class="form-control" >  <br> 

  <input type="int" name="kidsid" required value = "<?php echo $row['kidsid'];?>"placeholder="Kidsid" class="form-control" > <br> 

  <input type="int" name="teid" required value = "<?php echo $row['teid'];?>" placeholder="Teid" class="form-control" >  <br> 
 
  <br> <br> <br> <br> <br> <br>
  <input type ="submit" value ="Update your data" name="update" >
<input type ="submit" value ="Delete your data" name="delete" >
                
                
   </div>
    
 </div>
</form>

<?php

    if (isset($_POST['update'])){
        $pname=$_POST['pname'];
        $description=$_POST['description'];
        $startdate=$_POST['startdate'];
        $enddate=$_POST['enddate'];
        $capacity=$_POST['capacity'];
        $kidsid=$_POST['kidsid'];
        $teid=$_POST['teid'];
        $query = mysqli_query($conn, "UPDATE program set 
        pname = '$pname', description = '$description', startdate = '$startdate',
        enddate = '$enddate', capacity = '$capacity', kidsid = '$kidsid', teid = '$teid'
        where id = '$a'");

            if ($query){

                echo "<h2>  updated Successfully </h2>";
            }
            else{
                echo "<h2> Not update </h2>";
            }
    }
    if (isset($_POST['delete'])){
        $aname=$_POST['pname'];
        $description=$_POST['description'];
        $startdate=$_POST['startdate'];
        $enddate=$_POST['enddate'];
        $capacity=$_POST['capacity'];
        $location=$_POST['kidsid'];
        $location=$_POST['teid'];
        $query = mysqli_query($conn, "DELETE program set 
        pname = '$pname', description = '$description', startdate = '$startdate',
        enddate = '$enddate', capacity = '$capacity', kidsid = '$kidsid', teid = '$teid'
        where id = '$a'");

            if ($query){

                echo "<h2>  delete Successfully </h2>";
            }
            else{
                echo "<h2> Not delete </h2>";
            }
    }

?>

<?php include "footer1.php" ?>
