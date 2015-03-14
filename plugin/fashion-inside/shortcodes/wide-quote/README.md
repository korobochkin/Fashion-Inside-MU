#Шорткод wide-quote
Красочные вставки-цитаты для статей. В качестве фона может быть установлен любой цвет, изображение или паттерн.
##Запись
```
[wide-quote
	author="Имя автора"
	color="light"
	preset="yellow"
	bgscheme="photo"
	ratio="16by9"
	vertical-align="bottom"
	background_image="http://..."
	background_color="#ebd3ac"
]
	Текст цитаты
[/wide-quote]
```
##Атрибуты
###author
Имя автора. Выводится под текстом цитаты.
###color
Цвет шрифта. Доступны несколько вариантов.
 - `light` — белый шрифт (для темного фона)
 - `dark` — черный шрифт (для светлого фона)
###preset
При использовании этого атрибута `color` указывать не обязательно.
 1. `yellow` — желтый фон с черным шрифтом
###bgscheme
Вариант того, как будет вести себя фон цитаты.
 - `photo` — на фоне устанавливается фотография, которая подстраивается под размеры блока. Необходимо установить фоновый цвет.
 - `pattern` — на фоне устанавливается паттерн. Необходимо установить фоновый цвет.
###ratio
Соотношение сторон цитаты. По умолчанию не задано. Используется только в случае, если надо увеличить цитату по высоте.
 — `16by9` — 16 к 9.
###vertical_align
##HTML-разметка
```
<blockquote class="wide-quote wide-quote-dark wide-quote-pattern"  style="background-color: #ebd3ac; background-image: url('http://colourlovers.com.s3.amazonaws.com/images/patterns/1462/1462099.png?1398191744');">
	<div class="ratio"></div><div class="wide-quote-text">
		<div class="row">
			<div class="col-xs-3">
				<div class="wide-quote-quote" draggable="false" selectable="false">“</div>
			</div>
			<div class="col-xs-9">
				<p>Я больше люблю вдохновлять. Мой неисчерпаемый ресурс вдохновения – это любовь.</p>
				<footer>
					<p class="wide-quote-author">Полина Рябцева</p>
				</footer>
			</div>
		</div>
	</div>
</blockquote>
```