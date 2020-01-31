<?php

if(!$_POST['command']){ ?>
    <form action="4.php" method="post">
        <input type="text" name="command" placeholder="Название команды">
        <input type="reset" value="Reset">
        <input type="submit" value="Ok">
    </form>
<?php
    die();
}

require_once 'lib/simple_html_dom.php';

$tables = array(
    '2019-20'   => 'https://terrikon.com/football/italy/championship/table',
    '2009-10'   => 'https://terrikon.com/football/italy/championship/2009-10/table'
);


for($i = 10; $i < 19; $i++)
    $tables['20' . $i . '-' . ($i + 1)] = 'https://terrikon.com/football/italy/championship/20' . $i . '-' . ($i + 1) . '/table';

krsort($tables);

foreach($tables as $key => $table){
    foreach (file_get_html($table)->find('tr') as $item){
        $pos = stripos($item->innertext, trim($_POST['command']));
        if($pos == 80 || $pos == 79)
            echo $key . ' ' . explode('.', $item->innertext)[0] . '<br>';
    }
}