<?php

include './inc/db.php';
include './inc/form.php';
$sql= 'SELECT * FROM users' ;
$result=mysqli_query($conn,$sql);
$users =mysqli_fetch_all($result,MYSQLI_ASSOC);



mysqli_free_result($result);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
 
<div class="container">
<!--
<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
</div>

<ul class="list-group">
  <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
-->

<form class="mt-5"><form action="index.php" method="POST">
    <h3>write your information </h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">FirstName</label>
    <input type="text" name="FirstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['FirstNameError']?></div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">LastName</label>
    <input type="text" name="LastName" class="form-control"   id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['LastNameError']?></div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="Email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['EmailError']?></div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!--
<?php foreach($users as $user) : ?>
<h1><?php echo htmlspecialchars($user['FirstName']).'<br>'.htmlspecialchars($user['Email']);?></h1>
<?php endforeach; ?>
-->

<script src="./js/bootstrap.bandle.min.js" ></script>
 <script src="./js/script.js"></script>
</body>
</html>
