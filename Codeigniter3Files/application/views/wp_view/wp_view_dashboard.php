<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Application</title>
</head>
<body>

<h3>Welcome to the Application</h3>
<br>
<?php
if($this->session->userdata('UserLoginSession'))
{
    $udata = $this->session->userdata('UserLoginSession');
    echo 'Welcome'.' '.$udata['sender_user']; 

}
else
{
    redirect(base_url('wp_controller/login'));
}

?>

<a href="<?=base_url('wp_controller/account')?>">Account</a>
<a href="<?=base_url('wp_controller/logout')?>">Log Out</a>



</body>
</html>

