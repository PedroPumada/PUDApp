<?php
// Include the header file which includes CSS:
include ('includes/header.html');

// PHP will go here
?>
<!-- CHANGEABLE CONTENT GOES HERE -->
<form name="second_page" action="page2.php" method="post">
<h2>COMMON AREA PACKAGE</h2>
<h2>PROGRAM APPLICATION</h2>
<p id="explanation">Distinguished Programs has designed a new style of application. 
	It is meant to be user friendly and easy to complete. Section I is presented first to quickly eliminate risks that do not qualify for our 
	program. Section II through VIII follow, which collect the information needed to rate and quote your risk. Combine 
	this easy to complete application with quick quote turnaround and 24 hour electronic policy issuance . . . why go anywhere else?</p>
<h3>SECTION II: BROKER INFORMATION</h3>
<div class="input-section">
    <div class="input-row">
        <div class="input-cell-label"><label>Brokerage Name: </label></div>
        <div class="input-cell-box"><input type="text" name="broker_name" size="40"/></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
        <div class="input-cell-label"><label>Brokerage Address: </label></div>	
        <div class="input-cell-box"><input type="text" name="broker_address" size="30"/></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
        <div class="input-cell-label"><label>Brokerage City: </label></div>
        <div class="input-cell-box"><input type="text" name="broker_city" size="20"/></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
       <div class="input-cell-label"><label>Brokerage State: </label></div>
       <div class="input-cell-box"><input type="text" name="broker_state" size="2"/></div>
       <div class="input-cell-gap"></div>
    </div>
        <div class="input-row">
       <div class="input-cell-label"><label>Brokerage Zip Code: </label></div>
       <div class="input-cell-box"><input type="text" name="broker_zip" size="6"/></div>
       <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
       <div class="input-cell-label"><label>Contact Name: </label></div>
       <div class="input-cell-box"><input type="text" name="broker_contact" size="20"/></div>
       <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
       <div class="input-cell-label"><label>Contact Phone: </label></div>
       <div class="input-cell-box"><input type="text" name="broker_phone" size="15" value="XXX-XXX-XXXX" /></div>
       <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
       <div class="input-cell-label"><label>Contact E-mail: </label></div>
       <div class="input-cell-box"><input type="text" name="broker_email" size="15" value="me@example.com" /></div>
       <div class="input-cell-gap"></div>
    </div>
</div>
<h3> SECTION III: INSURED INFORMATION </h3>
<div class="input-section">
    <div class="input-row">
        <div class="input-cell-label"><label>Named Insured:</label></div>
        <div class="input-cell-box"><input type="text" name="insured_name" size="30" /></div>
        <div class="input-cell-gap"></div>
    </div>
</div>
<p class="error">If there's a management company, yellow sections must be completed:</p>
<div class="input-section">
    <div class="input-row">
        <div class="input-cell-label optional"><label>Management Co.:</label></div>
        <div class="input-cell-box optional"><input type="text" name="management_name" size="30" /></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
        <div class="input-cell-label optional"><label>Mailing Address:</label></div>
        <div class="input-cell-box optional"><input type="text" name="management_address" size="30" /></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
        <div class="input-cell-label optional"><label>City:</label></div>
        <div class="input-cell-box optional"><input type="text" name="management_city" size="20" /></div>
        <div class="input-cell-gap"></div>
    </div>
        <div class="input-row">
        <div class="input-cell-label optional"><label>State:</label></div>
        <div class="input-cell-box optional"><input type="text" name="management_state" size="2" /></div>
        <div class="input-cell-gap"></div>
    </div>
        <div class="input-row">
        <div class="input-cell-label optional"><label>Zip Code</label></div>
        <div class="input-cell-box optional"><input type="text" name="management_zip" size="8" /></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
        <div class="input-cell-label optional"><label>Contact Name:</label></div>
        <div class="input-cell-box optional"><input type="text" name="management_contact" size="30" /></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
        <div class="input-cell-label optional"><label>Contact Phone:</label></div>
        <div class="input-cell-box optional"><input type="text" name="management_phone" size="15" value="XXX-XXX-XXXX" /></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">   
       <div class="input-cell-label"><label>Property Address: </label></div>
       <div class="input-cell-box"><input type="text" name="property_address" size="30"/></div>
       <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">   
       <div class="input-cell-label"><label>City: </label></div>
       <div class="input-cell-box"><input type="text" name="property_city" size="20"/></div>
       <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">   
       <div class="input-cell-label"><label>State: </label></div>
       <div class="input-cell-box"><input type="text" name="property_state" size="2"/></div>
       <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">   
       <div class="input-cell-label"><label>Zip Code: </label></div>
       <div class="input-cell-box"><input type="text" name="property_zip" size="8"/></div>
       <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">   
       <div class="input-cell-label"><label>County: </label></div>
       <div class="input-cell-box"><input type="text" name="property_county" size="20"/></div>
       <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
        <div class="input-cell-label"><label>Insured FEIN #:</label></div>
        <div class="input-cell-box"><input type="text" name="insured_fein" size="12" value="XX-XXXXXXX" /></div>
        <div class="input-cell-gap">
    </div>
    </div>
    <div class="input-row">
        <div class="input-cell-label"><label># of Years In Business:</label></div>
        <div class="input-cell-box"><input type="text" name="insured_years" size="4" /></div>
        <div class="input-cell-gap"></div>
    </div>
        <div class="input-row">
        <div class="input-cell-label optional"><label># of Years with Current Management:</label></div>
        <div class="input-cell-box optional"><input type="text" name="management_years" size="4" /></div>
        <div class="input-cell-gap"></div>
    </div>
