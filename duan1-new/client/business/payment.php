<?php

function check()
{
    $user_id = $_SESSION['email']['user_id'];
    $sql111 = "SELECT * FROM user WHERE user_id = '$user_id'";
    $u = exeQuery($sql111, false);
    client_render('checkout/index.php', compact('u'));
}
//function order(){
// $fullname = $_POST['fullname'];
// $contract_number = $_POST['contract_number'];
// $shipping_address = $_POST['address'];
// $email = $_POST['email'];
//client_render('checkout/order-view.php');
//}
function invoice_index()
{
    client_render('checkout/camon.php');
}

function invoice()
{
    if (isset($_SESSION['email'])) {
        $user_id = $_SESSION['email']['user_id'];
        $fullname = $_POST['fullname'];
        $code = rand(0, 9999);
        $email = $_SESSION['email']['email'];
        $address = $_POST['address'];
        $number = $_POST['contract_number'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:sa', time());
        $sql1 = "SELECT cart.cart_id, product.name_product, product.image_product,product.product_id,color.color_id,warranty.warranty_id, product.price_default, product.warranty, color.price_add, color.name_color, warranty.price, cart.quantity, warranty.name_warranty, warranty.warranty_w
        FROM (((duan1.cart
        INNER JOIN duan1.product ON cart.product_id = product.product_id)
        INNER JOIN duan1.color ON cart.color_id = color.color_id)
        INNER JOIN duan1.warranty ON cart.warranty_id = warranty.warranty_id) WHERE cart.user_id = '$user_id'";
        $a = exeQuery($sql1, true);
        $total1 = 0;
        foreach ($a as $index => $j) {
            $total1 += $j['quantity'] * $j['price_default'] + $j['quantity'] * $j['price_add'] + $j['quantity'] * $j['price'];
        }
        $insert_invoice = "INSERT INTO invoice(fullname,contract_number,address,email,total_price,create_at,code,user_id) values ('$fullname','$number','$address','$email','$total1','$date','$code','$user_id')";
        $invoice_id = insertDataAndGetId($insert_invoice);
        if ($insert_invoice) {
            //thêm vào invoice_details
            $total = 0;

            $sql = "SELECT cart.cart_id, product.name_product, product.image_product,product.product_id,color.color_id,warranty.warranty_id, product.price_default, product.warranty, color.price_add, color.name_color, warranty.price, cart.quantity, warranty.name_warranty, warranty.warranty_w
            FROM (((duan1.cart
            INNER JOIN duan1.product ON cart.product_id = product.product_id)
            INNER JOIN duan1.color ON cart.color_id = color.color_id)
            INNER JOIN duan1.warranty ON cart.warranty_id = warranty.warranty_id) WHERE cart.user_id = '$user_id'";
            $f = exeQuery($sql, true);
            foreach ($f as $index => $value) {
                $product_id = $value['product_id'];
                $color = $value['color_id'];
                $soluong = $value['quantity'];
                $baohanh = $value['warranty_id'];
                $total = $value['quantity'] * $value['price_default'] + $value['quantity'] * $value['price_add'] + $value['quantity'] * $value['price'];
                $insert_invoice_details = "INSERT INTO invoice_detail(invoice_id,product_id,color_id,warranty_id,quantity,unit_price,code) values ('$invoice_id','$product_id','$color','$baohanh','$soluong','$total','$code')";
                $v = exeQuery($insert_invoice_details, false);
                $update_quantity = "UPDATE color SET quantity = quantity - '$soluong' WHERE color_id = '$color'";
                exeQuery($update_quantity);
            }
            $delete_cart = "DELETE FROM cart WHERE user_id='$user_id'";
            exeQuery($delete_cart);
            header('Location: invoice-camon?msg=Bạn đã đặt hàng thành công, đơn hàng của bạn đang chờ chủ shop xác nhận');
        }
        client_render('checkout/order-view.php', compact('total', 'total1'));
    } else {
        // header('Location:home');
    }
}
function check_oder()
{
    if (isset($_SESSION['email'])) {
        $user_id = $_SESSION['email']['user_id'];
        // $sql111 = "SELECT * FROM user WHERE user_id = '$user_id'";
        // $u = exeQuery($sql111, false);
        $email = $_SESSION['email']['email'];
        $fullname = $_POST['fullname'];
        $contract_number = $_POST['contract_number'];
        $address = $_POST['address'];
        // lấy dữ liệu từ giỏ hàng
        $sql = "SELECT cart.cart_id, product.name_product, product.image_product, product.price_default, product.warranty, color.price_add, color.name_color, warranty.price, cart.quantity, warranty.name_warranty, warranty.warranty_w
        FROM (((duan1.cart
        INNER JOIN duan1.product ON cart.product_id = product.product_id)
        INNER JOIN duan1.color ON cart.color_id = color.color_id)
        INNER JOIN duan1.warranty ON cart.warranty_id = warranty.warranty_id) WHERE cart.user_id = '$user_id' ORDER BY cart_id DESC
        ";
        $a = exeQuery($sql, true);
        $total = 0;
        foreach ($a as $index => $j) {
            $total += $j['quantity'] * $j['price_default'] + $j['quantity'] * $j['price_add'] + $j['quantity'] * $j['price'];
        }
        // var_dump($total);
        // die;
        // lấy tổng giá của toàn bộ giỏ hàng
        // $sql1 = "SELECT SUM(total_price) as total FROM cart WHERE user_id = '$user_id'";
        // $b = exeQuery($sql1, false);
        client_render('checkout/order-view.php', compact('a', 'total', 'email', 'fullname', 'contract_number', 'address'));

        // xóa sản phẩm trong giỏ hàng
        /*code*/
    } else {
        header('Location:home');
    }
}
function view_invoice()
{
    $user_id = $_SESSION['email']['user_id'];
    $sql02 = "SELECT * from invoice where user_id='$user_id' order by invoice_id desc";
    $w = exeQuery($sql02,true);
    //  var_dump($x);
    //  die();
    client_render('invoice/index.php',compact('w'));
}
function view_invoice_detail()
{
  //  $sql="SELECT * from invoice,user where invoice.user_id=user.user_id order by invoice.invoice_id";
  // $x=exeQuery($sql,true);

  $invoice_id = $_GET['invoice_id'];
  $invoice = "SELECT * FROM invoice where invoice_id='$invoice_id'";
  $g = exeQuery($invoice, false);
  $sql00 = "SELECT invoice_detail.invoice_id,invoice_detail.unit_price, product.name_product, product.image_product, product.price_default, product.warranty, color.price_add, color.name_color, warranty.price, invoice_detail.quantity, warranty.name_warranty, warranty.warranty_w
    FROM ((((duan1.invoice_detail
    INNER JOIN duan1.product ON invoice_detail.product_id = product.product_id)
    INNER JOIN duan1.color ON invoice_detail.color_id = color.color_id)
    INNER JOIN duan1.warranty ON invoice_detail.warranty_id = warranty.warranty_id) 
    INNER JOIN duan1.invoice ON invoice_detail.invoice_id = invoice.invoice_id) WHERE invoice_detail.invoice_id = '$invoice_id' ORDER BY invoice_id DESC
    ";
  $h = exeQuery($sql00, true);
  //var_dump($a);
  //die();
  // var_dump($total);
  // die;
  // lấy tổng giá của toàn bộ giỏ hàng
  // $sql1 = "SELECT SUM(total_price) as total FROM cart WHERE user_id = '$user_id'";
  // $b = exeQuery($sql1, false);
  client_render('invoice/detail.php', compact('g', 'h'));
}
