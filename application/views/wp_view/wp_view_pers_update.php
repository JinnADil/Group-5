

  <link rel="stylesheet" href="<?php echo base_url('assets/UpdatePersonalInfo/assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/UpdatePersonalInfo/assets/fonts/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/UpdatePersonalInfo/assets/css/Footer-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/UpdatePersonalInfo/assets/css/Highlight-Clean.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/UpdatePersonalInfo/assets/css/Navigation-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/UpdatePersonalInfo/assets/css/Navigation-with-Button.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/UpdatePersonalInfo/assets/css/Newsletter-Subscription-Form.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/UpdatePersonalInfo/assets/css/styles.css')?>">
	<body>

	<section class="highlight-clean" style="background: linear-gradient(180deg, black, white 0%, rgb(145,47,47) 100%);">
        <div class="container text-center w-50" id="box">
            <p class="mt-3" style="font-family: 'Lexend Deca', sans-serif;">Update Personal Information</p>
            <div class="row">
                <div class="col" id="col2">
                <p class="pt-2" style="font-family: 'Lexend Deca', sans-serif;"></p>
                    <form method="post" action="<?php echo base_url()?>wp_controller/register">
                    <h2 class="visually-hidden">Delete Form</h2>

					<div class="mb-3">
                        <input name="lname" class="form-control" type="text" placeholder="Last Name" style="border-right-style: inherit;font-family: 'Lexend Deca', sans-serif;" required/>
                    </div>
                    <?php echo form_error("lname")?>

                    <div class="mb-3">
                        <input name="fname" class="form-control" type="text" placeholder="First Name" style="border-right-style: inherit;font-family: 'Lexend Deca', sans-serif;" required/>
                    </div>
                    <?php echo form_error("fname")?> 

                    <div class="mb-3">
                        <input name="mname" class="form-control" type="text" placeholder="Middle Name" style="border-right-style: inherit;font-family: 'Lexend Deca', sans-serif;" required/>
                    </div>
                    <?php echo form_error("mname")?>
                    
                    <select name="extension"  class="form-select-sm w-100 mt-2">
                                <option value="<?php echo $user['sender_extension']?>">Extension</option>
                                <option value="Jr.">Jr.</option>
                                <option value="Sr">Sr.</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                            </select>
                            <p style="font-family: 'Lexend Deca', sans-serif;"></p>

                            <select name="month"  class="form-select-sm w-40 mt-2">
                    <option value="<?php echo $user['sender_month']?>">Month</option>
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

                <select name="day" class="form-select-sm w-40 mt-2" >
                <option value="<?php echo $user['sender_day']?>">Day</option>
              <?php 
                for($i = 1; $i <= 31; $i++ ) {
                  ?>
                  <option value="<?php echo $i ?>"><?php echo $i ?></option>
                  <?php
                }
              ?>
              </select>
                            
                        <select name="year" class="form-select-sm w-40 mt-2" >
                        <option value="<?php echo $user['sender_year']?>">Year</option>
              <?php 
                for($i = 2022; $i >= 1922; $i--) {
                  ?>
                  <option value="<?php echo $i ?>"><?php echo $i ?></option>
                  <?php
                }
              ?>
              </select>

                            <p class="pt-1" style="font-family: 'Lexend Deca', sans-serif;"></p>
                  <div class="mb-3">
                      <input name="phnum" class="form-control" type="text" placeholder="Mobile Number" style="border-right-style: inherit;font-family: 'Lexend Deca', sans-serif;" required/>
                  </div>
                  <?php echo form_error("phnum")?>

                  <div class="mb-3">
                      <input name="addrs" class="form-control" type="text" placeholder="Home Address" style="border-right-style: inherit;font-family: 'Lexend Deca', sans-serif;" required/>
                  </div>
                  <?php echo form_error("addrs")?>

				<div>
				<input type="hidden" name="hidden_id" value="<?php echo $user['id']; ?>"/>
				</div>

                <div class="mb-3">
                    <button type="submit" value="Update" name="pers_update" class="btn btn-dark" style="background: rgb(129,27,30);font-family: 'Lexend Deca', sans-serif;">Update</button>
                </div>
				<?php
	if($this->session->flashdata('error')) {	?>
	<p> <?=$this->session->flashdata('error')?></p>
<?php }?>
				</form>
				<div class="col-lg-4 col-xl-4 offset-lg-6 offset-xl-7 text-end my-4" id="buttons">
				<a href="<?php echo base_url('wp_controller/account'); ?>"><button class="btn btn-primary" >Back</button></a>
				</div>
                </div>
            </div>
        </div>
    </section>

