<?php
function product_detail()
{
    if (isset($_GET['product_id']) && $_GET['product_id'] > 0) {
        $product_id = $_GET['product_id'];

        // lấy chi tiết sản phẩm
        $sql = "SELECT * FROM product WHERE product_id = $product_id";
        $s = exeQuery($sql, false);
        $get_subcategory = $s['subcategory_id'];
        // Lấy sản phẩm tương tự
        $sql1 = "SELECT * FROM product WHERE subcategory_id = '$get_subcategory' ORDER BY RAND() LIMIT 6";
        $a = exeQuery($sql1, true);

        // Lấy màu sắc của 1 sản phẩm
        $sql2 = "SELECT * FROM color WHERE product_id = '$product_id' ORDER BY price_add ASC";
        $b = exeQuery($sql2, true);

        // lấy bảo hành
        $sql3 = "SELECT * FROM warranty ORDER BY price ASC";
        $h = exeQuery($sql3, true);


        // Lấy 5 cmt mới nhất
        $sql4 = "SELECT comment.comment_id, comment.product_id, comment.user_id, comment.content, comment.date_comment, user.user_id, user.fullname, user.email FROM duan1.comment, duan1.user WHERE comment.user_id = user.user_id AND comment.product_id = '$product_id' AND comment.status = '0' ORDER BY comment.date_comment DESC limit 5";
        $d = exeQuery($sql4, true);

        // update view
        $sql5 = "UPDATE product SET view = view + 1 WHERE product_id = $product_id";
        exeQuery($sql5);
        // lấy giá thấp nhất của 1 sản phẩm
        // $colors = "SELECT MIN(price) as pr FROM color WHERE product_id = $product_id";
        // $e = exeQuery($colors, false);
        if (isset($_POST['product_detail'])) {
            if (isset($_SESSION['email']) && $_SESSION['email']['status'] == 0) {
                $user_id = $_SESSION['email']['user_id'];
                $content = $_POST['content'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $date = date('Y-m-d H:i:sa', time());
                $sql = "INSERT INTO comment(product_id, user_id, content, date_comment) VALUE('$product_id' , '$user_id', '$content', '$date')";
                exeQuery($sql, false);
                header('Location:?msg=Bình luận thành công!');
            } elseif (isset($_SESSION['email']) && $_SESSION['email']['status'] == 1) {
                header('Location:?msg=Tài khoản của bạn đã bị khóa!');
            } else {
                header('Location:?msg=Bạn chưa đăng nhập nên chưa thể bình luận');
            }
        }

        // Add sản phẩm vào giỏ hàng
        if (isset($_POST['add_product'])) {
            if (isset($_SESSION['email'])) {
                $product_id = $_POST["product_id"];
                $user_id = $_SESSION['email']['user_id'];
                $a = $_POST['a'];
                $b = $_POST['b'];
                $ap = $_POST['ap'];
                $quantity = $_POST['qty'];
                $exp = explode(' ', $a);
                $color_id = (int)$exp[1];
                $exp2 = explode(' ', $b);
                $warranty_id = (int)$exp2[1];
                $price = ((int)$ap + (int)$exp[0] + (int)$exp2[0]) * $quantity;
                $cart = "SELECT * FROM cart WHERE user_id = '$user_id'";
                $c = exeQuery($cart, true);
                $existedIndex = -1;
                foreach ($c as $index => $item) {
                    if ($item['product_id'] == $product_id && $item['color_id'] == $color_id && $item['warranty_id'] == $warranty_id) {
                        $existedIndex = $index;
                        break;
                    }
                }
                // var_dump($existedIndex);
                // die;
                if ($existedIndex != -1) {
                    $sql9 = "UPDATE cart SET quantity = quantity + '$quantity' WHERE product_id = '$product_id' AND color_id = '$color_id' AND warranty_id = '$warranty_id'";
                    exeQuery($sql9);
                } else {
                    $sql = "INSERT INTO cart(user_id, product_id, color_id, warranty_id, quantity) VALUES('$user_id', '$product_id', '$color_id', '$warranty_id', '$quantity')";
                    exeQuery($sql, false);
                }
                header('Location: ?msg=Sản phẩm đã được thêm vào giỏ hàng');
            } else {
                header('Location: ?msg=Bạn chưa đăng nhập');
            }
        }
        client_render('product_detail/index.php', compact('s', 'a', 'b', 'h', 'd'));
    } else {
        header('location: /');
    }
}
