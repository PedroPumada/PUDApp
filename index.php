<?php
    // Include the header file
    include('includes/header.html');
    //Check to see if form has been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $problem = FALSE;

        // Find out if the checkboxes are checked:
        if ( isset($_POST['check1']) && isset($_POST['check2'])) {
        	header("Location: page2.php");
        	} else {
        	    $problem = TRUE;
        	    print '<p class="error">You must check all boxes and agree to each section before moving on.</p>';
        	    if ( isset($_POST['check1']) && !isset($_POST['check2'])) { // If just one checkbox is checked, generate empty value for other
        	    	$POST['check2'] = '';
        	    } else {
        	    	$POST['check1'] = '';
        	    }
        	}
    } else {
    // Initialize variables so notices are not generated
        $_POST['check1'] = ''; 
        $_POST['check2'] = '';
    } // End SERVER_REQUEST conditional
?> <!-- Close the PHP file because lots of HTML at this point -->
<!-- BEGIN CHANGEABLE CONTENT HERE -->
<h2>COMMON AREA PACKAGE</h2>
<h2>PROGRAM APPLICATION</h2>
<p id="explanation">Distinguished Programs has designed a new style of application. It is meant to be user friendly and easy to complete. Section I is presented first to quickly eliminate risks that do not qualify for our program. Section II through VIII follow, which collect the information needed to rate and quote your risk. Combine this easy to complete application with quick quote turnaround and 24 hour electronic policy issuance . . . why go anywhere else?</p>
<form name="first_page" action="index.php" method="post">
	<h3>SECTION I: ELIGIBILITY</h3>
	<ol>
		<li>The Common Area Package Program is designed to insure the common areas for a residential and commercial Planned Unit Development. The follow buildings / exposures / amenities / claims history are <strong>not eligible</strong>:</li>
		<ul class="firstUL">
			<li id="red">Condominiums / apartments / timeshares</li>
			<li>Clubhouses older than 20 years that have not had the roof, HVAC, plumbing and electric systems updated in the last 20 years.</li>
			<li>Clubhouses with aluminum wiring unless repaired through "pig-tailing", CO/ALR devices or COPALUM crimp connector.</li>
			<li>Clubhouses with smoke detectors</li>
			<li>Aircraft(hired, leased, or owned), airports or landing strips</li>
			<li>Day Care (if owned and/or managed by the insured)</li>
			<li>Golf courses (if owned and/or managed by the insured)</li>
			<li>Marinas or dams</li>
			<li>Mobile Homes / trailer / RV Parks</li>
			<li>Retirement communities with assisted living / nursing facilities</li>
			<li>Riding amenities or public trails</li>
			<li>Armed security, arrest authority or usage of self-protection tools such as mace, nightsticks handcuffs, etc.</li>
			<li>Passenger transportation services wehter provided by the insured or contracted out to a third party.</li>
			<li>Short-term or seasonal rental of units</li>
			<li>Skateboard parks or ice skating rinks</li>
			<li>Ski trails, slopes or lifts</li>
			<li>Sponsored athletic events, other than swim teams</li>
			<li>Tanning beds that are owned, operated or maintained by the insured</li>
			<li>Valet services utilizing drivers under the age of 21</li>
			<li>Any commercial building exceeding 150,000 sq. ft.</li>
			<li>Any commercial building owned or managed that are part of the commercial planned unit development.</li>
			<li>Any commercial building maintained by the association.</li>
			<li>Any maintained or operated shared amenities such as pools, sports courts, health club, etc. by a commercial association</li>
			<li>Risks that allow employees under the age of 21 to drive whether the insured supplies an owned or hired vehicle or allows employees under the age of 21 to drive their own vehicle to conduct the insured's business.</li>
			<li>We will not write community associations that:</li>
				<ol class="firstSubOrder">
					<li>Rent their common facilities to non unit-owners</li>
					<li>Serve liquor (other than free of charge)</li>
				</ol>
			<li>Risks with the following occupancies:</li>
				<ol class="firstSubOrder">
					<li>Auto / truck dealerships, repair or painting</li>
					<li>Churches / religious institutions</li>
					<li>Family planning facilities, hospital or health care clinics</li>
					<li>Gas Stations, storage of radioactive materials, fuels, hazardous flammables or chemicals</li>
					<li>Governmental, municipal or political offices</li>
					<li>Industrial, self-storage or warehousing</li>
					<li>Hotels / motels / resorts</li>
					<li>Restaurants, bars, nightclubs, dance halls, adult entertainment or any occupancy with a cabaret license</li>
					<li>Retail, strip shopping centers or shopping malls</li>
				</ol>
			<li>Risks with the following kinds of claims or convictions within the last five years or allegations of any such pending actions:</li>
				<ol class="firstSubOrder">
					<li>Violent acts, such as assault, rape, or shootings</li>
					<li>Class action lawsuits</li>
					<li>Construction defect lawsuits</li>
					<li>Habitability or tenantability lawsuits</li>
				</ol>
		</ul>
		<li>The following exposures are <strong>eligible with restrictions:</strong></li>
			<ul class="firstUL">
				<li>Pools</li>
				<ol class="firstSubOrder">
					<li>Indoor pools and spas must have card key access and a self-locking door along with surveillance cameras or regular security checks.</li>
					<li>Outdoor pools and spas must be fenced at least 6' high and have self-locking gates.</li>
					<li>Swimming pool's design or operation must comply with the Virginia Graeme Baker Act and meet or exceed all federal, state and local governing codes and regulations.</li>
					<li>Safety equipment (hooks & float) must be readily available</li>
					<li>We will not write any pool with a diving board, lazy river or slide</li>
				</ol>
				<li>Bodies of water, owned by the insured, such as lakes, ponds, beaches, retention ponds that meet the following guidelines:</li>
				<ol class="firstSubOrder">
					<li>No gasoline or diesel powered boats on the lake</li>
					<li>No ice skating</li>
					<li>No personal watercraft (i.e. wave runners, jet skis, sea doos, etc.) and no water skiing</li>
					<li>No watercraft more than 15 horsepower engines may be permitted</li>
					<li>No watercraft used for transport of passengers</li>
					<li>Lakes & beaches: controlled access and usage: owners and owners' guests only</li>
					<ul>
						<li>Designated swimming areas</li>
						<li>Proper signage adn lighting that meets ANSI standards</li>
						<li>Written policies in place regarding supervision and maintenance program</li>
					</ul>
				</ol>
			</ul>
		</ol>
	<label class="sectionCheck">By checking this box, I agree that I have read items 1 and 2 and that all locations comply.
		<input type="checkbox" name="check1" value="checked" 
		<?php if(isset($_POST['check1']) && $_POST['check1'] === 'checked') print 'checked="checked"'; ?>/> </label> 
	<br /> <br />
		<ol start="3">
		<li>The Common Area Package Program is also currently restricted to the following states:</li>
		</ol>
		<table border="1px">
			<tbody>
				<tr>
					<td>Arizona</td>
					<td>California</td>
					<td>Colorado</td>
					<td>Connecticut</td>
				</tr>
				<tr>
					<td>Georgia</td>
					<td>Illinois</td>
					<td>Indiana</td>
					<td>Missouri</td>
				</tr>
				<tr>
					<td>Nevada</td>
					<td>New Mexico</td>
					<td>North Carolina</td>
					<td>Ohio</td>
				</tr>
				<tr>
					<td>Oregon</td>
					<td>South Carolina</td>
					<td>Texas</td>
					<td>Virginia</td>
				</tr>
				<tr>
					<td>Washington</td>
				</tr>
			</tbody> 
		</table> <br />
	<label class="sectionCheck">By checking this box, I agree that the risk is located in one of the above states.
		<input type="checkbox" name="check2" value="checked" 
		<?php if ( isset($_POST['check2']) && $_POST['check2'] === 'checked') print 'checked="checked"'; ?>/> </label> <br /> <br />
	<button name="previous" disabled="true" type="button">Previous</button>
	<button name="submit" form="firstPage" type="button" disabled=true>Submit</button>
	<input type="submit" name="next" formaction="index.php" value="Next" />
</form>
<?php // include the footer file
    include('includes/footer.html');
?> 