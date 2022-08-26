<?php if(isset($_SESSION['user_id'])): ?>
	<a href="consultation.php" class="btn btn--red btn--radius btn--cubic">
		<h1>相談する？</h1><i class="fas fa-angle-right fa-position-right"></i>
	</a>
<?php else: ?>
	<a href="login.php" class="btn btn--red btn--radius btn--cubic">
		<h1>ログインする</h1><i class="fas fa-angle-right fa-position-right"></i>
	</a>
<?php endif; ?>

