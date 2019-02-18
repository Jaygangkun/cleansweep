<h2 class="px_-text-align-center mt-5">Service Request</h2>
<div class="container">

<form class="form-container" id="service_req_form">
    <div class="c-name c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required  " data-field="Name">
        <div class="c-label "><label for="Name">Name</label></div>
        <div>
            <div class="c-offscreen"><label for="First">First</label></div>
            <div class="c-editor c-span-1" style="width: 50%; float: left;"><input type="text" id="first_name" placeholder="First Name" maxlength="20" value="<?php echo $owner['first_name']?>" readonly></div>
            <div class="c-offscreen"><label for="Last">Last</label></div>
            <div class="c-editor c-span-1" style="width: 50%; float: left;"><input type="text" id="last_name" placeholder="Last Name" maxlength="20" value="<?php echo $owner['last_name']?>" readonly></div>
        </div>
        <div class="c-validation">First Name and Last Name are required.</div>
    </div>             


    <div class="c-text-signleline c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required  " data-field="Required Service">
        <div class="c-label "><label for="Required Service">Required Service</label></div>
        
        <div class="c-editor c-partial-line">
            <div class="c-dropdown">
                <select id="req_service" class="c-placeholder-text-styled ">
                    <option value="">Select</option>
                    <option value="Pre-Arrival/Tidy Clean">Pre-Arrival/Tidy Clean</option>
                    <option value="Mid-Stay Clean">Mid-Stay Clean</option>
                    <option value="Departure Clean">Departure Clean</option>
                    <option value="Turn Clean">Turn Clean</option>
                    <option value="No Clean Needed">No Clean Needed</option>
                    <option value="Annual Clean">Annual Clean</option>
                </select>
            </div>
        </div>
            
        <div class="c-validation">Required Service is required.</div>
    </div>

    <div class="c-date-date c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="CheckInDate">
        <div class="c-label  "><label for="Check In Date">Check In Date</label></div>
        <div class="c-editor">
            <div class="c-editor-date"><input type="text" id="check_in_date" placeholder="" class="c-datepicker datepicker" value=""></div>
            <div class="c-editor-date-icon"><i class="icon-calendar"></i></div>
        </div>
        <div class="c-validation">Check In Date is required.</div>
    </div>
    <div class="c-date-date c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12  c-required c-modified " data-field="CheckOutDate2">
        <div class="c-label  "><label for="Check Out Date">Check Out Date</label></div>
        <div class="c-editor">
            <div class="c-editor-date"><input type="text" id="check_out_date" value="" placeholder="" class="c-datepicker datepicker"></div>
            <div class="c-editor-date-icon"><i class="icon-calendar"></i></div>
        </div>
        <div class="c-validation">Check Out Date is required</div>
    </div>

    <?php
    $cleaning_address = '';
    if($owner['add_additional_prop_chbox'] != 'true'){
        $cleaning_address = $owner['address'];
        ?>
        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required " data-field="CleaningPropertyAddress">
            <div class="c-label "><label for="Cleaning Property Address">Cleaning Property Address</label></div>
            <div>
                <div class="c-offscreen"><label for="Address Line 1">Address Line 1</label></div>
                <div class="c-editor" style="float: left;"><input type="text" id="cleaning_address" placeholder="Address Line 1" value="<?php echo $cleaning_address;?>"></div>
            </div>
            <div class="c-validation">Address Line 1 and City and State and Zip Code are required.</div>
        </div>
        <?php
    }
    else{
        ?>
        <div class="c-address c-address-us c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12  c-required " data-field="CleaningPropertyAddress">
            <div class="c-label "><label for="Cleaning Property Address">Cleaning Property Address</label></div>
            <div class="c-editor c-partial-line">
                <div class="c-dropdown">
                    <select id="cleaning_address" class="c-placeholder-text-styled ">
                    </select>
                </div>
            </div>
            <div class="c-validation">Address Line 1 and City and State and Zip Code are required.</div>
        </div>
        <?php
    }

    ?>        

    <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="Phone">
        <div class="c-label  "><label for="Daytime Phone">Daytime Phone</label></div>
        <div class="c-editor"><input type="text" class="phonenumber" maxlength="16" id="day_phone" placeholder="8036716089" value="<?php echo $owner['day_phone']?>"></div>
        <div class="c-validation">Daytime Phone is required.</div>
    </div>
    <div class="c-phone c-phone-us c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="CellPhone">
        <div class="c-label  "><label for="Cell Phone">Cell Phone</label></div>
        <div class="c-editor"><input type="text" class="phonenumber" maxlength="16" id="cell_phone" placeholder="8036716089" value="<?php echo $owner['cell_phone']?>"></div>
        <div class="c-validation">Cell Phone is required.</div>
    </div>

    <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="Phone">
        <div class="c-label  "><label for="Email">Email</label></div>
        <div class="c-editor"><input type="text" id="email" placeholder="Email" value="<?php echo $owner['email']?>" readonly></div>
        <div class="c-validation">Email is required.</div>
    </div>
            
    <div class="c-section c-col-1 c-sml-col-1 c-span-24 c-sml-span-12" data-field="Comments">
        <div class="">
            <div class="c-label "><label for="Comments">Comments</label></div>
            <div class="c-text-multiplelines c-field c-col-1 c-sml-col-1 c-span-24 c-sml-span-12" data-field="FeelFreeToMakeCommentsPertainingToStay">
                <div class="c-label c-offscreen "><label for="c-21-6"></label></div>
                <div class="c-editor"><textarea id="comments" placeholder="" type="text" height=""></textarea></div>
                <div class="c-validation"></div>
            </div>
        </div>
        <div class="c-validation"></div>
    </div>

    <input type="hidden" id="owner_id" value="<?php echo $owner['id']?>">

    <div class="c-button-section">
    <div class="c-action"><button type="button" class="c-button" id="req_submit_btn">Submit</button></div>
    <div class="c-action"><button type="button" class="c-button" id="req_cancel_submit_btn" style="display:none">Cancel</button></div>
    <div class="c-action"><button type="button" class="c-button" id="req_change_submit_btn" style="display:none">Update</button></div>
    </div>
</form>

</div>

<?php
if(count($service_reqs) > 0){
    ?>
    <script>
        var last_req_time = '<?php echo $service_reqs[0]['added_at']?>';
    </script>
    <?php
}
else{
    ?>
    <script>
        var last_req_time = 0;
    </script>
    <?php
}
?>
