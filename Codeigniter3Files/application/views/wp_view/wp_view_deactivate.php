<h2>Deactivate Account</h2>

<h2>Welcome <?php echo $user['sender_user']; ?>!</h2>

<a href="<?php echo base_url('wp_controller/account'); ?>">Back</a>

<form method="post" action="<?php echo base_url()?>wp_controller/deact">
													<!-- controller/function -->

	<div>
		<label>Retype Username and Password to Confirm</label>
	</div>

	<div>
		<label>Username:</label>
		<input type="text" name="user" placeholder="Enter Username"/>
		<span><?php echo form_error("user");?> </span>
	</div>
	
	<div>
		<label>Password:</label>
		<input type="password" name="pass" placeholder="Enter Password"/>
		<span><?php echo form_error("pass"); ?> </span>
	</div>

	<div>
	<input type="hidden" name="hidden_id" value="<?php echo $user['id']; ?>"/>
	</div>

    <div>
    <input type="submit" value="Deactivate" name="deactivate"> 
    </div>

	<?php
	if($this->session->flashdata('error')) {	?>
	<p> <?=$this->session->flashdata('error')?></p>
<?php }?>

</form>
</div>
