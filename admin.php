<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>frwk</title>
	<?php foreach($styles as $href) echo '<link rel="stylesheet" href="'.$href.'">'; ?>
</head>
<body class="dark">

	<div id="app">
		<div class="header flex">
			<div class="logo">micro</div>
			<div></div>
			<div></div>
			<div>
				<a href="">Пофиль</a>
				<a href="">Выход</a>
			</div>
		</div>
		<div class="sidebar">
			<ul>
				<li><a href="">Панель управления</a></li>
			</ul>
			<ul>
				<li class="title">Сайт</li>
				<li class="active"><a href="">Главная</a></li>
				<li><a href="">О компании</a></li>
				<li><a href="">Каталог</a></li>
				<li><a href="">Статьи</a></li>
				<li><a href="">Контакты</a></li>
			</ul>
			<ul>
				<li class="title">Инструменты</li>
				<li><a href="">Заявки <span class="count">4</span></a></li>
				<li><a href="">Статистика</a></li>
				<li><a href="">Файлы</a></li>
			</ul>
			<ul>
				<li><a href="">Настройки</a></li>
			</ul>
		</div>
		<div class="actions flex">
			<div>
				<p>Главная</p>
			</div>
			<div></div>
			<div>
				<button class="primary">Сохранить</button>
				<button>Отмена</button>
				<button>•••</button>
			</div>
		</div>
		<div class="content">
			<div class="inner">
				<h1>Заголовок 1</h1>
				<h2>Заголовок 2</h2>
				<h3>Заголовок 3</h3>
				<h4>Заголовок 4</h4>
				<h5>Заголовок 5</h5>
				<h6>Заголовок 6</h6>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing <br>elit. Optio quis accusantium eum quos velit voluptatum, <br>sapiente quam odit sit ad aperiam amet rem aspernatur <br>officia. Natus vel magni iusto voluptates?</p>
				<p><b>Жирный текст</b></p>
				<p><i>Курсивный текст</i></p>
				<ul>
					<li>Список</li>
					<li>Купить яйца</li>
					<li>Сделать уборку</li>
				</ul>
				<a href="">Ссылка</a>
				<br>
				<button class="primary">Кнопка</button>
				<br>
				<input type="text" value="Поле ввода">
				<br>
				<input type="text" value="" placeholder="Пустое поле">
				<br>
				<textarea>Текстовая область</textarea>
				<br>
				<select><option>Список</option></select>
				<label class="select">
					<p>Список с заголовком</p>
					<select><option>Список</option></select>
				</label>
				<label class="input">
					<p>Поле с заголовком</p>
					<input type="text" value="">
				</label>
				<label class="file">
					<p>Загрузить файл</p>
					<span><input type="file"><b>Перетащите сюда файлы</b></span>
				</label>
				<label class="img">
					<p>Загрузить изображение</p>
					<span><input type="file"><b>Перетащите сюда изображение</b></span>
					<img src="" style="display:none">
				</label>
				<div class="checkbox">
					<label><input type="checkbox" checked><p>Чекбокс 1</p></label>
					<label><input type="checkbox"><p>Чекбокс 2</p></label>
					<label><input type="checkbox"><p>Чекбокс 3</p></label>
				</div>
				<div class="radio">
					<label><input type="radio" name="radio" checked><p>Радио 1</p></label>
					<label><input type="radio" name="radio"><p>Радио 2</p></label>
					<label><input type="radio" name="radio"><p>Радио 3</p></label>
				</div>
				<label class="switch">
					<p>Свитчер</p><input type="checkbox" checked>
				</label>
				<table>
					<tr>
						<th>Имя</th>
						<th>Телефон</th>
					</tr>
					<tr>
						<td>Дмитрий</td>
						<td>2343243223</td>
					</tr>
					<tr>
						<td>Иван</td>
						<td>676574564</td>
					</tr>
					<tr>
						<td>Андрей</td>
						<td>3423423423</td>
					</tr>
				</table>
				<picture>
					<img src="" alt="">
				</picture>
				<div class="msg">
					<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Ratione qui ut nisi similique accusantium eligendi eaque eos incidunt sit magnam neque voluptatibus doloremque obcaecati sunt quos, dolorum nulla nam aut.</p>
				</div>
				<div class="tabs"></div>
				<div class="panel"></div>
				<div class="cards"></div>
				<div class="list"></div>
				<div class="accord"></div>
			</div>
		</div>
	</div>

	<?php foreach($scripts as $src) echo '<script src="'.$src.'"></script>'; ?>
</body>
</html>