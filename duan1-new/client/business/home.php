<?php
function getProduct(){
    // lấy 8sp lượt xem nhiều nhất
    $sql = "SELECT  * FROM product ORDER BY view DESC LIMIT 8";
    $s = exeQuery($sql, true);

    // lấy 8sp mới nhất
    $sql1 = "SELECT  * FROM product ORDER BY post_date DESC LIMIT 8";
    $a = exeQuery($sql1, true);

    $sqlB = "SELECT * FROM banner";
    $b = exeQuery($sqlB, true);
    client_render('home/index.php', compact('s', 'a', 'b'));
}

?>