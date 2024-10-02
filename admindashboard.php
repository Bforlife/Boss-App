<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Boss App</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bossapp.css">
</head>
<body>
    
<div class="container d-flex flex-row mx-auto my-5 justify-content-center">

<div class="section1 col-3 text-center rounded-start">
<h2 class="mt-2">Boss | Admin</h2>
<hr>
<div class="card border-0 main_menu">
<img src="pics/selfie.jpg"  width="120" class="userimg">
<p></p>
    <h4 class="mt-2">Admin Profile</h4>
    <div><button type="button" class="btn btn-secondary text-dark border-0 mb-3 mt-4 mainmenu_btn ">Dashboard</button></div>


    <div><button type="button" class="btn btn-secondary text-dark border-0 mb-3  mt-2 mainmenu_btn">Database</button></div>

    <div><button type="button" class="btn btn-secondary text-dark border-0 mb-3 mt-2 mainmenu_btn"><a href="message.php">Message</a></button></div>

    <div><button type="button" class="btn btn-secondary text-dark border-0 mb-3 mt-2 mainmenu_btn"><a href="updateform.php">Update</a></button></div>

    <div class="team mt-5 mb-5 pe-5">
    <h4>Projects</h4>
    <span>Markerting</span><br>
    <span>Development</span>
    </div>

   <div class="settings mt-5 mb-5 pe-5">
    <span>Settings</span><br>
    <span>Log out</span>
   </div>
   
</div>
    

</div>

<!-- first section -->
<div class="section2 rounded-end text-center">
<h3 class="fs-3">Recent Analytics</h3>

   <div class="card mx-2 border-0 d-flex flex-row gap-4 fs-6 justify-content-evenly mt-4 pt-3 pb-3">
    <div class="d-flex flex-column">
        <div class="bg-body-secondary border-0 rounded-top">Lorem Ipsum, placeat?</div>
    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto perspiciatis saepe magni velit officia consequuntur, iste voluptates vel? Quas, error!</div> 
    </div>
    <div class="d-flex flex-column">
        <div class="bg-body-secondary border-0 rounded-top">Lorem Ipsum, placeat?</div>
    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius incidunt possimus dignissimos, facere quibusdam consequatur neque minus repudiandae beatae earum.</div> 
    </div>
</div>
   
   

   
<!-- second section -->
    <div class="card ms-2 border-0 d-flex flex-row gap-4 fs-6 mt-5 pt-4 justify-content-evenly ms-2 ps-2 pb-2 rounded ">
    <?php
    require('select.php');

    ?>
    </div>


<!-- closing div -->
</div>

</div>
<!-- 
        <div class="rgtdashboard container pt-3">
            <div class="card">

            <?php
    
    require('select.php');
   
   ?>
            </div>
       
        
    </div>
    </div> -->



</body>
</html>