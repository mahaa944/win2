<?php
include './inc/db.php';

$FirstName =  $_POST['FirstName'];
$LastName =   $_POST['LastName'];
$Email =      $_POST['Email'];

if (isset($_POST['submit'])){
//echo $FirstName . '' . $LastName .'' . $Email;
$sql="INSERT INTO users(FirsName,LastName,Email)
VALUES('$FirstName','$LastName','$Email')";
mysqli_query($conn,$sql);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
 
<form action="index.php" method="POST">
    <input type="text" name="FirstName" id="FirstName " placeholder="First Name">
    <input type="text" name="LastName" id="LastName" placeholder="Last Name">
    <input type="text" name="Email" id="Email" placeholder="Email">
    <input type="submit" name="submit" value="send">

</form>
 <script src="./js/script.js"></script>
</body>
</html>