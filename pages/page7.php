<h1>Demographic Information</h1>

<form action="index.php" method="post">
    <input type="hidden" name="step" value="page7">

    <label>Month of birthdate</label>
    <input type="number" name="DEM-M" value="" min="1" max="12" placeholder="1-12" required><label for="DEM-M"></label>
                    
    <label>Day of birthdate</label>
    <input type="number" name="DEM-D" value="" min="1" max="31" placeholder="1-31" required><label for="DEM-D"></label>
                    
    <label>Year of birthdate</label>
    <input type="number" name="DEM-Y" value="" min="1900" max="2005" placeholder="ex: 1996" required><label for="DEM-Y"></label>
                    
    <label>Gender</label>
    <input type="radio" name="DEM-S" value="1" required><label for="DEM-S">Male</label>
    <input type="radio" name="DEM-S" value="2" required><label for="DEM-S">Female</label>
    <input type="radio" name="DEM-S" value="3" required><label for="DEM-S">Other</label>
                    
    <label>College Status</label>
    <input type="radio" name="DEM-C" value="1" required><label for="DEM-C">Freshman</label>
    <input type="radio" name="DEM-C" value="2" required><label for="DEM-C">Sophomore</label>
    <input type="radio" name="DEM-C" value="3" required><label for="DEM-C">Junior</label>
    <input type="radio" name="DEM-C" value="4" required><label for="DEM-C">Senior</label>
    <input type="radio" name="DEM-C" value="5" required><label for="DEM-C">Graduate</label>

    <p class="clearfix"><input type="submit" value="Next" class="button float-right"></p>
</form>

<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="84" aria-valuemin="0" aria-valuetext="84 percent" aria-valuemax="100">
    <div class="progress-meter" style="width: 84%">
        <p class="progress-meter-text">84%</p>
    </div>
</div>
