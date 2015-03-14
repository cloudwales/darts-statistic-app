<div class="col-lg-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Users<span class="pull-right">
	<a href="<?php echo base_url('new_user'); ?>" class="btn btn-default btn-xs">New User</a>
</span></h3>
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
			<a href="<?php echo base_url('edit_user'). '/' . $user['id']; ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
			<a href="<?php echo base_url('delete_user'). '/' . $user['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure you want to delete this user?')"><span class="glyphicon glyphicon-trash"></span> Delete</a>
		</td>			
	</tr>
<?php } ?>

</table>

</div>

</div>


