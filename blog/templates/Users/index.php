<h1>Usuarios</h1>
<ul>
<?php foreach($users as $user):?>
    <a href="/users/<?= $user->id?>">
        <li><?= $user->name ?></li>
    </a>
<?php endforeach;?>
</ul>
