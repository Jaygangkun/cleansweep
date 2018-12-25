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
<section class="content">
    <div class="box">
        <div class="box-header" style="display: none">
            <h3 class="box-title">Hover Data Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="data-table table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Account Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    foreach($owners as $owner){
                        ?>
                        <tr>
                            <td><?php echo $owner['first_name'];?></td>
                            <td><?php echo $owner['last_name'];?></td>
                            <td><?php echo $owner['email'];?></td>
                            <td>
                            <?php 
                                if($owner['username'] == '' || $owner['password'] == ''){
                                    echo '<span class="form-group has-error"><span class="help-block">Account is not set</span></span>';
                                }
                                else {
                                    echo '<span class="form-group has-success"><span class="help-block">Account is set</span></span>';
                                }
                            ?>
                            </td>
                            <td>
                                <a href="/owner_edit/<?php echo $owner['id']?>"><i class="fa fa-fw fa-edit"></i></a>
                                <a href="#"><i class="fa fa-fw fa-remove"></i></a>
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
                        <th>Email</th>
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