<?php
function donhang()
{
  if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
    $sql = "SELECT * from invoice order by invoice_id desc";
    $x = exeQuery($sql, true);
    // var_dump($x);
    //die();
    admin_render('payment/index.php', compact('x'));
} else {
    header("location: " . BASE_URL);
}
}
function status_invoice()
{
  if (isset($_POST['status'])) {
    $sql = "UPDATE invoice SET status=" . $_POST['status'] . " WHERE invoice_id=" . $_GET['invoice_id'] . "";
    exeQuery($sql);
    header("location: donhang");
  }
}
function detail_invoice()
{
  //  $sql="SELECT * from invoice,user where invoice.user_id=user.user_id order by invoice.invoice_id";
  // $x=exeQuery($sql,true);

  $invoice_id = $_GET['invoice_id'];
  $invoice = "SELECT * FROM invoice where invoice_id='$invoice_id'";
  $b = exeQuery($invoice, false);
  $sql = "SELECT invoice_detail.invoice_id,invoice_detail.unit_price, product.name_product, product.image_product, product.price_default, product.warranty, color.price_add, color.name_color, warranty.price, invoice_detail.quantity, warranty.name_warranty, warranty.warranty_w
    FROM ((((duan1.invoice_detail
    INNER JOIN duan1.product ON invoice_detail.product_id = product.product_id)
    INNER JOIN duan1.color ON invoice_detail.color_id = color.color_id)
    INNER JOIN duan1.warranty ON invoice_detail.warranty_id = warranty.warranty_id) 
    INNER JOIN duan1.invoice ON invoice_detail.invoice_id = invoice.invoice_id) WHERE invoice_detail.invoice_id = '$invoice_id' ORDER BY invoice_id DESC
    ";
  $a = exeQuery($sql, true);
  //var_dump($a);
  //die();
  // var_dump($total);
  // die;
  // lấy tổng giá của toàn bộ giỏ hàng
  // $sql1 = "SELECT SUM(total_price) as total FROM cart WHERE user_id = '$user_id'";
  // $b = exeQuery($sql1, false);
  admin_render('payment/payment-detail.php', compact('a', 'b'));
}
