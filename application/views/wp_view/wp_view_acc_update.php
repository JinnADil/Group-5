


	<link rel="stylesheet" href="<?php echo base_url('assets/UpdateAccount/assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/UpdateAccount/assets/fonts/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/UpdateAccount/assets/css/Footer-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/UpdateAccount/assets/css/Highlight-Clean.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/UpdateAccount/assets/css/Navigation-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/UpdateAccount/assets/css/Navigation-with-Button.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/UpdateAccount/assets/css/Newsletter-Subscription-Form.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/UpdateAccount/assets/css/styles.css')?>">
	<body>
	<section class="highlight-clean" style="background: linear-gradient(180deg, black, white 0%, rgb(145,47,47) 100%);">
        <div class="container text-center w-50" id="box">
            <p class="mt-3" style="font-family: 'Lexend Deca', sans-serif;">Update Account Information</p>
            <div class="row">
                <div class="col" id="col2">
				<p class="pt-2" style="font-family: 'Lexend Deca', sans-serif;"></p>
                    <form method="post" action="<?php echo base_url()?>wp_controller/register">
                    <h2 class="visually-hidden">Delete Form</h2>

					<div class="mb-3">
                        <input name="user" class="form-control" type="text" placeholder="Username" style="border-right-style: inherit;font-family: 'Lexend Deca', sans-serif;" required/>
                    </div>
                    <?php echo form_error("user")?>

                    <div class="mb-3">
                        <input name="email" class="form-control" type="email" placeholder="Email" style="border-right-style: inherit;font-family: 'Lexend Deca', sans-serif;" required/>
                    </div>
                    <?php echo form_error("email")?> 
                    
                    <div class="mb-3">
                    <input name="pass" class="form-control" type="password" placeholder="Password" style="font-family: 'Lexend Deca', sans-serif;" required/>
                </div>
                <?php echo form_error("pass")?>

				<div>
				<input type="hidden" name="hidden_id" value="<?php echo $user['id']; ?>"/>
				</div>

                <div class="mb-3">
                    <button value="Update" name="acc_update" class="btn btn-dark type=" type="submit" style="background: rgb(129,27,30);font-family: 'Lexend Deca', sans-serif;">Update</button>
                </div>
				<?php
	if($this->session->flashdata('error')) {	?>
	<p> <?=$this->session->flashdata('error')?></p>
<?php }?>
				</form>
				<div class="col-lg-4 col-xl-4 offset-lg-6 offset-xl-7 text-end my-4" id="buttons">
				<a href="<?php echo base_url('wp_controller/account'); ?>"><button class="btn btn-primary" >Back</button></a>
				</div>
                </div>
            </div>
        </div>
    </section>
