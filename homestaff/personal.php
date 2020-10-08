<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ваш ДОМ Агенство");?>

				<div class="ПодборПерсонала">
			<div id="zagologok">Подобрать персонал</div>
			<div id="подбор">
				<div id="т1">Показать только</div>
				<select class="mini">
					<option class="miniO" value="Гувернантка">Гувернантка</option>
					<option class="miniO" selected value="Дворник">Дворник</option>
					<option class="miniO" value="Водитель">Водитель</option>
					<option class="miniO" value="Садовник">Садовник</option>
				</select>
				<div id="т2">Возраст от</div>
				<div id="т3">Стаж от</div>
				<input id="стаж_от" tabindex="0" placeholder="1" type="text" name="1">
				<input id="возраст_от" tabindex="0" placeholder="25" type="text" name="25">
				<div id="до">до</div>
				<div id="до1">до</div>
				<input id="стаж_до" tabindex="0" placeholder="30" type="text" name="30">
				<input id="возраст_до" tabindex="0" placeholder="65" type="text" name="65">
				<div id="кнопка_подобрать">подобрать</div>
			</div>
				<table id="personal_table">
					<tbody>
						<tr class="stroka1">
							<td class="tableCell  Cell1">ФИО</td>
							<td class="tableCell  Cell2">должность</td>
							<td class="tableCell  Cell3">возраст</td>
							<td class="tableCell  Cell4">стаж работы</td>
						</tr>

						<tr class="stroka2">
							<td class="tableCell unitname_1 Cell5" >Лопухова Надежда Александровна</td>
							<td class="tableCell info Cell6">Гувернантка</td>
							<td class="tableCell info Cell7">45</td>
							<td class="tableCell info Cell8">15 лет</td>
						</tr>

						<tr class="stroka3">
							<td class="tableCell unitname_2 Cell9">Ермакова Надежда Ивановна</td>
							<td class="tableCell info Cell10">Няня</td>
							<td class="tableCell info Cell11">30</td>
							<td class="tableCell info Cell12">5 лет</td>
						</tr>

						<tr class="stroka4">
							<td class="tableCell unitname_1 Cell13">Филимонов Евгений Семенович</td>
							<td class="tableCell info Cell14">Садовник</td>
							<td class="tableCell info Cell15">50</td>
							<td class="tableCell info Cell16">20 лет</td>
						</tr>

						<tr class="stroka5">
							<td class="tableCell unitname_2 Cell17">Лопухова Надежда Александровна</td>
							<td class="tableCell info Cell18">Уборщица</td>
							<td class="tableCell info Cell19">35</td>
							<td class="tableCell info Cell20">7 лет</td>
						</tr>

						<tr class="stroka6">
							<td class="tableCell unitname_1 Cell21">Миронов Юрий Герасимович</td>
							<td class="tableCell info Cell22">Конюх</td>
							<td class="tableCell info Cell23">60</td>
							<td class="tableCell info Cell24">15 лет</td>
						</tr>

						<tr class="stroka7">
							<td class="tableCell unitname_2 Cell25">Новикова Нина Алексеевна</td>
							<td class="tableCell info Cell26">Повар</td>
							<td class="tableCell info Cell27">55</td>
							<td class="tableCell info Cell28">30 лет</td>
						</tr>

						<tr class="stroka8">
							<td class="tableCell unitname_1 Cell29">Лопухова Надежда Александровна</td>
							<td class="tableCell info Cell30">Гувернантка</td>
							<td class="tableCell info Cell31">45</td>
							<td class="tableCell info Cell32">15 лет</td>
						</tr>

						<tr class="stroka9">
							<td class="tableCell unitname_2 Cell33">Лопухова Надежда Александровна</td>
							<td class="tableCell info Cell34">Гувернантка</td>
							<td class="tableCell info Cell35">45</td>
							<td class="tableCell info Cell36">15 лет</td>
						</tr>

						<tr class="stroka10">
							<td class="tableCell unitname_1 Cell37">Лопухова Надежда Александровна</td>
							<td class="tableCell info Cell38">Гувернантка</td>
							<td class="tableCell info Cell39">45</td>
							<td class="tableCell info Cell40">15 лет</td>
						</tr>

					</tbody>
				</table>
		</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>