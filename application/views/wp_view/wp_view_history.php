

<link rel="stylesheet" href="<?php echo base_url('assets/History/assets/bootstrap/css/bootstrap.min.')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/History/assets/fonts/ionicons.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/History/assets/css/Footer-Clean.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/History/assets/css/Highlight-Clean.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/History/assets/css/Navigation-Clean.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/History/assets/css/Navigation-with-Button.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/History/assets/css/styles.css')?>">
<body>

<section class="highlight-clean" style="background: linear-gradient(180deg, black, rgb(247, 195, 195) 0%, rgb(145,47,47) 100%);">

        <div class="align-content-end" id="box" style="background: linear-gradient(black 0%, var(--bs-red) 0%, white 100%), var(--bs-red);">
            <div class="row">
                <div>
                    <body>
                        <h1 style="color: var(--bs-body-color);font-weight: bold;text-align: center;">HISTORY</h1><strong></strong>
                        <a href="<?php echo base_url('wp_controller/dashboard'); ?>"><button  class="btn-lg btn-primary m-4" >Back</button></a>
                        <div>
                          <table height="50">
                            <tr>
                                    <th width="200" height="45"><strong>
                                      <center>
                                      RECIPIENT
                                      </center>
                                    </strong></th>
                                    <th width="100"><center>
                                <strong>
                                    DOCUMENT REQUESTED
                                    </strong></center>
                              <th width="100"><center><strong>
                              STATUS    </strong>                                
                              </center>
                              <th width="100"><h4>
                                <center>
                                </center>
                              </h4>
                            </tr>
<?php
  $i=1;
  foreach($data as $row)
  { ?>

  <tr>
  <td height="107" align="center"> <?php echo $row->sender_req_email ?></td>
  <td align="center"> <?php echo $row->sender_docu ?></td>
  <td align="center"> <?php echo $row->sender_docu_status ?></td>

  <form method="post" action="<?php echo base_url()?>wp_controller/register">
        <div>
	<input type="hidden" name="hidden_id" value="<?php echo $row->user_id; ?>"/>
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
                    </div>
                </div>
            </div>
        </div>
    </section>