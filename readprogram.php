<?php

$title = "Read data from database";

include "headerr.php";
include 'db.php';
$sql ="select * from program";
$result = $conn->query($sql);


if($result->num_rows > 0){
    echo" <table class = 'table'>
        <tr>
        <th>    Program ID       </th> 
        <th>    Porgram Name </th> 
        <th>    Description  </th> 
        <th>    Start date       </th> 
        <th>    End date    </th>
        <th>    Capacity   </th>
        <th>    Kids ID    </th>
        <th>    Teacher ID    </th>
        </tr>";


        while($row = $result -> fetch_assoc()) {
            echo "
            <tr>
            <td><a href='updatedeleteprogram.php?programid=$row[programid]'>$row[programid] </a>  </td>   
            <td> $row[pname]     </td>
            <td> $row[description]      </td>
            <td> $row[startdate]   </td>
            <td> $row[enddate]   </td>
            <td> $row[capacity]   </td>
            <td> $row[kidsid]   </td>
            <td> $row[teid]   </td>
            </tr>
            ";
    }
    echo "</table>";
}
else
{
    echo "No result";
}

$conn-> close();

?>

<div class="col-md-6">
<br>  
<a class="btn btn-danger" href="createprogram.php" role="button">Back</a>
<br> <br>
<a class="btn btn-danger" href="enrollment.php" role="button">Go to enrollment page</a>
</div>
<br> <br> <br> <br> <br> <br> <br> <br> <br> 




<?php include "footer1.php" ?>
        