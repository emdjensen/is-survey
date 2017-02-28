<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (empty($_POST['DID-M'])
|| empty($_POST['DID-V'])){ 
 	// Setting error message
 	$_SESSION['error_page6'] = "Please complete all fields before continuing.";
 	header("location: page6.php"); // Redirecting to first page 
 	}
?>
<!-- I'mmmmmmm REAAADDDYYYYYY -->
<!DOCTYPE HTML>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IS Research Survey</title>
    <link rel="stylesheet" href="http://smashstarmedia.com/foundation/current/css/foundation.css">
    <link rel="stylesheet" href="http://smashstarmedia.com/foundation/current/css/app.css">
    <link rel="stylesheet" href="css/override.css">
  </head>
  <body class="content">
    <div class="survey">
    	
    	<h1>Demographic Information</h1>
    	<span id="error" class="alert">
 		<!-- Initializing Session for errors -->
 			<?php
 				if (!empty($_SESSION['error_page7'])) {
 				echo $_SESSION['error_page7'];
 				unset($_SESSION['error_page7']);
 				}
 			?>
 		</span>
 		<form action="page8.php" method="post">
    		<!-- Field values from previous pages -->
    		<input type="hidden" name="TID-F" value="<?php echo $_POST[TID-F]; ?>">
    		<input type="hidden" name="TID-C" value="<?php echo $_POST[TID-C]; ?>">
    		<input type="hidden" name="TID-T" value="<?php echo $_POST[TID-T]; ?>">
    		<input type="hidden" name="PC-F" value="<?php echo $_POST[PC-F]; ?>">
    		<input type="hidden" name="PC-C" value="<?php echo $_POST[PC-C]; ?>">
    		<input type="hidden" name="PC-T" value="<?php echo $_POST[PC-T]; ?>">
    		<input type="hidden" name="FSE-F" value="<?php echo $_POST[FSE-F]; ?>">
    		<input type="hidden" name="FSE-T" value="<?php echo $_POST[FSE-T]; ?>">
    		<input type="hidden" name="FMI-F" value="<?php echo $_POST[FMI-F]; ?>">
    		<input type="hidden" name="FMI-C" value="<?php echo $_POST[FMI-C]; ?>">
    		<input type="hidden" name="FMI-T" value="<?php echo $_POST[FMI-T]; ?>">
    		<input type="hidden" name="OTA-F" value="<?php echo $_POST[OTA-F]; ?>">
    		<input type="hidden" name="OTA-C" value="<?php echo $_POST[OTA-C]; ?>">
    		<input type="hidden" name="OTA-T" value="<?php echo $_POST[OTA-T]; ?>">
    		<input type="hidden" name="DID-M" value="<?php echo $_POST[DID-M]; ?>">
    		<input type="hidden" name="DID-V" value="<?php echo $_POST[DID-V]; ?>">
    		
    		<!-- New input fields -->
    		<label>Month of birthdate</label>
      			<input type="number" name="DEM-M" value="1" min="1" max="12" required><label for="DEM-M"></label>
      			
      		
      		<label>Day of birthdate</label>
      			<input type="number" name="DEM-D" value="1" min="1" max="31" required><label for="DEM-D"></label>
      			
      		<label>Year of birthdate</label>
      			<input type="number" name="DEM-Y" value="1" min="1950" max="2005" placeholder="1996" required><label for="DEM-Y"></label>
      			
      		<label>Sex</label>
      			<input type="radio" name="DEM-S" value="1" required><label for="DEM-S">Male</label>
      			<input type="radio" name="DEM-S" value="2" required><label for="DEM-S">Female</label>
      			<input type="radio" name="DEM-S" value="3" required><label for="DEM-S">Other</label>
      			
      		<label>College Status</label>
      			<input type="radio" name="DEM-C" value="1" required><label for="DEM-C">Freshman</label>
      			<input type="radio" name="DEM-C" value="2" required><label for="DEM-C">Sophomore</label>
      			<input type="radio" name="DEM-C" value="3" required><label for="DEM-C">Junior</label>
      			<input type="radio" name="DEM-C" value="4" required><label for="DEM-C">Senior</label>
      			<input type="radio" name="DEM-C" value="5" required><label for="DEM-C">Graduate</label>

      			

    		<p class="clearfix"><input type="submit" value="Next" class="button float-right"></p>
    	</form>
    	
    	<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="84" aria-valuemin="0" aria-valuetext="84 percent" aria-valuemax="100">
  			<div class="progress-meter" style="width: 84%">
    			<p class="progress-meter-text">84%</p>
  			</div>
		</div>
    	
    </div>

    <script src="http://smashstarmedia.com/foundation/current/js/vendor/jquery.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/vendor/what-input.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/vendor/foundation.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/app.js"></script>
  </body>
</html>
