<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Owner Service Request
    </h1>
    <ol class="breadcrumb" style="display: none">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">General</li>
    </ol>

</section>
<!-- Main content -->
<section class="content" id="page_content_owner_service_management">
    <div class="box">
        <div class="box-header" style="display: none">
            <h3 class="box-title">Hover Data Table</h3>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="# of Bedrooms">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="User name" value="">
                </div>

                <div class="form-group col-xs-3">
                    <label for="# of Bedrooms">Property Address</label>
                    <input type="text" class="form-control" id="property_address" name="property_address" placeholder="Property Address" value="">
                </div>

                <div class="form-group col-xs-3">
                    <label for="Check In Date"> Date Range</label>
                    <div class="row">
                        <div class="col-xs-6">
                            <input type="text" class="form-control datepicker1" id="start_date" name="start_date" placeholder="Start Date" value="">
                        </div>

                        <div class="col-xs-6">
                            <input type="text" class="form-control datepicker1" id="end_date" name="end_date" placeholder="End Date" value="">
                        </div>
                    </div>
                </div>

                <div class="form-group col-xs-12">
                    <button type="button" class="btn btn-primary" id="service_req_search_btn">Search</button>
                    <button type="button" class="btn btn-primary" id="service_req_print_btn">Print</button>
                </div>
            </div>            
            <div id="request_service_list">
                <table class="data-table1 table table-bordered table-hover" style="display:none">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>User Name</th>
                            <th>Property Address</th>
                            <th>Requested Service</th>
                            <th>Check In Date</th>
                            <th>Check Out Date</th>
                            <th>Requested Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        // foreach($service_reqs as $service_req){
                            ?>
                            <tr>
                                <!-- <td><?php echo $service_req['owner_email'];?></td>
                                <td><?php echo $service_req['username'];?></td>
                                <td><?php echo $service_req['cleaning_address'];?></td>
                                <td><?php echo $service_req['req_service'];?></td>
                                <td><?php echo $service_req['check_in_date'];?></td>
                                <td><?php echo $service_req['check_out_date'];?></td>
                                <td><?php echo $service_req['added_at'];?></td> -->
                                <!-- <td> -->
                                    <?php
                                    // if($service_req['status'] == '0'){
                                    //     echo '<span class="form-group has-error"><span class="help-block">Request Cancelled</span></span>';
                                    // }
                                    ?>
                                <!-- </td> -->
                                <!-- <td> -->
                                    <?php
                                    // if($service_req['status'] == '0'){
                                    //     echo "";
                                    // }
                                    // else{
                                        ?>
                                        <!-- <a href="/owner_service_edit/<?php echo $service_req['id']?>">Edit</a> -->
                                        <?php
                                    // }
                                    ?>
                                <!-- </td>
                            </tr> -->
                            <?php
                        // }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Email</th>
                            <th>User Name</th>
                            <th>Property Address</th>
                            <th>Requested Service</th>
                            <th>Check In Date</th>
                            <th>Check Out Date</th>
                            <th>Requested Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</section>
<!-- /.content -->