<?php

require 'config.php';

$txtid = $_GET['id'];

$sql = "SELECT * FROM userpayment
  where  trx_id  = '$txtid';";

$result=$conn->query($sql);

  

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc(); // Fetch the row data
  $temail = $row["email"];
  $tphone = $row["phone"];
  $tnic = $row["NIC"];
  $tpack = $row["package"];
  $taddi = $row["additional_s"];
  $tbank = $row["bank"];
  $thold = $row["holder_name"];
  $texp = $row["expire_date"];
} else {
  echo "No record found for transaction ID: $txtid";
}



 


?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="portal.css">
</head>
<body>
  <form method="post" action="updatepayinfo.php">
    <input type = "hidden" name = "txtid" value = "<?php echo $txtid ;?>">
 

    <label>enter new email</label><br>
    <input type="text" class="pgtwayinpts"  name="email" value = "<?php echo $temail;?>"><br>
    
    <label>eneter new phone</label><br>
    <input type="text" class="pgtwayinpts"  name="phone" value = "<?php echo $tphone;?>"><br>
    
    <!--<label>eneter  new adress</label><br>
    <input type="text" name="addres" placeholder="NO 113/TRACK 04/RAJANGANAYA"><br>-->
    
    <label>eneter  holder new name</label><br>
    <input type="text" class="pgtwayinpts"  name="name" value = "<?php echo $thold;?>" <br>

    <label>eneter new NIC</label><br>
    <input type="text" class="pgtwayinpts"  name="nic"value = "<?php echo $tnic;?>"><br>
    <label>eneter packege </label><br>
    <select class="pgtwayinpts" name="package" >
          <option disabled selected>select a  packege from this list</option>
          <option value = "1" <?php if ($tpack=='1') echo 'selected'; ?>>1</option>
          <option value = "2" <?php if ($tpack=='2') echo 'selected'; ?>>2</option>
          <option value = "3"  <?php if ($tpack=='3') echo 'selected'; ?>>3</option>
          <option value = "4"  <?php if ($tpack=='4') echo 'selected'; ?>>4</option>
        </select>

        <br>
        <br>
        <label>enter the BANK </label><br>
    <select class="pgtwayinpts" name="bank" >
          <option disabled selected>select your bank from this list</option>
          <option value = "BOC" <?php if ($tbank=='BOC') echo 'selected'; ?>>BOC</option>
          <option value = "HNB" <?php if ($tbank=='HNB') echo 'selected'; ?>>HNB</option>
          <option value = "COMERSIAL" <?php if ($tbank=='COMERSIAL') echo 'selected'; ?>>COMERSIAL</option>
          <option value = "SDB" <?php if ($tbank=='SDB') echo 'selected'; ?>>SDB</option>
          <option value = "UNION BANK" <?php if ($tbank=='UNION BANK') echo 'selected'; ?>>UNION BANK</option>
          <option value = "PEOPLES BANK" <?php if ($tbank=='PEOPLES BANK') echo 'selected'; ?>>PEOPLES BANK</option>
        </select>

      <br>
      <br>
      
      <label>enter additional services if needed </label><br>
      <select class="pgtwayinpts"  name = "additional" >
          <option disabled selected>select additional services if you want</option>
          <option value = "1" <?php if ($taddi=='1') echo 'selected'; ?>>1</option>
          <option value = "2" <?php if ($taddi=='2') echo 'selected'; ?>>2</option>
          <option value = "3" <?php if ($taddi=='3') echo 'selected'; ?>>3</option>
          <option value = "4" <?php if ($taddi=='4') echo 'selected'; ?>>4</option>
        </select>

        <br>
        <br>




    <input type="submit" id = "update"  value="update">

  </form>
</body>
</html>