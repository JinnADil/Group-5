<h2>Login to Your Account</h2>

<?php 
	if($this->uri->segment(2)=="index"){
		echo '<p>Successfully Registered</p>';
	}
?>

<a href="<?php echo base_url('wp_controller/home'); ?>">Back</a>

<form method="post" action="<?php echo base_url()?>wp_controller/login">
													<!-- controller/function -->
	<div>
		<label>Username:</label>
		<input type="text" name="user" placeholder="Enter Username"/>
		<span><?php echo form_error("user")?></span>
	</div>
		<div>
		<label>Password:</label>
		<input type="password" name="pass" placeholder="Enter Password"/>
		<span><?php echo form_error("pass")?></span>
	</div>

	<div>
		<input type="submit" name="insert" value="Log In"/>
	</div>

	<?php
	if($this->session->flashdata('error')) {	?>
	<p> <?=$this->session->flashdata('error')?></p>
<?php }?>

</form>

<p>Don't have an account? <a href="<?php echo base_url('wp_controller/register'); ?>">Register</a></p>