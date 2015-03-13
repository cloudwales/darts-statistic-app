<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $options->title; ?>  Stats</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

      <?php 
        $attributes = array('class' => 'form-signin');
        echo form_open('auth/validate_login', $attributes);
      ?>
<div class="col-lg-3 col-lg-offset-4">
<br/><br/>
<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title text-center">Please sign in</h1>
  </div>
  <div class="panel-body">
        <input type="username" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" id="password" name="password"  class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></br/>
        <?php echo $this->session->flashdata('message'); ?>
      <?php echo form_close();?>
      <p></p>
  </div>
  </div>

  </div>

</body>
</html>