<!DOCTYPE html>
<html>
  <head>
    <title>jobs adaviya</title>
    <link rel="stylesheet" href="portal.css">

  </head>
  <body>



  <div class="btn" style="display: flex;">

<a href="http://localhost/jobsadawiya/Sandeepa/Shamal/user_account_page.php">
<button style="margin-right: 5px;">Back</button></a>


</div>


</body>
</html>


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
    echo "<th>update</th>";
    
    echo "</tr>";
    

    while($row=$result->fetch_assoc())
    {
      echo "<tr>";
      echo "<td>" . $row["trx_id"] . "</td>" . 
     "<td>" . $row["email"] . "</td>" . 
     "<td>" . $row["phone"] . "</td>" . 
     "<td>" . $row["NIC"] . "</td>" . 
     "<td>" . $row["package"] . "</td>" . 
     "<td>" . $row["additional_s"] . "</td>" . 
     "<td>" . $row["bank"] . "</td>" . 
     "<td>" . $row["holder_name"] . "</td>" . 
     "<td>" . $row["card_no"] . "</td>" . 
     "<td>" . $row["expire_date"] . "</td>" . 
     "<td>" . $row["cvv"] . "</td>".
     "<td><a href='payup.php?id=". $row["trx_id"]. "'>Update</a></td>";


    
    

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
    <link rel = "stylesheet" href = "..//php/project/portal.css">
</head> 
    <body>
<form method = "post" action = "deletepayinfo.php" onsubmit="return deldataalert()">
<label style="margin-top:50px;">Enter transaction Id</label> 
<input type = "text" class="pgtwayinpts" name = "delid" id = "delid" autocomplete = "off"> 
<input type = "submit" id = "delete" value = "delete" onclick = "deldataalert ()" > 

<script>

  function deldataalert () {

    let delsel = document.getElementById("delid").value;

    if(delsel=="")
  {
    alert("please select a transaction ID");
    return false;
  }

  else{

  return  confirm("are you sure you want to delete this row  number : "+delsel );

  }

  
  }


</script>

</body>
</head>
</html>