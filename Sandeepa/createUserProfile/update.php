<?php
require 'config.php';

$userId=$_POST["uid"];
$userName=$_POST["Name"];
$userTitle=$_POST["Title"];
$userDescription=$_POST["Description1"];
$aboutDescription=$_POST["Description2"];
$companyName=$_POST["cName"];
$employmentType=$_POST["eType"];
$workTitle=$_POST["eTitle"];
$startDate=$_POST["sDate"];
$endDate=$_POST["eDate"];
$workDescription=$_POST["Description3"];
$educationDescription=$_POST["Description4"];
$skillsDescription=$_POST["Description5"];

if(
    empty($userId)||
    empty($userName)||
    empty($userTitle)||
    empty($userDescription)||
    empty($aboutDescription)||
    empty($companyName)||
    empty($employmentType)||
    empty($workTitle)||
    empty($startDate)||
    empty($endDate)||
    empty($workDescription)||
    empty($educationDescription)||
    empty($skillsDescription)
    )
    {
        echo "All Required";
    }
    else
    {
        $sql=
        "UPDATE user_account
         SET 
         Name_GeneralInfo='$userName',
         Title_GeneralInfo='$userTitle',
         Description_GeneralInfo='$userDescription',
         Description_About='$aboutDescription',
         Company_Name_WorkExperience='$companyName',
         Employment_Type_WorkExperience='$employmentType',
         Title_WorkExperience='$workTitle',
         Start_Date_WorkExperience='$startDate',
         End_Date_WorkExperience='$endDate',
         Description_WorkExperience='$workDescription',
         Description_Education='$educationDescription',
         Description_Skills='$skillsDescription'
         WHERE UserID='$userId'
         ";

         if($con->query($sql))
         {
            echo "Updated";
            header("Location:http://localhost/jobsadawiya/Sandeepa/createUserProfile/read.php");
            exit;
         }
         else
         {
            echo "not updated";
         }
    }
   


?>