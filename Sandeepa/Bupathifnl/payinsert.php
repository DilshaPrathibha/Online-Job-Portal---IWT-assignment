<?php

require 'config.php';

$pemail = $_POST['email'];
$pphone = $_POST['phone'];
$pNIC = $_POST['nic'];
$ppackge = $_POST['packege'];
$paddition = $_POST['additional'];
$pbank = $_POST['bank'];
$pholder = $_POST['hname'];
$pcardno = $_POST['cno'];
$pxprdate = $_POST['expdte'];
$pcvv = $_POST['cv'];

$sql = $sql = "INSERT INTO userpayment (email, phone, NIC, package, additional_s, bank,holder_name,card_no,expire_date,cvv) 
VALUES ( '$pemail', '$pphone', '$pNIC', '$ppackge', '$paddition', '$pbank', '$pholder', '$pcardno', '$pxprdate', '$pcvv');";


if($conn->query($sql))
{
  echo "payment sucessfull";
  header("Location:http://localhost/jobsadawiya/Sandeepa/Bupathifnl/payinfo.php");
  exit;
}

else
{
  echo "error".$conn->error;
}

$conn->close();
?>


?>