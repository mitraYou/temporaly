<nav>
	<div class='logo'>
		<a href="index.php"><img src='images/logo.png' alt='' class="logo_img"></a>
	</div>
	<!-- もしセッションがあるなら -->
	<?php if(isset($_SESSION['user_id'])): ?>
		<ul>
			<li><a href="chat.php"><img src="images/hukidasi.png" class="settei_icon"></a></li>
			<li><a href=""><img src="images/calendar.png" class="settei_icon"></a></li>
			<li><a href='mypage.php'><img src='images/setting.png' class='settei_icon'></a></li>
		</ul>
	<?php else: ?>
		<ul>
			<li><a href="login.php"><img src="images/icon.png" class="settei_icon"></a></li>
		</ul>
	<?php endif; ?>
</nav>
