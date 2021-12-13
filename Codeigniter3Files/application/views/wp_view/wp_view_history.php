</head>
<body>
<h2>Account</h2>

<!-- <h2>Welcome <?php echo $user['sender_user']; ?>!</h2> -->

<a href="<?php echo base_url('wp_controller/dashboard'); ?>">Back</a>

<div>
        <table>
        <tr>
            <th><h4>Recipient</h4></th>
            <th><h4>Document Requested</h4></th>
            <th><h4>Status</h4></th>
        </tr>

        <tr>
        <!-- <p><b>Id: </b><?php echo $user['id']?></p> -->
        <td><h5><?php echo $user['sender_user']; ?><h5></td>
        <td><h5><?php echo $user['sender_docu']; ?><h5></td>
        <td><h5><?php echo $user['sender_docu_status']; ?><h5></td>
        <form method="post" action="<?php echo base_url()?>wp_controller/register">
        <div>
	<input type="hidden" name="hidden_id" value="<?php echo $user['id']; ?>"/>
	</div>
        <td><input class="btn-lg btn-primary m-4" type="submit" value="Receive Request" name="receive"> </td>
        <td><input class="btn-lg btn-primary m-4" type="submit" value="Cancel Request" name="cancel"> </td>
        </form>
        </tr>
        </table>
</div>


<!-- <a href="<?php echo base_url('wp_controller/update'); ?>">Update Information</a>
<a href="<?php echo base_url('wp_controller/delete'); ?>">Delete Account</a> -->
