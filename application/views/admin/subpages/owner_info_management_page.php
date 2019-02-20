<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Owner Management
    </h1>
    <ol class="breadcrumb" style="display: none">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">General</li>
    </ol>
</section>
<!-- Main content -->
<section class="content" id="page_content_owner_management">
    <div class="box">
        <div class="box-body">
            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="# of Bedrooms">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="">
                </div>

                <div class="form-group col-xs-3">
                    <label for="# of Bedrooms">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="">
                </div>

                <div class="form-group col-xs-3">
                    <label for="# of Bedrooms">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="">
                </div>

                <div class="form-group col-xs-3">
                    <label for="# of Bedrooms">Property</label>
                    <input type="text" class="form-control" id="property" name="property" placeholder="Property" value="">
                </div>

                <div class="form-group col-xs-12">
                    <button type="button" class="btn btn-primary" id="owner_search_btn">Search</button>
                </div>
            </div> 
            <div id="owner_list">
            </div>
            <table class="data-table1 table1 table-bordered table-hover" id="owner_tbl" style="display:none">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>HHI Property</th>
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
                            
                            <?php 
                            if($owner['add_additional_prop_chbox']){
                                ?>
                                <td class="hhi-property" data-hhi-property='<?php echo $owner['additional_props_data'];?>'></td>
                                <?php    
                            }
                            else{
                                ?>
                                <td></td>
                                <?php
                            }
                            ?>
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
                                <a href="/owner_edit/<?php echo $owner['id']?>"><i class="fa fa-fw fa-edit"></i></a>
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