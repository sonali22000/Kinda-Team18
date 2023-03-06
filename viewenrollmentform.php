<?php
$title = "Read data from db";
include "headerr.php";
?>
<?php
include 'db.php';
$sql = "select * from enrollment ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "
    <table class='table'>
    <tr><th>ProgrameID</th><th>KidsId</th><th>enrollmentdate</th><th>academicyear</th></tr>";
    while($row=$result->fetch_assoc()){
    echo"
    <tr>
    <td>$row[programid]</td>
    <td>$row[kidsid]</td>
    <td>$row[enrollmentdate]</td>
    <td>$row[academicyear]</td>
    
    </tr>
     ";
    }
    echo"</table>";
}
else{
    echo"No Result";
}
$conn->close();
?>


<div class="col-md-6">
<br>
<a class="btn btn-danger" href="enrollment.php" role="button">Back</a>
</div>
<br> <br> <br> <br> <br> <br> <br> <br> <br> 


<?php
include "footer1.php";
?>