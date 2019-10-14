<h1>Удаление задачи</h1>
<table>
<?php foreach ($vars['tasks'] as $value) :?>
    <tr>
        <td><?=$value['text']?></td>
        <td> <a href= /task/delete/?delete=<?=$value['id']?>>Удалить</a></td>
    </tr>
<?php endforeach;?>
</table>
