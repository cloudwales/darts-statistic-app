<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $options->title; ?>  Stats</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"> -->

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="col-lg-12">
	<h1>
		<?php echo $options->title; ?>

	<small>Statistics</small>
	<?php if ($this->session->userdata('is_logged_in')) { ?>
		<span class="pull-right">
			<a href="<?php echo base_url('logout'); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-off"></span> Logout</a> 
		</span>
		<?php } else { ?>
		<span class="pull-right">
			<a href="<?php echo base_url('login'); ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-off"></span> Login</a> 
		</span>
		<?php } ?>
	</h1>
	<hr/>
<?php if ($this->session->userdata('is_logged_in')) { ?>


<p>

<ul class="nav nav-tabs">
  <li role="presentation"><a href="<?php echo base_url(''); ?>">Home</a></li>

  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
      Players <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li>
      	<a href="<?php echo base_url('new_player'); ?>"><span class="glyphicon glyphicon-plus"></span> New Player</a>
      </li>
    </ul>
  </li>


  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
      Users <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li>
      	<a href="<?php echo base_url('users'); ?>"><span class="glyphicon glyphicon-user"></span> View Users</a>
      </li>
      <li>
      	<a href="<?php echo base_url('new_user'); ?>"><span class="glyphicon glyphicon-plus"></span> New User</a>
      </li>
    </ul>
  </li>

  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
      Settings <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li>
      	<a href="<?php echo base_url('master_reset');?>" onClick="return confirm('Are you sure you want to reset? This will delete all players and statistics!')"><span class="glyphicon glyphicon-trash"></span> Master Reset</a>
      </li>
    </ul>
  </li>
  
</ul>
</p>

<?php } ?>
<p><?php echo $this->session->flashdata('message'); ?></p>	
</div>

