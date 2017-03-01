<h1>Find My iPhone</h1>

<form action="index.php" method="post">
    <input type="hidden" name="step" value="page4">

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
