<!-- BANNER STRAT -->
<div class="banner inner-banner">
    <div class="container">
        <div class="bread-crumb mtb-60 center-xs">
            <div class="page-title">Chi tiết sản phẩm</div>
            <div class="bread-crumb-inner right-side float-none-xs">
                <ul>
                    <li><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i></li>
                    <li><span>Chi tiết sản phẩm</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->

<!-- CONTAIN START -->
<section class="container">
    <div class="pro-page pt-55">
        <div class="row">
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
            <div class="col-md-5 col-sm-5 mb-xs-30">
                <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native">
                    <?php foreach ($b as $index => $c) : ?>
                        <a href="#"><img src="<?= ADMIN .  $c['image_color'] ?>" alt="Streetwear"></a>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="row">
                    <form action="product_detail&product_id=<?= $_GET['product_id'] ?>" method="post">
                        <div class="col-xs-12">
                            <div class="product-detail-main">
                                <div class="product-item-details">
                                    <h1 class="product-item-name"><?= $s['name_product'] ?></h1>
                                    <p><?= $s['sub_decription'] ?></p>
                                    <input type="hidden" name="product_id" value="<?= $_GET['product_id'] ?>">
                                    <div class="price-box">
                                        <br>
                                        <input style="border: none; outline: none; background-color:white; font-size:2em; font-weight: bold; width: 190px" type="text" name="hp" id="hp" onchange="load(this)" disabled value="<?= number_format($s['price_default']) ?>">
                                        <u>đ</u>
                                        <input type="hidden" name="ap" id="ap" value="<?= $s['price_default'] ?>">
                                    </div>
                                    <br>

                                    <div class="product-size select-arrow mb-20 mt-30">
                                        <label>Màu sắc</label>
                                        <select class="selectpicker form-control" id="a" name="a" onchange="load(this)">
                                            <?php foreach ($b as $index => $c) : ?>
                                                <option value="<?= $c['price_add'] ?> <?= $c['color_id'] ?>"><?= $c['name_color'] ?></option value>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="product-color select-arrow mb-20">
                                        <label>Gói bảo hành</label>
                                        <select class="selectpicker form-control" id="b" name="b" onchange="load(this)">
                                            <?php foreach ($h as $index => $f) : ?>
                                                <option value="<?= $f['price'] ?> <?= $f['warranty_id'] ?>"><?= $f['name_warranty'] ?><?php if ($f['warranty_w'] == 0) {
                                                                                                                                            echo "";
                                                                                                                                        } else {
                                                                                                                                            echo " - " . $f['warranty_w'] . " tháng";
                                                                                                                                        }   ?></option value>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="mb-40">
                                        <div class="product-qty">
                                            <label for="qty">Số lượng:</label>
                                            <div class="custom-qty">
                                                <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">
                                                <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                                            </div>
                                        </div>
                                        <div class="bottom-detail cart-button">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <button title="Add to Cart" type="submit" name="add_product" class="btn-black"><span></span>Thêm vào giỏ hàng</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="ptb-85">
        <div class="product-detail-tab flipInX">
            <div class="row">
                <div class="col-md-12">
                    <div id="tabs">
                        <ul class="nav nav-tabs">
                            <li><a class="tab-Description selected" title="Description">Mô tả sản phẩm</a></li>
                            <li><a class="tab-Reviews" title="Reviews">Bình luận</a></li>
                        </ul>
                    </div>
                    <div id="items">
                        <div class="tab_content">
                            <ul>
                                <li>
                                    <div class="items-Description selected">
                                        <div class="Description">
                                            <p><?= $s['decription'] ?></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="items-Reviews">
                                        <div class="comments-area">
                                            <h4>Comments</h4>
                                            <ul class="comment-list mt-30">
                                                <?php foreach ($d as $index => $g) : ?>
                                                    <li>
                                                        <div class="comment-user"> <img src="<?= CLIENT ?>images/comment-user.jpg" alt="Streetwear"> </div>
                                                        <div class="comment-detail">
                                                            <div class="user-name"><?= $g['fullname'] ?></div>
                                                            <div class="post-info">
                                                                <ul>
                                                                    <li><?= $g['date_comment'] ?></li>
                                                                </ul>
                                                            </div>
                                                            <p><?= $g['content'] ?></p>
                                                        </div>
                                                    </li>
                                                <?php endforeach ?>

                                            </ul>
                                        </div>
                                        <div class="main-form mt-30">
                                            <h4>Để lại bình luận</h4>
                                            <div class="row mt-30">
                                                <form action="product_detail&product_id=<?= $_GET['product_id'] ?>" method="post">
                                                    <div class="col-xs-12 mb-20">
                                                        <textarea cols="30" rows="3" name="content" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <button class="btn-black" name="product_detail" type="submit">Gửi</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="pb-85">
        <div class="product-slider owl-slider">
            <div class="row">
                <div class="col-xs-12">
                    <div class="heading-part align-center mb-40">
                        <h2 class="main_title">Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-slider-main position-r">
                    <div class="owl-carousel pro_cat_slider">
                        <?php foreach ($a as $index => $r) : ?>
                            <div class="item" style="text-align:center;">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product_detail&product_id=<?= $r['product_id'] ?>">
                                            <img src="<?= ADMIN .  $r['image_product'] ?>" alt="Streetwear">
                                        </a>
                                        <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                                <ul>
                                                    <li class="pro-cart-icon">
                                                        <button title="Add to Cart"><span></span></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-details">
                                        <div class="product-item-name">
                                            <a href="product_detail&product_id=<?= $r['product_id'] ?>" style="font-size: 18px;"><?= $r['name_product'] ?></a>
                                        </div>
                                        <div class="price-box">
                                            <span class="price" style="font-weight: bold;"><?= number_format($r['price_default']) ?> <u>đ</u></span>
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
<!-- CONTAINER END -->
<script>
    function load(radio) {
        const numberFormat = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
        });

        var hp = document.getElementById("hp");
        var ap = document.getElementById("ap");
        let a = String(document.getElementById("a").value);
        let b = String(document.getElementById("b").value);
        let arr = a.split(' ')
        let arrb = b.split(' ')
        hp.value = (Number(arr[0]) + Number(arrb[0]) + Number(ap.value)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }
</script>