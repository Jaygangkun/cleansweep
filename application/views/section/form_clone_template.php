<!-- co_owner_template -->
<div id="co_owner_template" style="display:none">
    <div class="co-owner-template-wrap">
        <div class="c-name c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required  " data-field="Name">
            <div class="c-label "><label for="Co-Owner's Name">Co-Owner's Name</label></div>
            <div>
                <div class="c-offscreen"><label for="First">First</label></div>
                <div class="c-editor c-span-1" style="width: 50%; float: left;"><input type="text" name="co_owner_first_name" placeholder="First Name" maxlength="20" value=""></div>
                <div class="c-offscreen"><label for="Last">Last</label></div>
                <div class="c-editor c-span-1" style="width: 50%; float: left;"><input type="text" name="co_owner_last_name" placeholder="Last Name" maxlength="20" value=""></div>
            </div>
            <div class="c-validation">Co-Owner's First Name and Last Name are required.</div>
        </div>                        

        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required " data-field="CleaningPropertyAddress">
            <div class="c-label "><label for="Co-Owner's Address">Co-Owner's Address</label></div>
            <div>
                <div class="c-offscreen"><label for="Address Line 1">Address Line 1</label></div>
                <div class="c-editor" style="float: left;"><input type="text" name="co_owner_address" placeholder="Address Line 1"></div>
                <div class="c-offscreen"><label for="City">City</label></div>
                <div class="c-editor c-partial-line" style="float: left;"><input type="text" name="co_owner_city" placeholder="City"></div>
                <div class="c-offscreen"><label for="State">State</label></div>
                <div class="c-editor c-partial-line" style="float: left;">
                    <div class="c-dropdown">
                        <select name="co_owner_state" class="c-placeholder-text-styled ">
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
                <div class="c-editor c-partial-line" style="float: left;"><input type="text" class="onlynumbs" name="co_owner_zipcode" placeholder="Zip Code"></div>
            </div>
            <div class="c-validation">Address Line 1 and City and State and Zip Code are required.</div>
        </div>

        <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="Phone">
            <div class="c-label  "><label for="Co-Owner's Cell">Co-Owner's Cell</label></div>
            <div class="c-editor"><input type="text" class="phonenumber" maxlength="16" name="co_owner_cell_phone" placeholder="" value=""></div>
            <div class="c-validation">Co-Owner's Cell is required.</div>
        </div>
        <div class="c-phone c-phone-us c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="CellPhone">
            <div class="c-label  "><label for="Co-Owner's Email">Co-Owner's Email</label></div>
            <div class="c-editor"><input type="text" name="co_owner_email" placeholder="" value=""></div>
            <div class="c-validation require-msg">Co-Owner's Email is required.</div>
            <div class="c-validation format-msg" style="display:none">Co-Owner's Email isn't correct format.</div>
        </div>
        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12" data-field="CleaningPropertyAddress">
            <div class="c-label " style="text-align: right">
                <button type="button" class="c-button" name="co_owner_del_btn">Delete</button>
            </div>
        </div> 

        <div class="c-col-1">
            <hr>
        </div>
    </div>
</div>

<!-- //co_owner_template-->

