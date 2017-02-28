<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (empty($_POST['FMI-F'])
|| empty($_POST['FMI-C'])
|| empty($_POST['FMI-T'])){ 
 	// Setting error message
 	$_SESSION['error_page4'] = "Please complete all fields before continuing.";
 	header("location: page4.php"); // Redirecting to first page 
 	}
?>
<!-- ready for form content! -->
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
    	
    	<h1>Over the Air Updates</h1>
    	<span id="error" class="alert">
 		<!-- Initializing Session for errors -->
 			<?php
 				if (!empty($_SESSION['error_page5'])) {
 				echo $_SESSION['error_page5'];
 				unset($_SESSION['error_page5']);
 				}
 			?>
 		</span>
 		<form action="page6.php" method="post">
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
    		
    		<!-- New input fields -->
    		<label>Are you familiar with Apple’s Over-the-Air security updates?</label>
      			<input type="radio" name="OTA-F" value="1" required><label for="OTA-F">Yes</label>
      			<input type="radio" name="OTA-F" value="2" required><label for="OTA-F">No</label>
      			
      		<label><a data-open="ota-popup"> <i>Learn more about OTA updates</i></a></label>
      		<label>Do you install security updates when your device notifies you? If not, when?</label>
      			<input type="radio" name="OTA-C" value="1" required><label for="OTA-C">Yes, immediately</label>      		
      			<input type="radio" name="OTA-C" value="2"required><label for="OTA-C">A week later</label>
      			<input type="radio" name="OTA-C" value="3"required><label for="OTA-C">A month later</label>
      			<input type="radio" name="OTA-C" value="4"required><label for="OTA-C">Only when they force me to</label>

      			
      		<label>Do you trust that Apple will release security updates in a timely and efficient manner when made aware of security flaws?</label>    		
      			<input type="radio" name="OTA-T" value="1"required><label for="FMI-T">Not At All</label>
      			<input type="radio" name="OTA-T" value="2" required><label for="FMI-T">Somewhat</label>
      			<input type="radio" name="OTA-T" value="3"required><label for="FMI-T">A lot</label>
      			

    		<p class="clearfix"><input type="submit" value="Next" class="button float-right"></p>
    	</form>
    	
    	<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="56" aria-valuemin="0" aria-valuetext="56 percent" aria-valuemax="100">
  			<div class="progress-meter" style="width: 56%">
    			<p class="progress-meter-text">56%</p>
  			</div>
		</div>
		
		<div class="reveal" id="ota-popup" data-reveal>
  			<h3>Over The Air Updates</h3>
  			<p>Apple's OTA updates are unique because unlike other smartphone operating systems (Android), iOS is released directly to concumers wirelessly "over-the-air" in the form of software updates.  These can be installed right from your phone as soon as the update is pushed out by Apple.  In the Android world, when Google finds a security flaw, they patch the software as soon as possible, but the "patched" OS has to go through both the phone manufacturer (like Samsung or HTC) <i>and</i> your cell phone carrier before getting to your phone.</p>
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
