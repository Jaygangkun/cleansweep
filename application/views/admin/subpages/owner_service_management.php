<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Owner Service Request Management
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
                        <th>Request Services</th>
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
                                <a href="/owner_service_list/<?php echo $owner['id']?>">Edit</a>
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
                        <th>Request Services</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</section>
<!-- /.content -->