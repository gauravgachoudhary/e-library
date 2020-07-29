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
    <link rel="stylesheet" href="CSS/profile.css">
    <link rel="shortcut icon" href="IMAGE/favicon.ico" type="image/x-icon">
</head>
<body>

        <?php
            include_once 'header.php';

        ?>
        <div class="profile_new">
            <?php 
                if(isset($_SESSION['Name']))
                {
                $name=$_SESSION['Name'];
                $sql ="SELECT * FROM `member` WHERE First_Name ='$name'";
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
                            <p>".$_SESSION['Name']."</p>
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
                            <p>".$_SESSION['Name']."</p>
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
                            <p>Welcome, user(<a href='login.php'> You are not login, please login)</a></p>
                            <br clear='all'>
                        </div>
                        ";
            }  
        
            ?>
            
            

            
            <?php
                if (isset($_REQUEST['activity'])) {
                
                $activity = $_REQUEST['activity'];
                
                }
                else
                {
                    
                $activity = "View_profile";
                
                }
            
            ?>
            <div class="profile_de">
            <?php 
                if(isset($_SESSION['Name']))
                {
                $name=$_SESSION['Name'];
                $sql ="SELECT * FROM `member` WHERE First_Name ='$name'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
                    while ($row = mysqli_fetch_assoc($result)) {
                    $imgStatus = $row['img_status'];
                    if($imgStatus==0)
                    {
                        echo"
                            
                            <div class='profile_info'>
                                <h2>Name :</h2><p>".$row['First_Name']." ".$row['Last_Name']."</p>
                                <h2>E-mail :</h2><p>".$row['Email']."</p><br clear='all'>
                                <h2>Number :</h2><p>".$row['Phone']."</p><br clear='all'>
                            </div>
                            <br clear='all'>
                        ";
                    }
                    else
                    {
                        echo"
                        
                        <div class='profile_info'>
                            <h2>Name :</h2><p>".$row['First_Name']." ".$row['Last_Name']."</p><br clear='all'>
                            <h2>E-mail :</h2><p>".$row['Email']."</p><br clear='all'>
                            <h2>Number :</h2><p>".$row['Phone']."</p><br clear='all'>
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
                <div class='profile_img'>
            
                    <img src='PROFILE/defaultProfile.png' width='100px' alt=''>
                </div>
                        
                ";
            }
                
        
            ?>
            </div> 
            <br clear="all">
            <div class="profile">
                    <div class="p_p">
                        <a href="profile.php"><p>View Profile</p></a>
                        <a href="profile_edit.php"><p>Edit Profile</p></a>
                        <a href="changePassword.php"><p>Change Password</p></a>
                    </div>
                    <br clear="all">
                    <a href="logout.php"><h2>Logout</h2></a>
            </div>   
        </div>    
        <?php
            include_once 'footer.php';
        ?>    
        

</body>
</html>