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
                                   <tr>
                                       <th scope="col">STT</th>
                                       <th scope="col">Mã đơn hàng</th>
                                       <th scope="col">Thời gian đặt hàng</th>
                                       <th scope="col">Trạng thái</th>

                                       <th scope="col">Chức năng</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php foreach ($w as $index => $q) : ?>
                                       <tr>
                                           <td><?php echo $index + 1 ?></td>
                                           <td><?= $q['code'] ?></td>
                                           <td><?= $q['create_at'] ?></td>
                                           <td> <?php
                                                if ($q['status'] == 0) {
                                                    echo "Chờ xác nhận";
                                                } else if ($q['status'] == 1) {
                                                    echo "Hủy đơn";
                                                } else if ($q['status'] == 2) {
                                                    echo "Đã xác nhận";
                                                } else if ($q['status'] == 3) {
                                                    echo "Đang giao hàng";
                                                } else if ($q['status'] == 4) {
                                                    echo "Giao hàng thành công";
                                                } else if ($q['status'] == 5) {
                                                    echo "Giao hàng thất bại";
                                                } else {
                                                    echo "";
                                                }
                                                ?> </td>
                                           <td><a class="btn btn-primary" href="view-invoice-detail?invoice_id=<?=$q['invoice_id']?>" role="button">Chi tiết</a></td>
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