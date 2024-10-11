<html>
<head>
    <link rel="stylesheet" href="read.css">
</head>    
<body> 

<?php

require 'config.php';

$ID=$_POST["uid"];

$sql="DELETE FROM user_account
WHERE UserID='$ID' ";

if($con->query($sql))
{
    echo "Deleted";
    header("Location:http://localhost/jobsadawiya/Sandeepa/createUserProfile/read.php");
    exit;
}
else
{
    echo "Not success";
}

$con->close();

?>

</body>
</html>