</div>
<div class="input-section">
    <div class="input-row">
    <div class="input-cell-label"><p>Association Type:</div>
        <div class="input-cell-box">
            <input type="checkbox" name="association_type[]" value="Homeowners Association"/>Homeowners Association
            <input type="checkbox" name="association_type[]" value="Planned Unit Development"/>Planned Unit Development
            <input type="checkbox" name="association_type[]" value="Commercial PUD"/>Commercial PUD
            </p> 
        </div>
    </div>
    <div class="input-row">
    <div class="input-cell-label"><p>Residential Description:</div>
        <div class="input-cell-box">
            <input type="checkbox" name="residential_desc[]" value="Single Family" />Single Family
            <input type="checkbox" name="residential_desc[]" value="Townhouse" />Townhouse
            <input type="checkbox" name="residential_desc[]" value="Master" />Master
            </p>
        </div>
    </div>
    <div class="input-row">
    <div class="input-cell-label"><p>Commercial Description:</div>
        <div class="input-cell-box">
            <input type="checkbox" name="commercial_desc[]" value="Business Park"/>Business Park
            <input type="checkbox" name="commercial_desc[]" value="Light Industrial"/>Light Industrial
            <input type="checkbox" name="commercial_desc[]" value="Offices"/>Offices
            </p>
        </div>
    </div>
</div>
<h3>Section IV: POLICY DETAILS - INSURED</h3>
<div class="input-section">
    <div class="input-row">
        <div class="input-cell-label"><label>Proposed Eff Date:</label></div>
        <div class="input-cell-box"><input type="text" name="eff_date" size="10" value="xx/xx/xxxx"/></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
        <div class="input-cell-label"><label>Expiration Date:</label></div>
        <div class="input-cell-box"><input type="text" name="exp_date" size="10" value="xx/xx/xxxx"/></div>
        <div class="input-cell-gap"></div>
    </div>
    <h4>Prior Carrier Information:</h4>
    <div class="input-row">
        <div class="input-cell-label"><label>Carrier:</label></div>
        <div class="input-cell-box"><input type="text" name="old_policy_carrier" size="30"/></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
        <div class="input-cell-label"><label>Expiration Date:</label></div>
        <div class="input-cell-box"><input type="text" name="old_policy_exp_date" size="10" value="xx/xx/xxxx"/></div>
        <div class="input-cell-gap"></div>
    </div>
    <div class="input-row">
        <div class="input-cell-label"><label>Annual Premium:</label></div>
        <div class="input-cell-box"><input type="text" name="old_policy_premium" size="6" /></div>
        <div class="input-cell-gap"></div>
    </div>            
