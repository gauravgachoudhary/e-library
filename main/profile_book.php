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

        <div class="header">

            <div class="header_name">
                <h1>E-library</h1>
            </div>

            <div class="nav">
            <?php 
                if(isset($_SESSION['Name']))
                {
                    echo
                    "
                    <ul>
                        <a href='index.php'><li>HOME</li></a>
                        <a href='profile.php'> <li>PROFILE</li></a>
                        <a href='#'> <li>FEATURE</li></a>
                       
                    </ul>
                    ";

                }
                else
                {
                    echo
                    "
                    <ul>
                        <a href='index.php'><li>HOME</li></a>
                       
                        <a href='#'> <li>FEATURE</li></a>
                        <a href='login.php'><li>LOGIN</li></a>
                    </ul>
                    ";
                }
             ?>
                
            </div>

            <br clear="all">

        </div>
        
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
                    <div class='c_user'>
                        <img src='profile/profile".$row['Id'].".jpg?".mt_rand()."' alt=''>
                        <p>Welcome, ".$_SESSION['Name']."</p>
                        <br clear='all'>
                    </div>
                     ";
                 }
                 else
                 {
                    echo"
                    <div class='c_user'>
                        <img src='profile/defaultProfile.png' alt=''>
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
                    <div class='c_user'>
                        <img src='profile/defaultProfile.png' alt=''>
                        <p>Welcome, user</p>
                        <br clear='all'>
                    </div>
                     ";
         }  
       
        ?>

        <div class="profile">
            <div class="p_p">
               <a href="profile.php"> <p>View Profile</p></a>
               <a href="profile_edit.php"><p>Edit Profile</p></a>
               <a href="change_profile.php"> <p>Change Password</p></a>
               <a href="profile_book.php"> <p>Upload Book</p></a>
            </div>
            <a href="logout.php"><h2>Logout</h2></a>
        </div>
        <div class="profile_de">
            <h1>UPLOAD BOOK</h1>
            
            <form class="book_upload" style="margin: 0;" method="POST" enctype="multipart/form-data" action="newfile.php">

                <h2>Name :</h2>
                <input class="firstname" style="width: 40%;" name="bookName" type="text" placeholder="Book Name" required>
                <br clear="all">
                <h2>Book Image :</h2>
                <input class="uploadb" type="file" accept="image/png,image/jpeg" name="file1"><br clear="all">
                <h2>Book :</h2>
                <input class="uploadb" type="file" accept=".pdf" name="file2"><br clear="all">
                <h2>Describtion :</h2>
                <input class="describtion" style="width: 40%;" type="text" name="detail"><br clear="all">
                <input class="btnl" type="submit" name="bookUpload" value="Upload Book">
                <br clear="all">
            </form>
            <br clear="all">
            
        </div>
        <?php
            include_once 'footer.php';
        ?>
        

</body>
</html>