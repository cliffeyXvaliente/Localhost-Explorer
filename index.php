<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="40">
	<meta name="description" content="Free UI localhost">
	<!-- IMPORT STYLE CSS FILE -->
	<link rel="stylesheet" href="style.css">
	<!-- Google fonts tested 2020  -->
	<!-- Fonts needs to load via Internet or download it on your device -->
	<link href="https://fonts.googleapis.com/css2?family=Homenaje&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

</head>

<body>

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
