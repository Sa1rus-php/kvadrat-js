
<?php
$perpage = 5; // Количество отображаемых данных из БД

if (empty(@$_GET['page']) || ($_GET['page'] <= 0)) {
    $page = 1;
} else {
    $page = (int)$_GET['page']; // Считывание текущей страницы
}

$coun = $bd->prepare('SELECT * FROM users');
$coun->execute();
$count = $coun->rowCount();
$pages_count = ceil($count / $perpage); // Количество страниц

// Если номер страницы оказался больше количества страниц
if ($page > $pages_count) $page = $pages_count;
$start_pos = ($page - 1) * $perpage; // Начальная позиция, для запроса к БД

// Вызов функции, для вывода ссылок на экран

// Вывод информации из базы данных
echo '<b>Постраничный вывод информации</b></br>';


$sql = 'SELECT * FROM users LEFT JOIN passport ON users.user_id = passport.id limit ' . $start_pos . ' ,' . $perpage;
$result = $bd->prepare($sql);
$result->execute();
$row= $result->fetchAll();
foreach ($row as $rows) {
    echo "Login: " . $rows['user_login'] . " FIO: " . $rows['user_fio'] . " Series: " . $rows['series'] . " Num: " . $rows['num'] ." Date: " . $rows['date'] ."<br>";
    }

function link_bar($page, $pages_count)
{
    for ($j = 1; $j <= $pages_count; $j++) {
// Вывод ссылки
        if ($j == $page) {
            echo ' <a >' . $j . '</a>';
        } else {
            echo ' <a href=' . $_SERVER['php_self'] . '?page=' . $j . '>' . $j . '</a> ';
        }
// Выводим разделитель после ссылки, кроме последней
// например, вставить "|" между ссылками
        if ($j != $pages_count) echo ' | ';
    }
    return true;
} // Конец функции
link_bar($page, $pages_count);