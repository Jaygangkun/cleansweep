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
        <div class="box-header">
            <button type="button" class="btn btn-primary" id="owners_list_print_btn">Print</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="data-table table table-bordered table-hover" id="owner_tbl">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>HHI Property</th>
                        <th>Email</th>
                        <th>Request List</th>
                        <th>Account Status</th>
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
                            <td><a href="/owner_service_list/<?php echo $owner['id']?>">view</td>
                            <td>
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
                            </td>
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
                        <th>Request List</th>
                        <th>Account Status</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</section>
<!-- /.content -->