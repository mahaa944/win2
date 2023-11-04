<?php

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

 <?php include'./parts/header.php';?>


 <div class="position-relative text-center">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
</div>

<ul class="list-group">
  <li class="list-group-item">اربح</li>
  <li class="list-group-item">باقي على فتح التسجيل</li>
  <h3 id="countdown"></h3>
  <li class="list-group-item">للسحب الربح على نسخه مجانيه من البرنامج</li>
  <li class="list-group-item">cooming soon</li>
</ul>

</div>
<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="50%" height="50%" fill="#777"></rect></svg>
<div class="form-floating mb-3">

<form ><form action="index.php" method="POST" >
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
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="text" name="Email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['EmailError']?></div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<div id="cards" class="row mb-5 pb-5">
  <button id="winner" type="button">اختيار الرابح </button>
<?php foreach($users as $user) : ?>
  <div class="col-5m pb-6">
  <div class="card my-2 bg-light">
  <div class="card-body">
  <h5 class="card-title"><h1><?php echo htmlspecialchars($user['FirstName']).'<br>'.htmlspecialchars($user['Email']);?></h1>
  <p class="card-text"><h1><?php echo htmlspecialchars($user['FirstName']).'<br>'.htmlspecialchars($user['Email']);?></h1>

  </div>
</div>
</div>
  <?php endforeach; ?>
  </div>
<?php include_once'./parts/footer.php';?>
