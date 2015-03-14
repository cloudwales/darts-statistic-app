<div class="col-lg-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Users</h3>
  </div>

    <table class="table ">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>Functions</th>
	</tr>

<?php foreach($users as $result => $user){ ?>
	<tr>
		<td>
			<?php echo $user['id']; ?>
		</td>
		<td>
			<?php echo $user['name']; ?>
		</td>
		<td>
			<?php echo $user['username'];?>
		</td>
		<td>	
			<?php echo $user['email']; ?>
		</td>
		<td>
			Functions
		</td>			
	</tr>
<?php } ?>

</table>

</div>
<span class="pull-right">
	<a href="<?php echo base_url('new_user'); ?>" class="btn btn-success btn-xs">New User</a>
</span>
</div>



</div>

