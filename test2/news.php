<?php require 'database.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="https://icdn.lenta.ru/favicon.ico">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Новости</title>
</head>
<body>
	<div class="content">
		<div class="cap">Новости</div>
		<div class="list_news">
			<?php require 'header.php'; ?>
		</div>
		<div class="navigation">
			<div class="pages">Страницы:</div>
			<div class="buttons">
			<?php
				for ($i=0; $i<=$numlinks; $i++) {
					$y = $i+1;
					if ($page == $i) {
						echo '<div class="button active"><a class="buttonhref activehref" href="news.php?page='.$i.'">'.$y.'</a></div>';
					}
					else {
						echo '<div class="button"><a class="buttonhref" href="news.php?page='.$i.'">'.$y.'</a></div>';
					}
				}
			  ?>
			</div>
		</div>
	</div>
</body>
</html>