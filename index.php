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
    <link rel="stylesheet" href="CSS/style3.css">
    <link rel="stylesheet" href="CSS/style.css">
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
            $sql ="SELECT * FROM `member` WHERE First_Name ='$name'";
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
                        <form action='index.php' method='POST'>
                        <input class='search' type='search' placeholder='Search book' name='search' id=''>
                        <input type='submit' value='search' class='search'>
                    </form>
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
                        <form action='index.php' method='POST'>
                            <input class='search' type='search' placeholder='Search book' name='search' id=''>
                            <input type='submit' value='search' class='search'>
                        </form>
                    </div>
                    ";
                    print("hii");
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
                        <form action='index.php' method='POST'>
                            <input class='search' type='search' placeholder='Search book' name='search' id=''>
                            <input type='submit' value='search' class='search'>
                        </form>
                    </div>
                     ";
                     
         }  
        
        ?>
                        
        <div class="content">
            <div class="c_right">
            <div class="read">
                <?php 

                        
                        if(isset($_POST['search']))
                        {
                            $search=$_POST['search'];
                            echo"<p>Your result for ".$search." is:\n";
                            
                            $sql = "SELECT * FROM book WHERE book_Name like'%".$search."%' ";
                        //  print($sql);
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)>0)
                            {
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                                $Name = $row['book_Name'];
                                echo ' <div class="book_detail">
                                            <a href="Detail_Book.php?activity='.$row['Id'].'">
                                                <div class="container">
                                                    <img src="upload/'.$row["book_image"].'?'.mt_rand().')"  alt="">
                                                </div>
                                            
                                                <div class="container_line">
                                                    <h2>'.$Name.'</h2>
                                                    <p>'.$row['Book_Description'].'</p>
                                                </div>
                                            </a>
                                        </div>
                               ';
                                    
                                }
                            }
                        }
                        else
                        {
                            if(isset($_REQUEST['activity']))
                        {
                            $activity1 = $_REQUEST['activity'];
                            
                            $activity = $activity1 -6;
                            
                            
                        }
                        else
                        {
                            $activity1 = 6;
                            $activity = 0;
                        }
                        $sql = "SELECT * FROM book where Id >$activity and id<=$activity1";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {  
                            
                                $Name = $row['book_Name'];
                                
                                echo ' <div class="book_detail">
                                            <a href="Detail_Book.php?activity='.$row['Id'].'">
                                                <div class="container">
                                                    <img src="upload/'.$row["book_image"].'?'.mt_rand().')"  alt="">
                                                </div>
                                            
                                                <div class="container_line">
                                                    <h2>'.$Name.'</h2>
                                                    <p>'.$row['Book_Description'].'</p>
                                                </div>
                                            </a>
                                        </div>
                               ';
                            }
                        }

                        }
                        
                ?>
                
                
                </div>
            </div>
            <br clear="all">
            <div class="pages">
                <?php

                
                    $sql = "SELECT * FROM book";
                    $result = mysqli_query($conn,$sql);
                    $val = mysqli_num_rows($result);
                    $NoOfPages = $val/6;
                    $noOfPages1 = $val%6;
                    // echo $noOfPages1;
                    if($noOfPages1>0)
                    {
                        $pages= $NoOfPages+1;
                        for ($i=1; $i <$pages ; $i++) 
                        {
                            $value = $i*6;
                            echo " <a href='index.php?activity=$value'><p>$i</p></a>";
                        }
                    }
                    else
                    {
                        $pages = $NoOfPages;
                        for ($i=1; $i <$pages ; $i++) 
                        { 
                            $value = $i*6;
                            echo " <a href='index.php?activity=$value'><p>$i</p></a>";
                        }
                    }
                    
                ?>
                    <!-- <a href="index.php?activity=6"><p>1</p></a>
                    <a href="index.php?activity=12"><p>2</p></a>
                    <a href="index.php?activity=18"><p>3</p></a> -->
            </div>
        </div>
        <?php
            include_once 'footer.php';
        ?>
        <script src="jquery.js"></script>
        
</body>
</html>