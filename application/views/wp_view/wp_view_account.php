
<link rel="stylesheet" href="<?php echo base_url('assets/Account/assets/bootstrap/css/bootstrap.min.')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/Account/assets/fonts/ionicons.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/Account/assets/css/Account-setting-or-edit-profile.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/Account/assets/css/Footer-Clean.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/Account/assets/css/Highlight-Clean.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/Account/assets/css/Navigation-Clean.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/Account/assets/css/Navigation-with-Button.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/Account/assets/css/styles.css')?>">
<body>
<section class="highlight-clean" style="background: linear-gradient(180deg, black, white 0%, rgb(145,47,47) 100%);">
        <div class="container" id="box" style="background: linear-gradient(black 0%, var(--bs-red) 0%, white 100%), var(--bs-red);">
            <!-- <p id="par1" class="mb-0 px-0 text-center"><strong>USER ACCOUNT</strong></p> -->
            <div class="row">
                <div class="col" id="col1" style="background: linear-gradient(rgb(60,60,60) 0%, rgb(75,75,75) 0%, var(--bs-red) 0%, white 100%);border-color: var(--bs-danger);border-right-color: rgba(238,145,145,0.5);">
                    <p class="text-center pt-4">
                        <picture><img src="<?php echo base_url('assets/Account/assets/img/profile.png')?>"></picture>
                    </p>
                    <hr>
                    <p class="text-center pt-1"><a class="disLink" href="<?php echo base_url('wp_controller/pers_update'); ?>" style="text-shadow: 0px 0px 5px var(--bs-red);">Personal Information</a>&nbsp;</p>
                    <hr class="disLink">
                    <p class="text-center pt-1 disLink"><a class="link1 disLink" href="<?php echo base_url('wp_controller/acc_update'); ?>" style="text-shadow: 0px 0px 5px var(--bs-red);">Account Information</a></p>
                    <hr class="disLink">
                    <p class="text-center pt-1 disLink"><a class="link1 disLink" href="<?php echo base_url('wp_controller/delete'); ?>" style="text-shadow: 0px 0px 5px var(--bs-red);">Delete Account</a></p>
                </div>
                <div class="col offset-xxl-0" id="col2" style="background: repeating-linear-gradient(rgb(255,84,84) 0%, white 100%), var(--bs-red);">
                    <fieldset>
                        <legend></legend>
                    </fieldset>
                    <h1 style="text-shadow: 4px 5px 3px var(--bs-danger);">&nbsp; Welcome <?php echo $user['sender_user']?> </h1>
                    <p><br></p>
                    <p></p><strong style="border-right-width: 32px;border-right-color: var(--bs-red);border-radius: 19px;font-size: 15px;">Name</strong>
                    <p class="text-start d-flex" style="color: var(--bs-gray-900);font-weight: bold;font-size: 20px;"><?php echo $user['sender_fname']?> <?php echo $user['sender_mname']?> <?php echo $user['sender_lname']?> <?php echo $user['sender_extension']?></p>
                    <strong>Address</strong>
                    <p style="color: var(--bs-gray-900);font-weight: bold;font-size: 20px;"><?php echo $user['sender_addrs']?></p>
                    <strong style="font-size: 14px;">Phone Number</strong>
                    <p style="color: var(--bs-gray-900);font-size: 20px;font-weight: bold;"><?php echo $user['sender_phnum']?></p>
                    <strong style="font-size: 15px;">Email Address</strong>
                    <p style="color: var(--bs-body-color);font-size: 20px;font-weight: bold;"><?php echo $user['sender_email']?></p>
                    <strong style="font-size: 15px;">Birthdate</strong>
                    <p style="color: var(--bs-dark);font-size: 20px;font-weight: bold;"><?php echo $user['sender_month']?> <?php echo $user['sender_day']?> <?php echo $user['sender_year']?></p>
                    <a href="<?php echo base_url('wp_controller/dashboard'); ?>"><button class="btn btn-primary col-lg-4 col-xl-4 offset-lg-6 offset-xl-7 my-4" >Back</button></a>
                </div>
                <div class="w-100"></div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-toolbar">
                        <div class="btn-group" role="group"></div>
                        <div class="btn-group" role="group"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
