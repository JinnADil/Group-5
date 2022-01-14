</head>
<body>
<h2>Delete Account</h2>

<h2>Welcome <?php echo $user['sender_user']; ?>!</h2>

<a href="<?php echo base_url('wp_controller/account'); ?>">Back</a>

<form method="post" action="<?php echo base_url()?>wp_controller/del">
													<!-- controller/function -->

	<div>
		<label>Retype Username and Password to Confirm</label>
	</div>

	<div>
		<label>Email Address:</label>
		<input type="text" name="email" placeholder="Enter Email Address"/>
		<span><?php echo form_error("email");?> </span>
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
    <input type="submit" value="Delete" name="del"> 
    </div>

	<?php
	if($this->session->flashdata('error')) {	?>
	<p> <?=$this->session->flashdata('error')?></p>
<?php }?>

</form>
</div>
