
<?php
if($this->session->flashdata('message'))
  {
?>
  <div><?php echo $this->session->flashdata('message');?></div>
  <?php } ?>

  <section class="highlight-clean"
        style="background: linear-gradient(180deg, black, white 0%, rgb(145,47,47) 100%);padding-top: 40px;height: 100%;">
        <div class="container my-4 bg-light">
        <h4 style="padding-bottom: 20px;">Personal Information:</h4>
            <form method="post" action="<?php echo base_url(); ?>wp_controller/register">

            <div class="row">
                            <p class="col-md-4">Last Name:</p>
                            <div class="col-lg-8 mb-3"><input type="text" name="lname" class="form-control" placeholder="Last Name" aria-label="Last name"> 
						<span><?php echo form_error("lname");?> </span></div>
                        </div>
                        <div class="row">
                            <p class="col-md-4">First Name:</p>
                            <div class="col-lg-8 mb-3"><input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name">
						<span><?php echo form_error("fname");?> </span> </div>
                        </div>
                        <div class="row">
                            <p class="col-md-4">Middle Name:</p>
                            <div class="col-lg-8 mb-3"><input type="text" name="mname" class="form-control" placeholder="Middle name" aria-label="Middle name">
						<span><?php echo form_error("mname");?> </span></div>
                        </div>

            <div class="row">
                            <p class="col-md-4">Suffix:</p>
                            <div class="col-lg-8 mb-3"><select  name="extension" class="form-select form-select-md"
                                    aria-label=".form-select-md example">
                                    <optgroup label="Suffix">
                                        <option value=" ">None</option>
                                        <option value="Jr.">Jr.</option>
                                        <option value="Sr.">Sr.</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                    </optgroup>
                                </select></div>
                        </div>

            <div class="row">
                            <p class="col-md-3">Birthdate:</p>
                            <div class="col-lg-4 mb-3"><select name="month" class="form-select form-select-md"
                                    aria-label=".form-select-md example" name= "month" id="month">
                                    <optgroup label="Month">
                                    </optgroup>
                                </select></div>
                            <div class="col-md-2 mb-3"><select name="day" class="form-select form-select-md"
                                    aria-label=".form-select-md example" name="day" id="day">
                                    <optgroup label="Day">
                                    </optgroup>
                                </select></div>
                            <div class="col-md-3 mb-3"><select name="year" class="form-select form-select-md"
                                    aria-label=".form-select-md example" name="year" id="year">
                                    <optgroup label="Year">
                                    </optgroup>
                                </select></div>
                        </div>

            <div class="row">
			<label class="label col-md-4 control label">Mobile Number:</label>
    					<div class="col-lg-8 mb-3">
    					<input type="text" name="phnum" class="form-control" placeholder="Ex: 09xx-xxx-xxxx" aria-label="Mobile Number">
						<span><?php echo form_error("phnum");?> </span>
						</div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Address:</label>
        				<div class="col-lg-8 mb-3">
            <label>House Lot Block no.</label>
    					          <input type="text" name="addrs" class="form-control" placeholder="Home Address" aria-label="houseLot">
						            <span><?php echo form_error("addrs");?> </span>
            </div>


            <h4 style="padding-bottom: 20px;">Account Information:</h4>

            <div class="row">
              <label class="label col-md-4 control label">Username:</label>
                <div class="col-lg-8 mb-3">
                    <input type="text" name="user" class="form-control" placeholder="Email Address" aria-label="Email Address"/>
                    <span><?php echo form_error("user");?> </span>
                </div>    
            </div>

            <div class="row">
              <label class="label col-md-4 control label">Email Address:</label>
                <div class="col-lg-8 mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address"/>
                    <span><?php echo form_error("email");?> </span>
                </div>    
            </div>

            <div class="row">
              <label class="label col-md-4 control label">Password:</label>
                <div class="col-lg-8 mb-3">
                    <input type="password" name="pass" class="form-control" placeholder="Password" aria-label="Password"/>
                    <span><?php echo form_error("pass"); ?> </span>
                  </div>
            </div>

            <div class="row">
              <label class="label col-md-4 control label">Confirm Password:</label>
                <div class="col-lg-8 mb-3">
                    <input type="password" name="conf_pass" class="form-control" placeholder="Password" aria-label="Password"/>
                    <span><?php echo form_error("conf_pass"); ?> </span>
                  </div>
            </div>


                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6Lf-zP4dAAAAABFaLEWpdsWvi7X7M_pLgjDt3u8v"></div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="submit" name="Register" class="btn-lg btn-primary m-4" value="Register" />
                </div>


                <?php  
    if(!empty($error_arr)){ 
        echo '<p class="status-msg error">'.$error_arr.'</p>'; 
    } 
?>
    
  </div>

            </form>
        </div>
        </section>
       


