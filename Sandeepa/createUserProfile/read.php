<html>
<head>
    <link rel="stylesheet" href="read.css">
    <!--Boxing CSS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
     rel="stylesheet" />
    <link rel="stylesheet" href="navbar.css">

    <style>
        button:hover
        {
        background: #000;
        color: #fff;
        }
    </style>
</head>    
<body>    

        <a href="http://localhost/jobsadawiya/Sandeepa/home/home.php"><button style="padding:8px 10px; margin: 8px 8px">
            Back to Home <i class='bx bx-home'></i></button></a>


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

<form method="post" action="updateUserProfile.php">


    <button style="
    font-size: 15px;
    padding: 5px 5px 5px 5px;
    margin-top:10px;
    margin-bottom:40px;
    width: 100px;
    border-radius: 6px;
    text-decoration: none;
    background-color: #fff;
    color: #000;
    display: flex;
    display:inline;
    transition: background 0.5s;
">Update</button>

</form>

<form method="post" action="deleteUserProfile.php">


<button style="
    font-size: 15px;
    padding: 5px 5px 5px 5px;
    transition: background 0.5s;
    margin-top:-10px;
    margin-bottom:40px;
    width: 100px;
    border-radius: 6px;
    text-decoration: none;
    background-color: #fff;
    color: #000;
    display: inline;
">Delete</button>

</form>


    </div>






</body>
</html>