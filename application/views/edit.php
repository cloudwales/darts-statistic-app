

	<div id="body">
		<p><br/><br/>
			<form role="form" action="<?php echo base_url('edit_player') . '/' . $profile['id']; ?>" method="POST">
			<div class="col-lg-6">
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="name" class="form-control" name="name" id="name" value="<?php echo $profile['name']; ?>" disabled>
			    <?php echo form_error('name'); ?>
			  </div>

			  <div class="form-group">
			    <label for="played">Matches Played</label>
			    <input type="name" class="form-control" name="played" id="played" value="<?php echo $profile['played']; ?>">
			    <?php echo form_error('played'); ?>
			  </div>

			  <div class="form-group">
			    <label for="matches_won">Matches Won</label>
			    <input type="name" class="form-control" name="matches_won" id="matches_won" value="<?php echo $profile['matches_won']; ?>">
			    <?php echo form_error('matches_won'); ?>
			  </div>

			  <div class="form-group">
			    <label for="legs_won">Legs Won</label>
			    <input type="name" class="form-control" name="legs_won" id="legs_won" value="<?php echo $profile['legs_won']; ?>">
			    <?php echo form_error('legs_won'); ?>
			  </div>

			  <div class="form-group">
			    <label for="tons">Over 100</label>
			    <input type="name" class="form-control" name="tons" id="tons" value="<?php echo $profile['tons']; ?>">
			    <?php echo form_error('tons'); ?>
			  </div>
			  <div class="form-group">
			    <label for="one_eighty">180</label>
			    <input type="name" class="form-control" name="one_eighty" id="one_eighty" value="<?php echo $profile['one_eighty']; ?>">
			    <?php echo form_error('one_eighty'); ?>
			  </div>
	 		
			  <button type="submit" class="btn btn-success">Save</button> <a href="<?php echo base_url();?>" class="btn btn-primary">Back</a>
			</div>
			</form>
		</p>
	</div>