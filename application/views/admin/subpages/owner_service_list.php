<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Owner Requested Service List
    </h1>
    <ol class="breadcrumb" style="display: none">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">General</li>
    </ol>
</section>
<!-- Main content -->
<section class="content" id="page_content_owner_service_list">
    <div class="box">
        <div class="box-header" style="display: none">
            <h3 class="box-title">Hover Data Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="form-group col-xs-12">
                    <a type="button" class="btn btn-primary" id="service_req_create_btn" href="/owner_service_create/<?php echo $owner_id?>">Create New Request</a>
                </div>
            </div>
            <table class="data-table table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Requested Service</th>
                        <th>Check In Date</th>
                        <th>Check Out Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    foreach($service_reqs as $service_req){
                        ?>
                        <tr>
                            <td><?php echo $service_req['first_name'];?></td>
                            <td><?php echo $service_req['last_name'];?></td>
                            <td><?php echo $service_req['req_service'];?></td>
                            <td><?php echo $service_req['check_in_date'];?></td>
                            <td><?php echo $service_req['check_out_date'];?></td>
                            <td>
                                <?php
                                if($service_req['status'] == '0'){
                                    echo '<span class="form-group has-error"><span class="help-block">Request Cancelled</span></span>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if($service_req['status'] == '0'){
                                    echo "";
                                }
                                else{
                                    ?>
                                    <a href="/owner_service_edit/<?php echo $service_req['id']?>">Edit</a>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Request Service</th>
                        <th>Check In Date</th>
                        <th>Check Out Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

            <button type="button" class="btn btn-default" onclick="location.href='/owner_management'">Back</button>
        </div>
        <!-- /.box-body -->
    </div>
</section>
<!-- /.content -->