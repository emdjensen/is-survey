<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (empty($_POST['DEM-M'])
|| empty($_POST['DEM-D'])
|| empty($_POST['DEM-Y'])
|| empty($_POST['DEM-S'])
|| empty($_POST['DEM-C'])){ 
 	// Setting error message
 	$_SESSION['error_page7'] = "Please complete all fields before continuing.";
 	header("location: page7.php"); // Redirecting to first page 
 	}
?>
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
    	
    	<h1>Almost there...</h1>
    	<h3>Just hit the button!</h3>
 		<form action="http://www.smashstarmedia.com/forms/process.php" method="post">
 		<input type="hidden" name="form_tools_form_id" value="11" />
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
    		<input type="hidden" name="DEM-M" value="<?php echo $_POST[DEM-M]; ?>">
    		<input type="hidden" name="DEM-D" value="<?php echo $_POST[DEM-D]; ?>">
    		<input type="hidden" name="DID-Y" value="<?php echo $_POST[DEM-Y]; ?>">
    		<input type="hidden" name="DID-S" value="<?php echo $_POST[DEM-S]; ?>">
    		<input type="hidden" name="DID-C" value="<?php echo $_POST[DEM-C]; ?>">
      			

    		<p class="clearfix"><input type="submit" value="Next" class="button float-right"></p>
    	</form>
    	
    	<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="100" aria-valuemin="0" aria-valuetext="100 percent" aria-valuemax="100">
  			<div class="progress-meter" style="width: 100%">
    			<p class="progress-meter-text">100%</p>
  			</div>
		</div>
    	
    </div>

    <script src="http://smashstarmedia.com/foundation/current/js/vendor/jquery.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/vendor/what-input.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/vendor/foundation.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/app.js"></script>
  </body>
</html>
