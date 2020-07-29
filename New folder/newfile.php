<?php
    include_once 'include.php';
    session_start();
    if (isset($_POST['bookUpload'])) {
        $bookName = $_POST['bookName'];
        $AuthorName = $_POST['AuthorName'];
        $Edition = $_POST['Edition'];
        $Category = $_POST['category'];
        $Description = $_POST['detail'];
        $file1 = $_FILES['file1'];
        $filename1 = $_FILES['file1']['name'];
        $fileTmpName1 = $_FILES['file1']['tmp_name'];
        $fileSize1 = $_FILES['file1']['size'];
        $fileError1 = $_FILES['file1']['error'];
        $fileType1 = $_FILES['file1']['type'];
        $fileExt1 = explode('.',$filename1);
        $fileActualExt1 = strtolower(end($fileExt1));
        $allow1 = array('jpg','jpeg','png','pdf');
        $file2 = $_FILES['file2'];
        $filename2 = $_FILES['file2']['name'];
        $fileTmpName2 = $_FILES['file2']['tmp_name'];
        $fileSize2 = $_FILES['file2']['size'];
        $fileError2 = $_FILES['file2']['error'];
        $fileType2 = $_FILES['file2']['type'];
        $fileExt2 = explode('.',$filename2);
        $fileActualExt2 = strtolower(end($fileExt2));
        $allow1 = array('jpg','jpeg','png','pdf');
        $allow2 = array('pdf','ppt');
        if(isset($_SESSION['Name']))
            {
              if(in_array($fileActualExt1,$allow1))
              {
                  if($fileError1===0)
                      {
                        if($fileSize1<1000000)
                        {
                          
                          $fileNameNew1 ="book1".mt_rand().".jpg";
                          $fileDestination1 = 'upload/'.$fileNameNew1;
                          move_uploaded_file($fileTmpName1, $fileDestination1);
                          if (in_array($fileActualExt2,$allow2)) {
                            if ($fileError2===0) {
                            
                                $fileNameNew2 ="book1".mt_rand().".pdf";
                                $fileDestination2 = 'upload/'.$fileNameNew2;
                                move_uploaded_file($fileTmpName2,$fileDestination2);
                                $Id1=$_SESSION['Id'];
                                $sq = "SELECT *FROM bookrquest";
                                $Idd = mysqli_num_rows(mysqli_query($conn,$sq));
                                $Id = $Idd +1;
                                echo $Description;
                                $sql = "INSERT INTO `bookrquest`(`Id`,`Book_Location`, `book_image`, `book_Name`, `Author_Name`, `Book_Description`, `Category`, `Edition`, `userid`) VALUES ('$Id','$fileNameNew2','$fileNameNew1','$bookName','$AuthorName','$Description','$Category','$Edition','$Id1')"; 
                                echo $sql;
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                  header("Location:upload_book.php?uploadsuccess");

                                }else {
                                  echo"something error in this query";
                                }

                            } else {
                              echo "There was an error in uploading book";
                            }
                            
                          } else {
                            echo "This type of book can't be uploaded";
                          }
                          
                          
                        
                        }
                        else {
                          echo "Your file is too big";
                        }
                      }
                      else {
                        echo "There was an uploading error";
                      }
                    
                  
              }
              else 
              {
                echo "This type of file can't be allowed";
              }
            }
            else
            {
              echo"<a href='login.php'>You are not login</a>";
            }  
          }
            else
            {
              echo "file data can't be reach";
            }
            
          

?>