</div>
<h3>Section V: LOCATION INFORMATION</h3>
<h4>1. Property Coverage</h4>
<hr></hr>
<div class="input-section">
    <div class="input-row">
        <div class="property-cell-header"><label>Common Building 1</label></div>
        <div class="property-cell-header"><label>Sq. Ft</label></div>
        <div class="property-cell-header"><label>Building Value</label></div>
        <div class="property-cell-header"><label>Contents</label></div>
        <div class="property-cell-header"><label># Stories</label></div>
        <div class="property-cell-header"><label>Year Built</label></div>
        <div class="property-cell-header"><label>% Sprinklered</label></div>
        <div class="property-cell-header"><label>Alarm System</label></div>
    </div>
    <div class="input-row">
        <div class="property-cell-input"><input type="text" size="10" name="building_name_1"/></div>
        <div class="property-cell-input"><input type="text" size="5" name="building_sqft_1"/></div>
        <div class="property-cell-input"><input type="text" size="8" name="building_value_1"/></div>
        <div class="property-cell-input"><input type="text" size="8" name="building_contents_1"/></div>        
        <div class="property-cell-input"><input type="text" size="3" name="building_stories_1"/></div>
        <div class="property-cell-input"><input type="text" size="3" name="building_year_1"/></div>
        <div class="property-cell-input"><input type="text" size="3" name="building_sprinklered_1"/></div>
        <div class="property-cell-check"><input type="radio" name="building_alarm_1" value="Yes"/>Yes</div>
        <div class="property-cell-check"><input type="radio" name="building_alarm_1" value="No"/>No</div>
    </div>
</div>
<div class="input-section">
    <div class="input-row">
        <div class="property-cell-input"><label>Building Construction:</label></div>
        <div class="construction-cell-label"><label>Walls:</label></div>
        <div class="construction-cell-input"><input type="checkbox" name="building_walls_1[]" value="Wood frame" />Wood frame</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_walls_1[]" value="Brick block" />Brick / block</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_walls_1[]" value="Steel frame" />Steel frame</div>
    </div>
    <div class="input-row">
        <div class="property-cell-input"></div>
        <div class="construction-cell-label"><label>Roof:</label></div>
        <div class="construction-cell-input"><input type="checkbox" name="building_roof_1[]" value="Wood shake" />Wood shake</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_roof_1[]" value="Comp shingle" />Comp shingle</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_roof_1[]" value="Tile cement" />Tile / cement</div>
    </div>
    <div class="input-row">
        <div class="property-cell-input"></div>
        <div class="construction-cell-label"><label>Floor:</label></div>
        <div class="construction-cell-input"><input type="checkbox" name="building_floor_1[]" value="Wood frame" />Wood frame</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_floor_1[]" value="Poured concrete" />Poured concrete</div>
    </div>
</div>
<hr></hr>
<div class="input-section">
    <div class="input-row">
        <div class="property-cell-header"><label>Common Building 2</label></div>
        <div class="property-cell-header"><label>Sq. Ft</label></div>
        <div class="property-cell-header"><label>Building Value</label></div>
        <div class="property-cell-header"><label>Contents</label></div>
        <div class="property-cell-header"><label># Stories</label></div>
        <div class="property-cell-header"><label>Year Built</label></div>
        <div class="property-cell-header"><label>% Sprinklered</label></div>
        <div class="property-cell-header"><label>Alarm System</label></div>
    </div>
    <div class="input-row">
        <div class="property-cell-input"><input type="text" size="10" name="building_name_2"/></div>
        <div class="property-cell-input"><input type="text" size="5" name="building_sqft_2"/></div>
        <div class="property-cell-input"><input type="text" size="8" name="building_value_2"/></div>
        <div class="property-cell-input"><input type="text" size="8" name="building_contents_2"/></div>        
        <div class="property-cell-input"><input type="text" size="3" name="building_stories_2"/></div>
        <div class="property-cell-input"><input type="text" size="3" name="building_year_2"/></div>
        <div class="property-cell-input"><input type="text" size="3" name="building_sprinklered_2"/></div>
        <div class="property-cell-check"><input type="radio" name="building_alarm_2" value="Yes"/>Yes</div>
        <div class="property-cell-check"><input type="radio" name="building_alarm_2" value="No"/>No</div>
    </div>
