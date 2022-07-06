<?php
function search()
{
    if (!isset($_GET['filter'])) {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
        // lấy 8sp lượt xem nhiều nhất
        $sql = "SELECT * FROM product where name_product like '%$keyword%'";
        $s = exeQuery($sql, true);
        client_render('search/index.php', compact('s'));
    } else {
        $filter = $_GET['filter'];
        if ($filter == 1) {
            $maxPrice = 15000000;
            $minPrice = 0;
            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
            $sql = "SELECT * FROM product where name_product like '%$keyword%' AND product.price_default > '$minPrice' AND product.price_default < '$maxPrice' ";
            $s = exeQuery($sql, true);
            client_render('search/index.php', compact('s'));
        } elseif ($filter == 2) {
            $maxPrice = 20000000;
            $minPrice = 15000000;
            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
            $sql = "SELECT * FROM product where name_product like '%$keyword%' AND product.price_default > '$minPrice' AND product.price_default < '$maxPrice' ";
            $s = exeQuery($sql, true);
            client_render('search/index.php', compact('s'));
        } elseif ($filter == 3) {
            $maxPrice = 25000000;
            $minPrice = 20000000;
            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
            $sql = "SELECT * FROM product where name_product like '%$keyword%' AND product.price_default > '$minPrice' AND product.price_default < '$maxPrice' ";
            $s = exeQuery($sql, true);
            client_render('search/index.php', compact('s'));
        } elseif ($filter == 4) {
            $maxPrice = 30000000;
            $minPrice = 25000000;
            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
            $sql = "SELECT * FROM product where name_product like '%$keyword%' AND product.price_default > '$minPrice' AND product.price_default < '$maxPrice' ";
            $s = exeQuery($sql, true);
            client_render('search/index.php', compact('s'));
        } elseif ($filter == 5) {
            $minPrice = 30000000;
            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
            $sql = "SELECT * FROM product where name_product like '%$keyword%' AND product.price_default > '$minPrice'";
            $s = exeQuery($sql, true);
            client_render('search/index.php', compact('s'));
        }
    }
}
