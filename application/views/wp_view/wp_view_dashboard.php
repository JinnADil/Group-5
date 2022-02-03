
<body>
<section class="highlight-clean" style="background: linear-gradient(180deg, black, white 0%, rgb(145,47,47) 100%);">
            <div class="container" style="font-family: 'Lexend Deca', sans-serif;height: 500px;padding: 114px;">
                <div class="intro">
                    <h2 class="text-center">Hello!  <?php echo $user['sender_user']; ?></h2>
                        <p class="text-center" style="font-size: 22px;color: rgb(255,255,255);">Welcome to our space! How can we help you?</p>
                </div>
                    <div class="buttons">

                        <a href="<?php echo base_url('wp_controller/request'); ?>"> <button class="btn btn-light" type="button">Request</button></a>
                        <a href="<?php echo base_url('wp_controller/account'); ?>"> <button class="btn btn-light" type="button">Account</button></a>                        
                        <a href="<?php echo base_url('wp_controller/logout'); ?>"> <button class="btn btn-light" type="button">Log Out</button></a>

                        <form method="post" action="<?php echo base_url()?>wp_controller/history">
                <div class="row">
	    				<div class="col-lg-8 mb-3">
	    				    <input type="hidden" name="id" value="<?php echo $user['user_id']?>" class="form-control" placeholder="First name" aria-label="First name" required>  
						    </div>
                </div>
                <div>
                <button class="btn btn-light" type="submit" value="History">history</button>
	                </div>
                  </form>


                    </div>
                </div>
            </section>


