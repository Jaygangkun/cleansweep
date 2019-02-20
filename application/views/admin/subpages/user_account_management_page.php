<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Account Management
    </h1>
    <ol class="breadcrumb" style="display: none">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">General</li>
    </ol>
</section>
<!-- Main content -->
<section class="content" id="page_content_account_management">
    <div class="box">
        
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

                <div class="form-group col-xs-12">
                    <button type="button" class="btn btn-primary" id="account_search_btn">Search</button>
                </div>
            </div> 
            <div id="account_list">
            </div>
            <table class="data-table1 table1 table-bordered table-hover" style="display:none">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Account Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    foreach($owners as $owner){

                        if($owner['status'] == 'delete'){
                            continue;
                        }
                        ?>
                        <tr>
                            <td><?php echo $owner['first_name'];?></td>
                            <td><?php echo $owner['last_name'];?></td>
                            <td><?php echo $owner['username'];?></td>
                            <td><?php echo $owner['email'];?></td>                      
                            <!-- <td><a href="/owner_service_list/<?php echo $owner['id']?>">view</td> -->
                            <!-- <td>
                            <?php 
                                if($owner['status'] == 'active'){
                                    echo '<span class="form-group has-success"><span class="help-block">Account is active</span></span>';
                                }
                                else if($owner['status'] == 'suspend'){
                                    echo '<span class="form-group has-warning"><span class="help-block">Account is suspended</span></span>';
                                }
                                else if($owner['status'] == 'delete'){
                                    echo '<span class="form-group has-error"><span class="help-block">Account is deleted</span></span>';
                                }
                                else{
                                    echo '<span class="form-group"><span class="help-block">Account is inactive</span></span>';
                                }
                            ?>
                            </td> -->
                            <td>
                                <a href="/owner_account_edit/<?php echo $owner['id']?>"><i class="fa fa-fw fa-edit"></i></a>
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
                        <th>HHI Property</th>
                        <th>Email</th>
                        <!-- <th>Request List</th>
                        <th>Account Status</th> -->
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</section>
<!-- /.content -->