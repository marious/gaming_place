<?php  echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

<form action="<?php base_url();?>Users/register" method="post">

                <div class="form-group">
                  <label>First Name*</label>
                  <input type="text" name="first_name" class="form-control" placeholder="Enter first name" value="<?php echo set_value('first_name', '');?>" required>
                </div>

                <div class="form-group">
                  <label>last Name*</label>
                  <input type="text" name="last_name" class="form-control" placeholder="Enter last name" value="<?php echo set_value('last_name', '');?>" required>
                </div>  

                <div class="form-group">
                  <label>Email Address*</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo set_value('email', '');?>" required>
              </div>

                <div class="form-group">
                  <label>Choose Username*</label>
                  <input type="text" name="username" class="form-control" placeholder="Enter user name" value="<?php echo set_value('username', '');?>" required>
                </div>  

                <div class="form-group">
                  <label>Password*</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter password">
                </div>

                <div class="form-group">
                  <label>Confirm Password*</label>
                  <input type="password" name="password2" class="form-control" placeholder="Enter your first name" required>
                </div>   

                <button type="submit" class="btn btn-primary">Register</button>             

              </form>