<?php
if (!isset($_SESSION['id'])) {
    header('location:login.php');
}
?>

               
               <!-- This is the navigation across all pages -->
<div class="container d-flex flex-row mx-auto my-5 justify-content-center">

    <div class="section1 col-3 text-center rounded-start">
    <h2 class="mt-2">Boss</h2>
    <hr>
    <div class="card border-0 main_menu">
    <img src="pics/user2.jpg"  width="120" class="userimg">
    <p></p>
        <h4 class="mt-2">Welcome <?php   echo  $_SESSION['lastname'];  ?></h4>
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