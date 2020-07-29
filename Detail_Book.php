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
    <link rel="stylesheet" href="CSS/log_sign.css">
    <link rel="stylesheet" href="CSS/book.css">
    <link rel="shortcut icon" href="IMAGE/favicon.ico" type="image/x-icon">
</head>
<body>
        <?php
            include_once 'header.php';
        ?>

        <div class='login_n'>
            <p>Book Detail</p>
        </div>
    <?php
        $i = $_REQUEST['activity'];
        $sql = "SELECT * FROM book WHERE Id =$i";
        $result =mysqli_query($conn,$sql);
       
        $row = mysqli_fetch_assoc($result);



        if(isset($_SESSION['Name']))
        {
            
            echo "
                <div class='book_img'>
                    <img src='upload/".$row['book_image']."' alt='Book Image' >
                </div>

                <div class='book_disc_'>
                    <p>".$row['book_Name']."</p>
                    <p>".$row['Author_Name']."</p>
                    <p>".$row['Edition']."</p>
                    <p>".$row['Book_Description']."</p>
                </div>
                <br clear='all'> 

                <!-- Download or View Book -->
                <span>h</span>
                <a class='view' href='upload/".$row['Book_Location']."#toolbar=0' target='null' >
                    <p>View Book</p>
                </a>

                <a class='view' href='upload/".$row['Book_Location']."#toolbar=0' target='null' Download='".$row['book_Name'].".pdf'>
                    <p>Download Book</p>
                </a>
                <br clear='all'>";
           
        }
        else
        {
            echo "You are not login";
        }
        
    ?>
        
        <?php
            include_once 'footer.php';
        ?>
</body>
</html>