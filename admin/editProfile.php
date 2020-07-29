<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-library||Home</title>
    <link rel="stylesheet" href="CSS/viewProfile.css">
    <link rel="shortcut icon" href="IMAGE/favicon.ico" type="image/x-icon">
</head>
<body>
        <?php 
            if(isset($_SESSION['Name']))
            {
            $name=$_SESSION['Name'];
            $sql ="SELECT * FROM admin WHERE `Name` ='$name'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                while ($row = mysqli_fetch_assoc($result)) {
               
                     
                    echo"
                    <div class='profile_user'>
                        <div class='profile_userimg'>
                            <img src='../profile/defaultProfile.png?".mt_rand()."' alt='profile'>
                            
                        </div>
                      
                        
                        <p>Welcome, ".$_SESSION['Name']."</p>
                  
                    </div>
                     ";}
                    }
                }
        // ?>
          
        <br clear="all">
        <div class="profile_edit">     
        <?php 
             if(isset($_SESSION['Name']))
             {
                $name=$_SESSION['Name'];
                $sql ="SELECT * FROM `admin` WHERE `Name` ='$name'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
                while ($row = mysqli_fetch_assoc($result)) {
                
                
                    echo "
                    
                        <h1>EDIT PROFILE</h1>
                        <form class='profile_update' method='POST' action='update.php'>

                            <h2>Name :</h2>
                            <input class='firstname' type='text' name='fname' value='".$row['Name']."'>
                            <br clear='all'>
                            <h2>E-mail :</h2>
                            <input class='email' type='text' name='email' value='".$row['User_Name']."'><br clear='all'>
                            <input class='btnl' type='submit' name='update' value='Update'>
                            <br clear='all'>
                        </form>
                        <br clear='all'>
                        ";
                    }
                }
            }
        ?>
        </div>   
        

</body>
</html>