</div>
<div class="input-section">
    <div class="input-row">
        <div class="property-cell-input"><label>Building Construction:</label></div>
        <div class="construction-cell-label"><label>Walls:</label></div>
        <div class="construction-cell-input"><input type="checkbox" name="building_walls_2[]" value="Wood frame" />Wood frame</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_walls_2[]" value="Brick block" />Brick / block</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_walls_2[]" value="Steel frame" />Steel frame</div>
    </div>
    <div class="input-row">
        <div class="property-cell-input"></div>
        <div class="construction-cell-label"><label>Roof:</label></div>
        <div class="construction-cell-input"><input type="checkbox" name="building_roof_2[]" value="Wood shake" />Wood shake</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_roof_2[]" value="Comp shingle" />Comp shingle</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_roof_2[]" value="Tile cement" />Tile / cement</div>
    </div>
    <div class="input-row">
        <div class="property-cell-input"></div>
        <div class="construction-cell-label"><label>Floor:</label></div>
        <div class="construction-cell-input"><input type="checkbox" name="building_floor_2[]" value="Wood frame" />Wood frame</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_floor_2[]" value="Poured concrete" />Poured concrete</div>
    </div>
</div>
<hr></hr>
<div class="input-section">
    <div class="input-row">
        <div class="property-cell-header"><label>Common Building 3</label></div>
        <div class="property-cell-header"><label>Sq. Ft</label></div>
        <div class="property-cell-header"><label>Building Value</label></div>
        <div class="property-cell-header"><label>Contents</label></div>
        <div class="property-cell-header"><label># Stories</label></div>
        <div class="property-cell-header"><label>Year Built</label></div>
        <div class="property-cell-header"><label>% Sprinklered</label></div>
        <div class="property-cell-header"><label>Alarm System</label></div>
    </div>
    <div class="input-row">
        <div class="property-cell-input"><input type="text" size="10" name="building_name_3"/></div>
        <div class="property-cell-input"><input type="text" size="5" name="building_sqft_3"/></div>
        <div class="property-cell-input"><input type="text" size="8" name="building_value_3"/></div>
        <div class="property-cell-input"><input type="text" size="8" name="building_contents_3"/></div>        
        <div class="property-cell-input"><input type="text" size="3" name="building_stories_3"/></div>
        <div class="property-cell-input"><input type="text" size="3" name="building_year_3"/></div>
        <div class="property-cell-input"><input type="text" size="3" name="building_sprinklered_3"/></div>
        <div class="property-cell-check"><input type="radio" name="building_alarm_3" value="Yes"/>Yes</div>
        <div class="property-cell-check"><input type="radio" name="building_alarm_3" value="No"/>No</div>
    </div>
</div>
<div class="input-section">
    <div class="input-row">
        <div class="property-cell-input"><label>Building Construction:</label></div>
        <div class="construction-cell-label"><label>Walls:</label></div>
        <div class="construction-cell-input"><input type="checkbox" name="building_walls_3[]" value="Wood frame" />Wood frame</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_walls_3[]" value="Brick block" />Brick / block</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_walls_3[]" value="Steel frame" />Steel frame</div>
    </div>
    <div class="input-row">
        <div class="property-cell-input"></div>
        <div class="construction-cell-label"><label>Roof:</label></div>
        <div class="construction-cell-input"><input type="checkbox" name="building_roof_3[]" value="Wood shake" />Wood shake</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_roof_3[]" value="Comp shingle" />Comp shingle</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_roof_3[]" value="Tile cement" />Tile / cement</div>
    </div>
    <div class="input-row">
        <div class="property-cell-input"></div>
        <div class="construction-cell-label"><label>Floor:</label></div>
        <div class="construction-cell-input"><input type="checkbox" name="building_floor_3[]" value="Wood frame" />Wood frame</div>
        <div class="construction-cell-input"><input type="checkbox" name="building_floor_3[]" value="Poured concrete" />Poured concrete</div>
    </div>
