
<?php
$FirstName =  $_POST['FirstName'];
$LastName =   $_POST['LastName'];
$Email =      $_POST['Email'];

$errors=[
'FirstNameError' =>'',
'LastNameError' =>'',
'EmailError' =>'',
];


if (isset($_POST['submit'])){
    
    if(empty($FirstName)){
    $errors['FirstNameError']='FirstNameisEmpty';
    }
    if (empty($LastName)){
    $errors['LastNameError']='LastNameisEmpty';
    }
    if (empty($Email)){
        $errors['EmailError']='EmailisEmpty';

    }elseif(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
    $errors['EmailError']='EmailisFalse';
    } 
    if(!array_filter($errors)){
        $FirstName =  mysqli_real_escape_string($conn,$_POST['FirstName']);
        $LastName =   mysqli_real_escape_string($conn,$_POST['LastName']);
        $Email =      mysqli_real_escape_string($conn,$_POST['Email']);
        
        $sql = "INSERT INTO users(FirstName, LastName, Email)
        VALUES('$FirstName','$LastName','$Email')";

   if(mysqli_query($conn,$sql)){
    header('Location:index.php');
     }
     else {
        echo"ERROR:" . mysqli_error($conn);
    }
   
    }
}