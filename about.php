<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); ?>
<link rel="stylesheet" href="assets/css/form.css">
<link rel ="stylesheet" href="./assets/css/about.css">
<body>

  <div class="img"></div>
  <div class="center">
    <div class="title">Airline Reservation System provides online reservations and inventory management solutions and incorporate flight schedules, flight fares</div>
    <div class="sub_title"></div>
    <div class="btns">
       
    </div>
  </div>
  <script>
    document.getElementById("btn1").onclick = function () {
        location.href = "login.php";
    };
  </script>
</body>
</html>
<?php subview('footer.php'); ?> 
<footer style="
        position: absolute;
      bottom: 0;
      width: 100%;
      height: 2.5rem;  
    ">
	<em><h5 class="text-light text-center p-0 brand mt-2">
				<img src="assets/images/airtic.png" 
					height="40px" width="40px" alt="">				
			Online Flight Booking</h5></em>
	<p class="text-light text-center">&copy; <?php echo date('Y')?></p>
</footer>