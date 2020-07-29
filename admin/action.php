<?php
    include_once '../include.php';
    if(isset($_REQUEST['activity']))
    {
        $Id = $_REQUEST['activity'];
        echo $Id;
        $sq ="DELETE FROM `bookrquest` WHERE Id= $Id";
           $result1=mysqli_query($conn,$sq);
           header("Location:uploadrequest.php?remove success");
        
        
    }
?>