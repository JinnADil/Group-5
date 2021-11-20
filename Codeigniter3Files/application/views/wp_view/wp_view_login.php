<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Application</title> 

</head>
<h3>Log In</h3>
<body>
<a href="<?=base_url('wp_controller/')?>">Back</a>

	<form method="post" action="<?php echo base_url()?>wp_controller/loginnow">
													<!-- controller/function -->
	<div>
		<label>Username:</label>
		<input type="text" name="user" placeholder="Enter Username"/>
	</div>
		<div>
		<label>Password:</label>
		<input type="password" name="pass" placeholder="Enter Password"/>
	</div>

	<div>
		<input type="submit" name="insert" value="Log In"/>
	</div>

	<?php
	if($this->session->flashdata('error')) {	?>
	<p> <?=$this->session->flashdata('error')?></p>
<?php }?>
</form>

</body>
</html>