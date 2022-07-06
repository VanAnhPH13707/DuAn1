<?php
function comment_index()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $sql = "SELECT comment.comment_id, COUNT(comment.product_id) AS cmp, product.name_product, comment.product_id FROM comment INNER JOIN product ON comment.product_id = product.product_id GROUP BY comment.product_id";
        $index_cmt = exeQuery($sql, true);
        admin_render('comment/index.php', compact('index_cmt'), 'admin-assets/custom/category_index.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function detail_comment()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $product_id = $_GET['product_id'];
        $sql2 = "SELECT comment.comment_id, product.name_product, user.email, comment.content, comment.date_comment, comment.status
        FROM ((duan1.comment 
        INNER JOIN duan1.user ON comment.user_id = user.user_id)
        INNER JOIN duan1.product ON comment.product_id = product.product_id) WHERE comment.product_id = '$product_id'
        ";
        $detail_comment = exeQuery($sql2, true);
        $sql3 = "SELECT * FROM product WHERE product_id = '$product_id'";
        $d_product =  exeQuery($sql3, false);
        admin_render('comment/detail-comment.php', compact('detail_comment', 'd_product'), 'admin-assets/custom/category_index.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function change_comment()
{
    $comment_id = $_GET['comment_id'];
    $status = $_GET['status'];
    $product_id = $_GET['product_id'];
    if ($status == 1) {
        $sql14 = "UPDATE comment SET status = '0' WHERE comment_id = '$comment_id'";
        exeQuery($sql14);
        header("location:" . ADMIN_URL . 'comment/detail-comment?product_id=' . $product_id);
    } elseif ($status == 0) {
        $sql15 = "UPDATE comment SET status = '1' WHERE comment_id = '$comment_id'";
        exeQuery($sql15);
        header("location:" . ADMIN_URL . 'comment/detail-comment?product_id=' . $product_id);
    }
}
function del_comment()
{
    $product_id = $_GET['product_id'];
    $comment_id = $_GET['comment_id'];
    $sql16 = "DELETE FROM comment WHERE comment_id='$comment_id'";
    exeQuery($sql16);
    header("location:" . ADMIN_URL . 'comment/detail-comment?product_id=' . $product_id);
}
