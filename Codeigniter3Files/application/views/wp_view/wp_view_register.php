
<div class="container my-5 bg-light">
      <div class="row justify-content-evenly">
	  <h2>Register Account</h2>
        <div class="col-lg-6">
          <h5 class="my-4">Personal Information:</h5> 

	<form method="post" action="<?php echo base_url()?>wp_controller/register">
            <div class="row">
			<label class="label col-md-4 control label">First Name:</label>
	    				<div class="col-lg-8 mb-3">
	    				<input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name" required>
						<span><?php echo form_error("fname");?> </span>    
						</div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Middle Name:</label>
        				<div class="col-lg-8 mb-3">
        				<input type="text" name="mname" class="form-control" placeholder="Middle name" aria-label="Middle name" required>
						<span><?php echo form_error("mname");?> </span>    
						</div>
            </div>

			<div class="row">
			<label class="label col-md-4 control label">Last Name:</label>
			     	  	<div class="col-lg-8 mb-3">
					  	<input type="text" name="lname" class="form-control" placeholder="Last Name" aria-label="Last name" required> 
						<span><?php echo form_error("lname");?> </span>
    					</div>
            </div>

			<div class="row">
              <label class="label col-md-4 control label">Extension:</label>
              <div class="col-lg-8 mb-3">
                <select name="extension" class="form-select form-select-md" aria-label=".form-select-md example" required>
                  <option selected value=" ">none</option>
				  <option value="Jr.">Jr.</option>
                  <option value="Sr.">Sr.</option>
                  <option value="III">III</option> 
                </select>
              </div>
            </div>

            <div class="row">
              <label class="label col-md-3 control label">Birthdate:</label>
              <div class="col-lg-3 col-sm-3 mb-3">
                <select name="month" class="form-select form-select-md" aria-label=".form-select-md example" required>
                  <option selected>Month</option>
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
                <select name="day" class="form-select form-select-md" aria-label=".form-select-md example" required>
                  <option selected>Day</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="28">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
              </div>
              
              <div class="col-lg-3 col-sm-3 mb-3">
                <select name="year" class="form-select form-select-md" aria-label=".form-select-md example" required>
                  <option selected>Year</option> <!-- 1990 - 2022 -->
                  <option value="1990">1990</option>
                  <option value="1991">1991</option>
                  <option value="1992">1992</option>
                  <option value="1993">1993</option>
                  <option value="1994">1994</option>
                  <option value="1995">1995</option>
                  <option value="1996">1996</option>
                  <option value="1997">1997</option>
                  <option value="1998">1998</option>
                  <option value="1999">1999</option>
                  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                  <option value="2002">2002</option>
                  <option value="2003">2003</option>
                  <option value="2004">2004</option>
                  <option value="2005">2005</option>
                  <option value="2006">2006</option>
                  <option value="2007">2007</option>
                  <option value="2008">2008</option>
                  <option value="2009">2009</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                </select>
              </div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Mobile Number:</label>
    					<div class="col-lg-8 mb-3">
    					<input type="text" name="phnum" class="form-control" placeholder="Ex: 2222-222-2222" aria-label="Mobile Number" required>
						<span><?php echo form_error("phnum");?> </span>
						</div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Address:</label>
        				<div class="col-lg-8 mb-3">
    					<input type="text" name="addrs" class="form-control" placeholder="Address" aria-label="Address" required>
						<span><?php echo form_error("addrs");?> </span>
						</div>
            </div>

			<div class="row">
					<label class="label col-md-4 control label">Sex: </label>
						<div class="col-lg-8 mb-3">
	       					<?php 
            					if(!empty($user['sex']) && $user['sex'] == 'Female'){ 
                					$fcheck = 'checked="checked"'; 
                					$mcheck = ''; 
            					}else{ 
                					$mcheck = 'checked="checked"'; 
                					$fcheck = ''; 
            					} 
            				?>
            				<div>
                    			<label class="label col-md-4 control label">
                        			<input type="radio" name="sex" value="Male" <?php echo $mcheck; ?>>
										Male
                    			</label>
                    			<label class="label col-md-4 control label">
                        			<input type="radio" name="sex" value="Female" <?php echo $fcheck; ?>>
                        				Female
                    			</label>
                			</div>
            			</div>
					</div>
          </div>  
       
        
        
        <div class="col-lg-6 ">
          
          <h5 class="my-4">Account Information:</h5>
        
            <div class="row">
			<label class="label col-md-4 control label">Username:</label>
    					<div class="col-lg-8 mb-3">
    					<input type="text" name="user" class="form-control" placeholder="Username" aria-label="Username" required>
						<span><?php echo form_error("user");?> </span>
						</div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Email Address:</label>
              			<div class="col-lg-8 mb-3">
                		<input type="text" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address" required>
						<span><?php echo form_error("email");?> </span>
						</div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Password:</label>
              			<div class="col-lg-8 mb-3">
                		<input type="password" name="pass" class="form-control" placeholder="Password" aria-label="Password" required>
						<span><?php echo form_error("pass"); ?> </span>
						</div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Confirm Password:</label>
              			<div class="col-lg-8 mb-3">
                		<input type="password" name="conf_pass" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" required>
						<span><?php echo form_error("conf_pass"); ?> </span>
						</div>
            </div>

          </div>  
        </div>  

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<input class="btn-lg btn-primary m-4" type="submit" value="Register" name="btnadd">    
	</div>
        
      </div>

	</form>