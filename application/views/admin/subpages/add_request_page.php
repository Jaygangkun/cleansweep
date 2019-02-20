<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Add New Request
    </h1>
</section>
<!-- Main content -->
<section class="content" id="page_content_add_request">
    <div class="box box-primary">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" id="req_service_add_form">
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="Owner">Owner</label>
                        <select id="owner_id" name="owner_id" class="form-control">
                            <option value="">Select</option>
                            <?php
                                foreach($owners as $owner){
                                    ?>
                                    <option data-first-name="<?php echo $owner['first_name']?>" data-last-name="<?php echo $owner['last_name']?>" value="<?php echo $owner['id']?>" data-email="<?php echo $owner['email']?>" data-additional="<?php echo $owner['add_additional_prop_chbox']?>" data-dayphone="<?php echo $owner['day_phone']?>" data-cellphone="<?php echo $owner['cell_phone']?>" data-address="<?php echo $owner['address']?>" data-additional-props-data='<?php echo $owner['additional_props_data']?>'><?php echo $owner['first_name'].' '.$owner['last_name']?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="First Name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="" readonly>
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="Last Name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Required Service">Required Service</label>
                        <select id="req_service" name="req_service" class="form-control">
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

                
                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Check In Date">Check In Date</label>
                        <input type="text" class="form-control datepicker" id="check_in_date" name="check_in_date" placeholder="Check In Date" value="">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="Check Out Date">Check Out Date</label>
                        <input type="text" class="form-control datepicker" id="check_out_date" name="check_out_date" placeholder="Check Out Date" value="">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="Cleaning Property Address">Cleaning Property Address</label>
                        <div id="cleaning_address_parent">
                            <input type="text" class="form-control" id="cleaning_address" name="cleaning_address" placeholder="" value="" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="Daytime Phone">Daytime Phone</label>
                        <input type="text" class="form-control" id="day_phone" name="day_phone" placeholder="" value="">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="Cell Phone">Cell Phone</label>
                        <input type="text" class="form-control" id="cell_phone" name="cell_phone" placeholder="" value="">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="" value="" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="Comments">Comments</label>
                        <textarea class="form-control" rows="3" id="comments" name="comments" placeholder="" value=""></textarea>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="button" class="btn btn-primary" id="req_service_add_btn">Add</button>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->