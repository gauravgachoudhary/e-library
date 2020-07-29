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
    <div class="admin_name">
        <?php
            echo "Hello '".$_SESSION['Name']."'";
        ?>
    </div>
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
                        <td> <a href='action.php?activity=".$row['Id']."'>Remove Book</a></td>
                        <td> <a href='addbook.php?activity=".$row['Id']."'>Upload Book</a></td>
                        <td>".$row['Id']."</td>

                    </tr>"; 
                   

                    }
                }    
            ?> 
            
        </table>
    </div>
  
       
</body>
</html>