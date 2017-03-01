<h1>Passcode</h1>

<form action="index.php" method="post">
    <input type="hidden" name="step" value="page2">
    
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
