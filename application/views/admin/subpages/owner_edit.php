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
<section class="content">
    <div class="box box-primary">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" id="owner_edit_form">
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="exampleInputEmail1">Account Name</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Account Name" value="<?php echo $owner['username']?>">
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="exampleInputEmail1">Account Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Account Password" value="<?php echo $owner['password']?>">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $owner['first_name']?>">
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $owner['last_name']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="exampleInputEmail1">Owner's Email Address</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $owner['email']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="exampleInputEmail1">Actual Owner's Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter email" value="<?php echo $owner['address']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter email" value="<?php echo $owner['city']?>">
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
                        <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter email" value="<?php echo $owner['zipcode']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="Check In Date">Hilton Head Property Address</label>
                        <input type="text" class="form-control" id="property_address" name="property_address" placeholder="Check In Date" value="<?php echo $owner['property_address']?>">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Check In Date">Check In Date</label>
                        <input type="text" class="form-control datepicker" id="check_in_date" name="check_in_date" placeholder="Check In Date" value="<?php echo $owner['check_in_date']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Check Out Date">Check Out Date</label>
                        <input type="text" class="form-control datepicker" id="check_out_date" name="check_out_date" placeholder="Check Out Date" value="<?php echo $owner['check_out_date']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Check In Date"># of Bedrooms</label>
                        <input type="text" class="form-control" id="bedrooms" name="bedrooms" placeholder="" value="<?php echo $owner['bedrooms']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Check Out Date"># of Bathrooms</label>
                        <input type="text" class="form-control" id="bathrooms" name="bathrooms" placeholder="" value="<?php echo $owner['bathrooms']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Check Out Date"># of ½ Bathrooms</label>
                        <input type="text" class="form-control" id="hbathrooms" name="hbathrooms" placeholder="" value="<?php echo $owner['hbathrooms']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-12" style="margin-bottom: 0px;">
                        <label for="Check In Date">Bed Configuration(s) & # of each</label>
                    </div>
                    <div class="form-group col-xs-1">
                        <input type="text" class="form-control" id="bed_conf_count1" name="bed_conf_count1" placeholder="" value="<?php echo $owner['bed_conf_count1']?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <select id="bed_conf_type1" name="bed_conf_type1" class="form-control">
                            <option value="Twin" <?php if($owner['bed_conf_type1'] == 'Twin') echo "selected"; ?>>Twin</option>
                            <option value="Full" <?php if($owner['bed_conf_type1'] == 'Full') echo "selected"; ?>>Full</option>
                            <option value="Queen" <?php if($owner['bed_conf_type1'] == 'Queen') echo "selected"; ?>>Queen</option>
                            <option value="King" <?php if($owner['bed_conf_type1'] == 'King') echo "selected"; ?>>King</option>
                            <option value="California King" <?php if($owner['bed_conf_type1'] == 'California King') echo "selected"; ?>>California King</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-1">
                        <input type="text" class="form-control" id="bed_conf_count2" name="bed_conf_count2" placeholder="" value="<?php echo $owner['bed_conf_count2']?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <select id="bed_conf_type2" name="bed_conf_type2" class="form-control">
                            <option value="Twin" <?php if($owner['bed_conf_type2'] == 'Twin') echo "selected"; ?>>Twin</option>
                            <option value="Full" <?php if($owner['bed_conf_type2'] == 'Full') echo "selected"; ?>>Full</option>
                            <option value="Queen" <?php if($owner['bed_conf_type2'] == 'Queen') echo "selected"; ?>>Queen</option>
                            <option value="King" <?php if($owner['bed_conf_type2'] == 'King') echo "selected"; ?>>King</option>
                            <option value="California King" <?php if($owner['bed_conf_type2'] == 'California King') echo "selected"; ?>>California King</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-1">
                        <input type="text" class="form-control" id="bed_conf_count3" name="bed_conf_count3" placeholder="" value="<?php echo $owner['bed_conf_count3']?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <select id="bed_conf_type3" name="bed_conf_type3" class="form-control">
                            <option value="Twin" <?php if($owner['bed_conf_type3'] == 'Twin') echo "selected"; ?>>Twin</option>
                            <option value="Full" <?php if($owner['bed_conf_type3'] == 'Full') echo "selected"; ?>>Full</option>
                            <option value="Queen" <?php if($owner['bed_conf_type3'] == 'Queen') echo "selected"; ?>>Queen</option>
                            <option value="King" <?php if($owner['bed_conf_type3'] == 'King') echo "selected"; ?>>King</option>
                            <option value="California King" <?php if($owner['bed_conf_type3'] == 'California King') echo "selected"; ?>>California King</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-1">
                        <input type="text" class="form-control" id="bed_conf_count4" name="bed_conf_count4" placeholder="" value="<?php echo $owner['bed_conf_count4']?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <select id="bed_conf_type4" name="bed_conf_type4" class="form-control">
                            <option value="Twin" <?php if($owner['bed_conf_type4'] == 'Twin') echo "selected"; ?>>Twin</option>
                            <option value="Full" <?php if($owner['bed_conf_type4'] == 'Full') echo "selected"; ?>>Full</option>
                            <option value="Queen" <?php if($owner['bed_conf_type4'] == 'Queen') echo "selected"; ?>>Queen</option>
                            <option value="King" <?php if($owner['bed_conf_type4'] == 'King') echo "selected"; ?>>King</option>
                            <option value="California King" <?php if($owner['bed_conf_type4'] == 'California King') echo "selected"; ?>>California King</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Check In Date">Sleeper Sofa?</label>
                        <select id="sleeper_sofa_exist" name="sleeper_sofa_exist" class="form-control">
                            <option value="Yes" <?php if($owner['sleeper_sofa_exist'] == 'Yes') echo "selected"; ?>>Yes</option>
                            <option value="No" <?php if($owner['sleeper_sofa_exist'] == 'No') echo "selected"; ?>>No</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Check Out Date">Size</label>
                        <select id="sleeper_sofa_size" name="sleeper_sofa_size" class="form-control">
                            <option value="Twin" <?php if($owner['sleeper_sofa_size'] == 'Twin') echo "selected"; ?>>Twin</option>
                            <option value="Full" <?php if($owner['sleeper_sofa_size'] == 'Full') echo "selected"; ?>>Full</option>
                            <option value="Queen" <?php if($owner['sleeper_sofa_size'] == 'Queen') echo "selected"; ?>>Queen</option>
                            <option value="King" <?php if($owner['sleeper_sofa_size'] == 'King') echo "selected"; ?>>King</option>
                            <option value="California King" <?php if($owner['sleeper_sofa_size'] == 'California King') echo "selected"; ?>>California King</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Check In Date">Owner's Day Phone</label>
                        <input type="text" class="form-control" id="day_phone" name="day_phone" placeholder="" value="<?php echo $owner['day_phone']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Check Out Date">Owner's Cell Phone</label>
                        <input type="text" class="form-control" id="cell_phone" name="cell_phone" placeholder="" value="<?php echo $owner['cell_phone']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Check Out Date">Hilton Head Property Phone</label>
                        <input type="text" class="form-control" id="property_phone" name="property_phone" placeholder="" value="<?php echo $owner['property_phone']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Check In Date">CC To Be Used for Billing Purpose</label>
                        <input type="text" class="form-control" id="billing_purpose" name="billing_purpose" placeholder="" value="<?php echo $owner['billing_purpose']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Check Out Date">Expiration Date</label>
                        <input type="text" class="form-control datepicker" id="exp_date" name="exp_date" placeholder="" value="<?php echo $owner['exp_date']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-12" style="margin-bottom: 0px;">
                        <label for="Check In Date">For Office use only</label>
                    </div>
                    <div class="form-group col-xs-4">
                        <label for="Check In Date">Cleanning Rate</label>
                        <input type="text" class="form-control" id="office_cleaning_rate" name="office_cleaning_rate" placeholder="" value="<?php echo $owner['office_cleaning_rate']?>">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Check Out Date">Caretaking Rate</label>
                        <input type="text" class="form-control" id="office_caretaking_rate" name="office_caretaking_rate" placeholder="" value="<?php echo $owner['office_caretaking_rate']?>">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->

            <input type="hidden" id="id" name="id" value="<?php echo $owner['id']?>">
            <input type="hidden" id="username_old" name="username_old" value="<?php echo $owner['username']?>">
            <input type="hidden" id="password_old" name="password_old" value="<?php echo $owner['password']?>">

            <div class="box-footer">
                <button type="button" class="btn btn-default" onclick="location.href='/owner_management'">Cancel</button>
                <button type="button" class="btn btn-primary" id="owner_save_btn">Save</button>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->