<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Application</title>

</head>
<body>
	<h3>Home</h3>
	<?php
		if($this->uri->segment(2)=="registered")
		{
			//base url - http://localhost/Codeigniter3Files
			//redirect url - http://localhost/Codeigniter3Files/webproj_app/registered
			echo '<p>Successfully Registered</p>';
		
		}
	?>
	<a href="<?=base_url('wp_controller/signup')?>">Register</a>
	<a href="<?=base_url('wp_controller/login')?>">Login</a>

</body>
</html>