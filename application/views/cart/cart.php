		
		<?php if ($this->cart->contents()): ?>
		<form action="cart/process" method="post">
		
		<table class="table table-striped">
                  <tr>
                    <th>Quantity</th>
                    <th>Item Title</th>
                    <th style="text-align: right">Item Price</th>
                  </tr>

                  <?php $i = 0; ?>
                  
                  <?php foreach ($this->cart->contents() as $item): ?>
                  <tr>
                    <td><?php echo $item['qty']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td style="text-align: right">$<?php echo $this->cart->format_number($item['price']); ?></td>
                  </tr>
                  
                  <?php echo '<input type="hidden" name="item_name['.$i.']" value="'.$item['name'].'" />'; ?>
                  <?php echo '<input type="hidden" name="item_code['.$i.']"  value="'.$item['id'].'"  />'; ?>
                  <?php echo '<input type="hidden" name="item_qty['.$i.']" value="'.$item['qty'].'"  />'; ?>
                  
                  <?php $i++; ?>
				<?php endforeach;?>
                 
                  <tr>
                  <td></td>
                  <td><strong>Shipping</strong></td>
                    <td class="cart-shipping" style="text-align: right">
                     $<?php echo $this->config->item('shipping'); ?>
                    </td>
                  </tr>
                  <tr>
                  <td></td>
                  <td><strong>Tax</strong></td>
                    <td class="cart-shipping" style="text-align: right"> 
                      $<?php echo $this->config->item('tax'); ?>
                    </td>
                  </tr>
                  <tr>
                  <td></td>
                  <td><strong>Total</strong></td>
                    <td class="cart-total" style="text-align: right">
                       <strong>$<?php echo $this->cart->format_number($this->cart->total()); ?></strong>
                    </td>
                  </tr>
                </table>   
                
                <br />
                <?php if(!$this->session->userdata('logged_in')): ?>
                	<p><a href="<?php echo base_url(); ?>users/register" class="btn btn-primary">Register</a></p>
                	<p><em>You must login to make purchases</em></p>
                <?php else: ?>
                
                <h3>Shipping Info</h3>
                  <div class="form-group">
                    <label>Address </label>
                    <input type="text" name="address" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Address 2</label>
                    <input type="text" name="address2" class="form-control" required>
                  </div>  

                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" required> 
                  </div> 

                   <div class="form-group">
                    <label>State</label>
                    <input type="text" name="state" class="form-control" required>
                  </div> 

                   <div class="form-group">
                    <label>Zipcode</label>
                    <input type="text" name="zipcode" class="form-control">
                  </div> 
                  
                  <p><button type="submit" name="submit" class="btn btn-primary">
                    Checkout</button></p>
                </form>
                <?php endif; ?>
                
                <?php else: ?>
                <p>No items in cart to display</p>
                
               <?php endif; ?>
                   