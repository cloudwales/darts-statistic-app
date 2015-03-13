


<div class="col-lg-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Statistics</h3>
  </div>
  <div class="panel-body">
    <table class="table ">
	<tr>
		<th>Name</th>
		<th>Played</th>
		<th>Matches Won</th>
		<th>Legs Won</th>
		<th>100's</th>
		<th>180's</th>
		<?php if ($this->session->userdata('is_logged_in')) { ?>
		<th></th>
		<?php } ?>
	</tr>

<?php foreach($stats as $result => $stat){ ?>
	<tr>
		<?php if ($this->session->userdata('is_logged_in')) { ?>

		<td><?php echo $stat['name']; ?></td>

		<td>
			<?php echo $stat['played'] . 
			' <a href="'. base_url('add_played') . '/' . $stat['id'] . '" class="btn btn-xs btn-success">
			<span class="glyphicon glyphicon-plus"></span></a>';
			if($stat['played'] == 0){
				echo '';
			}
			else
			{
				echo ' <a href="'. base_url('subtract_played') . '/' . $stat['id'] . '" class="btn btn-xs btn-danger">
				<span class="glyphicon glyphicon-minus"></span></a>';
			}
			?>
		</td>

		<td>	
			<?php echo $stat['matches_won'] . 
			' <a href="'. base_url('add_match') . '/' . $stat['id'] . '" class="btn btn-xs btn-success">
			<span class="glyphicon glyphicon-plus"></span></a>';
			if($stat['matches_won'] == 0){
				echo '';
			}
			else
			{
				echo ' <a href="'. base_url('subtract_match') . '/' . $stat['id'] . '" class="btn btn-xs btn-danger">
			<span class="glyphicon glyphicon-minus"></span></a>'; 
			}?>
		</td>

		<td>
			<?php echo $stat['legs_won']. 
			' <a href="'. base_url('add_leg') . '/' . $stat['id'] . '" class="btn btn-xs btn-success">
			<span class="glyphicon glyphicon-plus"></span></a>';
			if($stat['legs_won'] == 0){
				echo '';
			}
			else
			{
				echo  ' <a href="'. base_url('subtract_leg') . '/' . $stat['id'] . '" class="btn btn-xs btn-danger">
				<span class="glyphicon glyphicon-minus"></span></a>'; 
			}?>
		</td>

		<td>
			<?php echo $stat['tons']. 
			' <a href="'. base_url('add_ton') . '/' . $stat['id'] . '" class="btn btn-xs btn-success">
			<span class="glyphicon glyphicon-plus"></span></a>';
			if($stat['tons'] == 0){
				echo '';
			}
			else
			{
				echo ' <a href="'. base_url('subtract_ton') . '/' . $stat['id'] . '" class="btn btn-xs btn-danger">
				<span class="glyphicon glyphicon-minus"></span></a>'; 
			}?>
		</td>

		<td>
			<?php echo $stat['one_eighty']. 
			' <a href="'. base_url('add_one_eighty') . '/' . $stat['id'] . '" class="btn btn-xs btn-success">
			<span class="glyphicon glyphicon-plus"></span></a>';
			if($stat['one_eighty'] == 0){
				echo '';
			}
			else
			{
				echo ' <a href="'. base_url('subtract_one_eighty') . '/' . $stat['id'] . '" class="btn btn-xs btn-danger">
			<span class="glyphicon glyphicon-minus"></span></a>'; 
			}
			?>
		</td>
		<td>
			<a href="<?php echo base_url('edit_player') . '/' . $stat['id']; ?>" class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="<?php echo base_url('delete_player'). '/' . $stat['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure you want to delete this player?')"><span class="glyphicon glyphicon-trash"></span></a>
		</td>	
		<?php } else { ?>
		<td><?php echo $stat['name']; ?></td>
		<td><?php echo $stat['played']; ?></td>
		<td><?php echo $stat['matches_won']; ?></td>
		<td><?php echo $stat['legs_won']; ?></td>
		<td><?php echo $stat['tons']; ?></td>
		<td><?php echo $stat['one_eighty']; ?></td>
		<?php } ?>

				
	</tr>
<?php } ?>
</table>
</div>
</div>
</div>



<div class="col-lg-4">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Wins</h3>
  </div>
  <div class="panel-body">
    	<table class="table">
		<tr>
			<th>Name</th>
			<th>Wins</th>
		</tr>
		<?php foreach($wins as $result => $win){ ?>
		<tr>
			<td><?php echo $win['name']; ?></td>
			<td><?php echo $win['matches_won']; ?></td>
		</tr>
		<?php } ?>
	</table>
  </div>
</div>
</div>

<div class="col-lg-4">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Most 100's</h3>
  </div>
  <div class="panel-body">
    <table class="table">
		<tr>
			<th>Name</th>
			<th>Most Tons</th>
		</tr>
		<?php foreach($tons as $result => $ton){ ?>
		<tr>
			<td><?php echo $ton['name']; ?></td>
			<td><?php echo $ton['tons']; ?></td>
		</tr>
		<?php } ?>
	</table>
  </div>
</div>
</div>

<div class="col-lg-4">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Most 180's</h3>
  </div>
  <div class="panel-body">
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Most 180's</th>
		</tr>
		<?php foreach($one_eighties as $result => $one_eight){ ?>
		<tr>
			<td><?php echo $one_eight['name']; ?></td>
			<td><?php echo $one_eight['one_eighty']; ?></td>
		</tr>
		<?php } ?>
	</table>
  </div>
</div>

</div>

