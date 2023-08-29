<?php
$con=mysqli_connect('localhost','root','','transport');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Transport</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <h3 class='text-center'>Bus Details</h3>
           <div class='row'>
          <div class='col-md-2'>
          <h3 class='text-center text-black'>Bus Name</h3>
          </div>

          <div class='col-md-2'>
            <h3 class='text-center text-black'>Bus ID</h3>
          </div>

          <div class='col-md-2'>
            <h3 class='text-center text-black'>From</h3>
          </div>

          <div class='col-md-2'>
            <h3 class='text-center text-black'>To</h3>
          </div>

          <div class='col-md-2'>
            <h3 class='text-center text-black'>Time</h3>
          </div>

          <div class='col-md-2'>
            <h3 class='text-center text-black'>Fare</h3>
          </div>
          </div>;

</head>
<?php 

    $sql="SELECT * FROM bus_details";
    $run=mysqli_query($con,$sql);


while ($row=mysqli_fetch_array($run)) {
      $bname=$row['bname'];
      $bus_id=$row['bus_id'];
      $bfrom=$row['bfrom'];
      $bto=$row['bto'];
      $time=$row['time'];
      $fare=$row['fare'];
      
       echo " <div class='row'>
          <div class='col-md-2'>
            <h3 class='text-center text-black'>$bname</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-black'>$bus_id</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-black'>$bfrom</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-black'>$bto</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-black'>$time</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-black'>$fare</h3>
          </div>
        
        </div>";
}
        ?>        
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Traveler</strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">Bus Transport</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/main1.js"></script>

</body>
</html>
