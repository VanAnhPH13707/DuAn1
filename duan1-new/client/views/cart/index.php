   <!-- BANNER STRAT -->
   <div class="banner inner-banner">
       <div class="container">
           <div class="bread-crumb mtb-60 center-xs">
               <div class="page-title">Giỏ hàng</div>
               <div class="bread-crumb-inner right-side float-none-xs">
                   <ul>
                       <li><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i></li>
                       <li><span>Giỏ hàng</span></li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
   <!-- BANNER END -->
   <div>
       <p class="notification" style="text-align: center; color: #005DA5; font-weight: bold;">
           <?php
            if (isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                echo $msg;
            }
            ?>
       </p>
       <br>
   </div>
   <!-- CONTAIN START -->
   <section class="container">
       <div class="pb-85 pt-55">
           <div class="row">
               <div class="col-xs-12 mb-xs-30">
                   <div class="cart-item-table commun-table">
                       <div class="table-responsive">
                           <table class="table">
                               <thead>
                                   <tr>
                                       <th>Ảnh</th>
                                       <th>Tên sản phẩm</th>
                                       <th>Giá</th>
                                       <th>Gói bảo hành</th>
                                       <th>Số lượng</th>
                                       <th>Tổng giá</th>
                                       <th>Xóa</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php foreach ($a as $index => $c) : ?>
                                       <tr>
                                           <td>
                                               <a href="#">
                                                   <div class="product-image"><img alt="Streetwear" src="<?= ADMIN . $c['image_product'] ?>"></div>
                                               </a>
                                           </td>
                                           <td>
                                               <div class="product-title">
                                                   <a href="#" style="font-size: 14px;"><?= $c['name_product'] ?></a> <br>
                                                   <a href="#" style="font-size: 12px; color: #303030;">Màu sắc: <?= $c['name_color'] ?></a>
                                               </div>
                                           </td>
                                           <td>
                                               <ul>
                                                   <li>
                                                       <div class="base-price price-box">
                                                           <span class="price" style="font-size: 14px; color: #878787;"><?= number_format($c['price_default'] + $c['price_add']) ?> <u>đ</u></span>
                                                       </div>
                                                   </li>
                                               </ul>
                                           </td>
                                           <td>
                                               <ul>
                                                   <li>
                                                       <div class="base-price price-box">
                                                           <span class="price" style="font-size: 14px; color: #878787;"><?= $c['price'] ?> <u>đ</u></span> <br>
                                                           <span class="price" style="font-size: 12px; color: #303030;">(<?= $c['name_warranty'] ?><?php if ($c['warranty_w'] == 0) {
                                                                                                                                                        echo " - " . $c['warranty'] . " tháng";
                                                                                                                                                    } else {
                                                                                                                                                        echo " - " . $c['warranty'] + $c['warranty_w'] . " tháng";
                                                                                                                                                    }   ?>)</span>
                                                       </div>
                                                   </li>
                                               </ul>
                                           </td>
                                           <td>
                                               <div class="input-box">
                                                   <input type="text" style="width:30px; text-align: center" value="<?= $c['quantity'] ?>" disabled>
                                               </div>
                                           </td>
                                           <td>
                                               <div class="total-price price-box">
                                                   <span class="price" style="font-size: 14px; color: #878787;"><?= number_format($c['price_default']*$c['quantity'] + $c['price_add']*$c['quantity'] + $c['price']*$c['quantity']) ?> <u>đ</u></span>
                                               </div>
                                           </td>
                                           <td>
                                               <a href="del_product_in_cart?cart_id=<?= $c['cart_id'] ?>"><i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></a>
                                           </td>
                                       </tr>
                                   <?php endforeach ?>

                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
           <div class="mb-30">
               <div class="row">
                   <div class="col-sm-6">
                       <div class="mt-30">
                           <a href="home" class="btn btn-black"><span><i class="fa fa-angle-left"></i></span>Tiếp tục mua sắm</a>
                       </div>
                   </div>
                   <div class="col-sm-6">
                       <div class="mt-30 right-side float-none-xs">
                           <a href="view-invoice" class="btn btn-black">Trạng thái</a>
                       </div>
                   </div>
               </div>
           </div>
           <hr>
           <div class="mtb-30">
               <div class="row">
                   <div class="col-sm-6 mb-xs-40">
                   </div>
                   <div class="col-sm-6">
                       <div class="cart-total-table commun-table">
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th colspan="2">Tổng</th>
                                       </tr>
                                   </thead>
                                   <tbody>

                                       <tr>
                                           <td><b>Số tiền phải trả:</b></td>
                                           <td>
                                               <div class="price-box">
                                                   <span class="price"><b><?= number_format($total) ?> <u>đ</u></b></span>
                                               </div>
                                           </td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <hr>
           <div class="mt-30">
               <div class="row">
                   <div class="col-xs-12">
                       <div class="right-side float-none-xs">
                           <a href="payment" class="btn btn-black">Thanh toán<span><i class="fa fa-angle-right"></i></span></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- CONTAINER END -->