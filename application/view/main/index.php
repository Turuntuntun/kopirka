<div>
    <h1>Список задач</h1>
    <?php foreach ($vars['tasks'] as $value) :?>
        <p>Имя:<?=$value['name']?></p>
        <p>Email:<?=$value['email']?></p>
        <p>Задача:<?=$value['text']?></p>
        <hr>
    <?php endforeach;?>

    <?php for ($i = 1; $i <= $vars['count']; $i++ ):?>
        <a href = /?page=<?= $i?>><?= $i?></a>
    <?php endfor;?>
    <br><hr>
    <?php  if (empty($_COOKIE['ID_USER'])) {
        echo '<a href = \'/login\'>Авторизация</a>';
    }?>

    <a href = '/task/add/'>Добавление задачи</a>

    <?php  if (isset($_COOKIE['RIGHT']) and $_COOKIE['RIGHT'] === 'admin') {
        echo '<a href = \'/task/delete\'>Удаление задачи</a>';
    }?>

</div>
