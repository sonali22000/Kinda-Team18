<?php
$title = "Read data from db";

include "headerr.php";

?>
<?php
include 'db.php';
$sql = "select * from enrollmentfrom ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "
    <table class='table'>
    <tr><th>Kids Name</th><th>Parents Name and Relationship</th><th>email</th>
    <th>Address</th><th>Kids Birth Day</th><th>Contact Number</th></tr>";
    while($row=$result->fetch_assoc()){
    echo"
    <tr>
    <td>$row[kidsname]</td>
    <td>$row[ParentsNameandRelationship]</td>
    <td>$row[email]</td>
    <td>$row[address]</td>
    <td>$row[kidsbirthday]</td>
    <td>$row[contactnumber]</td>
    
    
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
<?php
include "footer1.php";
?>