<div class="modal hide fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h4 class="modal-title" id="myModalLabel">Profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <?php
            $sql_sel_cust = mysqli_query($conn, "SELECT * FROM customer WHERE customer_id ='" . $_SESSION['id'] . "'") or die("Could not perform select on table 'customer': " . mysqli_error($conn));
            $fetch_cust = mysqli_fetch_array($sql_sel_cust);
            // echo $drow['member_id'] . "<br>";
            // echo $drow['f_name'] . "<br>";
            ?>
        <div class="container-fluid">
          <form method="post">
            <center>
              <!-- <input type="hidden" name="memberid" value="<?php //echo $drow['member_id']; 
                                                                    ?>"> -->

              <table style="border: none;">
                <tr style="border: none;">
                  <td style="border: none;">
                    <h5><b>Name:&emsp;&emsp;</b></h5>
                  </td>
                  <td style="border: none;">
                    <h5>
                      <?php echo ucwords($fetch_cust['f_name']) . ' ' . ucwords($fetch_cust['mi']) . '. ' . ucwords($fetch_cust['l_name']); ?>
                    </h5>
                  </td>
                </tr>
                <tr>
                  <td style="border: none;">
                    <h5><b>Address:&emsp;&emsp;</b></h5>
                  </td>
                  <td style="border: none;">
                    <h5><?php echo $fetch_cust['address']; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td style="border: none;">
                    <h5><b>Country:&emsp;&emsp;</b></h5>
                  </td>
                  <td style="border: none;">
                    <h5><?php echo $fetch_cust['country']; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td style="border: none;">
                    <h5><b>Zip Code:&emsp;&emsp;</b></h5>
                  </td>
                  <td style="border: none;">
                    <h5><?php echo $fetch_cust['zip']; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td style="border: none;">
                    <h5><b>Mobile Number:&emsp;&emsp;</b></h5>
                  </td>
                  <td style="border: none;">
                    <h5><?php echo $fetch_cust['mobile']; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td style="border: none;">
                    <h5><b>Phone Number:&emsp;&emsp;</b></h5>
                  </td>
                  <td style="border: none;">
                    <h5><?php echo $fetch_cust['telephone']; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td style="border: none;">
                    <h5><b>Email:&emsp;&emsp;</b></h5>
                  </td>
                  <td style="border: none;">
                    <h5><?php echo $fetch_cust['email']; ?></h5>
                  </td>
                </tr>
              </table>
            </center>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fas fa-times"></span>
          Cancel</button>
        <a href="account.php?id=<?php echo $fetch_cust['customer_id']; ?>" class="btn btn-warning"><span class="fas fa-edit"></span>Edit Profile</a>
      </div>
      </form>
    </div>
  </div>
</div>