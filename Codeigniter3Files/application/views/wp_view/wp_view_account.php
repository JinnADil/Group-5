<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
</head>
<body>
    <h3>Account</h3>
<a href="<?=base_url('wp_controller/dashboard')?>">Back</a>

<div>
    <table>
        <tr>
            <!-- <th>ID</th> -->
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Surname</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Birthdate</th>
            <th>Update</th>
        </tr>
        <?php
            if($fetch_data->num_rows() > 0)
            {
                foreach($fetch_data->result() as $row)
                {
        ?>
                    <tr>
                        <!-- <td><?php echo $row->id; ?></td> -->
                        <td><?php echo $row->sender_fname; ?></td>
                        <td><?php echo $row->sender_mname; ?></td>
                        <td><?php echo $row->sender_lname; ?></td>
                        <td><?php echo $row->sender_addrs; ?></td>
                        <td><?php echo $row->sender_phnum; ?></td>
                        <td><?php echo $row->sender_email; ?></td>
                        <td><?php echo $row->sender_bday; ?></td>
                        <td><a href="<?php echo base_url(); ?>wp_controller/update_data/
                        <?php echo $row->id; ?>">Edit</a></td>
                            <!-- CONTROLLER/FUNCTION/ARGUMENT -->
                    </tr>
            <?php
                }
            }
            else
            {
            ?>
                <tr>
                    <td colspan="8">No Data Found</td>
                </tr>
            <?php
            }
            ?>
    </table>
    <a href="<?=base_url()."wp_controller/delete_data/".$row->id;?>">Delete Account</a>
    </div>

    </body>
</html>
