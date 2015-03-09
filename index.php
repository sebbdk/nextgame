<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Next game</title>
	<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/screen.css">
</head>
<body>
	
	<div class="content">
		<h1>
			Next game
			<p>Help me choose my next game by voting for the two games you like the most!</p>
		</h1>
		


		<div class="row game-ideas">

			<?php for($x = 6; $x > 0; $x--) : ?>
				<div class="col-md-6">
					<div class="well idea">
					<div class="media" style="background-image: url(https://placekitten.com/700/500);"></div>

						<div class="progress">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
								60%
							</div>
						</div>

						<button class="btn btn-lg btn-default vote-btn">Make this game!!</button>

						<h2>The lorem ipsum!</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
						
						<div>
							<iframe src="//www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;layout=button_count&amp;appId=759291594161922" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>
						</div>
					</div>	
				</div>
			<?php endfor; ?>

		</div>
	</div>

</body>
</html>