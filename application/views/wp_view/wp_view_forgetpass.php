</head>
<body>
<div class="container my-5 bg-light">
      <div class="row justify-content-evenly">
	  <h2>Forgot Password</h2>
        <div class="col-lg-6">
        <h5 class="my-4">Please Enter your Email Address:</h5> 

	<form method="post" action="<?php echo base_url()?>wp_controller/forgetpass">
            <div class="row">
			<label class="label col-md-4 control label">Email Address:</label>
              			<div class="col-lg-8 mb-3">
                		<input type="text" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
						<span><?php echo form_error("email");?> </span>
						</div>
            </div>
					<div class="d-grid gap-1 d-md-flex justify-content-md-end">
						<button class="btn-lg btn-primary m-4" type="button"><a style="text-decoration: none; color: white;" href="<?php echo base_url('wp_controller/login'); ?>">Back</a></button>
						<input class="btn-lg btn-primary m-4" type="submit" value="Submit" name="acc_update">
        			</div>
      </div>

	</form>