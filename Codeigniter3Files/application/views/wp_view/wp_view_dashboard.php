</head>
<body>
<h2>Dashboard</h2>


<?php if($error = $this->session->flashdata('msg')){ ?>
       <p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
  <?php } ?>

<h2>Welcome <?php echo $user['sender_user']; ?>!</h2>

<a href="<?php echo base_url('wp_controller/account'); ?>">Account</a>

<a href="<?php echo base_url('wp_controller/request'); ?>">Request Documents</a>

<a href="<?php echo base_url('wp_controller/history'); ?>">History</a>

<a href="<?php echo base_url('wp_controller/logout'); ?>">Logout</a>



