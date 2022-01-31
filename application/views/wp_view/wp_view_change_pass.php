</head>
<body>
<div class="container my-5 bg-light">
      <div class="row justify-content-evenly">
	  <h2>Change Password</h2>
        <div class="col-lg-6">

	<form method="post" action="<?php echo base_url()?>wp_controller/register">
            <div class="row">
			<label class="label col-md-4 control label">Password</label>
              			<div class="col-lg-8 mb-3">
                		<input type="text" name="pass" class="form-control" placeholder="Password" aria-label="Email Address" required>
						<span><?php echo form_error("pass");?> </span>
						</div>
            </div>
			<div class="row">
			<label class="label col-md-4 control label">Confirm Password</label>
              			<div class="col-lg-8 mb-3">
						  <input type="password" name="conf_pass" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password">
						<span><?php echo form_error("conf_pass"); ?> </span>
						</div>
			</div>
					
			<div>
						<input type="hidden" name="hidden_id" value="<?php echo $user['id']; ?>"/>
					</div>

					<div class="d-grid gap-1 d-md-flex justify-content-md-end">
						<button class="btn-lg btn-primary m-4" type="button"><a style="text-decoration: none; color: white;" href="<?php echo base_url('wp_controller/forget_pass'); ?>">Back</a></button>
						<input class="btn-lg btn-primary m-4" type="submit" value="Change" name="change_pass">
        			</div>
      </div>

	</form>