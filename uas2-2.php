<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UAS 2</title>
	<style type="text/css">
		body {
			margin: 0px;
		}

		.navtop {
			position: fixed;
			width: 100%;
			background-color: royalblue;
			top: 0;
		}

		.navtop img {
			display: block;
			margin: 10px auto;
		}

		main {
			width: 80%;
			margin: 100px auto 0 auto;
		}

		main .container {
			width: 100%;
			display: flex;
			justify-content: center;
		}

		main .left {
			width: 30%;
			text-align: left;

		}

		main .right {
			width: 30%;
			margin-left: auto;
			text-align: right;
		}

		main .solo {
			width: 30%;
			text-align: left;
			align-items: start;
		}
	</style>
</head>

<body>
	<div class="navtop">
		<img src="ubaya.png" alt="" width="50px">
	</div>

	<main>
		<?php
		$num = $_POST["number"];
		$paragraph = $_POST["paragraph"];

		while ($num > 0) {
			if ($num == 1) {
				echo "<div class='container'>";
				echo "<div class='solo'> " . $paragraph . "</div>";
				echo "<div class='right'> </div>";
				echo "</div>";
			} else {
				echo "<div class='container'>";
				echo "<div class='left'> " . $paragraph . "</div>";
				echo "<div class='right'> " . $paragraph . "</div>";
				echo "</div>";
			}
			echo "<br>";
			$num = $num - 2;
		}
		?>
	</main>
</body>

</html>