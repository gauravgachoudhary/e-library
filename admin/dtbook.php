<?php
    include_once '../include.php';
    if(isset($_REQUEST['activity'])){
        $id=$_REQUEST['activity'];
       
            $sql = "DELETE FROM `book` WHERE `Id` = ".$id." ";
            $result = mysqli_query($conn,$sql);
            if ($result) {
                echo $id;
                $sql = "Select * From book where Id >=$id";
                $result = mysqli_query($conn, $sql);
                if($result)
                {   
                    
                    $Idc = $id+1;
                    echo $Idc;
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $squpdate = "Update `book` set Id = '$id' where Id = $Idc";
                        $resultupdate = mysqli_query($conn, $squpdate);
                        if($resultupdate) {
                            header("Location: booklist.php?activity=terminate");
                        }
                        else {
                            echo "problem";
                        }
                        $id=$id++;
                        
                        
                    }
                }
    }    
             else {
                echo "problem in query";    
            }
            // header("Location: userlist.php?removesuccess");
        }
?>