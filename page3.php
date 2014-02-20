<?php 
include('includes/header.html');
?>
<!-- CHANGEABLE CONTENT STARTS HERE -->
<form name="third_page" action="page3.php" method="post">
<h2>COMMON AREA PACKAGE</h2>
<h2>PROGRAM APPLICATION</h2>
<p id="explanation">Distinguished Programs has designed a new style of application. 
	It is meant to be user friendly and easy to complete. Section I is presented first to quickly eliminate risks that do not qualify for our 
	program. Section II through VIII follow, which collect the information needed to rate and quote your risk. Combine 
	this easy to complete application with quick quote turnaround and 24 hour electronic policy issuance . . . why go anywhere else?</p>
<h4>2. General Liability Coverage </h4>
<div class="input-section">
    <div class="input-cell-row">
        <div class="input-cell-label"><label>Liability Limits Requested:</label></div>
        <div class="input-cell-box">
        <input type="radio" name="liability_limit" value="lower" />$1,000,000/$2,000,000
        <input type="radio" name="liability_limit" value="upper" />$2,000,000/$4,000,000
        </div>
    </div>
</div>
<div class="input-section">
	<div class="input-cell-row">
		<div class="construction-cell-label"><label><strong>Residential:</strong></label></div>
		<div class="construction-cell-label"><label># homes sold:</label></div>
		<div class="construction-cell-label"><input type="text" name="number_homes_sold" size="4" /></div>
		<div class="input-cell-label"><label># homes upon built out:</label></div>
		<div class="construction-cell-label"><input type="text" name="number_built_homes" size="4" /></div>
		<div class="input-cell-label"><label>Completion Date: </label></div>
		<div class="construction-cell-label"><input type="text" name="residential_completion_date" size="9" /></div>
	</div>
	<div class="input-cell-row">
		<div class="construction-cell-label"><label><strong>Commercial:</strong></label></div>
		<div class="construction-cell-label"><label># of tenants:</label></div>
		<div class="construction-cell-label"><input type="text" name="number_tenants" size="4" /></div>
		<div class="input-cell-label"><label># of buildings:</label></div>
		<div class="construction-cell-label"><input type="text" name="number_commercial_buildings" size="4" /></div>
		<div class="input-cell-label"><label>Completion Date: </label></div>
		<div class="construction-cell-label"><input type="text" name="commercial_completion_date" size="9" /></div>
	</div>
</div>
<hr></hr>
<div class="input-section">
	<div class="input-cell-row">
		<div class="input-cell-label long-question"><label>Are common buildings leased to outside organizations?</label></div>

	</div>