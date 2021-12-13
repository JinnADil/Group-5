
<div class="container my-5 bg-light">
      <div class="row justify-content-evenly">
	  <h2>Request Document</h2>
        <div class="col-lg-6">
          <h5 class="my-4">Requester's Information:</h5> 

<form method="post" action="<?php echo base_url()?>wp_controller/register">
  <div class="row">
  <label class="label col-md-4 control label">Kind of Document:</label>
      <div class="mb-3">
              <label>Documents:</label>
              <select name="docu" class="form-select form-select-md" aria-label=".form-select-md example" required>
                            <option selected>Document</option>
				                    <option value="Transcript of Records">Transcript of Records</option>
                            <option value="Good Moral">Good Moral</option>
                            <option value="Diploma">Diploma</option> 
                        </select>	
      </div>
  </div>
  <div class="row">
  <br>
			<label class="label col-md-4 control label">Name:</label>
	    				<div class="col-lg-8 mb-3">
              <label class="label col-md-4 control label"><?php echo $user['sender_fname']?> <?php echo $user['sender_mname']?> <?php echo $user['sender_lname']?> <?php echo $user['sender_extension']?></label>
						</div>
            </div>

            <div class="row">
              <label class="label col-md-3 control label">Birthdate:</label>
              <div class="col-lg-8 mb-3">
              <label class="label col-md-4 control label"><?php echo $user['sender_month']?> <?php echo $user['sender_day']?> <?php echo $user['sender_year']?></label>
              </div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Mobile Number:</label>
    					<div class="col-lg-8 mb-3">
    					<label class="label col-md-4 control label"><?php echo $user['sender_phnum']?></label>
						</div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Receiving Email Address:</label>
    					<div class="col-lg-8 mb-3">
    					<label class="label col-md-4 control label"><?php echo $user['sender_docu_email']?></label>
						</div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Address:</label>
        				<div class="col-lg-8 mb-3">
                <label class="label col-md-4 control label"><?php echo $user['sender_houselt']?> <?php echo $user['sender_strt']?> <?php echo $user['sender_subd']?> <?php echo $user['sender_brgy']?> <?php echo $user['sender_municity']?> <?php echo $user['sender_provi']?> <?php echo $user['sender_zip']?></label>
						</div>
            </div>

			<div class="row">
					<label class="label col-md-4 control label">Sex: </label>
						<div class="col-lg-8 mb-3">
            <label class="label col-md-4 control label"><?php echo $user['sender_sex']?></label>
					</div>
          </div>  
         
          <div>
						<input type="hidden" name="hidden_id" value="<?php echo $user['id']; ?>"/>
					</div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn-lg btn-primary m-4" type="button"><a style="text-decoration: none; color: white;" href="<?php echo base_url('wp_controller/dashboard'); ?>">Back</a></button>
        <button class="btn-lg btn-primary m-4" type="button"><a style="text-decoration: none; color: white;" href="<?php echo base_url('wp_controller/reqUpdate'); ?>">Update</a></button>
		<input class="btn-lg btn-primary m-4" type="submit" value="Request" name="request_docu">    
	      </div>

  
  <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
        
      </div>
      </div>
	</form>