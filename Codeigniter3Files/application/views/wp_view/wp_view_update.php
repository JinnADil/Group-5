<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
</head>
<body>
<a href="<?=base_url('wp_controller/account')?>">Back</a>

<form method="post" action="<?php echo base_url()?>wp_controller/register">

<?php 
if(isset($user_data))
{
	foreach($fetch_data->result() as $row)
	{
	?>
	<div>
		<label>Username:</label>
		<input type="text" name="user" value="<?php echo $row->sender_user; ?>" placeholder="Enter Username"/>
		<span><?php echo form_error("user");?> </span>
	</div>
		<div>
		<label>Password:</label>
		<input type="password" name="pass" value="<?php echo $row->sender_pass; ?>" placeholder="Enter Password"/>
		<span><?php echo form_error("pass"); ?> </span>
	</div>
	<div>
		<label>First name:</label>
		<input type="text" name="fname" value="<?php echo $row->sender_fname; ?>" placeholder="Enter First name"/>
		<span><?php echo form_error("fname"); ?> </span></div>
	<div>
		<label>Middle name:</label>
		<input type="text" name="mname" value="<?php echo $row->sender_mname; ?>" placeholder="Enter Middle name"/>
		<span><?php echo form_error("mname"); ?> </span>
	</div>
	<div>
		<label>Surname:</label>
		<input type="text" name="lname" value="<?php echo $row->sender_lname; ?>" placeholder="Enter Surname"/>
		<span><?php echo form_error("lname"); ?> </span>
	</div>
	<div>
		<label>Address:</label>
		<input type="text" name="addrs" value="<?php echo $row->sender_addrs; ?>" placeholder="Enter Address"/>
		<span><?php echo form_error("addrs"); ?> </span>
	</div>

	<div>
		<label>Phone Number:</label>
		<input type="text" name="phnum" value="<?php echo $row->sender_phnum; ?>" placeholder="Enter Phone Number"/>
		<span><?php echo form_error("phnum"); ?> </span>
	</div>
	<div>
		<label>Email Address:</label>
		<input type="text" name="email" value="<?php echo $row->sender_email; ?>" placeholder="Enter Email Address"/>
		<span><?php echo form_error("email"); ?> </span>
	</div>
	<div>
		<label>Birthday:</label>
		<input type="text" name="bday" value="<?php echo $row->sender_bday; ?>" placeholder="Enter Birthday (yyyy-dd-mm)"/>
		<span><?php echo form_error("bday"); ?> </span>
	</div>
	<div>
		<input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>"/>
	<input type="submit" name="update" value="Update"/>
		</div>
	<?php
	}
}
?>
</form>
</body>
</html>