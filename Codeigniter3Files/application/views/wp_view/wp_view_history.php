</head>
<body>
<h2>Account</h2>

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
        <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->sender_email."</td>";
  echo "<td>".$row->sender_docu."</td>";
  echo "<td>".$row->sender_docu_status."</td>";
  ?>
     <form method="post" action="<?php echo base_url()?>wp_controller/register">
        <div>
	<input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>"/>
	</div>
        <td><input class="btn-lg btn-primary m-4" type="submit" value="Receive" name="receive"> </td>
        <td><input class="btn-lg btn-primary m-4" type="submit" value="Cancel" name="cancel"> </td>
        <td><input class="btn-lg btn-primary m-4" type="submit" value="Delete" name="delete"> </td>
        </form>
  <?php
  echo "</tr>";
  $i++;
  }
   ?>

        </tr>
        </table>
</div>
