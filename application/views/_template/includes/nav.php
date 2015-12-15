<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">The GamingPlace</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
            <?php if( !$this->session->userdata('logged_in') ): ?>
            <li><a href="<?php echo base_url();?>users/register">Create Account</a></li>
            <?php endif; ?>
          </ul>
          
          <?php if( !$this->session->userdata('logged_in') ): ?>
        <form  action="<?php echo base_url();?>users/login" method="post" class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text"  name="username" class="form-control" placeholder="Enter username" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
          </div>
        <button type="submit" name="submit" class="btn btn-default">Login</button>
      </form>
      <?php else: ?>
      	
      	<form action="<?php echo base_url(); ?>users/logout" class="navbar-form navbar-right">
      		 <button type="submit" name="submit" class="btn btn-default">Logout</button>
      	</form>
      
      <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>