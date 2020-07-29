<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div class="header">
            <div class="header_name">
                <h1>E-library</h1>
            </div>
            <div class="nav">
             <?php 
                if(isset($_SESSION['Name']))
                {
                    echo
                    "
                    <ul>
                        <a href='#' class='button' id='button'><li>N</li></a>
                        <a href='upload_book.php'> <li>UPLOAD</li></a>
                        <a href='profile.php'> <li>PROFILE</li></a>
                        <a href='index.php'><li>HOME</li></a>
                    </ul>
                    ";

                }
                else
                {
                    echo
                    "
                    <ul>
                        <a href='#' class='button' id='button'><li>N</li></a>
                        <a href='upload_book.php'><li>UPLOAD</li></a>
                        <a href='login.php'><li>LOGIN</li></a>
                        <a href='index.php'><li>HOME</li></a>
                    </ul>
                    ";
                }
             ?>
                    <div id="popup" class="popup">
                        <div class="popupc">
                            <span class="close">X</span>
                        </div>
                    </div>
                    <script>

                        document.getElementById("button").addEventListener("click", function(){
                            document.querySelector(".popup").style.display = "flex";
                        })

                        document.querySelector(".close").addEventListener("click", function(){
                            document.querySelector(".popup").style.display = "none";
                        })

                    </script>
                
            </div>

            <br clear="all">

        </div>
</body>
</html>