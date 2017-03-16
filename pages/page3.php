<h1>Encryption</h1>

<form action="index.php" method="post">
    <input type="hidden" name="step" value="page3">

    <label>Are you aware that iOS encrypts the data on your device?</label>
    <input type="radio" name="FSE-F" value="1" required><label for="FSE-F">Yes</label>
    <input type="radio" name="FSE-F" value="2" required><label for="FSE-F">No</label>
                
            
	<label><a data-open="fse-popup"> <i>Learn more about iOS's encryption</i></a></label>
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
    <p>iOS uses a combination of variables that include your Apple ID, passcode (if configured) and your iPhone's uniquire device ID to create an encryption key.  All of the data stored on your phone is encrypted with this key, and is only decrypted when you unlock your device, making the data stored on your phone practically useless to anyone that may steal it.</p>
    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
