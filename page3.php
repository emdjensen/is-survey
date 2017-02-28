<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (empty($_POST['PC-F'])
|| empty($_POST['PC-C'])
|| empty($_POST['PC-T'])){ 
 	// Setting error message
 	$_SESSION['error_page2'] = "Please complete all fields before continuing.";
 	header("location: page2.php"); // Redirecting to first page 
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
    	
    	<h1>Encryption</h1>
    	<span id="error" class="alert">
 		<!-- Initializing Session for errors -->
 			<?php
 				if (!empty($_SESSION['error_page3'])) {
 				echo $_SESSION['error_page3'];
 				unset($_SESSION['error_page3']);
 				}
 			?>
 		</span>
    	<form action="page4.php" method="post">
    		<!-- Field values from previous pages -->
    		<input type="hidden" name="TID-F" value="<?php echo $_POST[TID-F]; ?>">
    		<input type="hidden" name="TID-C" value="<?php echo $_POST[TID-C]; ?>">
    		<input type="hidden" name="TID-T" value="<?php echo $_POST[TID-T]; ?>">
    		<input type="hidden" name="PC-F" value="<?php echo $_POST[PC-F]; ?>">
    		<input type="hidden" name="PC-C" value="<?php echo $_POST[PC-C]; ?>">
    		<input type="hidden" name="PC-T" value="<?php echo $_POST[PC-T]; ?>">
    		
    		<!-- New input fields -->
    		<label>Are you aware that iOS encrypts the data on your device?<a data-open="fse-popup"> <i>Learn how</i></a></label>
      			<input type="radio" name="FSE-F" value="1" required><label for="FSE-F">Yes</label>
      			<input type="radio" name="FSE-F" value="2" required><label for="FSE-F">No</label>
      			
      		
      		
      		<label>Do you trust that your data is protected by iOS’s encryption?</label>
      			<input type="radio" name="FSE-T" value="1" required><label for="FSE-T">Not at all</label>      		
      			<input type="radio" name="FSE-T" value="2"required><label for="FSE-T">Somewhat</label>
      			<input type="radio" name="FSE-T" value="3" required><label for="FSE-T">A lot</label>
      			

    		<p class="clearfix"><input type="submit" value="Next" class="button float-right"></p>
    	</form>
    	
    	<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="28" aria-valuemin="0" aria-valuetext="28 percent" aria-valuemax="100">
  			<div class="progress-meter" style="width: 28%">
    			<p class="progress-meter-text">28%</p>
  			</div>
		</div>
		
		<div class="reveal" id="fse-popup" data-reveal>
  			<h3>iOS Data Encryption</h3>
  			<p>iOS uses a combination of variables that include your Apple ID, passcode (if configured) and a random hash to create an encryption key.  All of the data stored on your phone is encrypted with this key, and is only decrypted when you start up your device, making the data stored on your phone practically useless to anyone that may steal</p>
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
