<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        User Account Edit
    </h1>
    <ol class="breadcrumb" style="display: none">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">General</li>
    </ol>
</section>
<!-- Main content -->
<section class="content" id="page_content_account_edit">
    <div class="box box-primary">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" id="owner_edit_form">
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Account Name">Account Status</label>
                        <select id="status" name="status" class="form-control">
                            <option value="active" <?php if($owner['status'] == 'active') echo "selected"; ?>>Active</option>
                            <option value="inactive" <?php if($owner['status'] == 'inactive' || $owner['status'] == '') echo "selected"; ?>>Inactive</option>
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
            </div>
            <!-- /.box-body -->

            <input type="hidden" id="id" name="id" value="<?php echo $owner['id']?>">
            
            <input type="hidden" id="username_old" name="username_old" value="<?php echo $owner['username']?>">
            <input type="hidden" id="password_old" name="password_old" value="<?php echo $owner['password']?>">
            <input type="hidden" id="status_old" name="status_old" value="<?php echo $owner['status']?>">

            <div class="box-footer">
                <button type="button" class="btn btn-default" onclick="location.href='/user_account_management_page'">Cancel</button>
                <button type="button" class="btn btn-primary" id="owner_account_save_btn">Save</button>
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
                <select name="bedrooms" class="form-control">
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

            <div class="form-group col-xs-4">
                <label for="# of Bathrooms"># of Bathrooms</label>
                <select name="bathrooms" class="form-control">
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

            <div class="form-group col-xs-4">
                <label for="# of ½ Bathrooms"># of ½ Bathrooms</label>
                <select name="hbathrooms" class="form-control">
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

        <div class="row">
            <div class="form-group col-xs-12" style="margin-bottom: 0px;">
                <label for="Bed Configuration(s) & # of each">Bed Configuration(s) & # of each</label>
            </div>
            <div class="form-group col-xs-1">
                <label for="Twin">Twin</label>
                <!-- <input type="text" class="form-control onlynumbs" maxlength="2" name="twin_nums" placeholder="" value=""> -->
                <select name="twin_nums" class="form-control">
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

            <div class="form-group col-xs-1">
                <label for="King">King</label>
                <!-- <input type="text" class="form-control onlynumbs" maxlength="2" name="king_nums" placeholder="" value=""> -->
                <select name="king_nums" class="form-control">
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

            <div class="form-group col-xs-1">
                <label for="Queen / Full">Queen / Full</label>
                <!-- <input type="text" class="form-control onlynumbs" maxlength="2" name="queen_nums" placeholder="" value=""> -->
                <select name="queen_nums" class="form-control">
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

        <div class="row">
            <div class="form-group col-xs-4">
                <label for="Sleeper Sofa">Sleeper Sofa?</label>
                <select name="sleeper_sofa_exist" class="form-control">
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

            <div class="form-group col-xs-4">
                <label for="Size">Size</label>
                <select name="sleeper_sofa_size" class="form-control">
                    <option value=""></option>
                    <option value="N/A">N/A</option>
                    <option value="Twin">Twin</option>
                    <option value="Queen">Queen</option>
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