</div>
<hr></hr>
<h4>Other property statement of values:</h4>
<div class="input-section">
    <div class="input-row">
        <div class="other-property-label"><strong><label>Exposure</label></strong></div>
        <div class="other-property-input"><strong><label>Value</label></strong></div>
        <div class="other-property-label"><strong><label>Exposure</label></strong></div>
        <div class="other-property-input"><strong><label>Value</label></strong></div>
        <div class="other-property-label"><strong><label>Exposure</label></strong></div>
        <div class="other-property-input"><strong><label>Value</label></strong></div>
    </div>
    <div class="input-row">
        <div class="other-property-label"><label>Fences - metal or masonry</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_fence_metal" /></div>
        <div class="other-property-label"><label>Fences - wood</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_fence_wood" /></div>
        <div class="other-property-label"><label>Walls - masonry</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_walls_masonry" /></div>
    </div>
    <div class="input-row">
        <div class="other-property-label"><label>Signs - metal</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_signs_metal" /></div>
        <div class="other-property-label"><label>Signs - other than metal</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_signs_other" /></div>
        <div class="other-property-label"><label>Kiosks</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_kiosks" /></div>
    </div>
    <div class="input-row">
        <div class="other-property-label"><label>Pools</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_pools" /></div>
        <div class="other-property-label"><label>Pool Furniture</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_pool_furniture" /></div>
        <div class="other-property-label"><label>Mailboxes</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_mailboxes" /></div>
    </div>
    <div class="input-row">
        <div class="other-property-label"><label>Spas</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_spas" /></div>
        <div class="other-property-label"><label>Sprinkler system</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_sprinkler_system" /></div>
        <div class="other-property-label"><label>Trees / shrubs</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_trees_shrubs" /></div>
    </div>
    <div class="input-row">
        <div class="other-property-label"><label>Streets</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_streets" /></div>
        <div class="other-property-label"><label>Sidewalks</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_sidewalks" /></div>
        <div class="other-property-label"><label>Parking lots</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_parking_lots" /></div>
    </div>
    <div class="input-row">
        <div class="other-property-label"><label>Tennis courts</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_tennis_courts" /></div>
        <div class="other-property-label"><label>Basketball courts</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_basketball_courts" /></div>
        <div class="other-property-label"><label>Volleyball courts</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_volleyball_courts" /></div>
    </div>
    <div class="input-row">
        <div class="other-property-label"><label>Monuments</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_monuments" /></div>
        <div class="other-property-label"><label>Playgrounds</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_playgrounds" /></div>
        <div class="other-property-label"><label>Entry Features</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_entry_features" /></div>
    </div>
    <div class="input-row">
        <div class="other-property-label"><label>Gates (gated comm.)</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_gates" /></div>
        <div class="other-property-label"><label>Lights / poles</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_lights_poles" /></div>
        <div class="other-property-label"><label>Dog Park</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_dog_park" /></div>
    </div>
    <div class="input-row">
        <div class="other-property-label"><label>Cabana (not enclosed)</label></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_cabana" /></div>
        <div class="other-property-label"><input type="text" name="other_property_custom1_label" size="25" value="Enter custom property here"/></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_custom1_value" /></div>
        <div class="other-property-label"><label><input type="text" name="other_property_custom1_label" size="25" value="Enter custom property here"/></div>
        <div class="other-property-input"><input type="text" size="6" name="other_property_custom2_value" /></div>
    </div>
</div> <!-- end input section for OTHER PROPERTY -->
<hr></hr>
<div class="input-section">
    <div class="input-cell-row">
        <div class="input-cell-label"><label>Property deductible:</labeL></div>
        <div class="input-cell-box">
            <input type="radio" name="property_deductible" value="1000" />$1,000
            <input type="radio" name="property_deductible" value="2500" />$2,500
            <input type="radio" name="property_deductible" value="5000" />$5,000
            <input type="radio" name="property_deductible" value="10000" />$10,000
        </div>
    </div>
<h4>Property coverage options (additional cost):</h4>
<div class="input-section">
    <div class="input-cell-row">
        <div class="input-cell-label"><label>Equipment breakdown coverage?</label></div>
        <div class="input-cell-box">
        <input type="radio" name="breakdown_coverage" value="Yes"/>Yes
        <input type="radio" name="breakdown_coverage" value="No" />No
        </div>
    </div>
    <div class="input-cell-row">
        <div class="input-cell-label"><label>Earthquake sprinkler leakage coverage?</label></div>
        <div class="input-cell-box">
        <input type="radio" name="earthquake_sprinkler" value="Yes" />Yes
        <input type="radio" name="earthquake_sprinkler" value="No" />No
        </div>
    </div>
    <div class="input-cell-row">
        <div class="input-cell-label"><label>Business income limit requested:</label></div>
        <div class="input-cell-box">
        <input type="text" size="8" name="business_income_limit" />
        </div>
    </div>
<hr></hr>
    <button name="previous" type="button" onclick="window.location.href='index.php'" value="Previous">Previous</button>
    <button name="submit" type="button" disabled=true>Submit</button>
    <input name="next" type="submit" formaction="page2.php" value="Next" />
</form>

<?php
include('includes/footer.html');
?>