<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password | Boss App</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bossapp.css">

</head>
<body>
<div class="container d-flex flex-row mx-auto justify-content-center mt-5 mb-4">

    <div class="section1 col-3 text-center rounded-start">
    <h2 class="mt-2">Change_Password</h2>
    <hr>
    <div class="card border-0 main_menu">
    <img src="pics/user2.jpg"  width="120" class="userimg">
    <p></p>
    <!-- dashboard profile -->
        <h4 class="mt-2"> Welcome <?php   echo $_SESSION['lastname']; ?></h4>
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

    <div class="conatiner ms-2 border-0 fs-6 mt-1 pt-4 mb-1 ms-2 ps-2 pb-2 rounded text-center bg-light ">
    <span class="fs-3">Change your password <?php   echo $_SESSION['lastname']; ?></span>

    
    <!-- Update page -->
     <div class="login_page">
            <p class="login">with<br>few easy steps</p>
            <hr></hr>
            <div class="card-body card mx-4">
               <form action="<?php echo htmlspecialchars('changepassbackend.php')?>" method="POST">
            
                <!-- old_password section -->
                <div class="mt-4 px-2 ">
                  <input type="password" name="old_password" placeholder="Old Password" class="form-control">

                </div>
                <p style="color:red;"><?php if(isset($_GET['info'])){
                   echo $_GET['info'];
           } ?></p>
              <p style="color:green;"><?php if(isset($_GET['infor'])){
                   echo $_GET['infor'];
           } ?></p>


                <!-- email section
                <div class="mt-4 px-2 ">
                  <input type="password" name="new_password" placeholder="New_password" class="form-control">
                 </div> -->
                 
                   <!-- hidden status -->
                   <div class="mt-4 px-2">
                  <input type="hidden" class="form-control" name="id" placeholder="hidden" value ="<?php echo $_SESSION['id'];?>">
                </div> 
              
                <div>
                <button type="submit"  class="btn btn-secondary border-0 btn-lg mx-auto p-2 mt-5 mb-5" style="width: 200px; ">change password</button>
    </div>              
    </form>
</div>  
</div>    

    
<!-- footer -->
<div class="mt-5 pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quos eius soluta deserunt. Dignissimos expedita ex minus nostrum nihil atque aliquid velit. Maiores esse magni dolorum aperiam quos sapiente. Nam!</div>
</div>    


    
</body>
</html>
