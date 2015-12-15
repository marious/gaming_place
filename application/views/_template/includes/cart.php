<div class="cart-block">
            <form action="<?php echo base_url();?>cart/update" method="post" class="cart-aside update">

              <div id="cart-content">
              <table cellpadding="6" cellspacing="1" style="width: 100%" border="0" class="cart-table" id="cart-table">
                <tr>
                  <th>QTY</th>
                  <th>Item Description</th>
                  <th style="text-align: right">Item Price</th>
                </tr>

                <?php if(!$this->cart->contents()): ?>

                <tr>
                  <td></td>
                  <td class="right"><strong>Total</strong></td>
                  <td class="right" style="text-align: right">$</td>
                </tr>
                <?php endif; ?>

                <?php $i = 1; ?>
                <?php foreach($this->cart->contents() as $items): ?>
                 <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

                 <tr>
                 <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'class' => 'qty')); ?></td>
                 <td><?php echo $items['name']; ?></td>
                 <td style="text-align: right">$<?php echo $this->cart->format_number($items['price']); ?></td>
                 </tr>

                 <?php $i++; ?>

                <?php endforeach; ?>



                <tr>
                	<td></td>
                	<td class="right"><strong>Total</strong></td>
                	<td class="right" style="text-align: right">$<?php echo $this->cart->format_number($this->cart->total());?></td>
                </tr>

              </table>
              <br>
              <p><button type="submit" class="btn btn-default" class="update-cart">Update Cart</button>
                  <a href="cart"  class="btn btn-default go-cart">Go To Cart</a>
              </p>
            </div><!-- end cart-contetnt -->
            </form>
            </div>