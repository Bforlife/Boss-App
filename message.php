<!DOCTYPE html>
<?php 
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message | Boss App</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bossapp.css">

</head>
<body>


<div class="container d-flex flex-row mx-auto justify-content-center mt-5 mb-4">
    <div class="section1 col-3 text-center rounded-start">
    <h2 class="mt-2">Message | Boss</h2>
    <hr>
    <div class="card border-0 main_menu">
    <img src="pics/user2.jpg"  width="120" class="userimg">
    <p></p>
    <!-- dashboard profile -->
        <h4 class="mt-2">Welcome <?php echo $_SESSION['lastname'];   ?></h4>
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

    <div class="card ms-2 border-0 fs-6 mt-1 pt-4 mb-1 ps-2 pb-2 rounded text-center bg-light ">
     <div class="login_page card mx-3 mt-5">
     <span class="fs-3">Send your messages <?php echo $_SESSION['lastname'];?>
     </span>
            <p>Words are free<br> Use them wisely</p>
            <hr></hr>
               <form action="" method="POST">
              
              <div class="col mt-4 mx-4">
                <!-- id section -->
                <input type="text" class="form-control" placeholder="ID" name="id">
              </div>
           
                    <!--Textarea-->
               <div class=" textarea_msg mt-4 card border-0 mx-4" >
            <textarea placeholder="whats on your mind" ></textarea>
                          
                <!-- submit button -->
            <div>
            <button type="submit"  class="btn btn-secondary border-0 btn-lg mx-auto p-2 mt-5 mb-5" style="width: 200px; "><a href="userdashboard.php">Message</a></button>
            </div>              
    </form>
</div>  
 
</div>
  <!-- footer -->
<div class="mt-5 pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quos eius soluta deserunt. Dignissimos expedita ex minus nostrum nihil atque aliquid velit. Maiores esse magni dolorum aperiam quos sapiente. Nam!</div>
</div> 
    

   

</body>
</html>






















   
</body>
</html>