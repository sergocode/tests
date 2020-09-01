<?php require 'database.php'; ?>
<?php 

$id = $_GET['id'];

function get_news_all() {
	global $db;
	global $id;
	$one_news = $db->query("SELECT * FROM `news` WHERE id = $id");
	return $one_news;
}

 $news = get_news_all();

 foreach ($news as $one_news):?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="https://icdn.lenta.ru/favicon.ico">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title><?php echo $one_news["title"]; ?></title>
</head>
<body>
	<div class="content">
		<div class="cap"> <?php echo $one_news["title"]; ?> </div>
		<div class="full_news">
			<?php echo $one_news["content"]; ?>
		</div>
		<div class="all_news"> 
			<div class="all_newshref">
				<a href="news.php">Все новости >></a> 	
			</div>
		</div>
	</div>
</body>
</html>
<?php endforeach?>