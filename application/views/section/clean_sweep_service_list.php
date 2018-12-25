<h2>Owner Service Request List</h2>
<style>

</style>

<table class="data-table table table-bordered table-hover">
    <thead>
        <tr>
            <th>Request Service</th>
            <th>Check In Date</th>
            <th>Check Out Date</th>
            <th>Check Out Time</th>
            <th>Created Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        foreach($service_reqs as $service_req){
            ?>
            <tr>
                <td><?php echo $service_req['req_service'];?></td>
                <td><?php echo $service_req['check_in_date'];?></td>
                <td><?php echo $service_req['check_out_date'];?></td>
                <td><?php echo $service_req['check_out_time'];?></td>
                <td><?php echo $service_req['added_at'];?></td>
                <td></td>
                <td>
                    <a style="margin-right: 10px;" href="/owner_service_edit/<?php echo $service_req['id']?>">Cancel</a>
                    <a href="/owner_service_edit/<?php echo $service_req['id']?>">Change</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Request Service</th>
            <th>Check In Date</th>
            <th>Check Out Date</th>
            <th>Check Out Time</th>
            <th>Created Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>