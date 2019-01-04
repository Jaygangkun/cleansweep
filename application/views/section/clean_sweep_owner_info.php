
<h2 class="px_-text-align-center mt-5">Owner Information</h2>
<div class="container">
    <form id="owner_info_form" class="form-container">
        <div class="row mb-3">
            <div class="col-12">
                <button type="button" class="c-button" id="edit_owner_btn">Edit</button>
                <button type="button" class="c-button" id="save_owner_btn" style="display:none">Save</button>
                <button type="button" class="c-button" id="cancel_owner_btn" style="display:none">Cancel</button>
                <button type="button" class="c-button" id="logout_owner_btn" style="float:right">Logout</button>
            </div>
        </div>

        <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="Account Name">
            <div class="c-label  "><label for="Account Name">Account Name</label></div>
            <div class="c-editor"><input type="text" id="username" name="username" placeholder="Account Name" value="<?php echo $owner['username']?>"></div>
            <div class="c-validation">Account Name is required.</div>
        </div>

        <div class="c-phone c-phone-us c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="Account Password">
            <div class="c-label  "><label for="Account Password">Account Password</label></div>
            <div class="c-editor"><input type="text" id="password" name="password" placeholder="" value="<?php echo $owner['password']?>"></div>
            <div class="c-validation">Account Password is required.</div>
        </div>

        <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="First Name">
            <div class="c-label  "><label for="First Name">First Name</label></div>
            <div class="c-editor"><input type="text" id="username" name="username" placeholder="First Name" value="<?php echo $owner['first_name']?>"></div>
            <div class="c-validation">First Name is required.</div>
        </div>

        <div class="c-phone c-phone-us c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="Last Name">
            <div class="c-label  "><label for="Last Name">Last Name</label></div>
            <div class="c-editor"><input type="text" id="last_name" name="last_name" placeholder="<?php echo $owner['last_name']?>" value="1233453453"></div>
            <div class="c-validation">Last Name is required.</div>
        </div>


        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required " data-field="CleaningPropertyAddress">
            <div class="c-label "><label for="Co-Owner's Address">Actual Owner's Address</label></div>
            <div>
                <div class="c-offscreen"><label for="Address Line 1">Address Line 1</label></div>
                <div class="c-editor" style="float: left;"><input type="text" id="address" name="address" placeholder="Address Line 1" value="<?php echo $owner['address']?>"></div>
                <div class="c-offscreen"><label for="City">City</label></div>
                <div class="c-editor c-partial-line" style="float: left;"><input type="text" id="city" name="city" placeholder="City" value="<?php echo $owner['city']?>"></div>
                <div class="c-offscreen"><label for="State">State</label></div>
                <div class="c-editor c-partial-line" style="float: left;">
                    <div class="c-dropdown">
                        <select id="state" name="state" class="c-placeholder-text-styled ">
                            <option value="">State</option>
                            <option value="Armed Forces America" <?php if($owner['state'] == 'Armed Forces America') echo "selected"; ?>>Armed Forces America</option>
                            <option value="Armed Forces" <?php if($owner['state'] == 'Armed Forces') echo "selected"; ?>>Armed Forces</option>
                            <option value="Armed Forces Pacific" <?php if($owner['state'] == 'Armed Forces Pacific') echo "selected"; ?>>Armed Forces Pacific</option>
                            <option value="Alabama" <?php if($owner['state'] == 'Alabama') echo "selected"; ?>>Alabama</option>
                            <option value="Alaska" <?php if($owner['state'] == 'Alaska') echo "selected"; ?>>Alaska</option>
                            <option value="Arizona" <?php if($owner['state'] == 'Arizona') echo "selected"; ?>>Arizona</option>
                            <option value="Arkansas" <?php if($owner['state'] == 'Arkansas') echo "selected"; ?>>Arkansas</option>
                            <option value="California" <?php if($owner['state'] == 'California') echo "selected"; ?>>California</option>
                            <option value="Colorado" <?php if($owner['state'] == 'Colorado') echo "selected"; ?>>Colorado</option>
                            <option value="Connecticut" <?php if($owner['state'] == 'Connecticut') echo "selected"; ?>>Connecticut</option>
                            <option value="District of Columbia" <?php if($owner['state'] == 'District of Columbia') echo "selected"; ?>>District of Columbia</option>
                            <option value="Delaware" <?php if($owner['state'] == 'Delaware') echo "selected"; ?>>Delaware</option>
                            <option value="Florida" <?php if($owner['state'] == 'Florida') echo "selected"; ?>>Florida</option>
                            <option value="Georgia" <?php if($owner['state'] == 'Georgia') echo "selected"; ?>>Georgia</option>
                            <option value="Guam" <?php if($owner['state'] == 'Guam') echo "selected"; ?>>Guam</option>
                            <option value="Hawaii" <?php if($owner['state'] == 'Hawaii') echo "selected"; ?>>Hawaii</option>
                            <option value="Idaho" <?php if($owner['state'] == 'Idaho') echo "selected"; ?>>Idaho</option>
                            <option value="Illinois" <?php if($owner['state'] == 'Illinois') echo "selected"; ?>>Illinois</option>
                            <option value="Indiana" <?php if($owner['state'] == 'Indiana') echo "selected"; ?>>Indiana</option>
                            <option value="Iowa" <?php if($owner['state'] == 'Iowa') echo "selected"; ?>>Iowa</option>
                            <option value="Kansas" <?php if($owner['state'] == 'Kansas') echo "selected"; ?>>Kansas</option>
                            <option value="Kentucky" <?php if($owner['state'] == 'Kentucky') echo "selected"; ?>>Kentucky</option>
                            <option value="Louisiana" <?php if($owner['state'] == 'Louisiana') echo "selected"; ?>>Louisiana</option>
                            <option value="Maine" <?php if($owner['state'] == 'Maine') echo "selected"; ?>>Maine</option>
                            <option value="Maryland" <?php if($owner['state'] == 'Maryland') echo "selected"; ?>>Maryland</option>
                            <option value="Massachusetts" <?php if($owner['state'] == 'Massachusetts') echo "selected"; ?>>Massachusetts</option>
                            <option value="Michigan" <?php if($owner['state'] == 'Michigan') echo "selected"; ?>>Michigan</option>
                            <option value="Minnesota" <?php if($owner['state'] == 'Minnesota') echo "selected"; ?>>Minnesota</option>
                            <option value="Mississippi" <?php if($owner['state'] == 'Mississippi') echo "selected"; ?>>Mississippi</option>
                            <option value="Missouri" <?php if($owner['state'] == 'Missouri') echo "selected"; ?>>Missouri</option>
                            <option value="Montana" <?php if($owner['state'] == 'Montana') echo "selected"; ?>>Montana</option>
                            <option value="Nebraska" <?php if($owner['state'] == 'Nebraska') echo "selected"; ?>>Nebraska</option>
                            <option value="New Hampshire" <?php if($owner['state'] == 'New Hampshire') echo "selected"; ?>>New Hampshire</option>
                            <option value="New Jersey" <?php if($owner['state'] == 'New Jersey') echo "selected"; ?>>New Jersey</option>
                            <option value="New Mexico" <?php if($owner['state'] == 'New Mexico') echo "selected"; ?>>New Mexico</option>
                            <option value="New York" <?php if($owner['state'] == 'New York') echo "selected"; ?>>New York</option>
                            <option value="Nevada" <?php if($owner['state'] == 'Nevada') echo "selected"; ?>>Nevada</option>
                            <option value="North Carolina" <?php if($owner['state'] == 'North Carolina') echo "selected"; ?>>North Carolina</option>
                            <option value="North Dakota" <?php if($owner['state'] == 'North Dakota') echo "selected"; ?>>North Dakota</option>
                            <option value="Ohio" <?php if($owner['state'] == 'Ohio') echo "selected"; ?>>Ohio</option>
                            <option value="Oklahoma" <?php if($owner['state'] == 'Oklahoma') echo "selected"; ?>>Oklahoma</option>
                            <option value="Oregon" <?php if($owner['state'] == 'Oregon') echo "selected"; ?>>Oregon</option>
                            <option value="Pennsylvania" <?php if($owner['state'] == 'Pennsylvania') echo "selected"; ?>>Pennsylvania</option>
                            <option value="Puerto Rico" <?php if($owner['state'] == 'Puerto Rico') echo "selected"; ?>>Puerto Rico</option>
                            <option value="Rhode Island" <?php if($owner['state'] == 'Rhode Island') echo "selected"; ?>>Rhode Island</option>
                            <option value="South Carolina" <?php if($owner['state'] == 'South Carolina') echo "selected"; ?>>South Carolina</option>
                            <option value="South Dakota" <?php if($owner['state'] == 'South Dakota') echo "selected"; ?>>South Dakota</option>
                            <option value="Tennessee" <?php if($owner['state'] == 'Tennessee') echo "selected"; ?>>Tennessee</option>
                            <option value="Texas" <?php if($owner['state'] == 'Texas') echo "selected"; ?>>Texas</option>
                            <option value="Utah" <?php if($owner['state'] == 'Utah') echo "selected"; ?>>Utah</option>
                            <option value="Vermont" <?php if($owner['state'] == 'Vermont') echo "selected"; ?>>Vermont</option>
                            <option value="Virgin Islands" <?php if($owner['state'] == 'Virgin Islands') echo "selected"; ?>>Virgin Islands</option>
                            <option value="Virginia" <?php if($owner['state'] == 'Virginia') echo "selected"; ?>>Virginia</option>
                            <option value="Washington" <?php if($owner['state'] == 'Washington') echo "selected"; ?>>Washington</option>
                            <option value="West Virginia" <?php if($owner['state'] == 'West Virginia') echo "selected"; ?>>West Virginia</option>
                            <option value="Wisconsin" <?php if($owner['state'] == 'Wisconsin') echo "selected"; ?>>Wisconsin</option>
                            <option value="Wyoming" <?php if($owner['state'] == 'Wyoming') echo "selected"; ?>>Wyoming</option>
                        </select>
                    </div>
                </div>
                <div class="c-offscreen"><label for="Zip Code">Zip Code</label></div>
                <div class="c-editor c-partial-line" style="float: left;"><input type="text" class="onlynumbs" id="zipcode" name="zipcode" placeholder="Zip Code" value="<?php echo $owner['zipcode']?>"></div>
            </div>
            <div class="c-validation">Address Line 1 and City and State and Zip Code are required.</div>
        </div>
        
        <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="Phone">
            <div class="c-label  "><label for="Owner's Day Phone">Owner's Day Phone</label></div>
            <div class="c-editor"><input type="text" class="phonenumber" maxlength="16" id="day_phone" name="day_phone" placeholder="" autocomplete="off" value="<?php echo $owner['day_phone']?>"></div>
            <div class="c-validation">Day Phone is required.</div>
        </div>
        

        <div class="c-phone c-phone-us c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="CellPhone">
            <div class="c-label  "><label for="Owner's Cell Phone">Owner's Cell Phone</label></div>
            <div class="c-editor"><input type="text" class="phonenumber" maxlength="16" id="cell_phone" name="cell_phone" placeholder="" autocomplete="off" value="<?php echo $owner['cell_phone']?>"></div>
            <div class="c-validation">Cell Phone is required.</div>
        </div>
        
        <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required  " data-field="Phone">
            <div class="c-label  "><label for="Owner's Email Address">Owner's Email Address</label></div>
            <div class="c-editor"><input type="text" id="email" name="email" placeholder="" autocomplete="off" value="<?php echo $owner['email']?>"></div>
            <div class="c-validation">Owner's Email is required.</div>
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


        <input type="hidden" id="id" name="id" value="<?php echo $owner['id']?>">
        <input type="hidden" id="status" name="status" value="<?php echo $owner['status']?>">
        <input type="hidden" id="username_old" name="username_old" value="<?php echo $owner['username']?>">
        <input type="hidden" id="password_old" name="password_old" value="<?php echo $owner['password']?>">
    </form>
</div>
<script>

    <?php
    if($owner['add_co_owner_chbox'] == 'true'){
        ?>
        var add_co_owner_chbox = <?php echo $owner['add_co_owner_chbox']?>;
        var co_owners_data = <?php echo $owner['co_owners_data']?>;
        <?php
    }
    else{
        ?>
        var add_co_owner_chbox = false;
        var co_owners_data = [];
        <?php
    }

    if($owner['add_additional_prop_chbox'] == 'true'){
        ?>
        var add_additional_prop_chbox = <?php echo $owner['add_additional_prop_chbox']?>;
        var additional_props_data = <?php echo $owner['additional_props_data']?>;
        <?php
    }
    else{
        ?>
        var add_additional_prop_chbox = false;
        var additional_props_data = [];
        <?php
    }
    ?>
    
</script>
   