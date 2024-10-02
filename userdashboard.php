<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdashboard | Boss App</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bossapp.css">

</head>
<body>
    
<?php
require("navigation.php");
    ?>

<div class="section2 rounded-end text-center">
    <span class="fs-3">Recent Analytics</span>
    

    <div class=" card my-2 mx-2 border-0 d-flex flex-row gap-5 fs-6 justify-content-evenly">
        <div class="transcations pt-2 ms-2">
        <p>Transcations</p>
      
        </div>
        <div class="search ms-4 mt-2">
            <input type="text" placeholder="search" class=" input border-1 rounded mt-1 border-light">
        </div>
        
        <div class="points pt-2">Status</div>
        <div class="points pe-2 pt-2">Date</div>
    </div>
        <div class="card mx-2 border-0 d-flex flex-row gap-4 fs-6 justify-content-evenly mt-4 pt-3 pb-3">
        <div class="d-flex flex-column">
            <div class="bg-body-secondary border-0 rounded-top">Lorem Ipsum, placeat?</div>
        <div><img src="pics/user3.jpg" width="200"></div> 
        </div>
        <div class="d-flex flex-column">
            <div class="bg-body-secondary border-0 rounded-top">Lorem Ipsum, placeat?</div>
        <div><img src="pics/user4.jpg" width="200"></div> 
        </div>
        <div class="d-flex flex-column">
            <div class="bg-body-secondary border-0 rounded-top">Lorem Ipsum, placeat?</div>
        <div><img src="pics/user1.jpg" width="200"></div> 
        </div>
       
        </div>
       
       <!-- second section -->
        <div class="card ms-2 border-0 d-flex flex-row gap-4 fs-6 mt-5 pt-4 justify-content-evenly ms-2 ps-2 pb-2 rounded ">
            <div class="col-5 bg-light">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod reiciendis aliquid dicta laudantium quaerat ullam iure consequuntur. Laboriosam, doloribus reprehenderit? Repellendus natus eum necessitatibus commodi ipsam quod, a ipsum rem!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa molestiae, atque alias reiciendis repellat blanditiis earum incidunt culpa repudiandae quo, quas ipsum voluptates praesentium facilis deserunt, deleniti in eos qui!locale_filter_matches Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi nam quo hic, ipsam dolorem illo similique neque repudiandae nostrum praesentium temporibus tempore fugiat recusandae eius aut quae iste perferendis.
        </div>
        
            <div class="bg-body-secondary col-3">Lorem Ipsum, placeat?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod reiciendis aliquid dicta laudantium quaerat ullam iure consequuntur. Laboriosam, doloribus reprehenderit? Repellendus natus eum necessitatibus commodi ipsam quod, a ipsum rem!
    
            </div>
     
       
        
       
        </div>
 

    <!-- closing div -->
    </div>
   
    </div>




</body>
</html>