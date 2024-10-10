<?php

require 'config.php';

 $sql =  " SELECT Degree, Previous Experience, GPA, Timescale, Desition, Explanation, Reason for intern FROM sdeveloper";

  $result=$con->query($sql);

  if($result->num_rows>0)
  {
    echo "<table border='1'> ";

    echo "<tr>";

    echo "<th>Degree</th>";
    echo "<th>Previous Experience</th>";
    echo "<th>GPA</th>";
    echo "<th>Timescale</th>";
    echo "<th>Desition</th>";
    echo "<th>Explanation</th>";
    echo "<th>Reason</th>";
    
    echo"</tr>";

    while($row=$result->fetch_assoc())
    {
      echo "<tr>";
      echo 
     "<td>".$row["Degree"]."</td>". 
     "<td>".$row["Previous Experience"]."</td>". 
     "<td>".$row["GPA"]."</td>". 
     "<td>".$row["Timescale"]."</td>".
     "<td>".$row["Desition"]."</td>". 
     "<td>".$row["Explanation"]."</td>".
     "<td>".$row["Reason"]."</td>";

      echo "</tr>";
    }
    echo "</table>";

    }
    else
    {
        echo "No Results";
    }

  $con->close();

?>

