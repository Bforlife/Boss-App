
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | Boss App</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bossapp.css">

</head>
<body>
<div class="container d-flex flex-row mx-auto justify-content-center mt-5 mb-4">

    <div class="section1 col-3 text-center rounded-start">
    <h2 class="mt-2">Update | Boss</h2>
    <hr>
    <div class="card border-0 main_menu">
    <img src="pics/user2.jpg"  width="120" class="userimg">
    <p></p>
    <!-- dashboard profile -->
        <h4 class="mt-2">Welcome <?php   echo $_SESSION['lastname'];  ?></h4>
        <div><button type="button" class="btn btn-secondary text-dark border-0 mb-3 mt-4 mainmenu_btn ">Dashboard</button></div>


        <div><button type="button" class="btn btn-secondary text-dark border-0 mb-3  mt-2 mainmenu_btn"><a href="change_password.php">Password</a></button></div>

        <div><button type="button" class="btn btn-secondary text-dark border-0 mb-3 mt-2 mainmenu_btn"><a href="message.php">Message</a></button></div>

        <div><button type="button" class="btn btn-secondary text-dark border-0 mb-3 mt-2 mainmenu_btn"><a href="updateform.php">Update</a></button></div>

        <div class="team mt-5 mb-5 pe-5">
        <h4>Teams</h4>
        <span>Markerting</span><br>
        <span>Development</span>
        </div>

       <div class="settings mt-5 mb-5 pe-5">
        <span>Settings</span><br>
        <span>Log out</span>
       </div>
       
    </div>
    </div>
    <!-- container -->

    <div class="container ms-2 border-0 fs-6 mt-1 pt-4 mb-1 ms-2 ps-2 pb-2 rounded text-center bg-light ">
    <span class="fs-3">Update your profile <?php   echo $_SESSION['lastname'];  ?>,</span>

    <div class="card-body">
    <!-- Update page -->
     <div class="login_page">
            <p class="login">with<br>few easy steps</p>
            <hr></hr>
               <form action="updatebackend.php" method="POST">

               <p style="color:red;"><?php if(isset($_GET['info'])){
                   echo $_GET['info'];
           } ?></p>
              <p style="color:green;"><?php if(isset($_GET['infor'])){
                   echo $_GET['infor'];
           } ?></p>
              
                <div class="row">
              <div class="col mt-3">
                <!-- firstname section -->
                <input type="text" class="form-control px-2 ms-2" placeholder="Firstname" name="firstname" aria-label="First name">
              </div>
              <!-- lastmane section -->
              <div class="col me-2 mt-3">
                <input type="text" class="form-control" placeholder="Lastname" name="lastname" aria-label="Last name">
              </div>
            </div>
            <!-- a mild validation -->
           

               <!-- hidden status -->
               <div class="mt-4 px-2">
                  <input type="hidden" class="form-control" name="id" placeholder="hidden" value ="<?php echo $_SESSION['id'];?>">
                </div>
             
                <!-- password section -->
                <div class="mt-4 px-2">
                  <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <!-- email section -->
                <div class="mt-4 px-2">
                  <input type="email" name="email" placeholder="Email" class="form-control">
                </div>

                 <!--  gender status-->
                 <div class="mt-4 px-2">
                  <input type="text" class="form-control" name="gender" placeholder="Gender" aria-describedby="emailHelp">
                </div>
                 <!-- date status-->
                 <div class="mt-4 px-2">
                  <input type="text" class="form-control" name="date" placeholder="Date" aria-describedby="emailHelp">
                </div>
                <!-- submit button -->
                <div>
      <button type="submit"  class="btn btn-secondary border-0 btn-lg mx-auto p-2 mt-5 mb-5" style="width: 200px; ">Update</button>
    </div>              
    </form>
</div>  
</div>    

    
<!-- footer -->
<div class="mt-5 pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quos eius soluta deserunt. Dignissimos expedita ex minus nostrum nihil atque aliquid velit. Maiores esse magni dolorum aperiam quos sapiente. Nam!</div>
</div>    


    
</body>
</html>





