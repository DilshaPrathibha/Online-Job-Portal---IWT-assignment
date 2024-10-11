<html>
<head>
    <link rel="stylesheet" href="read.css">
    <!--Boxing CSS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
     rel="stylesheet" />
    <link rel="stylesheet" href="navbar.css">

    <style>
        button{
            padding:5px 8px;
            margin:5px 10px;
            width:80px;
            border-radius:8px;
        }

        button:hover
        {
        background: #000;
        color: #fff;
        }
    </style>
</head>    
<body>    

<div class="btn" style="display: flex;">

<a href="http://localhost/jobsadawiya/Sandeepa/Shamal/user_account_page.php">
<button style="margin-right: 5px;">Back</button></a>

<form method="post" action="updateUserProfile.php" >
<button style="margin-right: 5px; background-color: green;">Update</button>
</form>

<form method="post" action="deleteUserProfile.php">
<button style="margin-right: 5px; background-color: red;">Delete</button>
</form>

</div>


    <div>
    <?php

require 'config.php'; //set connection



//sql query for read
$sql=   "SELECT 
            UserID,
            Name_GeneralInfo,
            Title_GeneralInfo,
            Description_GeneralInfo,
            Description_About,
            Company_Name_WorkExperience,
            Employment_Type_WorkExperience,
            Title_WorkExperience,
            Start_Date_WorkExperience,
            End_Date_WorkExperience,
            Description_WorkExperience,
            Description_Education,
            Description_Skills 
        FROM user_account";

$result=$con->query($sql);

//num_rows ---> find how many results in entire $result
if($result->num_rows>0)
{
    echo"<table class='content-table' >";
    echo"<thead>";
    echo"<tr>";
    echo 
    "<th>User ID</th>".
    "<th>Name (General Info:)</th>".
    "<th>Title (General Info:)</th>".
    "<th>Description (General Info:)</th>".
    "<th>Description (About)</th>".
    "<th>Company Name (Work-experience)</th>".
    "<th>Employement Type (Work-experience)</th>".
    "<th>Title (Work-experience)</th>".
    "<th>Start Date (Work-experience)</th>".
    "<th>End Date (Work-experience)</th>".
    "<th>Description (Work-experience)</th>".
    "<th>Description (Education)</th>".
    "<th>Description (Skills)</th>";
    echo"</thead>";
    echo"</tr>";

    //to get one by one rows in $result
    while($row=$result->fetch_assoc())
    {
        echo"<tbody>";
        echo"<tr>";
        echo 
        "<td>".$row["UserID"]."</td>".
        "<td>".$row["Name_GeneralInfo"]."</td>".
        "<td>".$row["Title_GeneralInfo"]."</td>".
        "<td>".$row["Description_GeneralInfo"]."</td>".
        "<td>".$row["Description_About"]."</td>".
        "<td>".$row["Company_Name_WorkExperience"]."</td>".
        "<td>".$row["Employment_Type_WorkExperience"]."</td>".
        "<td>".$row["Title_WorkExperience"]."</td>".
        "<td>".$row["Start_Date_WorkExperience"]."</td>".
        "<td>".$row["End_Date_WorkExperience"]."</td>".
        "<td>".$row["Description_WorkExperience"]."</td>".
        "<td>".$row["Description_Education"]."</td>".
        "<td>".$row["Description_Skills"]."</td>";
        echo"<tr>";
        echo"</tbody>";
    }

    echo"</table>";
}
else
{
    echo "No Results";
}





$con->close();


?>




</body>
</html>