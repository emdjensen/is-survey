<h1>Device Information</h1>

<form action="index.php" method="post">
    <input type="hidden" name="step" value="page6">
    
    <label>What model iPhone do you own?<a data-open="did-popup"> <i>Learn how to find out</i></a></label>
    <input type="radio" name="DID-M" value="1" required><label for="DID-M">7/7 Plus</label>
    <input type="radio" name="DID-M" value="2" required><label for="DID-M">6s/6s Plus</label>
    <input type="radio" name="DID-M" value="3" required><label for="DID-M">6/6 Plus</label>
    <input type="radio" name="DID-M" value="4" required><label for="DID-M">5s/SE</label>
    <input type="radio" name="DID-M" value="5" required><label for="DID-M">5/5c</label>
    <input type="radio" name="DID-M" value="6" required><label for="DID-M">4s or earlier</label>
                
    <label>What version of iOS do you have?<a data-open="did-popup"> <i>Learn how to find out</i></a></label>
    <input type="radio" name="DID-V" value="1" required><label for="DID-V">10.2.1 (latest)</label>
    <input type="radio" name="DID-V" value="2" required><label for="DID-V">10.2.0</label>
    <input type="radio" name="DID-V" value="3" required><label for="DID-V">10.1.X</label>
    <input type="radio" name="DID-V" value="4" required><label for="DID-V">10.0.X</label>
    <input type="radio" name="DID-V" value="5" required><label for="DID-V">9.X or earlier</label>

    <p class="clearfix"><input type="submit" value="Next" class="button float-right"></p>
</form>

<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="70" aria-valuemin="0" aria-valuetext="70 percent" aria-valuemax="100">
    <div class="progress-meter" style="width: 70%">
        <p class="progress-meter-text">70%</p>
    </div>
</div>
        
<div class="reveal" id="did-popup" data-reveal>
    <h3>iPhone Model and OS Version</h3>
    <p>If you don't know what model iPhone you own, use <a href="https://support.apple.com/en-us/HT201296" target="_blank">this guide</a> to find out or click the image (L) below.  Make sure you do not close this window before completing the entire suvery.  To find out what version of iOS you have, go to the Settings app and click on <b>General</b>, <b>About</b> and look for "Version" (see right image below).</p>
    <a href="https://support.apple.com/en-us/HT201296" target="_blank"><img class="modal-img" src="css/did1.png" width="49%" /></a>&nbsp;&nbsp;
    <img class="modal-img" src="css/did2.png" width="49%" />
    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
