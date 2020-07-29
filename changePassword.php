<?php
    session_start();
    include_once 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-library||Home</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/password.css">
    <link rel="stylesheet" href="CSS/profile.css">
    <link rel="shortcut icon" href="IMAGE/favicon.ico" type="image/x-icon">
</head>
<body>
        <?php
            include_once 'header.php';
        ?>
        
        <?php 
            if(isset($_SESSION['Name']))
            {
            $name=$_SESSION['Name'];
            $sql ="SELECT * FROM member WHERE First_Name ='$name'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                while ($row = mysqli_fetch_assoc($result)) {
                 $imgStatus = $row['img_status'];
                 if($imgStatus==0)
                 {
                     
                    echo"
                    <div class='profile_user'>
                        <div class='profile_userimg'>
                            <img src='profile/profile".$row['Id'].".jpg?".mt_rand()."' alt=''>
                        </div>    
                        <p>Welcome, ".$_SESSION['Name']."</p>
                        <br clear='all'>
                    </div>
                     ";
                 }
                 else
                 {
                    echo"
                    <div class='profile_user'>
                        <div class='profile_userimg'>
                            <img src='profile/defaultProfile.png' alt=''>
                        </div>
                        <p>Welcome, ".$_SESSION['Name']."</p>
                        <br clear='all'>
                    </div>
                    ";
                   
                 }
                        
                }  
                

            }
            else
            {
                echo "something error in code";
            }
          
        }
         else
         {
            echo"
                    <div class='profile_user'>
                        <div class='profile_userimg'>
                            <img src='profile/defaultProfile.png' alt=''>
                        </div>
                        <p>Welcome, user</p>
                        <br clear='all'>
                    </div>
                     ";
         }  
       
        ?>

        
        <div class="profile_de">
            <h1>CHANGE PASSWORD</h1>
            
            <form class="change_password" method="POST" enctype="multipart/form-data" action="changePassword.php">

                <h2>Enter Current Password :</h2>
                <input type="password" name="oldPassword"><br clear="all">
                <h2>Enter New Password :</h2>
                <input type="password" name="newPassword"><br clear="all">
                <h2>Re-Enter New Password :</h2>
                <input type="password" name="confirmPassword"><br clear="all">
                <input class="btnl" type="submit" name="cPassword" value="Change Password">
                <br clear="all">

            </form>
            <br clear="all">
            <?php
                include_once 'include.php';
                if (isset($_POST['cPassword']))
                {
                    $oldPassword = $_POST['oldPassword'];
                    $newPassword = $_POST['newPassword'];
                    $confirmPassword = $_POST['confirmPassword'];
                    if($newPassword==$confirmPassword)
                    {   
                        $sr = $_SESSION['Id'];
                        $sql = "SELECT * FROM member WHERE Id = $sr";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                               if($row['Password']==$oldPassword)
                               { 
                                   
                                    $sqlNew = "UPDATE member SET Password = $newPassword WHERE Id = $sr";
                                    $resultnew = mysqli_query($conn,$sqlNew);
                                    header("Location: logout.php?password_change");
                               }
                               else
                               {
                                   echo "You have entered wrong old password";
                               }
                            }
                        }
                    }
                    else
                    {
                        echo "password didn't match";
                    }
                } 
                else {
                    
                }
                

            ?>
            
        </div>
        <br clear="all">
        <?php
            include_once 'footer.php';
        ?>
        
        

</body>
</html>