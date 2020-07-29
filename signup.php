<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-library||Home</title>
    <link rel="stylesheet" href="CSS/log_sign.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="IMAGE/favicon.ico" type="image/x-icon">
</head>
<body>

        <?php
            include_once 'header.php';
        ?>
        
        <?php
            if(isset($_REQUEST['activity']))
            {
                echo" <p class='wrong'> ".$_REQUEST['activity']."</p>";
            }
            ?>
        <div class="login_n">
            <p>Signup</p>
        </div>
        
        <div class="sign" >
            <form  action="logData.php"  method="POST">
                <img src="IMAGE/name.png" alt="">
                <input class="firstname" type="text" name="fname" placeholder="First Name">
                <input class="lastname" type="text" name="sname" placeholder="Second Name"><br clear="all">
                <img src="IMAGE/email.jpeg" alt="">
                <input class="email" type="email" name="email" id="" placeholder="abc@example.com"><br clear="all">
                <img src="IMAGE/phone.png" alt="">
                <input class="number" type="text" name="Phone" placeholder="0123456789" maxlength="10" id=""><br clear="all">
                <img src="IMAGE/lock.png" alt="">
                <input class="password" style="width: 71%;" type="password" name="pass" placeholder="Enter Password" id=""><br clear="all">
                <input class="btnl" type="submit" name="submit-signup" value="Sign-up"><br>
               
                </form>
            
        </div>

        
        <br clear="all">

</body>
</html>