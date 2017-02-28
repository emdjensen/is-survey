<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (empty($_POST['FSE-F'])
|| empty($_POST['FSE-T'])){ 
 	// Setting error message
 	$_SESSION['error_page3'] = "Please complete all fields before continuing.";
 	header("location: page3.php"); // Redirecting to first page 
 	}
?>
<!-- ready for form content -->
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
    	
    	<h1>Find My iPhone</h1>
    	<span id="error" class="alert">
 		<!-- Initializing Session for errors -->
 			<?php
 				if (!empty($_SESSION['error_page4'])) {
 				echo $_SESSION['error_page4'];
 				unset($_SESSION['error_page4']);
 				}
 			?>
 		</span>
 		<form action="page5.php" method="post">
    		<!-- Field values from previous pages -->
    		<input type="hidden" name="TID-F" value="<?php echo $_POST[TID-F]; ?>">
    		<input type="hidden" name="TID-C" value="<?php echo $_POST[TID-C]; ?>">
    		<input type="hidden" name="TID-T" value="<?php echo $_POST[TID-T]; ?>">
    		<input type="hidden" name="PC-F" value="<?php echo $_POST[PC-F]; ?>">
    		<input type="hidden" name="PC-C" value="<?php echo $_POST[PC-C]; ?>">
    		<input type="hidden" name="PC-T" value="<?php echo $_POST[PC-T]; ?>">
    		<input type="hidden" name="FSE-F" value="<?php echo $_POST[FSE-F]; ?>">
    		<input type="hidden" name="FSE-T" value="<?php echo $_POST[FSE-T]; ?>">
    		
    		<!-- New input fields -->
    		<label>Are you familiar with Find my iPhone (FMI) and Device Activation Lock (DAL)?</label>
      			<input type="radio" name="FMI-F" value="1" required><label for="FMI-F">Yes</label>
      			<input type="radio" name="FMI-F" value="2" required><label for="FMI-F">No</label>
      			
      		
      		<label>Do you have FMI turned on?  (DAL is turned on with and integrated into FMI) <a data-open="fmi-popup"> <i>How to check</i></a></label>
      			<input type="radio" name="FMI-C" value="1" required><label for="FMI-C">Yes</label>      		
      			<input type="radio" name="FMI-C" value="2"required><label for="FMI-C">No</label>

      			
      		<label>Do you trust FMI and DAL to prevent a thief from accessing the data on your iPhone?</label>
      			<input type="radio" name="FMI-T" value="1" required><label for="FMI-T">Not Used</label>      		
      			<input type="radio" name="FMI-T" value="2"required><label for="FMI-T">Not At All</label>
      			<input type="radio" name="FMI-T" value="3" required><label for="FMI-T">Somewhat</label>
      			<input type="radio" name="FMI-T" value="4"required><label for="FMI-T">A lot</label>
      			

    		<p class="clearfix"><input type="submit" value="Next" class="button float-right"></p>
    	</form>
    	
    	<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="42" aria-valuemin="0" aria-valuetext="42 percent" aria-valuemax="100">
  			<div class="progress-meter" style="width: 42%">
    			<p class="progress-meter-text">42%</p>
  			</div>
		</div>
		
		<div class="reveal" id="fmi-popup" data-reveal>
  			<h3>Find My iPhone</h3>
  			<p>Open the "Settings" app on your iPhone. Then select "iCloud". Scroll down until you see "Find My iPhone", and it will tell you if it is on or off.</p>
  			<img class="modal-img" src="css/fmi1.png" width="49%" />&nbsp;&nbsp;
  			<img class="modal-img" src="css/fmi2.png" width="49%" />
  			<button class="close-button" data-close aria-label="Close reveal" type="button">
    			<span aria-hidden="true">&times;</span>
  			</button>
		</div>
    	
    </div>

    <script src="http://smashstarmedia.com/foundation/current/js/vendor/jquery.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/vendor/what-input.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/vendor/foundation.js"></script>
    <script src="http://smashstarmedia.com/foundation/current/js/app.js"></script>
  </body>
</html>
