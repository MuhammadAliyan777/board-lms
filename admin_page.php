<?php

include "config.php";
session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="title">dashboard</h1>

   <div class="box-container">

    

      
      <div class="box">
         <?php 
            $select_orders = "SELECT * FROM `image`" or die('query failed');
            $res = mysqli_query($conn,$select_orders);
            $number_of_orders = mysqli_num_rows($res);
         ?>
         <h3><?php echo $number_of_orders; ?></h3>
         <p>Total images</p>
      </div>

     

      <div class="box">
         <h3><?php echo "2"; ?></h3>
         <p>Admins</p>
      </div>

     

   </div>

</section>

<!-- admin dashboard section ends -->









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>