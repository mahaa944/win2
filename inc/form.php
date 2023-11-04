
<?php
$FirstName =  $_POST['FirstName'];
$LastName =   $_POST['LastName'];
$Email =      $_POST['Email'];

if (isset($_POST['submit'])){
    $sql = "INSERT INTO users(FirstName, LastName, Email)
    VALUES('$FirstName','$LastName','$Email')";
    
    
    if(empty($FirstName)){
    echo "First name empty";
    }
    elseif(empty($LastName)){
        echo "Last name empty";
    }
    elseif(empty($Email)){
            echo "Email";
    }elseif(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
    echo'false email'
    } 
    else{
    if(mysqli_query($conn,$sql)){
    header('Location:index.php');
     } else {
        echo"ERROR:" . mysqli_error($conn);
    }
    }
    }