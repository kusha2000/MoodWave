<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};
if(isset($_POST['logout'])){

  session_unset();
  session_destroy();

  header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thanks</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/glass-menu.css" />
    <link rel="stylesheet" href="css/Nevigation.css" />
    <link rel="stylesheet" href="css/Common.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/thanks.css" />

</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">   
    <!--Navigation bar start-->
    <center>
      <section class="navigation_section">
        <nav class="Navigation_Bar">
          <ul>
            <li>
              <a href="index.php"
                ><img src="images/Logo.png" alt="MoodWave_logo"
              /></a>
            </li>
            <li class="features"><a href="Need_Help.php">HELP</a></li>
            <li>
              <a href="Withdraw.php" class="ABOUT transition-fade"
                >WITHDRAW</a
              >
            </li>
            <li>
              <button name="logout">Logout</button>
            </li>
          </ul>
        </nav>
      </section>
    </center>

    <!--Navigation bar end-->

<section class="thanks">
        <div class="image">
            <img src="images/thanks-cover.png">
            
            <div class="text">
                <h1>Thank you for placing an</h1>
                <h1>Withdraw......</h1>
                <h2>The money will be transferred to you shortly after your details are verified.</h2>
                <a href="job.php">Jobs</a>
            </div>
        
    </div>
</section>
<script src="JS/vanilla-tilt.min.js"></script>
        <script src="JS/Script.js"></script>

</body>
</html>