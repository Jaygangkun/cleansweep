<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Requested Service Edit
    </h1>
    <ol class="breadcrumb" style="display: none">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">General</li>
    </ol>
</section>
<!-- Main content -->
<section class="content" id="page_content_owner_service_create">
    <div class="box box-primary">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" id="req_service_create_form">
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="First Name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="">
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="Last Name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Co-Owner's Email">Required Service</label>
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
                    <div class="form-group col-xs-12">
                        <label for="Cleaning Property Address">Cleaning Property Address</label>
                        <input type="text" class="form-control" id="cleaning_address" name="cleaning_address" placeholder="" value="">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="Daytime Phone">Daytime Phone</label>
                        <input type="text" class="form-control phonenumber" id="day_phone" name="day_phone" placeholder="" value="">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="Cell Phone">Cell Phone</label>
                        <input type="text" class="form-control phonenumber" id="cell_phone" name="cell_phone" placeholder="" value="">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="" value="">
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

            <input type="hidden" id="owner_id" name="owner_id" value="<?php echo $owner_id?>">

            <div class="box-footer">
                <button type="button" class="btn btn-default" onclick="window.history.back();">Cancel</button>
                <button type="button" class="btn btn-primary" id="req_service_create_btn">Create</button>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->