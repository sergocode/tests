<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php 

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html>
<head>
	<?php $APPLICATION->ShowHead(); ?>
	<title><?php $APPLICATION->ShowTitle() ?></title>
	<?php 
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/style.css");
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/style_cusel.css");
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/jquery-ui.css");
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/jquery.min.js");
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/cusel-min-2.5.js");
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/script.js");
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/slider.js");
	?>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?=DEFAULT_TEMPLATE_PATH?>/img/logo.ico" type="image/x-icon">
</head>

<div id="panel"><? $APPLICATION->ShowPanel();?></div>

<body>
	<div class="content">

		<div class="cap">
			<div class="telephone_number">8 (4872) 31-13-45</div>
			<div class="your_home"></div>
			<div class="cap_key cap_key_1">Оставить заявку
			</div>
			<div class="плашка_1">
				<input tabindex="0" placeholder="ФИО" class="ФИО" type="text" name="ФИО">
				<input placeholder="Телефон" class="Телефон" type="text" name="">
				<select style="width: 309.5px">
					<option value="Репетитор">Репетитор</option>
					<option value="Гувернантка">Гувернантка</option>
					<option selected value="Няня">Няня</option>
					<option value="Водитель">Водитель</option>
					<option value="Садовник">Садовник</option>
				</select>
				<select style="width: 309.5px">
					<option value="Полный день">Полный день</option>
					<option value="Пол дня">Пол дня</option>
					<option selected value="График работы">График работы</option>
					<option value="несколько часов">несколько часов</option>
					<option value="Круглосуточно">Круглосуточно</option>
				</select>
				<input placeholder="Дополнительная информация" class="Дополнительная_информация" type="text" name="">
				<div class="Отправить"> <div class="Текст_в_отправить">Отправить</div> </div>

			</div>
			<div class="плашка_2">
				<input tabindex="0" placeholder="ФИО" class="ФИО" type="text" name="ФИО">
				<input placeholder="Телефон" class="Телефон" type="text" name="">
				<select name="Должность">
					<option value="Репетитор" >Репетитор</option>
					<option value="Гувернантка">Гувернантка</option>
					<option selected value="Няня">Няня</option>
					<option value="Водитель">Водитель</option>
					<option value="Садовник">Садовник</option>
				</select>
				<input tabindex="0" placeholder="Образование" class="ФИО" type="text" name="Образование">
				<input tabindex="0" placeholder="Прикрепить резюме" class="ФИО" type="text" name="Образование">
				<div class="Отправить_2"> <div class="Текст_в_отправить">Отправить</div> </div>

			</div>
			<div class="cap_key cap_key_2">Отправить резюме</div>
		</div>
		<header>
			<table>
					<tr>
						<td class="bok _1"><a href="index.php">Главная</a></td>
						<td class="bok _2">подобрать персонал
							<ul>
								<ol class="k"></ol>
								<ol>
									<li>О нас</li>
								</ol>
								<ol>
									<li>Задать вопрос</li>
								</ol>
								<ol>
									<li>Это интересно</li>
								</ol>
								<ol>
									<li class="низ">Отзывы</li>
								</ol>
							</ul>
						</td>
						<td class="mid m1">Цены</td>
						<td class="mid m2"><div class="заявка"><a href="personal.php">оставить</br>заявку</a></div></td>
						<td class="bok _3">оставить вакансию</td>
						<td class="bok _4">контакты</td>
					</tr>
			</table>
		</header>
	
		<div class="slider">
  			<div class="item">
        		<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/1.png" alt="Первый слайд">
        		<div class="slideText"></div>
    		</div>

    		<div class="item">
        		<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/2.png" alt="Второй слайд">
        		<div class="slideText"></div>
    		</div>

    		<div class="item">
        		<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/3.png" alt="Третий слайд">
        		<div class="slideText"></div>
    		</div>

    		<div class="item">
        		<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/4.png" alt="Четвертый слайд">
        		<div class="slideText"></div>
    		</div>

    		<div class="item">
        		<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/5.png" alt="Пятый слайд">
        		<div class="slideText"></div>
    		</div>

    		<div class="item">
        		<img src="<?=DEFAULT_TEMPLATE_PATH?>/img/6.png" alt="Шестой слайд">
        		<div class="slideText"></div>
    		</div>

  			<a class="prev" onclick="minusSlide()">&#10094;</a>
  			<a class="next" onclick="plusSlide()">&#10095;</a>
		</div>
		<br>

		<div class="slider_shadow"></div>

		<div class="slider-dots">
			<span class="slider-dots_item" onclick="currentSlide(1)"></span> 
  			<span class="slider-dots_item" onclick="currentSlide(2)"></span> 
  			<span class="slider-dots_item" onclick="currentSlide(3)"></span> 
  			<span class="slider-dots_item" onclick="currentSlide(4)"></span>
  			<span class="slider-dots_item" onclick="currentSlide(5)"></span>
  			<span class="slider-dots_item" onclick="currentSlide(6)"></span>
		</div>