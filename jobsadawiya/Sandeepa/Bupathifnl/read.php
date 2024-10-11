
<a href="http://localhost/jobsadawiya/Sandeepa/adminDashboard/index.php"><button style="padding:8px 10px; margin: 8px 8px">
Back to Home <i class='bx bx-home'></i></button></a>


<?php

require 'config.php';

 $sql =  " SELECT user_first,user_last,user_email,user_uid,user_pwd from users; ";

  $result=$conn->query($sql);

  if($result->num_rows>0)
  {
    echo "<table border='1'> ";

    while($row=$result->fetch_assoc())
    {
      echo "<tr>";
      echo "<td>" . $row["user_first"] . "</td>" . 
     "<td>" . $row["user_last"] . "</td>" . 
     "<td>" . $row["user_uid"] . "</td>" . 
     "<td>" . $row["user_pwd"] . "</td>";

      echo "</tr>";
    }
    echo "</table>";

  }
  else{
    echo "no results";
  }



  $conn->close();

?>

