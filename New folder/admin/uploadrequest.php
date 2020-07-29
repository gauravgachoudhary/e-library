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
    <link rel="stylesheet" href="CSS/uploadrequest.css">
</head>
<body>
    <?php
        echo "Hello '".$_SESSION['Name']."'";
    ?>
    <div class="field">
        <div class="head">
            <h2>Book Upload Request</h2>
        </div>
        
        <table>
            <tr>

                <th>Id</th>
                <th>Book Name</th>
                <th>Category</th>
                <th>Author Name</th>
                <th>View Book</th>
                <th>Remove Book</th>
                <th>Upload Book</th>
                <th>User Id</th>

            </tr>
            <?php
                $sql = "SELECT * FROM bookrquest";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo"<tr>

                        <td>".$row['Id']."</td>
                        <td>".$row['book_Name']."</td>
                        <td>".$row['Category']."</td>
                        <td>".$row['Author_Name']."</td>
                        <td><a href='../THUMBNAIL/".$row['Book_Location']."'>View</a></td>
                        <td> <a href='uploadrequest.php?activity=remove'>Remove Book</a></td>
                        <td> <a href='uploadrequest.php?activity=submit'>Upload Book</a></td>
                        <td>User Id</td>

                    </tr>"; 
                    if(isset($_REQUEST['activity']))
                    {  
                        if($_REQUEST['activity']=="submit"){
                            $filename = "book/".$row['Book_Location'];
                            $filedestination ="upload/".$row['Book_Location'];
                            // echo"`$`filedestination";
                            move_uploaded_file($filename,$filedestination);
                            $bookName=$row['book_Name'];
                            $fileNameNew2 =$row['Book_Location'];
                            $fileNameNew1=$row['book_image'];
                            $AuthorName=$row['Author_Name'];
                            $Description = $row['Book_Description'];
                            $Category = $row['Category'];
                            $Edition = $row['Edition'];
                            $Id1 = $row['userid'];
                            $Id= $row['Id'];
                            $Idd = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM book"));
                            $Idd = $Idd +1;
                            echo $Idd;
                            $sql = "INSERT INTO `book`(`Id`,`Book_Location`, `book_image`, `book_Name`, `Author_Name`, `Book_Description`, `Category`, `Edition`, `User_Id`) VALUES ('$Idd','$fileNameNew2','$fileNameNew1','$bookName','$AuthorName','$Description','$Category','$Edition','$Id1')"; 
                            $result = mysqli_query($conn,$sql);
                           $sq ="DELETE FROM `bookrquest` WHERE Id= $Id";
                           $result1=mysqli_query($conn,$sq);
                            header("Location:uploadrequest.php?upload success");    
                        }
                        else if($_REQUEST['activity']=='remove'){
                            $Id= $row['Id'];
                            echo "$Id";
                            $sq ="DELETE FROM `bookrquest` WHERE Id= $Id";
                            $result1=mysqli_query($conn,$sq);
                           header("Location:uploadrequest.php?remove success"); 
                        }
                    }

                    }
                }    
            ?> 
            
        </table>
    </div>
  
       
</body>
</html>