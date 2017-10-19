
  <div style="width:80%; height:80%; margin-left:10%;">
      <h1 style="font-weight: bold; padding-top:10px; padding-bottom:10px;">Shopping Cart</h1>
        <div style="width:100%; height:auto;">


          <table>
          <tr>
              <td>#</td>
              <td width="50%" style="font-size : 14px;">ITEM</td>
              <td style="font-size : 14px;">PRICE</td>
              <td style="font-size : 14px;">QUANTITY</td>
              <td style="font-size : 14px;">SUBTOTAL</td>
              <td style="font-size : 14px;">REMOVE</td>
          </tr>
    <?=  $this->Form->create(null, ['url' => ['controller'=>'users','action' => 'update']]) ?>
    <?php $temp = 0;
            foreach ($cart as $cartitem):
                $temp = $temp + $cartitem['price'];
            echo'<tr>';
              echo'<td><p>'. $this->Html->image($cartitem['file'],array('url' => '','width' =>'80px')); echo'</td>';
              echo'<td><p>'. $cartitem['pname'].'</p></td>';
              echo'<td><p>'. $cartitem['price'].'</p></td>';

              echo'<td><select name="quantity[] " class="sqtity" yuki="'.$cartitem['id'].'" pp="'.$cartitem['price'].'">';
              echo'<option value="1">1</option>';
              echo'<option value="2">2</option>';
              echo'<option value="3">3</option>';
              echo'<option value="4">4</option>';
              echo'<option value="5">5</option>';
              echo'</select></td>';
              echo'<input type="hidden" name="product_id[]" value="'.$cartitem['id'].'">';


              echo'<td><p id="sb'.$cartitem['id'].'" class="bb">'.$cartitem['price'].'</p></td>';
              echo'<td><a href="http://localhost:8888/Cakephp_EC/users/delete/'.$cartitem['id'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>';
          echo'</tr>';

          endforeach;

        echo'</table>';

        echo'</div>';
        echo'<div style="width:100%; height:10%;">';
        ?>
<!-- /////////////////////////////////////////////////////////////////////////// -->
              <!-- <table>
              <tr>
                  <td>
                      <form method="post" id="<?= $cartitem['id'] ?>">
                          <input type="text" name="quantity" value="<?= $cartitem['id'] ?>">
                          <input type="submit" name="change_aantal" value="Update">
                          <input type="hidden" name="product_id" value="<?= $cartitem['id']; ?>">
                      </form>
                      <?
                      // if (isset($_POST["change_aantal"])) {
                      //     update($_POST["product_id"], $_POST["aantal"]);
                      // }
                      ?>
                  </td>
              </tr>
            </table> -->
<!-- /////////////////////////////////////////////////////////////////////////// -->

          <div style="width:10%; float:right;padding-left:50px;"><input type="submit" name="update" class="btn-default upd" style="width;10px; height:35px; font-size:15px;  margin-top:15px; float:left;" value="Update"/></div>
        <?= $this->Form->end() ?>

          <div style="width:10%; float:right;"><input type="button" name="addtocart" class="btn-danger" style="width;10px; height:35px; font-size:15px;  margin-top:15px; float:left;" onClick="location.href='http://localhost:8888/Cakephp_EC/users/alldelete/'" value="Clear Shopping Cart"/></div>

        <?php
        echo'</div>';
        echo'<div style="width:100%; height:70%; border:1px solid lightgray; border-style:ridge none none none;">';
            echo'<div style="width:10%; margin-left:90%;"><p style="padding-top:30px; font-size:15px;" id="ttl">total: $'.$temp.'</p></div>';
            echo'<div style="width:10%; margin-left:90%;"><p style="padding-top:20px; font-size:15px;">Sales Tax: N/A</p></div>';
            echo'<div style="width:10%; margin-left:90%;"><p style="padding-top:20px; font-size:15px;">Shipping: N/A</p></div>';
            echo'<div style="width:10%; margin-left:90%;"><p style="padding-top:20px; font-size:12px;">Order Total: $44.90</p></div>';
            echo'<div style="width:10%; margin-left:90%;"><input type="submit" name="addtocart" class="btn-success" style="width;10px; height:35px; font-size:15px;  margin-top:15px;" value="Check Out"/></div>';
            echo'<div style="width:10%; margin-left:89%; margin-top:20px;">'; echo $this->Html->image("paypal.jpg"); echo'</div>';

        echo'</div>';

  echo'</div>';
?>
