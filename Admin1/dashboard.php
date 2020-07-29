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
                <p class='button' id='button'>bhaveshsuthar@gmail.com</p>
                <div id='popup' class='popup'>
                    <a href='#'><p>View Profile</p></a>
                    <a href='#'><p>Edit Profile</p></a>
                    <a href='#'><p>Logout</p></a>
                    <p>&times;</p>    
                </div>
                <script src="JS/header.js"></script>
            </div>
            <br clear="all">
        </div>
        <div class="list">
            <ul>
                <li><a href="statistic.php">Statistics</a></li>
                <li><a href="addbook.php">Add Member</a></li>
                <li><a href="addbook.php">Add Book</a></li>
                <li><a href="userlist.php">User list</a></li>
                <li><a href="booklist.php">Book list</a></li>
                <li><a href="uploadrequest.php">Upload Request</a></li>
            </ul>
        </div>
        <div class="content">
            hello
        </div>

        <?php
            include_once 'footer.php';
        ?>
    </div>
</body>
</html>