   <!-- BANNER STRAT -->
   <div class="banner inner-banner">
       <div class="container">
           <div class="bread-crumb mtb-60 center-xs">
               <div class="page-title">Đơn hàng của tôi </div>
               <div class="bread-crumb-inner right-side float-none-xs">
                   <ul>
                       <li><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i></li>
                       <li><span>Đơn hàng của tôi </span></li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
   <!-- BANNER END -->

   <!-- CONTAIN START -->
   <section class="container">
       <div class="pb-85 pt-55">
           <div class="row">
               <div class="col-xs-12 mb-xs-30">
                   <div class="cart-item-table commun-table">
                       <div class="table-responsive">
                           <table class="table">
                               <thead>
                                   <th>STT</th>
                                   <th>Sản phẩm</th>
                                   <th>Màu sắc</th>
                                   <th>Bảo hành</th>
                                   <th>Số lượng</th>
                                   <th>Giá (đồng)</th>
                               </thead>
                               <tbody>
                                   <?php foreach ($h as $index => $m) : ?>
                                       <tr>
                                           <td><?= $index + 1 ?></td>
                                           <td><?= $m['name_product'] ?></td>
                                           <td><?= $m['name_color'] ?></td>
                                           <td><?= $m['name_warranty'] ?></td>
                                           <td><?= $m['quantity'] ?></td>
                                           <td><?= number_format($m['unit_price']) ?></td>
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

               </div>
           </div>
           <hr>

           <hr>

       </div>
   </section>
   <!-- CONTAINER END -->