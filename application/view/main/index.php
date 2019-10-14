<h1>Список задач</h1>
<?php foreach ($vars['tasks'] as $value) :?>
    <p>Имя:<?=$value['name']?></p>
    <p>Email:<?=$value['email']?></p>
    <p>Задача:<?=$value['text']?></p>
<?php endforeach;?>
<a href = '/login'>Авторизация</a>
<a href = '/task/add/'>Добавление задачи</a>
<a href = '/task/delete'>Удаление задачи</a>