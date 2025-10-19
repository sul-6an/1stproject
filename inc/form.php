<?php

if(isset($_POST['sub'])){


    $errors = [
'firstnameError' => '',
'lastnameError'=> '',
'emailError' => '',
    ];

    $firstname =  $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email= $_POST['email'];

    // $firstname =  mysqli_real_escape_string($con, $_POST['firstname']);
    // $lastname =   mysqli_real_escape_string($con, $_POST['lastname']);
    // $email=        mysqli_real_escape_string($con, $_POST['email']) ;
    
    //echo $firstname.''.$lastname .''.$email;
    // $sql="INSERT INTO users(firstname , lastname , email )
    // VALUES('$firstname','$lastname','$email')";
    //تحقق من الاسم الاول
    if(empty($firstname)){
        $errors['firstnameError'] =' ';
    }
//تحقق من الاسم الاخير
    if (empty($lastname)) {
        $errors['lastnameError'] =' ';
    }    
    //تحقق من الايميل
    if (empty($email)) {
        $errors['emailError'] =' ';
    }    
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] ='ادخل الايميل بشكل صحيح';
    }
//تحقق لايوجد اخطاء 
if(!array_filter($errors)){
    $firstname =  mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname =   mysqli_real_escape_string($con, $_POST['lastname']);
    $email=        mysqli_real_escape_string($con, $_POST['email']) ;
  
  $sql="INSERT INTO users(firstname , lastname , email )
    VALUES('$firstname','$lastname','$email')";

if(mysqli_query($con , $sql))
{
header('Location: '.  $_SERVER['PHP_SELF'] );
}

else{
    echo'error:'.mysqli_connect_error($con);
}

}


  
    }











?>