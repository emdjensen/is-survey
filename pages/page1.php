<h1>Touch ID&reg;</h1>

<form action="index.php" method="post">
    <input type="hidden" name="step" value="page1">
    
    <label>Are you familiar with the Touch ID fingerprint identity sensor?</label>
    <input type="radio" name="TID-F" value="1" required><label for="TID-F">Yes</label>
    <input type="radio" name="TID-F" value="2" required><label for="TID-F">No</label>
                
    <label>Do you have Touch ID configured to unlock your iPhone? <a data-open="tid-popup"> <i>How to check</i></a></label>
    <input type="radio" name="TID-C" value="1" required><label for="TID-C">No Touch ID</label>              
    <input type="radio" name="TID-C" value="2" required><label for="TID-C">Yes</label>
    <input type="radio" name="TID-C" value="3" required><label for="TID-C">No</label>
                    
    <label>How much do you trust that Touch ID is a secure method for unlocking your iPhone?</label>
    <input type="radio" name="TID-T" value="1" required><label for="TID-T">Not configured</label>
    <input type="radio" name="TID-T" value="2" required><label for="TID-T">Not so much</label>
    <input type="radio" name="TID-T" value="3" required><label for="TID-T">Somewhat</label>
    <input type="radio" name="TID-T" value="4" required><label for="TID-T">A lot</label>

    <p class="clearfix"><input type="submit" value="Next" class="button float-right"></p>
</form>
        
<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="2" aria-valuemin="0" aria-valuetext="2 percent" aria-valuemax="100">
    <div class="progress-meter" style="width: 2%">
        <p class="progress-meter-text"></p>
    </div>
</div>
        
<div class="reveal" id="tid-popup" data-reveal>
    <h3>Check if Touch ID is Enabled</h3>
    <p>Open the "Settings" app on your iPhone.  Scroll down to "Touch ID and Passcode".  If switched on for <b>iPhone Unlock</b> (see image), select "yes" on the survey.</p>
    <img class="modal-img" src="css/touchid.png" />
    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
