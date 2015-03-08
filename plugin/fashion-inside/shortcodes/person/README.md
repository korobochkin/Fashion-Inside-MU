#Шорткод person
Используется для создания небольшой карточки-вставки немного знакомящей читателей с человеком, о котором идет речь в статье. Использование дополнительных переносов строк и пробелов между шорткода не обязательно, в примере ниже они расставлены лишь для удобства чтения.
##Запись
```
[person avatar_url="human-face.jpg" name="Имя и фамилия" position="Кто этот человек в дух словах?"]
	Мини-биография
[/person]
```
##Атрибуты
###src
Путь до картинки с изображением портрета.
##HTML-разметка
```
<div class="person_card">
	<div class="media">
		<div class="media-left">
			<div class="person_portrait">
				<img src="human-face.jpg" alt="" width="150" height="150">
			</div>
		</div>
		<div class="media-body">
			<div class="person_about">
				<h3>Имя и фамилия</h3>
                <p class="position">Должность</p>
                <p class="description">Описание и небольшая автобиография</p>
			</div>
		</div>
	</div>
</div>
```