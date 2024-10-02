<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {

  require('connection.php');

}


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
 
<div class="container-md my-5">
  <!-- nav bar -->
  <div class="card text-center">
  <div class="card-header">
  <h2> Boss</h2> 
  </div>
  <div class="card-body">
    <!-- signup page -->
     <div class="login_page">

     
            <h3 class="login">Create a new account</h3>
            <p class="login">It's quick and easy.</p>
            <hr></hr>

    
              
               <form action="<?php echo htmlspecialchars("insert.php") ?>" method="POST">
              
                <div class="row">
              <div class="col">
                <!-- name section -->
                <input type="text" class="form-control px-2 ms-2" placeholder="First name" name="firstname" aria-label="First name">
              </div>
              <div class="col me-2">
                <input type="text" class="form-control" placeholder="Last name" name="lastname" aria-label="Last name">
              </div>
            </div>
              <!-- email section -->
                <div class="mt-4 px-2">
                  <input type="email" class="form-control" name="email" placeholder="Email address or phone number" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <!-- password section -->
                <div class="mt-4 px-2">
                  <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mt-4 px-2">
                  <input type="password" name="comfirmpassword" placeholder=" Confirm Password" class="form-control" id="exampleInputPassword1">
                </div>
                <!-- date section -->
                <div class="mt-3" >
                <label for="" class="form-label ">Date</label>
                <input type="date" name="date" class="form-control">
                </div>
                <!-- gender section -->
                <label for="" class="form-label px-3 mt-3" name="">Gender</label>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="female" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="male" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="others" id="inlineRadio3" value="option3" disabled>
                <label class="form-check-label" for="inlineRadio3">Others (disabled)</label>
              </div>
              <!-- info -->
               <div class="mt-3 px-2 fs-6 fw-lighter">
                <p>People who use our service may have uploaded your contact information to Boss. Learn more.</p>
               </div>
                <!-- signup btn -->
              <div class=" m-auto px-2 ">                   
              <button type="submit"  class="btn btn-secondary  border-0 btn-sm p-2" style="width: 100px;">sign up</button>
              </div><br>
              <a class="forgottenaccount mb-4" href="forgotten account">Already have an account?</a>
        </div>
      </form>
</div>  
</div>    

   
</body>

</html>