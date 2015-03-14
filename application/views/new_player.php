

	<div id="body">
		<p><br/><br/>
			<form role="form" action="<?php echo base_url('new_player'); ?>" method="POST">
			<div class="col-lg-6">
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="name" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo set_value('name'); ?>">
			    <?php echo form_error('name'); ?>
			  </div>
	 		
			  <span class="pull-right">
			  	<button type="submit" class="btn btn-sm btn-success">Save</button> <a href="<?php echo base_url();?>" class="btn btn-sm btn-primary">Cancel</a>
			  </span>
			</div>
			</form>
		</p>
		<br/><br/>
		<br/><br/>
	</div>
