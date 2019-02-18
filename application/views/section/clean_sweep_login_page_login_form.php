<div class="cognito c-safari c-lrg">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">
    <?php
    if(!isset($owner)){
        ?>
        <form class="form-container" id="login_form">
            <div class="c-forms-form" tabindex="0">
                <div class="c-editor" style="display:none;"><input type="text" class="c-forms-form-style"></div>
                <div class="c-forms-form-body">
                    <div class="c-forms-heading">
                        <div class="c-forms-logo"><img style="max-width: 100%;" src="https://services.cognitoforms.com/file/iQIrKLczpzIK1j0E8oIlkuq8RIHR-eQ4v6QSCe_GmfJo1LaX0lTAfuoRluZCA1s4"></div>
                    </div>
                    <div class="" style="text-align: center;">
                        <h4>info@cleansweephhi.com</h4>
                        <h4>(843)689-9178</h4>
                    </div>
                    <div class="c-forms-heading">
                        <div class="c-forms-form-title">
                            <h2>Owner Login</h2>
                            <div class="c-forms-description">Please complete the fields below and we will respond to your inquiry within 48 hours.  Should cleaning request be needed within the next 
                                24 hrs please call (843)689-9178.  (*required areas)
                            </div>
                        </div>
                    </div>
                    <div class="c-forms-template" sys:attach="dataview" dataview:data="{binding entry, source={{ Cognito.Forms.model }} }">
                        <div class="c-forms-form-main c-span-24 c-sml-span-12">
                            <div class="c-phone c-phone-us c-field c-col-1 c-sml-col-1 c-span-12 c-sml-span-12  c-required  " data-field="Phone">
                                <div class="c-label  "><label for="User Name">User Name</label></div>
                                <div class="c-editor"><input type="text" id="username" placeholder="User Name"></div>
                                <div class="c-validation">User Name is required.</div>
                            </div>
                            <div class="c-phone c-phone-us c-field c-col-13 c-sml-col-1 c-span-12 c-sml-span-12  c-required " data-field="CellPhone">
                                <div class="c-label  "><label for="Password">Password</label></div>
                                <div class="c-editor"><input type="password" id="password" placeholder="Password"></div>
                                <div class="c-validation">Password is required.</div>
                            </div>
                        </div>
                    </div>
                    <div id="c-recaptcha-div"></div>
                    <div class="c-forms-error">
                        <div class="c-validation"></div>
                    </div>
                    <div class="c-button-section">
                        <div class="c-action"><button type="button" class="c-button" id="login_btn">Login</button></div>
                    </div>
                </div>
                <div class="c-forms-confirmation">
                    <div class="c-forms-heading">
                        <div class="c-forms-logo"><img style="max-width: 100%;" src="https://services.cognitoforms.com/file/iQIrKLczpzIK1j0E8oIlkuq8RIHR-eQ4v6QSCe_GmfJo1LaX0lTAfuoRluZCA1s4"></div>
                        <div class="c-forms-form-title">
                            <h2>Owner Login</h2>
                        </div>
                    </div>
                    <div class="c-forms-confirmation-message c-html" sys:attach="dataview" dataview:data="{binding entry, source={{ Cognito.Forms.model }} }"><span>Thank you for filling out the form. Your response has been recorded.</span></div>
                </div>
            </div>
            <input type="hidden" name="NoBots" id="c-nobots" value="neQYpjwzNWu8RI6l2Kpz+d8IhoYTYB4xsTLy4mYnYiU=|76753376eee887fad619ebbc3be4ad74">
        </form>
        <?php
    }
    else{
        ?>
        
            <div class="c-forms-form" tabindex="0">
                <div class="c-editor" style="display:none;"><input type="text" class="c-forms-form-style"></div>
                <div class="c-forms-form-body">
                    <div class="c-forms-heading">
                        <div class="c-forms-logo"><img style="max-width: 100%;" src="https://services.cognitoforms.com/file/iQIrKLczpzIK1j0E8oIlkuq8RIHR-eQ4v6QSCe_GmfJo1LaX0lTAfuoRluZCA1s4"></div>
                    </div>
                    <div class="" style="text-align: center;">
                        <h4>info@cleansweephhi.com</h4>
                        <h4>(843)689-9178</h4>
                    </div>
                    <div class="c-forms-heading">
                        <div class="c-forms-form-title">
                            <h2>Owner Service Request</h2>
                            <!-- <div class="c-forms-description">Please complete the fields below and we will respond to your inquiry within 48 hours.  Should cleaning request be needed within the next 
                                24 hrs please call (843)689-9178.  (*required areas)
                            </div> -->
                            <div class="c-forms-description">No changes are allowed 72 hours prior to the service, the office must be called.<br>Please call Cleansweep @ 843-689-9178
                            </div>
                        </div>
                    </div>
                    <div class="c-forms-template" sys:attach="dataview" dataview:data="{binding entry, source={{ Cognito.Forms.model }} }">
                        <div class="c-forms-form-main c-span-24 c-sml-span-12">

                            <ul class="nav nav-tabs">
                                <li class="nav-item active"><a class="nav-link active show" style="font-weight: bold" data-toggle="tab" href="#owner_info">Owner Information</a></li>
                                <li class="nav-item"><a class="nav-link" style="font-weight: bold" data-toggle="tab" href="#req_submit">Service Request</a></li>
                                <li class="nav-item"><a class="nav-link" style="font-weight: bold" data-toggle="tab" href="#req_list">Request List</a></li>
                            </ul>
                            <div class="tab-content px_-text-align-left">

                                <div id="owner_info" class="tab-pane fade show active">
                                    <?php
                                        $this->load->view('section/clean_sweep_owner_info');
                                    ?>
                                </div>
                                <div id="req_submit" class="tab-pane fade">
                                    <?php
                                        $this->load->view('section/clean_sweep_owner_request_submit');
                                    ?>
                                </div>
                                <div id="req_list" class="tab-pane fade">
                                    <?php
                                        $this->load->view('section/clean_sweep_owner_request_list');
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    

                    <input type="hidden" id="owner_id" value="<?php echo $owner['id']?>">

                    <div class="c-button-section">
                        
                    </div>
                </div>
                
            </div>
            
        <?php
    }
    ?>
</div>

<?php
    $this->load->view('section/form_clone_template');
?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<link href="<?=base_url();?>assets/css/form.css" rel="stylesheet" type="text/css">
<script src="<?=base_url();?>assets/js/form.js"></script>