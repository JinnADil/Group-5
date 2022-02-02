<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend+Deca&amp;display=swap">
        <link rel="stylesheet" href="<?php echo base_url('assets/Login-Screen/assets/fonts/ionicons.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/Login-Screen/assets/css/styles.min.css')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> 
    
  <body>
    <section class="highlight-clean" style="background: linear-gradient(180deg, black, white 0%, rgb(145,47,47) 100%);">
            <section class="login-clean" style="background: rgba(241,247,252,0);border-right-style: groove;">
                
            <form method="post" action="<?php echo base_url()?>wp_controller/login">
                    <h2 class="visually-hidden">Login Form</h2>
                    <div class="mb-3">
                        <input name="email" class="form-control" type="email" name="email" placeholder="Email" style="border-right-style: inherit;font-family: 'Lexend Deca', sans-serif;">
                    </div>
                    <?php echo form_error("email")?> 
                    
                    <div class="mb-3"
                    ><input name="pass" class="form-control" type="password" name="password" placeholder="Password" style="font-family: 'Lexend Deca', sans-serif;">
                </div>
                <?php echo form_error("pass")?>

                <div class="mb-3">
                    <button name="insert" class="btn btn-primary d-block w-100" type="submit" style="background: rgb(129,27,27);font-family: 'Lexend Deca', sans-serif;">Log In</button>
                </div>

                <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
                
                <a class="forgot" href="<?php echo base_url('wp_controller/forget_pass'); ?> " style="font-family: 'Lexend Deca', sans-serif;">Forgot your password?</a>
                <a class="forgot" href="<?php echo base_url('wp_controller/register'); ?>">Don't have an account? Sign up here!</a>
              
              
              </form>
            </section>
        </section>

        <script src="<?php echo base_url('assets/Login-Screen/assets/bootstrap/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/Login-Screen/assets/js/script.min.js')?>"></script>