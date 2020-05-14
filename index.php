<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Localhost</title>	
	<!-- Version beta version 1.1 -->
	
	<!-- Refresh Browser every 40s -->
	<meta http-equiv="refresh" content="40">
	<!-- Info creator -->
	<meta name="author" content="Clifford Valiente Nacuray">
	<meta name="description" content="Free UI localhost">
	<!--? Style files important -->
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Homenaje&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	<!-- Google fonts may not work in other browser "tested only in Google chrome"  -->
	<!-- Fonts needs to load via Internet or download it for your own -->
</head>

<body>
	<!-- Nothing Special here but your a nerd as me have fun reading my code :D -->
	<main class="main">
		<div class="cover">
			<div class="black">
				<div class="content">
					<div class="left">
						<div class="title">
							<h1>Welcome Back<br>Developer!</h1>
						</div>
					</div>
					<div class="right">

						<div class="title2">
							<h1 class="titlecolor2">Your Project Files</h1>
							<div class="filesonly">
								<div class="php">
									<?php
									/* GET INFO FILES */
									$dir = array_filter(glob('*'), 'is_dir');;
									if (!empty($dir)) {
										print('<ul class=listphp>');
										foreach ($dir as $item) {
											if (is_dir($item)) {
												printf('<li><a href="/%s">%s</a></li>', $item, $item);
											}
										}
										print('</ul>');
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

</html>
