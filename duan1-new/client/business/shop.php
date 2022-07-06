<?php
function shop()
{
    if (isset($_GET['category_id'])) {
        if (!isset($_GET['filter'])) {
            $category_id = $_GET['category_id'];
            // lấy 8sp lượt xem nhiều nhất
            $sql = "SELECT product.product_id, product.name_product, product.price_default, product.image_product
                FROM (duan1.product
                INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE subcategory.category_id = '$category_id' 
            ";
            $s = exeQuery($sql, true);
            $sql1 = "SELECT  * FROM subcategory WHERE category_id = '$category_id'";
            $a = exeQuery($sql1, true);
            if (isset($_GET['subcategory_id'])) {
                $subcategory_id = $_GET['subcategory_id'];
                $sql = "SELECT * FROM product WHERE subcategory_id = '$subcategory_id'";
                $s = exeQuery($sql, true);
            }
            $sql2 = "SELECT * FROM category WHERE category_id = '$category_id'";
            $b = exeQuery($sql2, false);
            client_render('shop/index.php', compact('s', 'a', 'b'));
        } else {
            $filter = $_GET['filter'];
            if ($filter == 1) {
                $maxPrice = 15000000;
                $minPrice = 0;
                $category_id = $_GET['category_id'];
                // lấy 8sp lượt xem nhiều nhất
                $sql = "SELECT product.product_id, product.name_product, product.price_default, product.image_product
                FROM (duan1.product
                INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE subcategory.category_id = '$category_id' AND product.price_default > '$minPrice' AND product.price_default < '$maxPrice' 
                ";
                $s = exeQuery($sql, true);
                //    var_dump($s);
                //    die;
                $sql1 = "SELECT  * FROM subcategory WHERE category_id = '$category_id'";
                $a = exeQuery($sql1, true);
                if (isset($_GET['subcategory_id'])) {
                    $subcategory_id = $_GET['subcategory_id'];
                    $sql = "SELECT * FROM product WHERE subcategory_id = '$subcategory_id' AND price_default > '$minPrice' AND price_default < '$maxPrice'";
                    $s = exeQuery($sql, true);
                }
                $sql2 = "SELECT * FROM category WHERE category_id = '$category_id'";
                $b = exeQuery($sql2, false);
                client_render('shop/index.php', compact('s', 'a', 'b'));
            } elseif ($filter == 2) {
                $maxPrice = 20000000;
                $minPrice = 15000000;
                $category_id = $_GET['category_id'];
                // lấy 8sp lượt xem nhiều nhất
                $sql = "SELECT product.product_id, product.name_product, product.price_default, product.image_product
                FROM (duan1.product
                INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE subcategory.category_id = '$category_id' AND product.price_default > '$minPrice' AND product.price_default < '$maxPrice' 
                ";
                $s = exeQuery($sql, true);
                //    var_dump($s);
                //    die;
                $sql1 = "SELECT  * FROM subcategory WHERE category_id = '$category_id'";
                $a = exeQuery($sql1, true);
                if (isset($_GET['subcategory_id'])) {
                    $subcategory_id = $_GET['subcategory_id'];
                    $sql = "SELECT * FROM product WHERE subcategory_id = '$subcategory_id' AND price_default > '$minPrice' AND price_default < '$maxPrice'";
                    $s = exeQuery($sql, true);
                }
                $sql2 = "SELECT * FROM category WHERE category_id = '$category_id'";
                $b = exeQuery($sql2, false);
                client_render('shop/index.php', compact('s', 'a', 'b'));
            }elseif ($filter == 3) {
                $maxPrice = 25000000;
                $minPrice = 20000000;
                $category_id = $_GET['category_id'];
                // lấy 8sp lượt xem nhiều nhất
                $sql = "SELECT product.product_id, product.name_product, product.price_default, product.image_product
                FROM (duan1.product
                INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE subcategory.category_id = '$category_id' AND product.price_default > '$minPrice' AND product.price_default < '$maxPrice' 
                ";
                $s = exeQuery($sql, true);
                //    var_dump($s);
                //    die;
                $sql1 = "SELECT  * FROM subcategory WHERE category_id = '$category_id'";
                $a = exeQuery($sql1, true);
                if (isset($_GET['subcategory_id'])) {
                    $subcategory_id = $_GET['subcategory_id'];
                    $sql = "SELECT * FROM product WHERE subcategory_id = '$subcategory_id' AND price_default > '$minPrice' AND price_default < '$maxPrice'";
                    $s = exeQuery($sql, true);
                }
                $sql2 = "SELECT * FROM category WHERE category_id = '$category_id'";
                $b = exeQuery($sql2, false);
                client_render('shop/index.php', compact('s', 'a', 'b'));
            }elseif ($filter == 4) {
                $maxPrice = 30000000;
                $minPrice = 25000000;
                $category_id = $_GET['category_id'];
                // lấy 8sp lượt xem nhiều nhất
                $sql = "SELECT product.product_id, product.name_product, product.price_default, product.image_product
                FROM (duan1.product
                INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE subcategory.category_id = '$category_id' AND product.price_default > '$minPrice' AND product.price_default < '$maxPrice' 
                ";
                $s = exeQuery($sql, true);
                //    var_dump($s);
                //    die;
                $sql1 = "SELECT  * FROM subcategory WHERE category_id = '$category_id'";
                $a = exeQuery($sql1, true);
                if (isset($_GET['subcategory_id'])) {
                    $subcategory_id = $_GET['subcategory_id'];
                    $sql = "SELECT * FROM product WHERE subcategory_id = '$subcategory_id' AND price_default > '$minPrice' AND price_default < '$maxPrice'";
                    $s = exeQuery($sql, true);
                }
                $sql2 = "SELECT * FROM category WHERE category_id = '$category_id'";
                $b = exeQuery($sql2, false);
                client_render('shop/index.php', compact('s', 'a', 'b'));
            }elseif ($filter == 5) {
                $minPrice = 30000000;
                $category_id = $_GET['category_id'];
                // lấy 8sp lượt xem nhiều nhất
                $sql = "SELECT product.product_id, product.name_product, product.price_default, product.image_product
                FROM (duan1.product
                INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE subcategory.category_id = '$category_id' AND product.price_default > '$minPrice' 
                ";
                $s = exeQuery($sql, true);
                //    var_dump($s);
                //    die;
                $sql1 = "SELECT  * FROM subcategory WHERE category_id = '$category_id'";
                $a = exeQuery($sql1, true);
                if (isset($_GET['subcategory_id'])) {
                    $subcategory_id = $_GET['subcategory_id'];
                    $sql = "SELECT * FROM product WHERE subcategory_id = '$subcategory_id' AND price_default > '$minPrice'";
                    $s = exeQuery($sql, true);
                }
                $sql2 = "SELECT * FROM category WHERE category_id = '$category_id'";
                $b = exeQuery($sql2, false);
                client_render('shop/index.php', compact('s', 'a', 'b'));
            }
        }
    }
}
