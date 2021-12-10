<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>">

<form method="post" action="<?php echo base_url()?>wp_controller/login">

<div class="container my-5 bg-light border border-secondary rounded-3">
        <h5 class="text-center pt-3">User Authentication</h5>
        <hr class="style1">
        <div class="input-group mb-3 ">
            <div class="input-group-prepend">
              <span class="input-group-text" id=""><i class="fa fa-user py-1"></i></span>
            </div>

            <input type="text" class="form-control" name="email" placeholder="Email Address" aria-label="Username" aria-describedby="#">
			<span><?php echo form_error("email")?></span>
		</div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="#"><i class="fa fa-unlock-alt py-1"></i></span>
            </div>
            <input type="password" class="form-control" name="pass" placeholder="Password" aria-label="Password" aria-describedby="#">
			<span><?php echo form_error("pass")?></span>
		</div>
        <div class="col-md-12 text-center">
            <button type="submit" name="insert" value="Log in" class="btn btn-outline-secondary w-75">Login</button>
        </div>
        
        <p class="text-center">Forget your password?</p>

		<?php
	if($this->session->flashdata('error')) {	?>
	<p> <?=$this->session->flashdata('error')?></p>
<?php }?>

      </div>
	  </form>