<!DOCTYPE html>
<html>
	<head>
		<title> Моя страница </title>
		<link rel="stylesheet" href='mycss.css'>
		<link rel="shortcut icon" href='favicon.ico'>
	</head>
	<body>
		<div class="mydiv1">
			<?php
				echo "Результат вычисления длины радиуса окружности площадью 15 равен ";
				echo sqrt(15 / pi());
			?>
		</div>
	</body>
</html>