<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Owner Edit
    </h1>
    <ol class="breadcrumb" style="display: none">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">General</li>
    </ol>
</section>
<!-- Main content -->
<section class="content" id="page_content_owner_edit">
    <div class="box box-primary">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" id="owner_edit_form">
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Account Name">Account Status</label>
                        <select id="status" name="status" class="form-control">
                            <option value="inactive" <?php if($owner['status'] == 'inactive' || $owner['status'] == '') echo "selected"; ?>>Inactive</option>
                            <option value="active" <?php if($owner['status'] == 'active') echo "selected"; ?>>Active</option>
                            <option value="suspend" <?php if($owner['status'] == 'suspend') echo "selected"; ?>>Suspend</option>
                            <option value="delete" <?php if($owner['status'] == 'delete') echo "selected"; ?>>Delete</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="Account Name">Account Name</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Account Name" value="<?php echo $owner['username']?>">
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="Account Password">Account Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Account Password" value="<?php echo $owner['password']?>">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="First Name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $owner['first_name']?>">
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="Last Name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $owner['last_name']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Owner's Email Address">Owner's Email Address</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $owner['email']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Owner's Day Phone">Owner's Day Phone</label>
                        <input type="text" class="form-control phonenumber" id="day_phone" name="day_phone" placeholder="" value="<?php echo $owner['day_phone']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Owner's Cell Phone">Owner's Cell Phone</label>
                        <input type="text" class="form-control phonenumber" id="cell_phone" name="cell_phone" placeholder="" value="<?php echo $owner['cell_phone']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="Actual Owner's Address">Actual Owner's Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="address" value="<?php echo $owner['address']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <input type="text" class="form-control" id="city" name="city" placeholder="city" value="<?php echo $owner['city']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        
                        <select id="state" name="state" class="form-control">
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

                    <div class="form-group col-xs-4">
                        <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="zipcode" value="<?php echo $owner['zipcode']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-12">
                        <div class="checkbox" style="display:inline-block;">
                            <label>
                            <input type="checkbox" id="add_co_owner_chbox">
                            Co Owner
                            </label>
                        </div>
                        <button type="button" class="btn btn-primary" style="margin-left: 10px;;visibility:hidden" id="add_co_owner_btn">Add</button>
                    </div>
                </div>

                <div id="co_owners_container"></div>

                <div class="row">
                    <div class="form-group col-xs-12">
                        <div class="checkbox" style="display:inline-block;">
                            <label>
                            <input type="checkbox" id="add_additional_prop_chbox">
                            Add Another Property
                            </label>
                        </div>
                        <button type="button" class="btn btn-primary" style="margin-left: 10px;visibility:hidden" id="add_additional_prop_btn">Add</button>
                    </div>
                </div>

                <div id="additional_props_container"></div>

            </div>
            <!-- /.box-body -->

            <input type="hidden" id="id" name="id" value="<?php echo $owner['id']?>">
            <input type="hidden" id="username_old" name="username_old" value="<?php echo $owner['username']?>">
            <input type="hidden" id="password_old" name="password_old" value="<?php echo $owner['password']?>">
            <input type="hidden" id="status_old" name="status_old" value="<?php echo $owner['status']?>">

            <div class="box-footer">
                <button type="button" class="btn btn-default" onclick="location.href='/owner_management'">Cancel</button>
                <button type="button" class="btn btn-primary" id="owner_save_btn">Save</button>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->

<div id="co_owner_template" style="display:none">
    <div class="co-owner-template-wrap">
        <div class="row">
            <div class="form-group col-xs-6">
                <label for="# of Bedrooms">Co-Owner's First Name</label>
                <input type="text" class="form-control" name="co_owner_first_name" placeholder="" value="">
            </div>
            <div class="form-group col-xs-6">
                <label for="# of Bedrooms">Co-Owner's Last Name</label>
                <input type="text" class="form-control" name="co_owner_last_name" placeholder="" value="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-xs-12">
                <label for="Actual Owner's Address">Co-Owner's Address</label>
                <input type="text" class="form-control" name="co_owner_address" placeholder="address" value="<?php echo $owner['address']?>">
            </div>

            <div class="form-group col-xs-4">
                <input type="text" class="form-control" name="co_owner_city" placeholder="city" value="<?php echo $owner['city']?>">
            </div>
            <div class="form-group col-xs-4">
                <select name="co_owner_state" class="form-control">
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
            <div class="form-group col-xs-4">
                <input type="text" class="form-control onlynumbs" name="co_owner_zipcode" placeholder="zipcode" value="">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-6">
                <label for="# of Bedrooms">Co-Owner's Cell</label>
                <input type="text" class="form-control phonenumber" name="co_owner_cell_phone" placeholder="" value="">
            </div>
            <div class="form-group col-xs-6">
                <label for="# of Bedrooms">Co-Owner's Email</label>
                <input type="text" class="form-control" name="co_owner_email" placeholder="" value="">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12" style="text-align:right">
                <button type="button" class="btn btn-danger" name="co_owner_del_btn">Delete</button>
                <hr>
            </div>
        </div>
    </div>
