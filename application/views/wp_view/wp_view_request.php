
     
    <link rel="stylesheet" href="<?php echo base_url('assets/Request/assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Request/assets/bootstrap/fonts/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Request/assets/css/Account-setting-or-edit-profile.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Request/assets/css/Footer-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Request/assets/css/Highlight-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Request/assets/css/Navigation-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Request/assets/css/Navigation-with-Button.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Request/assets/css/styles.css')?>">

      <body>
      <section class="highlight-clean" style="background: linear-gradient(180deg, black, white 0%, rgb(145,47,47) 100%);">
        <div class="container" id="box" style="background: linear-gradient(black 0%, var(--bs-red) 0%, white 100%), var(--bs-red);">
            <div class="row">
                <div class="col offset-xxl-0" id="col2" style="background: linear-gradient(rgb(255,84,84) 0%, rgb(224, 154, 154) 100%), var(--bs-red);height: 900px;width: 1300px;padding: 100px; margin: 1px;">
                    <fieldset>
                        <legend></legend>
                    </fieldset>
                    <h1 style="color: var(--bs-body-color);font-weight: bold; text-align: center;">Request Document</h1><strong></strong>
            <div class="col-lg-6">
              <h5 style="font-weight: bold" class="my-4">Requester's Information:</h5> 
    
    <form method="post" action="<?php echo base_url()?>wp_controller/register">
      <div class="row">
      <label class="label col-md-4 control label">Kind of Document:</label>
          <div class="mb-3">
                  <label>Documents:</label>
                  <select name="docu" class="form-select form-select-md" aria-label=".form-select-md example" required="">
                                <option selected="">Type of Document</option>
                                        <option value="Transcript of Records">Transcript of Records</option>
                                <option value="Good Moral">Good Moral</option>
                                <option value="Diploma">Diploma</option> 
                            </select>	
          </div>
      </div>
      <div class="row">
      <br>
      <div class="row">

      <div class="row">
                <label class="label col-md-4 control label">Last Name:</label>
                               <div class="col-lg-8 mb-3">
                              <input type="text" name="lname" value="<?php echo $user['sender_lname']?>" class="form-control" placeholder="Last Name" aria-label="Last name" required> 
                            <span><!--?php echo form_error("lname");?--> </span>
                            </div>
                </div>

                <label class="label col-md-4 control label">First Name:</label>
                            <div class="col-lg-8 mb-3">
                            <input type="text" name="fname" value="<?php echo $user['sender_fname']?>" class="form-control" placeholder="First name" aria-label="First name" required>
                            <span><?php echo form_error("fname");?></span>    
                            </div>
                </div>
    
                <div class="row">
                <label class="label col-md-4 control label">Middle Name:</label>
                            <div class="col-lg-8 mb-3">
                            <input type="text" name="mname" value="<?php echo $user['sender_mname']?>" class="form-control" placeholder="Middle name" aria-label="Middle name" required>
                            <span><?php echo form_error("mname");?> </span>    
                            </div>
                </div>
    
                <div class="row">
                  <label class="label col-md-4 control label">Extension:</label>
                  <div class="col-lg-8 mb-3">
                    <select name="extension" class="form-select form-select-md" aria-label=".form-select-md example">
                      <option selected="" value=""><?php echo $user['sender_extension']?></option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                      <option value="III">III</option>
                      <option value=" ">none</option>
                              </select>
                  </div>
                </div>
    
                <div class="row">
                  <label class="label col-md-3 control label">Birthdate:</label>
                  <div class="col-lg-3 col-sm-3 mb-3">
                    <select name="month" class="form-select form-select-md" aria-label=".form-select-md example">
                    <option selected="" value=" "><?php echo $user['sender_month']?></option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>
    
                  <div class="col-lg-3 col-sm-3 mb-3">
                <select name="day" class="form-select form-select-md" aria-label=".form-select-md example">
                <option selected><?php echo $user['sender_day']?></option>
              <?php 
                for($i = 1; $i <= 31; $i++ ) {
                  ?>
                  <option value="<?php echo $i ?>"><?php echo $i ?></option>
                  <?php
                }
              ?>
              </select>
              </div>
                  
                  <div class="col-lg-3 col-sm-3 mb-3">
                <select name="year" class="form-select form-select-md" aria-label=".form-select-md example" required>
                <option selected><?php echo $user['sender_year']?></option>
              <?php 
                for($i = 2022; $i >= 1922; $i--) {
                  ?>
                  <option value="<?php echo $i ?>"><?php echo $i ?></option>
                  <?php
                }
              ?>
              </select>
              </div>
                </div>
    
    
                <div class="row">
                <label class="label col-md-4 control label">Mobile Number:</label>
                            <div class="col-lg-8 mb-3">
                            <input type="text" name="phnum" value="<?php echo $user['sender_phnum']?>" class="form-control" placeholder="Ex: 09xx-xxx-xxxx" aria-label="Mobile Number" required>
                            <span><?php echo form_error("phnum");?> </span>
                            </div>
                </div>
    
                <label class="label col-md-4 control label">Address:</label>
                            <div class="col-lg-8 mb-3">

                      <input type="text" name="addrs" value="<?php echo $user['sender_addrs']?>" class="form-control" placeholder="Address" aria-label="houseLot">
                        <span><?php echo form_error("addrs");?> </span>
                </div>

                <label class="label col-md-4 control label">Email Address:</label>
                            <div class="col-lg-8 mb-3">

                      <input type="text" name="email" value="<?php echo $user['sender_email']?>" class="form-control" placeholder="Email" aria-label="houseLot">
                        <span><?php echo form_error("email");?> </span>
                </div>
                <input type="hidden" name="uid" value="<?php echo $user['user_id']?>"  class="form-control" placeholder="id" aria-label="id"/>
              <input type="hidden" name="id" value="" class="form-control" placeholder="Email Address" aria-label="Recieving Email Address">
              <div>
                            <input type="hidden" name="hidden_id" value="">
                        </div>
    
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn-lg btn-primary m-4" type="button"><a style="text-decoration: none; color: white;" href="<?php echo base_url('wp_controller/dashboard'); ?>">Back</a></button>
            <input class="btn-lg btn-primary m-4" type="submit" value="Request" name="request_docu">
            </div>
        
      </div></form>
          </div>
          </div></div></div></section>

 