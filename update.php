<?php
    session_start();
    include_once 'include.php';
    if(isset($_POST['update']))
    {
        echo "update is posible";
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $Email = $_POST['email'];
        $Phone = $_POST['Phone'];
        $Id =$_SESSION['Id'];
        
         $sql = "UPDATE `member` SET `First_Name`='$firstName',`Last_Name`='$lastName',`Email`='$Email',`Phone`='$Phone' WHERE Id = '$Id'";
         $result = mysqli_query($conn,$sql);
         header("Location:logout.php?update_successfull");
        
    }
    else
    {
        echo "update can't posible";
        
    }
?>