</div>

<div id="additional_prop_template" style="display:none">
    <div class="additional-prop-template-wrap">
        <div class="row">
            <div class="form-group col-xs-4">
                <label for="# of Bedrooms">Hilton Head Property Address</label>
                <input type="text" class="form-control" name="property_address" placeholder="" value="">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-4">
                <label for="# of Bedrooms"># of Bedrooms</label>
                <input type="text" class="form-control onlynumbs" maxlength="2" name="bedrooms" placeholder="" value="">
            </div>

            <div class="form-group col-xs-4">
                <label for="# of Bathrooms"># of Bathrooms</label>
                <input type="text" class="form-control onlynumbs" maxlength="2" name="bathrooms" placeholder="" value="">
            </div>

            <div class="form-group col-xs-4">
                <label for="# of ½ Bathrooms"># of ½ Bathrooms</label>
                <input type="text" class="form-control onlynumbs" maxlength="2" name="hbathrooms" placeholder="" value="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-xs-12" style="margin-bottom: 0px;">
                <label for="Bed Configuration(s) & # of each">Bed Configuration(s) & # of each</label>
            </div>
            <div class="form-group col-xs-1">
                <input type="text" class="form-control onlynumbs" maxlength="2" name="bed_conf_count1" placeholder="" value="">
            </div>

            <div class="form-group col-xs-2">
                <select name="bed_conf_type1" class="form-control">
                    <option value="Twin">Twin</option>
                    <option value="Full">Full</option>
                    <option value="Queen">Queen</option>
                    <option value="King">King</option>
                    <option value="California King">California King</option>
                </select>
            </div>

            <div class="form-group col-xs-1">
                <input type="text" class="form-control onlynumbs" maxlength="2" name="bed_conf_count2" placeholder="" value="">
            </div>

            <div class="form-group col-xs-2">
                <select name="bed_conf_type2" class="form-control">
                    <option value="Twin">Twin</option>
                    <option value="Full">Full</option>
                    <option value="Queen">Queen</option>
                    <option value="King">King</option>
                    <option value="California King">California King</option>
                </select>
            </div>

            <div class="form-group col-xs-1">
                <input type="text" class="form-control onlynumbs" maxlength="2" name="bed_conf_count3" placeholder="" value="">
            </div>

            <div class="form-group col-xs-2">
                <select name="bed_conf_type3" class="form-control">
                    <option value="Twin">Twin</option>
                    <option value="Full">Full</option>
                    <option value="Queen">Queen</option>
                    <option value="King">King</option>
                    <option value="California King">California King</option>
                </select>
            </div>

            <div class="form-group col-xs-1">
                <input type="text" class="form-control onlynumbs" maxlength="2" name="bed_conf_count4" placeholder="" value="">
            </div>

            <div class="form-group col-xs-2">
                <select name="bed_conf_type4" class="form-control">
                    <option value="Twin">Twin</option>
                    <option value="Full">Full</option>
                    <option value="Queen">Queen</option>
                    <option value="King">King</option>
                    <option value="California King">California King</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-xs-4">
                <label for="Sleeper Sofa">Sleeper Sofa?</label>
                <select name="sleeper_sofa_exist" class="form-control">
                    <option value="Yes">Yes</option>
                    <option value="No" selected>No</option>
                </select>
            </div>

            <div class="form-group col-xs-4">
                <label for="Size">Size</label>
                <select name="sleeper_sofa_size" class="form-control">
                    <option value="Twin">Twin</option>
                    <option value="Full">Full</option>
                    <option value="Queen">Queen</option>
                    <option value="King">King</option>
                    <option value="California King">California King</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12" style="text-align:right">
                <button type="button" class="btn btn-danger" name="additional_prop_del_btn">Delete</button>
                <hr>
            </div>
        </div>
    </div>
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