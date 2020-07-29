<?php
    include_once '../include.php';
        if(isset($_REQUEST['activity']))
        {
            $Id = $_REQUEST['activity'];
            $sql = "Select * From bookrquest where Id = $Id";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) {
                    $filename = "book/".$row['Book_Location'];
                $filedestination ="upload/".$row['Book_Location'];
                // echo"`$`filedestination";
                // move_uploaded_file($filename,$filedestination);
                $bookName=$row['book_Name'];
                $fileNameNew2 =$row['Book_Location'];
                $fileNameNew1=$row['book_image'];
                $AuthorName=$row['Author_Name'];
                $Description = $row['Book_Description'];
                $Category = $row['Category'];
                $Edition = $row['Edition'];
                $Id1 = $row['userid'];
                $Id= $row['Id'];
                echo $Id;
                $Idd = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM book"));
                $Idd = $Idd +1;
                echo $Idd;
                $sql = "INSERT INTO `book`(`Id`,`Book_Location`, `book_image`, `book_Name`, `Author_Name`, `Book_Description`, `Category`, `Edition`, `User_Id`) VALUES ('$Idd','$fileNameNew2','$fileNameNew1','$bookName','$AuthorName','$Description','$Category','$Edition','$Id1')"; 
                $result = mysqli_query($conn,$sql);
                $sq ="DELETE FROM `bookrquest` WHERE Id= $Id";
                $result1=mysqli_query($conn,$sq);
                header("Location:uploadrequest.php?upload success");
                }
            }
            else {
                print("problem in query");
            }
                
        
       
    }
?>