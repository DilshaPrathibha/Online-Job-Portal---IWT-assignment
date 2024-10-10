<?php

require 'config.php';

$uname=$_POST["uname"];
$pass=$_POST["password"];


$sql="INSERT INTO users VALUES('','', '','$uname','','','','$pass','','','')";

if($conn->query($sql))
{echo "<script>
    alert('User account has been successfully created');
    window.location.href = 'http://localhost/jobsadawiya/Sandeepa/home/home.php';
</script>";

exit;
    
}
else
{
    echo "Error".$conn->error;
}

$conn->close();

?>