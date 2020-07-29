<?php
    session_start();
    include_once 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wgdth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-library||Home</title>
    <link rel="stylesheet" href="CSS/log_sign.css">

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="IMAGE/favicon.ico" type="image/x-icon">
</head>
<body>
        <!-- Navigation Panel -->

        <?php
            include_once 'header.php';
        ?>

        <!-- Login Signup -->

        <?php
            if(isset($_REQUEST['activity']))
            {
                if($_REQUEST['activity']==='login')
                {

                    echo "
                        <div class='login_n'>
                            <p>Login</p>
                        </div>
                        <br clear='all'>
                        <div class='login_img'>
                            <img src='IMAGE/bookwn.png' alt=''>
                        </div>
                
                        <div class='login'>
                            <form  action='login.php' method='POST'>
                                <img src='IMAGE/name.png' alt=''>
                                <input class='username' name='username' type='text' placeholder='Username/Email/Phone' required><br clear='all'>
                                <img src='IMAGE/lock.png' alt=''>
                                <input class='password' type='password' name='pass' placeholder='Enter Password' id='' required><br clear='all'>
                                <input class='btnl' type='submit' name='login' value='Login'>
                                <br clear='all'>
                                <a href=''><p>Forget password</p></a>
                                <br clear='all'>
                            </form>
                        </div>
                
                        
                        <br clear='all'>
                        ";
                }
                elseif ($_REQUEST['activity']==='signup') {
                    echo "
                    <div class='login_n'>
                        <p>Signup</p>
                    </div>
                    <br clear='all'>
                    <div class='login_img' style='margin: 20px 0px 50px 70px;'>
                        <img src='IMAGE/image_sign.png' alt=''>
                    </div>
                    <div class='sign' >
                        <form  action='login.php'  method='POST'>
                            <img src='IMAGE/name.png' alt=''>
                            <input class='firstname' type='text' name='fname' placeholder='First Name' required>
                            <input class='lastname' type='text' name='sname' placeholder='Second Name' required><br clear='all'>
                            <img src='IMAGE/email.png' alt='' required>
                            <input class='email' type='email' name='email' id='' placeholder='abc@example.com' required><br clear='all'>
                            <img src='IMAGE/phone.png' alt='' required>
                            <input class='number' type='text' name='Phone' placeholder='0123456789' maxlength='10' id='' required><br clear='all'>
                            <img src='IMAGE/lock.png' alt='' required>
                            <input class='password' style='width: 71%;' type='password' name='pass' placeholder='Enter Password' id='' required><br clear='all'>
                            <input class='btnl' type='submit' name='submit-signup' value='Sign-up'><br>
                            
                        
                        
                           
                        </form>
                        
                    </div>
            
                    
                    <br clear='all'>;
                    ";
                }
               
                
                    
            }
            
            else
            {
                
                echo "
                    <div class='loginsign_u'>
                    <a href='login.php?activity=login'><div class='login_u'>
                        <div class='login_uimg'>
                            <img src='IMAGE/login.png' alt=''>
                        </div>
                        <h2>LOGIN</h2>
                        <br clear='all'>
                    </div></a>
                    <a href='login.php?activity=signup'><div class='login_u'>
                        <div class='login_uimg'>
                            <img src='IMAGE/signup.png' alt=''>
                        </div>
                    <h2>REGISTER</h2>
                    <br clear='all'>
                    </div></a>
                    <br clear='all'>
                </div>";
            }
        ?>
        <br clear="all">
        <?php
            
            if(isset($_POST['login']))
            {
                $username = $_POST['username'];
                $password = $_POST['pass'];
                $sql = "SELECT * FROM `member` WHERE Email = '$username' OR Phone = '$username'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    while ($row = mysqli_fetch_assoc($result)) {
                       if ($password == $row['Password']) {
                            $_SESSION['Name'] = $row['First_Name'];
                            $_SESSION['Id'] = $row['Id'];
                            echo"<script>alert('login_success')</script>";
                            header("Location: index.php");
                       } 
                       else
                       {
                           
                           echo"<script>alert('Wrong password')</script>";
                       }
                    }
                }
                else
                {
                    
                    echo"<script>alert('No user found')</script>";
                }
                
            }

        ?>
        <?php
    if(isset($_POST['submit-signup']))
    {
        include_once 'include.php';
        $fName = $_POST['fname'];
        $sname = $_POST['sname'];
        $Email = $_POST['email'];
        $Phone = $_POST['Phone'];
        $pass = $_POST['pass'];
        $sq = "SELECT *FROM member";
        $Idd = mysqli_num_rows(mysqli_query($conn,$sq));
        $Id = $Idd +1;
        // echo "$Id";
        
        $sqlCheck = "SELECT * FROM `member` WHERE Email = '$Email' OR Phone = '$Phone'";
        $resultCheck = mysqli_query($conn,$sqlCheck);
        if(mysqli_num_rows($resultCheck)>0)
        {
              echo"<script>alert('Account is already created');</script>";
          //header("Location:login.php?activity='repeat'");
          
         } 
        else
        {
           
            $sql = "INSERT INTO `member`(`Id`, `First_Name`, `Last_Name`, `Email`, `Phone`, `Password`, `img_status`) VALUES ('$Id', '$fName', '$sname','$Email','$Phone','$pass','1')";
            $result = mysqli_query($conn,$sql);
            if ($result) {
                echo"<script>alert('Your account is created')</script>";
            } else {
                echo "error in query";
            }
            
           
                       
         }
       
    }
?>
        <!-- Footer -->
        
        <?php
            include_once 'footer.php';
        ?>
        

</body>
</html>