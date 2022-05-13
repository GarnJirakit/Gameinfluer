<?php
$userName = '';
$show = '';
if(!empty($_SESSION['id']) && $_SESSION['id']) {
	$userName =  $_SESSION['name'];		
} else {
	$show = 'hidden';
}
?>	
<br>
<span><a href="index.php">Home</span>
<div id="loggedPanel" class="<?php echo $show; ?>">
	Logged in <span id="loggedUser" class="logged-user"><?php echo $userName; ?></span>
	<a href="action.php?action=logout">Logout</a>
</div>
<br><br><br>