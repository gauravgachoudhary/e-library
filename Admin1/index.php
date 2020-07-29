<?php
    include_once '../include.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
    <div class="admin_index">
        <div class="header" style="box-shadow:0px 0px 10px">
            <img src="Image/logo_admin.png" alt="">
            <p class="index_p">ADMIN LOGIN</p>
        </div>
    

        <div class='login'>
            <form  action='index.php' method='POST'>
                <img src='../IMAGE/name.png' alt=''>
                <input class='username' name='username' type='text' placeholder='Username/Email/Phone' required><br clear='all'>
                <img src='../IMAGE/lock.png' alt=''>
                <input class='password' type='password' name='pass' placeholder='Enter Password' id='' required><br clear='all'>
                <input class='btnl' type='submit' name='login' value='Login'>
                <br clear='all'>
            </form>
        </div>
        <?php
            if(isset($_POST['login']))
            {
                $userName = $_POST['username'];
                $password = $_POST['pass'];
                $sql = "SELECT * FROM `admin` WHERE User_Name = '$userName'";
                
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if($password==$row['password'])
                        {
                            $_SESSION['Name']=$row['Name'];
                            echo $_SESSION['Name'];
                            $_SESSION['Id']= $row['Id'];
                            header("Location: dashboard.php");
                        }
                        else
                        {
                            echo"<script>alert('wrong password');</script>";
                        }
                    }
                }
                else
                {
                    echo"<script> alert('You entered wrong id');</script>";
                }
            }
            
        
        ?>
    </div>
</body>
</html>