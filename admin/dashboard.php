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
    <link rel="stylesheet" href="CSS/style.css">
    

</head>
<body>
    <div class="dashboard">
        <div class="header">
            <img src="Image/logo_admin.png" alt="">
            <div class="header_admin">
                <img src="Image/b2.jpg" alt="">
                <p class='button' id='button'> 
                <?php 
                    echo $_SESSION['user'];
                ?></p>
                <div id='popup' class='popup'>
                    <a href='dashboard.php?acitivity=viewProfile'><p>View Profile</p></a>
                    <a href='dashboard.php?acitivity=editProfile'><p>Edit Profile</p></a>
                    <a href='logout.php'><p>Logout</p></a>
                    <p>&times;</p>    
                </div>
                <script src="JS/header.js"></script>
            </div>
            <br clear="all">
        </div>
        <div class="list">
            <ul>
                <li><a href="dashboard.php?acitivity=statistic">Statistics</a></li>
                <li><a href="dashboard.php?acitivity=addMember">Add Member</a></li>
                <li><a href="addbook.php">Add Book</a></li>
                <li><a href="dashboard.php?acitivity=userlist">User list</a></li>
                <li><a href="dashboard.php?acitivity=bookList">Book list</a></li>
                <li><a href="dashboard.php?acitivity=uploadrequest">Upload Request</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
                if(isset($_SESSION['Name']))
                {
                $case = $_REQUEST['acitivity'];
                switch ($case) {
                    case 'statistic':
                        include_once 'statistic.php';
                        break;
                    case 'addMember':
                        include_once 'addMember.php';
                        break;
                    case 'userlist':
                        include_once 'userlist.php';
                        break;
                    case 'bookList':
                        include_once 'booklist.php';
                        break;
                    case 'uploadrequest':
                        include_once 'uploadrequest.php';
                        break;
                    case 'viewProfile':
                        include_once 'viewProfile.php';
                        break;
                    case 'editProfile':
                        include_once 'editProfile.php';
                        break;
                    default:
                        echo "hello";
                        break;
                }
                }
                else {
                    echo"you are not login";
                }
            ?>
        </div>

        <?php
            include_once 'footer.php';
        ?>
    </div>
</body>
</html>