<h2>Update Information</h2>

<h2>Welcome <?php echo $user['sender_user']; ?>!</h2>

<a href="<?php echo base_url('wp_controller/account'); ?>">Back</a>

<form method="post" action="<?php echo base_url()?>wp_controller/register">
													<!-- controller/function -->
	<div>
		<label>Username:</label>
		<input type="text" name="user" value="<?php echo $user['sender_user']?>" placeholder="Enter Username"/>
		<span><?php echo form_error("user");?> </span>
	</div>
	
	<div>
		<label>Password:</label>
		<input type="password" name="pass" value="<?php echo $user['sender_pass']?>" placeholder="Enter Password"/>
		<span><?php echo form_error("pass");?> </span>
	</div>

	<div>
		<label>First name:</label>
		<input type="text" name="fname" value="<?php echo $user['sender_fname']?>" placeholder="Enter First name"/>
		<span><?php echo form_error("fname");?> </span>
	</div>

	<div>
		<label>Middle name:</label>
		<input type="text" name="mname" value="<?php echo $user['sender_mname']?>" placeholder="Enter Middle name"/>
		<span><?php echo form_error("mname");?> </span>
	</div>

	<div>
		<label>Surname:</label>
		<input type="text" name="lname" value="<?php echo $user['sender_lname']?>" placeholder="Enter Surname"/>
		<span><?php echo form_error("lname");?> </span>
	</div>

	<div>
		<label>Address:</label>
		<input type="text" name="addrs" value="<?php echo $user['sender_addrs']?>" placeholder="Enter Address"/>
		<span><?php echo form_error("addrs");?> </span>
	</div>

	<div>
		<label>Phone Number:</label>
		<input type="text" name="phnum" value="<?php echo $user['sender_phnum']?>" placeholder="Enter Phone Number"/>
		<span><?php echo form_error("phnum");?> </span>
	</div>
	
	<div>
		<label>Email Address:</label>
		<input type="text" name="email" value="<?php echo $user['sender_email']?>" placeholder="Enter Email Address"/>
		<span><?php echo form_error("email");?> </span>
	</div>

	<div>
		<label>Birthdate:</label>
		<input type="text" name="bday" value="<?php echo $user['sender_bday']?>" placeholder="Enter Birthdate"/>
		<span><?php echo form_error("bday");?> </span>
	</div>

	<div>
        <label>Sex: </label>
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
                    <label>
                        <input type="radio" name="sex" value="Male" <?php echo $mcheck; ?>>
						Male
                    </label>
                    <label>
                        <input type="radio" name="sex" value="Female" <?php echo $fcheck; ?>>
                        Female
                    </label>
                </div>
            </div>

	<div>
	<input type="hidden" name="hidden_id" value="<?php echo $user['id']; ?>"/>
	</div>

    <div>
    <input type="submit" value="Update" name="update"> 
    </div>

</form>
</div>
