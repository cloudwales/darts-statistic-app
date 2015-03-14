<div class="col-lg-12">
<?php if ($this->session->userdata('is_logged_in')) { ?>
<hr>
	<h4>Admin Tools</h4>
	
	<a href="<?php echo base_url('new_player'); ?>" class="btn btn-primary btn-xs">New Player</a> | 
	
	<a href="<?php echo base_url('master_reset');?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure you want to reset? This will delete all players and statistics!')"><span class="glyphicon glyphicon-trash"></span> Master Reset</a>
	<?php } ?>
</div>
</div>


<script>
function myFunction() {
    var x;
    if (confirm("Press a button!") == true) {
        x = "";
    } else {
        x = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = x;
}
</script>
</div>
<footer>
<div class="col-lg-12">
<hr/>
	<p class="text-center">
		&copy; <a href="http://www.cloud-wales.co.uk" target="_blank">Cloud Wales</a> Web Development
	</p>
</div>
</footer>
</body>
</html>