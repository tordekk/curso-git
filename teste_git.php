<?php

require_once('Git.php');

//$repo = Git::open('C:/xampp/htdocs/sicope/testes');

$repo = Git::open('C:/Users/jeantoledo/Desktop/Aulas/curso-git');

//$repo->commit('Testando com o mauro');

echo '<pre>';
echo $repo->run('status');
$v1 = explode("by", $repo->run('status'));
$v2 = explode(',', $v1[1]);
print_r(explode(',', (explode("by", $repo->run('status'))[1])));
echo $repo->fetch() . '<br>';
echo $repo->status();

echo '</pre>';