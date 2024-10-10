<?php

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $Sdegree = $_POST["Degree"];
    $Sexperience = $_POST["Previous Experience"];
    $Sgpa = $_POST["GPA"];
    $Stimescale = $_POST["Timescale"];
    $Sdesition = $_POST["Desition"];
    $Sexplanation = $_POST["Explanation"];
    $Sreason = $_POST["Reason for intern "];

    $sql = "INSERT INTO sdeveloper (Degree, Previous Experience, GPA, Timescale, Desition, Explanation, Reason for intern ) 
            VALUES ('$Sdegree', '$Sexperience', '$Sgpa', '$Stimescale', '$Stimescale', '$Sdesition', '$Sexplanation', '$Sreason')";

    if($con->query($sql)===TRUE) 
    {
        echo "Insert Successful";
    }
    
    else 
    {
        echo "Error:".$con->error;
    }
}
    $con->close();

?>
