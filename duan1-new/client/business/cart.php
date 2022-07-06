<?php
function cart(){
    if(isset($_SESSION['email'])){
        $user_id = $_SESSION['email']['user_id'];

        // lấy dữ liệu từ giỏ hàng
        $sql = "SELECT cart.cart_id, product.name_product, product.image_product, product.price_default, product.warranty, color.price_add, color.name_color, warranty.price, cart.quantity, warranty.name_warranty, warranty.warranty_w
        FROM (((duan1.cart
        INNER JOIN duan1.product ON cart.product_id = product.product_id)
        INNER JOIN duan1.color ON cart.color_id = color.color_id)
        INNER JOIN duan1.warranty ON cart.warranty_id = warranty.warranty_id) WHERE cart.user_id = '$user_id' ORDER BY cart_id DESC
        ";
        $a = exeQuery($sql, true);
        $total = 0;
        foreach ($a as $index => $j){
            $total += $j['quantity']*$j['price_default'] + $j['quantity']*$j['price_add'] + $j['quantity']*$j['price'];
        }
        // var_dump($total);
        // die;
        // lấy tổng giá của toàn bộ giỏ hàng
        // $sql1 = "SELECT SUM(total_price) as total FROM cart WHERE user_id = '$user_id'";
        // $b = exeQuery($sql1, false);
        client_render('cart/index.php', compact('a', 'total'));

        // xóa sản phẩm trong giỏ hàng
        /*code*/
        
    }else{
        header('Location:home');
    }
    
}

function del_product_in_cart(){
    $cart_id = $_GET['cart_id'];
    $sql112= "DELETE FROM cart WHERE cart_id = '$cart_id'";
    exeQuery($sql112);
    // client_render('cart/index.php?msg=bạn đã xóa thành công');
    header('Location:cart?msg=bạn đã xóa thành công ');
}
?>