<!-- additional_prop_template -->
<div id="additional_prop_template" style="display:none">
    <div id="" class="additional-prop-template-wrap">
        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required " data-field="CleaningPropertyAddress">
            <div class="c-label "><label>Hilton Head Property Address</label></div>
            <div>
                <div class="c-offscreen"><label for="Address Line 1">Address Line 1</label></div>
                <div class="c-editor" style="float: left;"><input type="text" name="property_address" placeholder="Address Line 1"></div>
            </div>
            <div class="c-validation">Address and City and State and Zip Code are required.</div>
        </div>     
        
        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-8 c-sml-span-12  c-required room-nums-wrap" data-field="Bedrooms">
            <div class="c-label "><label># of Bedrooms</label></div>
            <div>
                <div class="c-offscreen"><label for=""></label></div>
                <div class="c-editor">
                    <div class="c-partial-line" style="float: left;">
                        <div class="c-dropdown">
                            <select name="bedrooms" id="bedrooms" class="c-placeholder-text-styled ">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-validation"># of Bedrooms is required.</div>
        </div>

        <div class="c-address c-phone-us c-field c-sml-col-1 c-span-8 c-sml-span-12  c-required room-nums-wrap" data-field="Bathrooms">
            <div class="c-label  " style="width: auto; display: inline-block; flex-shrink:0"><label for=""># of Bathrooms</label></div>
            <div>
                <div class="c-offscreen"><label for=""></label></div>
                <div class="c-editor">
                    <div class="c-partial-line" style="float: left;">
                        <div class="c-dropdown">
                            <select name="bathrooms" id="bathrooms" class="c-placeholder-text-styled ">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-validation"># of Bathrooms is required.</div>
        </div>
        <div class="c-address c-phone-us c-field c-col-13 c-sml-col-1 c-span-8 c-sml-span-12  c-required room-nums-wrap" data-field="Bathrooms">
            <div class="c-label  "><label for=""># of ½ Bathrooms</label></div>
            <div class="c-editor">
                <div class="c-partial-line" style="float: left;">
                    <div class="c-dropdown">
                        <select name="hbathrooms" id="hbathrooms" class="c-placeholder-text-styled ">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="c-validation"># of ½ Bathrooms is required.</div>
        </div>

        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required" data-field="Bed Configuration">
            <div class="c-label "><label>Bed Configuration(s) & # of each</label></div>
            <div class="custom-form-row room-nums-wrap">
                <div class="custom-form-wrap custom-form-col-25">
                    <div class="c-address c-phone-us c-field c-col-13 c-sml-col-1 c-span-8 c-sml-span-12  c-required " data-field="Bathrooms" style="display:flex; align-items: center;">
                        <div class="c-label  " style="width: auto !important; display: inline-block;"><label for="">Twin</label></div>
                        <div class="c-editor" style="display:inline-block; width: auto !important;padding-bottom: 0px !important">
                            <!-- <div class="c-partial-line" style="float: left;">
                                <input type="text" name="twin_nums" id="twin_nums" class="onlynumbs" maxlength="2" placeholder="" value="0">
                            </div> -->
                            <div class="c-dropdown">
                                <select name="twin_nums" id="twin_nums" class="c-placeholder-text-styled ">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                        <div class="c-validation"></div>
                    </div>
                </div>

                <div class="custom-form-wrap custom-form-col-25">
                    <div class="c-address c-phone-us c-field c-col-13 c-sml-col-1 c-span-8 c-sml-span-12  c-required " data-field="Bathrooms" style="display:flex; align-items: center;">
                        <div class="c-label  " style="width: auto !important; display: inline-block;"><label for="">Queen/Full</label></div>
                        <div class="c-editor" style="display:inline-block; width: auto !important;padding-bottom: 0px !important">
                            <!-- <div class="c-partial-line" style="float: left;">
                                <input type="text" name="queen_nums" id="queen_nums" class="onlynumbs" maxlength="2" placeholder="" value="0">
                            </div> -->
                            <div class="c-dropdown">
                                <select name="queen_nums" id="queen_nums" class="c-placeholder-text-styled ">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                        <div class="c-validation"></div>
                    </div>
                </div>

                <div class="custom-form-wrap custom-form-col-25">
                    <div class="c-address c-phone-us c-field c-col-13 c-sml-col-1 c-span-8 c-sml-span-12  c-required " data-field="Bathrooms" style="display:flex; align-items: center;">
                        <div class="c-label  " style="width: auto !important; display: inline-block;"><label for="">King</label></div>
                        <div class="c-editor" style="display:inline-block; width: auto !important;padding-bottom: 0px !important">
                            <!-- <div class="c-partial-line" style="float: left;">
                                <input type="text" name="king_nums" id="king_nums" class="onlynumbs" maxlength="2" placeholder="" value="0">
                            </div> -->
                            <div class="c-dropdown">
                                <select name="king_nums" id="king_nums" class="c-placeholder-text-styled ">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                        <div class="c-validation"></div>
                    </div>
                </div>

            </div>
            <div class="c-validation">All Bed Configuration # are required.</div>
        </div>

        <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required room-nums-wrap" data-field="Phone">
            <div class="c-label  "><label for="Sleeper Sofa">Sleeper Sofa?</label></div>
            <div class="c-editor">
                <div class="c-dropdown">
                    <select name="sleeper_sofa_exist" id="sleeper_sofa_exist" class="c-placeholder-text-styled ">
                        <option value="N/A" selected>N/A</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
            </div>
            <div class="c-validation">Sleeper Sofa is required.</div>
        </div>
        
        <div class="c-phone c-phone-us c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12  c-required room-nums-wrap" data-field="CellPhone">
            <div class="c-label  "><label for="Size">Size</label></div>
            <div class="c-editor">
                <div class="c-dropdown">
                    <select name="sleeper_sofa_size" id="sleeper_sofa_size" class="c-placeholder-text-styled ">
                        <option value=""></option>
                        <option value="N/A">N/A</option>
                        <option value="Twin">Twin</option>
                        <option value="Queen">Queen</option>
                    </select>
                </div>
            </div>
            <div class="c-validation">Size is required.</div>
        </div>

        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12" data-field="CleaningPropertyAddress">
            <div class="c-label " style="text-align: right">
                <button type="button" class="c-button" name="additional_prop_del_btn">Delete</button>
            </div>
        </div> 

        <div class="c-col-1">
            <hr>
        </div>
    </div>
</div>
<!-- additional_prop_template -->

<!-- sleepr_sofa_template -->
<div id="additional_prop_template" style="display:none">
    <div id="" class="additional-prop-template-wrap">
    </div>
</div>
<!--// sleepr_sofa_template -->