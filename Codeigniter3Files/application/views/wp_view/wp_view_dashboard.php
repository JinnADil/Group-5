</head>
<body>
  
<h2>Dashboard</h2>


<?php if($error = $this->session->flashdata('msg')){ ?>
       <p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
  <?php } ?>

<h2>Welcome <?php echo $user['sender_user']; ?>!</h2>

<a href="<?php echo base_url('wp_controller/account'); ?>">Account</a>

<a href="<?php echo base_url('wp_controller/request'); ?>">Request Documents</a>

<form method="post" action="<?php echo base_url()?>wp_controller/history">
<div class="row">
	    				<div class="col-lg-8 mb-3">
	    				<input type="hidden" name="id" value="<?php echo $user['id']?>" class="form-control" placeholder="First name" aria-label="First name" required>  
						</div>
            </div>
<div>
            <input type="submit" value="History">
	      </div>
</form>

<a href="<?php echo base_url('wp_controller/logout'); ?>">Logout</a>



