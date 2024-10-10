<!DOCTYPE html>
<html>
  <head>
    <title>jobs adaviya</title>
    <link rel="stylesheet" href="..//php/project/portal.css">

  </head>
  <body>

</body>
</html>


<?php



require 'config.php';
;
$trgetid = $_POST['txtid'];
$nemail = $_POST['email'];
$nphone = $_POST['phone'];
//$naddres = $_POST['addres'];
$nname = $_POST['name'];
$nnic = $_POST['nic'];
$npackage = $_POST['package']; 
$nbank = $_POST['bank'];
$naddition = $_POST['additional'];


if(empty($nemail)||empty($nphone)||empty($nname)||empty($nnic)|| empty($npackage)|| empty($nbank)|| empty($naddition))
 {
  echo "all required";
 }
else
    {
      
$sql = "UPDATE userpayment 
set   email = '$nemail',
phone =  '$nphone',
NIC = '$nnic',
package = '$npackage',
additional_s = '$naddition',
bank = '$nbank',
holder_name = '$nname'


where  trx_id ='$trgetid' ; ";

if($conn->query($sql))
{
echo "update sucessfull";
header("Location:http://localhost/jobsadawiya/Sandeepa/Bupathifnl/payinfo.php");
  exit;
}

else
{
echo "error".$conn->error;
}

$conn->close();       

 }
         








?>