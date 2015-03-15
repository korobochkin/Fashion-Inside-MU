#Шорткод wide-quote
Красочные и заметные вставки-цитаты. В качестве фона может быть установлен любой цвет, изображение или паттерн. Пропорции блока могут изменяться с помощью атрибута `ratio`. При использовании этого атрибута доступен `vertical_align`, позволяющий выравнивать цитату по вертикали. Запись производится в одну строчку.
##Запись
```
[wide-quote
	author="Имя автора"
	color="light"
	preset="yellow"
	bgscheme="photo"
	ratio="16by9"
	vertical-align="bottom"
	background_image="http://fashioninside.by/background.jpg"
	background_color="#ebd3ac"
]
	Текст цитаты
[/wide-quote]
```
##Атрибуты
###author
Имя автора. Выводится под текстом цитаты.
###color
Цвет шрифта цитаты. Доступны несколько вариантов.

 1. `dark` (по умолчанию) — черный шрифт (для светлого фона)
 2. `light` — белый шрифт (для темного фона)

###preset
Заранее установленные комбинации цвета шрифта и фона. При использовании этого атрибута `color` указывать не нужно.

 1. `yellow` — желтый фон с черным шрифтом

###bgscheme
Вариант того, как будет вести себя фон цитаты.

 1. `color` (по умолчанию) — сплошной цвет. По умолчанию установлен белый.
 2. `photo` — на фоне устанавливается фотография, которая подстраивается под размеры блока. Атрибут требует наличия `background_image` и `background_color`.
 3. `pattern` — на фоне устанавливается паттерн. Необходимо установить фоновый цвет.

###ratio
Соотношение сторон блока. Используется только в случае, если надо увеличить блок цитаты по высоте.

 — `16by9` — 16 к 9

###vertical_align
Атрибут сработает только при наличии `ratio`. Выравнивание цитаты по вертикали. Доступны три варианта.

 1. `bottom` (по умолчанию) — по нижнему краю
 2. `middle` — посередине
 3. `top` — по верхнему краю

###background_image
Адрес картинки или паттерна фона. Используется, если `bgscheme` установлен в `photo` или `pattern`. Если это фотография рекомендуется ширина не менее 991 пикселей.
###background_color
Фоновый цвет блока цитаты.
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