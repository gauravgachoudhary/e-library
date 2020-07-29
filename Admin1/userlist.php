<?php
    session_start();
    include_once '../include.php';
?>
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
            <h2>Userlist</h2>
        </div>
        
        <table>
            <tr>

                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Delete profile</th>
                

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
                        
                        <td><a href='removeuser.php?activity=".$row['Id']."'> Remove Profile</a></td>

                    </tr>"; 
                   
                    
                    }
                     
                    
                    }               
            ?> 
            
        </table>
    </div>
  
       
</body>
</html>