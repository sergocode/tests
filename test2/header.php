<?php 

$quantity = 5;

$countsql = $db->prepare("SELECT COUNT(id) FROM news");
$countsql->execute();
$row = $countsql->fetch();
$numnews = $row[0];

$numlinks = ceil(($numnews/$quantity)-1);

$page = $_GET['page'];
$start = $page * $quantity;

//Получение всех новостей, сортировка по дате
function get_news_all() {
	global $db;
	global $start;
	global $quantity;
	$one_news = $db->query("SELECT * FROM `news` ORDER BY `news`.`idate` DESC LIMIT $start,$quantity");
	return $one_news;
}

 $news = get_news_all();

 foreach ($news as $one_news):?>
	<div class="one_news">
		<div class="idate"><?php echo date("d.m.Y", $one_news["idate"])?></div>
		<div class="title"><a href="<?php echo 'view.php?id='.$one_news["id"].''; ?>"><?php echo $one_news["title"]; ?></a></div>
		<div class="announce"><?php echo $one_news["announce"]; ?></div>
	</div>
<?php endforeach;  ?>


