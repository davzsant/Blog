<h1>Usuarios</h1>
<ul>
<?php foreach($users as $user):?>
    <li><?= $user->userName ?></li>
<?php endforeach;?>
</ul>
