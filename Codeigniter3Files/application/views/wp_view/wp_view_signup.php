<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Application</title> 

</head>
<h3>Registration</h3>
<body>
<a href="<?=base_url('wp_controller/')?>">Back</a>

	<form method="post" action="<?php echo base_url()?>wp_controller/register">
													<!-- controller/function -->
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
		<label>First name:</label>
		<input type="text" name="fname" placeholder="Enter First name"/>
		<span><?php echo form_error("fname"); ?> </span></div>
	<div>
		<label>Middle name:</label>
		<input type="text" name="mname" placeholder="Enter Middle name"/>
		<span><?php echo form_error("mname"); ?> </span>
	</div>
	<div>
		<label>Surname:</label>
		<input type="text" name="lname" placeholder="Enter Surname"/>
		<span><?php echo form_error("lname"); ?> </span>
	</div>
	<div>
		<label>Address:</label>
		<input type="text" name="addrs" placeholder="Enter Address"/>
		<span><?php echo form_error("addrs"); ?> </span>
	</div>

	<div>
		<label>Phone Number:</label>
		<input type="text" name="phnum" placeholder="Enter Phone Number"/>
		<span><?php echo form_error("phnum"); ?> </span>
	</div>
	<div>
		<label>Email Address:</label>
		<input type="text" name="email" placeholder="Enter Email Address"/>
		<span><?php echo form_error("email"); ?> </span>
	</div>
	<div>
		<label>Birthday:</label>
		<input type="text" name="bday" placeholder="Enter Birthday (yyyy-dd-mm)"/>
		<span><?php echo form_error("bday"); ?> </span>
	</div>
	<div>
		<input type="submit" name="insert" value="Register Now"/>
		</div>

	<?php
	if($this->session->flashdata('success')) {	?>
	<p> <?=$this->session->flashdata('success')?></p>
<?php }?>
</form>

</body>
</html>