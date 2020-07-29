<?php
    if(isset($_POST['submit-signup']))
    {
        include_once 'include.php';
        $fName = $_POST['fname'];
        $sname = $_POST['sname'];
        $Email = $_POST['email'];
        $Phone = $_POST['Phone'];
        $pass = $_POST['pass'];
        $sq = "SELECT *FROM member";
        $Idd = mysqli_num_rows(mysqli_query($conn,$sq));
        $Id = $Idd +1;
        echo "$Id";
        
        $sqlCheck = "SELECT * FROM `member` WHERE Email = '$Email' OR Phone = '$Phone'";
        $resultCheck = mysqli_query($conn,$sqlCheck);
        if(mysqli_num_rows($resultCheck)>0)
        {/*
             echo "wrong place ";
        */  header("Location:signup.php?activity='already register this user'");
          
         } 
        else
        {
            
            $sql = "INSERT INTO `member`(`Id`, `First_Name`, `Last_Name`, `Email`, `Phone`, `Password`, `img_status`) VALUES ('$Id', '$fName', '$sname','$Email','$Phone','$pass','1')";
            $result = mysqli_query($conn,$sql);
            header("Location:login.php?sign_up success");
            
         }
       
    }
?>