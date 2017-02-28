<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (empty($_POST['TID-F'])
|| empty($_POST['TID-C'])
|| empty($_POST['TID-T'])){ 
 	// Setting error message
 	$_SESSION['error'] = "Please complete all fields before continuing.";
 	header("location: page1.php"); // Redirecting to first page 
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
    	
    	<h1>Passcode</h1>
    	<span id="error" class="alert">
 		<!-- Initializing Session for errors -->
 			<?php
 				if (!empty($_SESSION['error_page2'])) {
 				echo $_SESSION['error_page2'];
 				unset($_SESSION['error_page2']);
 				}
 			?>
 		</span>
    	<form action="page3.php" method="post">
    		<!-- Field values from previous pages -->
    		<input type="hidden" name="TID-F" value="<?php echo $_POST[TID-F]; ?>">
    		<input type="hidden" name="TID-C" value="<?php echo $_POST[TID-C]; ?>">
    		<input type="hidden" name="TID-T" value="<?php echo $_POST[TID-T]; ?>">
    		
    		<!-- New input fields -->
    		<label>Are you familiar with the iOS Passcodes?</label>
      			<input type="radio" name="PC-F" value="1" required><label for="PC-F">Yes</label>
      			<input type="radio" name="PC-F" value="2" required><label for="PC-F">No</label>
      		
      		<label>Do you have a passcode configured to protect access to your iPhone? <a data-open="pc-popup"> <i>How to check</i></a></label>
      			<input type="radio" name="PC-C" value="1"required><label for="PC-C">Yes</label>
      			<input type="radio" name="PC-C" value="2" required><label for="PC-C">No</label>
      			
      		<label>Do you trust a passcode to protect access to your iPhone?</label>
      			<input type="radio" name="PC-T" value="1" required><label for="PC-T">Not configured</label>
      			<input type="radio" name="PC-T" value="2" required><label for="PC-T">Not so much</label>
      			<input type="radio" name="PC-T" value="3" required><label for="PC-T">Somewhat</label>
      			<input type="radio" name="PC-T" value="4" required><label for="PC-T">A lot</label>

    		<p class="clearfix"><input type="submit" value="Next" class="button float-right"></p>
    	</form>
    	
    	<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="14" aria-valuemin="0" aria-valuetext="14 percent" aria-valuemax="100">
  			<div class="progress-meter" style="width: 14%">
    			<p class="progress-meter-text">14%</p>
  			</div>
		</div>
		
		<div class="reveal" id="pc-popup" data-reveal>
  			<h3>Check if Passcode is Enabled</h3>
  			<p>Lock your phone and press the home button.  If it asks for a passcode, select yes in the survey.</p>
  			<!--<img class="modal-img" src="css/touchid.png" />-->
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
