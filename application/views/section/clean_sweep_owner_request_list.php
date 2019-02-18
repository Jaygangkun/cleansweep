
<h2 class="px_-text-align-center mt-5">Owner Requested Service List</h2>
<style>
    .data-table{
        color: white;
    }

    .data-table a{
        color: #1c4587 !important;
    }

    .data-table .error{
        color: red;
    }

    .data-table td, 
    .data-table th{
        background-color: white;
        color: #1c4587;
    }


</style>
<div class="container c-label owner-request-list-container">
    <table class="data-table table table-bordered table-hover ">
        <thead>
            <tr>
                <th>Request Service</th>
                <th>Check In Date</th>
                <th>Check Out Date</th>
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
                    <td><?php echo $service_req['added_at'];?></td>
                    <td>
                        <?php
                        if($service_req['status'] == '0'){
                            echo "<span class='error'>Cancelled</span>";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if($service_req['status'] == '0'){
                            echo "";
                        }
                        else{

                            $then = $service_req['check_out_date'];
                            $then = new DateTime($then);
                            
                            $now = new DateTime();
                            // echo "now:".$now->format('Y-m-d H:i:s')."<br>";
                            // echo "then:".$then->format('Y-m-d H:i:s')."<br>";
                            
                            $sinceThen = $then->diff($now);
                                                        
                            //Combined
                            // echo $sinceThen->y.' years have passed.<br>';
                            // echo $sinceThen->m.' months have passed.<br>';
                            // echo $sinceThen->d.' days have passed.<br>';
                            // echo $sinceThen->h.' hours have passed.<br>';
                            // echo $sinceThen->i.' minutes have passed.<br>';
                            // // echo $sinceThen->h;

                            $total_hours = $sinceThen->d * 24 + $sinceThen->h;
                            // echo $total_hours."<br>";

                            //if($total_hours < 72 && $now > $then){
                            if($total_hours < 72){
                                ?>
                                    <a style="margin-right: 10px;" class="cancel-service-btn nochange" data-id="<?php echo $service_req['id']?>">Cancel</a>
                                    <a class="change-service-btn nochange" data-id="<?php echo $service_req['id']?>">Change</a>
                                <?php    
                            }
                            else{
                                ?>
                                    <a style="margin-right: 10px;" class="cancel-service-btn" data-id="<?php echo $service_req['id']?>">Cancel</a>
                                    <a class="change-service-btn" data-id="<?php echo $service_req['id']?>">Change</a>
                                <?php
                            }
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
                <th>Request Service</th>
                <th>Check In Date</th>
                <th>Check Out Date</th>
                <th>Created Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
   