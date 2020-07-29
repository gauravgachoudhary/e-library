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
                            <label class='upload1' for='upload_photo'>Upload</label>  
                        </div>
                        <form class='profile_update2'  action='Upload.php' method='POST' enctype='multipart/form-data'>
                            <input class='upload' type='file' accept='image/png,image/jpeg' name='file' id='upload_photo'>
                            <input type='submit' class='btn1' value='Save' Name='upload'>
                        </form>
                        <br clear='all'>
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
                            <label class='upload1' for='upload_photo'>Upload</label> 
                        </div>
                        <form class='profile_update2'  action='Upload.php' method='POST' enctype='multipart/form-data'>
                            <input class='upload' type='file' accept='image/png,image/jpeg' name='file' id='upload_photo'>
                            <input type='submit' class='btn1' value='Save' Name='upload'>
                        </form>
                        <br clear='all'>
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
          
        <br clear="all">
        <div class="profile_edit">     
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
                   
                    echo "
                     
                        <h1>EDIT PROFILE</h1>
                        <form class='profile_update' method='POST' action='update.php'>

                            <h2>Name :</h2>
                            <input class='firstname' type='text' name='fname' value='".$row['First_Name']."'>
                            <input class='lastname' type='text' name='lname' value='".$row['Last_Name']."'><br clear='all'>
                            <h2>E-mail :</h2>
                            <input class='email' type='text' name='email' value='".$row['Email']."'><br clear='all'>
                            <h2>Number :</h2>
                            <input class='number' type='text' value='".$row['Phone']."' maxlength='10' name='Phone' id=''><br clear='all'>
                            <input class='btnl' type='submit' name='update' value='Update'>
                            <br clear='all'>
                        </form>
                        <br clear='all'>
                        ";
                  }
                  else
                  {
                     echo "
                        
                        <form class='profile_update' action='update.php' method='POST'>

                            <h2>Name :</h2>
                            <input class='firstname'name='fname' type='text' value='".$row['First_Name']."'>
                            <input class='lastname' name='lname' type='text' value='".$row['Last_Name']."'><br clear='all'>
                            <h2>E-mail :</h2>
                            <input class='email' type='text' name='email' value='".$row['Email']."'><br clear='all'>
                            <h2>Number :</h2>
                            <input class='number' type='text' value='".$row['Phone']."' maxlength='10' name='Phone' id=''><br clear='all'>
                            <input class='btnl' type='submit' name='update' value='Update'>
                            <br clear='all'>
                        </form>
                        <br clear='all'>
                        <form class='profile_update2' action='Upload.php' method='POST' enctype='multipart/form-data'>
                            <input class='upload' type='file' accept='image/png,image/jpeg' name='file' id='upload_photo'>
                            <input type='submit' style='margin: 0;' class='btn1' value='upload' Name='upload'>
                        </form>
                        <br clear='all'>
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
             echo "
                <div class='profile_img'>
                    <img src='PROFILE/defaultProfile.png' width='100px' alt=''>
                </div>
                ";
          }
            
        ?>
        </div>    
        <?php
            include_once 'footer.php';
        ?>
        

</body>
</html>