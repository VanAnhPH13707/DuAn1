 <!-- BANNER STRAT -->
 <section>
   <div class="banner">
     <div class="main-banner">
       <?php foreach ($b as $index => $m) : ?>
         <a href="<?= $m['link'] ?>">
           <div class="banner-1">
             <img src="<?= ADMIN . $m['image_banner'] ?>" alt="Streetwear" href="">
           </div>
         </a>
       <?php endforeach ?>
     </div>
   </div>
 </section>
 <!-- BANNER END -->

 <!-- CONTAIN START -->

 <!--  Featured Products Slider Block Start  -->
 <section class="container">
   <div class="ptb-85">
     <div class="product-slider owl-slider">
       <div class="row">
         <div class="col-xs-12">
           <div class="heading-part align-center mb-40">
             <h2 class="main_title">Sản phẩm được xem nhiều nhất</h2>
           </div>
         </div>
       </div>
       <div class="row">
         <div id="items">
           <div class="tab_content pro_cat">
             <ul>
               <li>
                 <div id="data-step1" class="items-step1 selected product-slider-main position-r" data-temp="tabdata" style="text-align: center;">
                   <?php foreach ($s as $index => $f) : ?>
                     <div class="col-md-3 col-xs-6 plr-20 mb-20">
                       <div class="product-item" style="margin-bottom: 50px">
                         <div class="product-image">
                           <a href="product_detail&product_id=<?= $f['product_id'] ?>">
                             <img src="<?= ADMIN . $f['image_product'] ?>" alt="Streetwear" href="">
                           </a>
                           <div class="product-detail-inner">
                             <div class="detail-inner-left align-center">
                               <ul>
                                 <li class="pro-cart-icon">
                                   <form>
                                     <button title="Add to Cart"><span></span></button>
                                   </form>
                                 </li>
                               </ul>
                             </div>
                           </div>
                         </div>
                         <div class="product-item-details">
                           <div class="product-item-name">
                             <a style="font-size: 18px;" href="product_detail&product_id=<?= $f['product_id'] ?>"><?= $f['name_product'] ?></a>
                           </div>
                           <div class="price-box">
                             <span class="price" style="font-weight: bold;"><?= number_format($f['price_default']) ?> <u>đ</u></span>
                           </div>
                         </div>
                       </div>
                     </div>
                   <?php endforeach ?>
                 </div>
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--  Featured Products Slider Block End  -->

 <!-- perellex-banner Start -->
 <section>
   <div class="perellex-banner align-center">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <div class="perellex-delail ptb-150">
             <div class="perellex-title">Các mẫu MacBook, iPad và iMac mới được cập nhật liên tục</div>
             <div class="perellex-subtitle mtb-20s">Hi-Store - Uy tín trong từng sản phẩm</div>
             <span><a href="home" class="btn sub-btn">Xem shop</a></span>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- perellex-banner Start -->

 <!--  New Products Slider Block Start  -->
 <section class="container">
   <div class="ptb-85">
     <div class="product-slider owl-slider">
       <div class="row">
         <div class="col-xs-12">
           <div class="heading-part align-center mb-40">
             <h2 class="main_title">Sản phẩm mới</h2>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="product-slider-main position-r">
           <div class="owl-carousel pro_cat_slider" style="text-align: center;">
             <?php foreach ($a as $index => $n) : ?>
               <div class="item">
                 <div class="product-item">
                   <div class="product-image">
                     <a href="product_detail&product_id=<?= $n['product_id'] ?>">
                       <img src="<?= ADMIN . $n['image_product'] ?>" alt="Streetwear" href="">
                     </a>
                     <div class="product-detail-inner">
                       <div class="detail-inner-left align-center">
                         <ul>
                           <li class="pro-cart-icon">
                             <form>
                               <button title="Add to Cart"><span></span></button>
                             </form>
                           </li>
                           <li class="pro-wishlist-icon"><a href="#"></a></li>
                         </ul>
                       </div>
                     </div>
                   </div>
                   <div class="product-item-details">
                     <div class="product-item-name">
                       <a href="product_detail&product_id=<?= $n['product_id'] ?>" style="font-size: 18px;"><?= $n['name_product'] ?></a>
                     </div>
                     <div class="price-box">
                       <span class="price" style="font-weight: bold;"><?= number_format($n['price_default']) ?> <u>đ</u></span>
                     </div>
                   </div>
                 </div>
               </div>
             <?php endforeach ?>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--  New Products Slider Block End  -->

 <!-- CONTAINER END -->