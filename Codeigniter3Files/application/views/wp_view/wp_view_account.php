</head>
<body>
<h2>Account</h2>

<h2>Welcome <?php echo $user['sender_user']; ?>!</h2>

<a href="<?php echo base_url('wp_controller/dashboard'); ?>">Back</a>

<div>
        <!-- <p><b>Id: </b><?php echo $user['id']?></p> -->
        <!-- <p><b>Username: </b><?php echo $user['sender_user']?></p>
        <p><b>Password: </b><?php echo $user['sender_pass']?></p> -->
        <!-- <p><b>Email Address: </b><?php echo $user['sender_email']?></p> -->
        <p><b>Name: </b><?php echo $user['sender_fname']?> <?php echo $user['sender_mname']?> <?php echo $user['sender_lname']?> <?php echo $user['sender_extension']?></p>
        <p><b>Address: </b><?php echo $user['sender_houselt']?> <?php echo $user['sender_strt']?> <?php echo $user['sender_subd']?> <?php echo $user['sender_brgy']?> <?php echo $user['sender_municity']?> <?php echo $user['sender_provi']?> <?php echo $user['sender_zip']?> </p>
        <p><b>Phone Number: </b><?php echo $user['sender_phnum']?></p>
        <p><b>Receiving Email Address: </b><?php echo $user['sender_docu_email']?></p>
        <p><b>Birthdate: </b><?php echo $user['sender_month']?> <?php echo $user['sender_day']?> <?php echo $user['sender_year']?></p>
        <p><b>Sex: </b><?php echo $user['sender_sex']?></p>
</div>
<a href="<?php echo base_url('wp_controller/pers_update'); ?>">Update Personal Information</a>
<a href="<?php echo base_url('wp_controller/acc_update'); ?>">Update Account Information</a>
<a href="<?php echo base_url('wp_controller/delete'); ?>">Delete Account</a>
