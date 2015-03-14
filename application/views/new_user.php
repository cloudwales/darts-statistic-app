
	<div id="body">
		<p><br/><br/>
			<form role="form" action="<?php echo base_url('new_player'); ?>" method="POST">
			<div class="col-lg-6">

			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="name" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo set_value('name'); ?>">
			    <?php echo form_error('name'); ?>
			  </div>

			  <div class="form-group">
			    <label for="username">Username</label>
			    <input type="username" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
			    <?php echo form_error('username'); ?>
			  </div>

			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Email address" value="<?php echo set_value('email'); ?>">
			    <?php echo form_error('email'); ?>
			  </div>

			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
			    <?php echo form_error('password'); ?>
			  </div>

			  <div class="form-group">
			    <label for="confirm_password">Confirm Password</label>
			    <input type="confirm_password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Email address" value="<?php echo set_value('confirm_password'); ?>">
			    <?php echo form_error('confirm_password'); ?>
			  </div>
	 		
			  <button type="submit" class="btn btn-success">Save</button> <a href="<?php echo base_url();?>" class="btn btn-primary">Back</a>
			</div>
			</form>
		</p>
	</div>


