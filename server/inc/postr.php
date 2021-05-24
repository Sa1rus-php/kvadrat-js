<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?php
function link_bar($page, $pages_count)
{
    for ($j = 1; $j <= $pages_count; $j++) {
// Вывод ссылки
        if ($j == $page) {
            echo ' <a >' . $j . '</a>';
        } else {
            echo ' <a href=' . $_SERVER['php_self'] . '?page=' . $j . '>' . $j . '</a> ';
        }
        if ($j != $pages_count) echo ' | ';
    }
    return true;
}

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
$sql = 'SELECT * FROM users LEFT JOIN passport ON users.user_id = passport.id limit ' . $start_pos . ' ,' . $perpage;
$result = $bd->prepare($sql);
$result->execute();
$row= $result->fetchAll();
$output = '';
$output .='
<div id="result">
<table class="table table-bordered">
<tr>
<th width="40%">User Login</th>
<th width="40%">FIO</th>
<th width="40%">Series</th>
<th width="40%">Num</th>
<th width="40%">Date</th>
<th width="40%">Delete</th>
</tr>
</div>
';

foreach ($row as $rows) {
    $output.='
    <tr>
    <td>'.$rows['user_login'].'</td>
    <td>'.$rows['user_fio'].'</td>
    <td>'.$rows['series'].'</td>
    <td>'.$rows['num'].'</td>
    <td>'.$rows['date'].'</td>
    <td><button data-id="'.$rows["id"].'" type="button" class="btn btn-warning btn-xs delete-btn">Delete</button> </td>
    </tr>
   
    ';
    }
?>
<script type="text/javascript">
    $(document).on("click",".delete-btn",function(){
        if (confirm("Are you sure delete this ?")) {
            var id = $(this).data('id');
            var element = this;
            $.ajax({
                url :"delete.php",
                type:"POST",
                cache:false,
                data:{deleteId:id},
                success:function(data){
                    if (data == 1) {
                        $(element).closest("tr").fadeOut();
                        alert("User record deleted successfully");
                    }else{
                        alert("Invalid User id");
                    }
                }
            });
        }
    });
</script>
<?php
echo $output;
link_bar($page, $pages_count);
