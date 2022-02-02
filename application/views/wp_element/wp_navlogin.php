
</head>

      <body>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: rgb(129,27,27);padding: 22px 0px;">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url('wp_controller/dashboard'); ?>" style="font-family: 'Lexend Deca', sans-serif;color: rgb(255,255,255);margin: 0px 5%;font-size: 40px;"><img src="<?php echo base_url('assets/img/DTSLogo.png')?>" height="100" width="250" alt="DTS"></a>
                
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navcol-1" style="font-family: 'Lexend Deca', sans-serif;color: rgb(255,255,255);font-size: 18px;text-align: center;">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link " href="<?php echo base_url('wp_controller/dashboard'); ?>" style="color: rgb(255,255,255);text-align: center;">Home</a></li>
                        <li class="nav-item"><a class="nav-link " style="color: rgb(255,255,255);text-align: center;" href="<?php echo base_url('wp_controller/about1'); ?>">About Us</a></li>
                        <li class="nav-item"><a class="nav-link " href="#" style="color: rgb(255,255,255);text-align: center;">Help</a></li>
                        <li class="nav-item"></li></ul>
                        
                        <span class="navbar-text actions" style="padding: 6px 0px;margin: 0px 10px;"> 
                            
                            <a class="login" href="#" style="color: rgb(255,255,255);text-align: center;">Welcome, <?php echo $user['sender_user']; ?> !</a>
                            <a class="btn btn-light action-button" role="button" data-bss-hover-animate="pulse" href="<?php echo base_url('wp_controller/account'); ?>" style="background: rgb(221,221,221);color: rgb(200,73,73);text-align: center;">Account</a>
                        </span>
                </div>
            </div>
        </nav>





