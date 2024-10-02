<?php

require 'config.php';

 $sql =  " SELECT  * from userpayment; ";

  $result=$conn->query($sql);

  if($result->num_rows>0)
  {
    echo "<table border='1'> ";
    echo "<tr>";
    echo "<th>TRANSACTION_ID</th>";
    echo "<th>EMAIL</th>";
    echo "<th>PHONE</th>";
    echo "<th>NIC</th>";
    echo "<th>PACKEGE</th>";
    echo "<th>ADDITIONAL SERVICES</th>";
    echo "<th>BANK</th>";
    echo "<th>HOLDER NAME</th>";
    echo "<th>CARD NO</th>";
    echo "<th>EXPIRE DATE</th>";
    echo "<th>CVV</th>";
    echo "</tr>";
    

    while($row=$result->fetch_assoc())
    {
      echo "<tr>";
      echo "<td>" . $row["trx_id"] . "</td>" . 
     "<td>" . $row["email"] . "</td>" . 
     "<td>" . $row["phone"] . "</td>" . 
     "<td>" . $row["NIC"] . "</td>" . 
     "<td>" . $row["packege"] . "</td>" . 
     "<td>" . $row["addtional_s"] . "</td>" . 
     "<td>" . $row["bank"] . "</td>" . 
     "<td>" . $row["holder_name"] . "</td>" . 
     "<td>" . $row["card_no"] . "</td>" . 
     "<td>" . $row["expire_date"] . "</td>" . 
     "<td>" . $row["cvv"] . "</td>";
 echo "</tr>";
    }
    echo "</table>";

  }
  else{
    echo "no results";
  }

  $conn->close();

?>

<html>
  <head>
    <body>
<form method = "post" action = "deletepayinfo.php">
<label>enter transaction id </label> 
<input type = "text" name = "delid"> 
<input type = "submit" value = "delete"> 

</body>
</head>
</html>