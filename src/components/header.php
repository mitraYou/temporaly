<?php # $_SESSION['user_id'] = 1 ?>

<nav>
	<div class='logo'>
		<img src='images/logo.png' alt='' class="logo_img">
	</div>
	<!-- もしセッションがあるなら -->
	<?php if(isset($_SESSION['user_id'])): ?>
		<ul>
			<li><a href="#"><img src="images/icon.png" class="settei_icon"></a></li>
		</ul>
	<?php else: ?>
		<ul>
			<li><a href="#"><img src="images/hukidasi.png" class="settei_icon"></a></li>
			<li><a href="#"><img src="images/calendar.png" class="settei_icon"></a></li>
			<li><a href='#'><img src='images/icon.png' class='settei_icon'></a></li>
		</ul>
	<?php endif; ?>
</nav>
