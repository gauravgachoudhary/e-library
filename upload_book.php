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
    <link rel="stylesheet" href="CSS/upload_book.css">
    <link rel="shortcut icon" href="IMAGE/favicon.ico" type="image/x-icon">
</head>
<body>

       <?php
            include_once 'header.php';
       ?>
        
       
        <div class="profile_de">
            <div class='upload_n'>
                <p>Upload Book</p>
            </div>
            
            <form class="book_upload" method="POST" enctype="multipart/form-data" action="newfile.php">

                <h2>Name :</h2>
                <input class="firstname" name="bookName" type="text" placeholder="Book Name" required>
                <br clear="all">
                <h2>Author Name :</h2>
                <input type="text" name="AuthorName" class="AuthorName" placeholder="Author Name" required>
                <br clear="all">
                <h2>Edition :</h2>
                <input type="text" name="Edition" class="Edition" placeholder="Edition" required>
                <br clear="all">
                <h2>Select Category :</h2>
                <select name="category" class="category">
                    <option value="0">!.Select Category.!</option>
                    <option value="Friction">Friction</option>
                    <option value="Non-Friction">Non-Friction</option>
                    <option value="Academic">Academic</option>
                </select>
                <br clear="all">
                <h2>Book Image :</h2>
                <input class="uploadb" type="file" accept="image/png,image/jpeg" name="file1" required><br clear="all">
                <h2>Book :</h2>
                <input class="uploadb" type="file" accept=".pdf" name="file2" required><br clear="all">
                <h2>Describtion :</h2>
                <input class="describtion" style="width: 40%;" type="text" name="detail" required><br clear="all">
                <input class="btnl" type="submit" name="bookUpload" value="Upload Book">
                
                <br clear="all">
            </form>
            <br clear="all">
            
        </div>
        <br clear="all">
        <?php
            include_once 'footer.php';
        ?>
        

</body>
</html>