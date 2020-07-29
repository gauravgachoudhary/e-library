<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/uploadrequest.css">
</head>
<body>
    <div class="admin_name">
    <?php
        echo "Hello '".$_SESSION['Name']."'";
    ?>
    </div>
    
    <div class="field">
        <div class="head">
            <h2>userlist</h2>
        </div>
        
        <table>
            <tr>

                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Set Admin</th>
                

            </tr>
            <?php
                $sql = "SELECT * FROM member";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo"<tr>

                        <td>".$row['Id']."</td>
                        <td>".$row['First_Name']."</td>
                        <td>".$row['Last_Name']."</td>
                        <td>".$row['Email']."</td>
                        <td>".$row['Phone']."</td>
                        <td> ".$row['Password']."</a></td>
                        
                        <td><a href='addMember.php?activity=".$row['Id']."'> Make Admin</a></td>

                    </tr>"; 
                   }
                }               
            ?> 
            
        </table>
    </div>
  
    <?php
    include_once '../include.php';
    if(isset($_REQUEST['activity']))
    {
        $Id=$_REQUEST['activity'];
        $sql= "Select * from member where Id = $Id";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $Name = $row['First_Name']." ".$row['Last_Name'] ;
            $Email = $row['Email'];
         
            $Password = $row['Password'];
        }
        $resultCheck = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `admin` where `User_Name` = '$Email'"));
        if ($resultCheck>0) {
            echo "<p>account is already set as admin</p>";
        } else {
            $ID = mysqli_num_rows(mysqli_query($conn,"select * from admin"));
            $ID =$ID+1;
            $sql1 = "INSERT INTO `admin` (`Id`,`Name`,`User_Name`,`password`) VALUES ('$ID','$Name','$Email','$Password')";
            $result1 = mysqli_query($conn, $sql1);
            if ($result1) {
                echo"<script>alert('admin added successfull')</script>";   
            } else {
                echo "error in query";
            }
            header("location: addMember.php");
        }
    }    
?>
</body>
</html>