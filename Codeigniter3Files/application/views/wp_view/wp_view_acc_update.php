</head>
<body>
<div class="container my-5 bg-light">
      <div class="row justify-content-evenly">
	  <h2>Update Information</h2>
        <div class="col-lg-6">
        <h5 class="my-4">Account Information:</h5> 

	<form method="post" action="<?php echo base_url()?>wp_controller/register">
            <div class="row">
			<label class="label col-md-4 control label">Username:</label>
    					<div class="col-lg-8 mb-3">
    					<input type="text" name="user" value="<?php echo $user['sender_user']?>" class="form-control" placeholder="Username" aria-label="Username" required>
						<span><?php echo form_error("user");?> </span>
						</div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Email Address:</label>
              			<div class="col-lg-8 mb-3">
                		<input type="text" name="email" value="<?php echo $user['sender_email']?>" class="form-control" placeholder="Email Address" aria-label="Email Address" required>
						<span><?php echo form_error("email");?> </span>
						</div>
            </div>

            <div class="row">
			<label class="label col-md-4 control label">Password:</label>
              			<div class="col-lg-8 mb-3">
                		<input type="password" name="pass" value="<?php echo $user['sender_pass']?>" class="form-control" placeholder="Password" aria-label="Password">
						<span><?php echo form_error("pass"); ?> </span>
						</div>
            </div>
           
		<div>
						<input type="hidden" name="hidden_id" value="<?php echo $user['id']; ?>"/>
					</div>

					<div class="d-grid gap-1 d-md-flex justify-content-md-end">
						<button class="btn-lg btn-primary m-4" type="button"><a style="text-decoration: none; color: white;" href="<?php echo base_url('wp_controller/account'); ?>">Back</a></button>
						<input class="btn-lg btn-primary m-4" type="submit" value="Update" name="acc_update">
        			</div>
        
      </div>

	</form>