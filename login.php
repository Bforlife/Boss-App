<?php
    session_start();
    session_destroy();



?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bossapp.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boss App</title>
</head>
<body>
    <div class="container-md mt-5 mb-3">
<div class="card text-center">
  <div class="card-header">
  <h3 class="login">Log in to Boss</h3>
    </div>
   <div class="card-body">
    <!-- login page -->
 
     <div class="login_page">
           <p style="color:red;"><?php if(isset($_GET['msg'])){
            echo $_GET['msg'];
           } ?></p>
            <form action="<?php echo htmlspecialchars("loginbackend.php") ?>" method="post">
                <div class="mt-4  mb-4 px-2">
                  <input type="email" class="form-control" placeholder="Email address" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mt-4 px-2 mb-4">
                  <input type="password" name="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                </div>
                <div class="px-2 mb-3">                   
                <button type="submit" class="btn btn-secondary border-0 mx-auto  p-2">Submit</button>
              </form>
        </div>
        <a class="fgtacc" href="forgotten account">forgotten account?</a>
        &nbsp;&nbsp;

        <p class="or mt-4">------------------or------------------</p>
        <div>
      <button type="submit"  class="btn btn-secondary border-0 btn-lg mx-auto p-2 mt-3 mb-5" style="width: 200px; "><a href="registration.php">Create Account</a></button>
    </div> 
</div> 
</div>
</form>
        

<div class="card-footer text-body-secondary my-4 mx-4 mb-4">
    <p>Lorem, ipsum dolor sit tempore quasi ut.</p>
    <p>lexrink © 2024</p>
      </div>
      </div>


</body>

</html>