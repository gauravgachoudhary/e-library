<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/viewProfile.css">
    <title>Document</title>
</head>
<body>
<div class="profile_new">
            <?php 
                if(isset($_SESSION['Name']))
                {
                    $name=$_SESSION['Name'];
                    
                    $sql ="SELECT * FROM `admin` WHERE `Name` ='$name'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        while ($row = mysqli_fetch_assoc($result)) {
                       
                        echo"
                            <div class='profile_user'>
                                <div class='profile_userimg'>
                                    <img src='../PROFILE/defaultProfile.png?".mt_rand()."' alt='profile'>
                                </div>
                                <p>".$_SESSION['Name']."</p>
                                <br clear='all'>
                                    
                            </div>
                            ";
                        } 
                    }
                } 
        
                            
              
             
            ?>
             <div class="profile_de">
            <?php 
                if(isset($_SESSION['Name']))
                {
                    $name=$_SESSION['Name'];
                    $sql ="SELECT * FROM `admin` WHERE `Name` ='$name'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        while ($row = mysqli_fetch_assoc($result)) {
                    
                            echo"
                                
                                <div class='profile_info'>
                                    <h2>Name :</h2><p>".$row['Name']."</p>
                                    <h2>E-mail :</h2><p>".$row['User_Name']."</p><br clear='all'>
                                    
                                </div>
                                <br clear='all'>
                            ";
                        }
                    }
                }
        
        
            ?>
            </div> 
            <br clear="all">
               
        </div>    
</body>
</html>