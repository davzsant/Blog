<h1>Dados buscados de <a href="https://hiperzoo.com.br/categorias/peixes">Hiperzoo</a></h1>
<ul>
<?php
    $content = file_get_contents("https://hiperzoo.com.br/categorias/peixes");
    preg_match_all('/<span data-target="nome_produto" class="text-body cursor-pointer text-limit-2" style="min-height:40px">(.*?)<\/span>/s'
   ,$content, $matches);
    foreach($matches[1] as $match) :
?>
    <li>
        <?= $match ?>
    </li>
</ul>

<?php endforeach; ?>
