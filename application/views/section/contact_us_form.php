<div class="cognito c-safari c-lrg">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">
	<form class="form-container" id="contact_form">
		<div class="c-forms-form" tabindex="0">
			<div class="c-editor" style="display:none;"><input type="text" class="c-forms-form-style"></div>
			<div class="c-forms-form-body">
				<div class="c-forms-heading">
					<div class="c-forms-logo"><img style="max-width: 100%;" src="https://services.cognitoforms.com/file/iQIrKLczpzIK1j0E8oIlkuq8RIHR-eQ4v6QSCe_GmfJo1LaX0lTAfuoRluZCA1s4"></div>
				</div>
				<div class="c-forms-heading">
					<div class="c-forms-form-title">
						<h2>Property Owner Information</h2>
					</div>
				</div>
				<div class="c-forms-template" sys:attach="dataview" dataview:data="{binding entry, source={{ Cognito.Forms.model }} }">
					<div class="c-forms-form-main c-span-24 c-sml-span-12">
						<div class="c-name c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required  " data-field="Name">
							<div class="c-label "><label>Name</label></div>
							<div>
								<div class="c-offscreen"><label for="First">First</label></div>
								<div class="c-editor c-span-1" style="width: 50%; float: left;"><input type="text" id="first_name" placeholder="First" maxlength="20"></div>
								<div class="c-offscreen"><label for="Last">Last</label></div>
								<div class="c-editor c-span-1" style="width: 50%; float: left;"><input type="text" id="last_name" placeholder="Last" maxlength="20"></div>
							</div>
							<div class="c-validation">First Name and Last Name are required.</div>
                        </div>

                        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required " data-field="CleaningPropertyAddress">
                            <div class="c-label "><label>Actual Owner's Address</label></div>
                            <div>
                                <div class="c-offscreen"><label for="Address Line 1">Address Line 1</label></div>
                                <div class="c-editor" style="float: left;"><input type="text" id="address" placeholder="Address Line 1"></div>
                                <div class="c-offscreen"><label for="City">City</label></div>
                                <div class="c-editor c-partial-line" style="float: left;"><input type="text" id="city" placeholder="City"></div>
                                <div class="c-offscreen"><label for="State">State</label></div>
                                <div class="c-editor c-partial-line" style="float: left;">
                                    <div class="c-dropdown">
                                        <select id="state" class="c-placeholder-text-styled ">
                                            <option value="">State</option>
                                            <option value="Armed Forces America">Armed Forces America</option>
                                            <option value="Armed Forces">Armed Forces</option>
                                            <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="Arkansas">Arkansas</option>
                                            <option value="California">California</option>
                                            <option value="Colorado">Colorado</option>
                                            <option value="Connecticut">Connecticut</option>
                                            <option value="District of Columbia">District of Columbia</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Idaho">Idaho</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Indiana">Indiana</option>
                                            <option value="Iowa">Iowa</option>
                                            <option value="Kansas">Kansas</option>
                                            <option value="Kentucky">Kentucky</option>
                                            <option value="Louisiana">Louisiana</option>
                                            <option value="Maine">Maine</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Massachusetts">Massachusetts</option>
                                            <option value="Michigan">Michigan</option>
                                            <option value="Minnesota">Minnesota</option>
                                            <option value="Mississippi">Mississippi</option>
                                            <option value="Missouri">Missouri</option>
                                            <option value="Montana">Montana</option>
                                            <option value="Nebraska">Nebraska</option>
                                            <option value="New Hampshire">New Hampshire</option>
                                            <option value="New Jersey">New Jersey</option>
                                            <option value="New Mexico">New Mexico</option>
                                            <option value="New York">New York</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="North Carolina">North Carolina</option>
                                            <option value="North Dakota">North Dakota</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oklahoma">Oklahoma</option>
                                            <option value="Oregon">Oregon</option>
                                            <option value="Pennsylvania">Pennsylvania</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Rhode Island">Rhode Island</option>
                                            <option value="South Carolina">South Carolina</option>
                                            <option value="South Dakota">South Dakota</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option value="Texas">Texas</option>
                                            <option value="Utah">Utah</option>
                                            <option value="Vermont">Vermont</option>
                                            <option value="Virgin Islands">Virgin Islands</option>
                                            <option value="Virginia">Virginia</option>
                                            <option value="Washington">Washington</option>
                                            <option value="West Virginia">West Virginia</option>
                                            <option value="Wisconsin">Wisconsin</option>
                                            <option value="Wyoming">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="c-offscreen"><label for="Zip Code">Zip Code</label></div>
                                <div class="c-editor c-partial-line" style="float: left;"><input type="text" class="onlynumbs" id="zipcode" placeholder="Zip Code"></div>
                            </div>
                            <div class="c-validation">Address Line 1 and City and State and Zip Code are required.</div>
                        </div>

                        <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="Phone">
                            <div class="c-label  "><label for="Owner's Day Phone">Owner's Day Phone</label></div>
                            <div class="c-editor"><input type="text" class="phonenumber" maxlength="16" id="day_phone" placeholder="" autocomplete="off"></div>
                            <div class="c-validation">Daytime Phone is required.</div>
                        </div>
                        <div class="c-phone c-phone-us c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="CellPhone">
                            <div class="c-label  "><label for="Owner's Cell Phone">Owner's Cell Phone</label></div>
                            <div class="c-editor"><input type="text" class="phonenumber" maxlength="16" id="cell_phone" placeholder="" autocomplete="off"></div>
                            <div class="c-validation">Cell Phone is required.</div>
                        </div>
                                
                        <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required  " data-field="Phone">
                            <div class="c-label  "><label for="Owner's Email Address">Owner's Email Address</label></div>
                            <div class="c-editor"><input type="text" id="email" placeholder="" autocomplete="off"></div>
                            <div class="c-validation require-msg">Owner's Email is required.</div>
                            <div class="c-validation format-msg" style="display:none">Owner's Email isn't correct format.</div>
                        </div>

                        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12" data-field="CleaningPropertyAddress">
                            <div class="c-label ">
                                <label>Co-Owner</label>
                                <input type="checkbox" id="add_co_owner_chbox" placeholder="">

                                <button type="button" class="c-button" id="add_co_owner_btn" style="visibility:hidden">Add</button>
                            </div>
                        </div> 

                        <div id="co_owners_container">
                        
                        </div>

                         <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12" data-field="CleaningPropertyAddress">
                            <div class="c-label ">
                                <label>Add Another Property</label>
                                <input type="checkbox" id="add_additional_prop_chbox" placeholder="">

                                <button type="button" class="c-button" id="add_additional_prop_btn" style="visibility:hidden">Add</button>
                            </div>
                        </div> 

                        <div id="additional_props_container">
                        
                        </div>

					</div>
				</div>
				<div id="c-recaptcha-div"></div>
				<div class="c-forms-error">
					<div class="c-validation"></div>
				</div>
				<div class="c-button-section">
					<div class="c-action"><button type="button" class="c-button" id="contact_btn">Submit</button></div>
				</div>
			</div>
		</div>
		<input type="hidden" name="NoBots" id="c-nobots" value="neQYpjwzNWu8RI6l2Kpz+d8IhoYTYB4xsTLy4mYnYiU=|76753376eee887fad619ebbc3be4ad74">
	</form>
</div>

<?php
$this->load->view('section/form_clone_template');
?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<link href="<?=base_url();?>assets/css/form.css" rel="stylesheet" type="text/css">
<script src="<?=base_url();?>assets/js/form.js"></script>