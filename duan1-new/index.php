<?php

session_start();
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "/";
require_once './commons/utils.php';
require_once './dao/pdo.php';
require_once './vendor/PHPMailer/src/Exception.php';
require_once './vendor/PHPMailer/src/PHPMailer.php';
require_once './vendor/PHPMailer/src/SMTP.php';
switch ($url) {
    case 'home':
        require_once './client/business/home.php';
        getProduct();
        break;
    case 'product_detail':
        require_once './client/business/product_detail.php';
        product_detail();
        break;
    case 'login':
        require_once './client/business/login.php';
        login();
        break;
    case 'register':
        require_once './client/business/register.php';
        register();
        break;
    case 'user_profile':
        require_once './client/business/user_profile.php';
        profile();
        break;
    case 'logout':
        require_once './client/business/login.php';
        logout();
        break;
       
    case 'cart':
        require_once './client/business/cart.php';
        cart();
        break;
    case 'search':
        require_once './client/business/search.php';
        search();
        break;
    case 'contact':
        require_once './client/business/contact.php';
        contact();
        break;
    case 'introduce':
        require_once './client/business/introduce.php';
        introduce();
        break;
       
    case 'change_password':
        require_once './client/business/change_password.php';
        change_password();
        break;
        
    case 'shop':
        require_once './client/business/shop.php';
        shop();
        break;
    case 'checkmail':
        require_once './client/business/forgot_password.php';
        check_mail();
        break;
    case 'forgot_password':
        require_once './client/business/forgot_password.php';
        forgot_pass();
        break;
    case 'save_forgot_pass':
        require_once './client/business/forgot_password.php';
        save_forgot_pass();
        break;
        
    case 'payment':
        require_once './client/business/payment.php';
        check();
        break;
    case 'order-view':
        require_once './client/business/payment.php';
        check_oder();
        break;
    case 'invoice':
        require_once './client/business/payment.php';
        invoice();
        break;
       
    case 'del_product_in_cart':
        require_once './client/business/cart.php';
        del_product_in_cart();
        break;
        // admin
    case 'cp-admin':
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;
    case 'cp-admin/category':
        require_once './admin/business/category.php';
        cate_index();
        break;
    case 'cp-admin/category/detail-category':
        require_once './admin/business/category.php';
        detail_category();
        break;
    case 'cp-admin/category/creat-new-category':
        require_once './admin/business/category.php';
        creat_new_category();
        break;
    case 'cp-admin/category/update-category':
        require_once './admin/business/category.php';
        update_category();
        break;
    case 'cp-admin/category/creat-new-subcategory':
        require_once './admin/business/category.php';
        creat_new_subcategory();
        break;
    case 'cp-admin/category/save-creat-new-subcategory':
        require_once './admin/business/category.php';
        save_creat_new_subcategory();
        break;
    case 'cp-admin/category/update-subcategory':
        require_once './admin/business/category.php';
        update_subcategory();
        break;
    case 'cp-admin/category/save-update-subcategory':
        require_once './admin/business/category.php';
        save_update_subcategory();
        break;
    case 'cp-admin/category/del-subcategory':
        require_once './admin/business/category.php';
        del_subcategory();
        break;
    case 'cp-admin/warranty':
        require_once './admin/business/warranty.php';
        warr_index();
        break;
    case 'cp-admin/warranty/creat-new-warranty':
        require_once './admin/business/warranty.php';
        creat_new_warranty();
        break;
    case 'cp-admin/warranty/update-warranty':
        require_once './admin/business/warranty.php';
        update_warranty();
        break;
    case 'cp-admin/warranty/save-creat-new-warranty':
        require_once './admin/business/warranty.php';
        save_creat_new_warranty();
        break;
    case 'cp-admin/warranty/save-update-warranty':
        require_once './admin/business/warranty.php';
        save_update_warranty();
        break;
    case 'cp-admin/warranty/del-warranty':
        require_once './admin/business/warranty.php';
        del_warranty();
        break;
    case 'cp-admin/comment':
        require_once './admin/business/comment.php';
        comment_index();
        break;
    case 'cp-admin/comment/detail-comment':
        require_once './admin/business/comment.php';
        detail_comment();
        break;
    case 'cp-admin/comment/change-comment':
        require_once './admin/business/comment.php';
        change_comment();
        break;
    case 'cp-admin/comment/del-comment':
        require_once './admin/business/comment.php';
        del_comment();
        break;
    case 'cp-admin/user':
        require_once './admin/business/user.php';
        user_index();
        break;
    case 'cp-admin/user/update-user':
        require_once './admin/business/user.php';
        update_user();
        break;
    case 'cp-admin/user/creat-new-user-admin':
        require_once './admin/business/user.php';
        creat_user_admin();
        break;
    case 'cp-admin/user/save-creat-new-user':
        require_once './admin/business/user.php';
        save_creat_user_admin();
        break;
    case 'cp-admin/product':
        require_once './admin/business/product.php';
        product_index();
        break;
    case 'cp-admin/product/creat-new-product':
        require_once './admin/business/product.php';
        creat_new_product();
        break;
    case 'cp-admin/product/save-creat-new-product':
        require_once './admin/business/product.php';
        save_creat_new_product();
        break;
    case 'cp-admin/product/save-creat-new-color':
        require_once './admin/business/product.php';
        save_creat_new_color();
        break;
    case 'cp-admin/product/update-product':
        require_once './admin/business/product.php';
        update_product();
        break;
    case 'cp-admin/product/save-update-product':
        require_once './admin/business/product.php';
        save_update_product();
        break;
    case 'cp-admin/product/creat-new-color':
        require_once './admin/business/product.php';
        creat_new_color();
        break;
    case 'cp-admin/product/update-color':
        require_once './admin/business/product.php';
        update_color();
        break;
    case 'cp-admin/product/del-color':
        require_once './admin/business/product.php';
        del_color();
        break;
    case 'cp-admin/product/del-product':
        require_once './admin/business/product.php';
        del_product();
        break;
    case 'cp-admin/product/save-update-color':
        require_once './admin/business/product.php';
        save_update_color();
        break;
    case 'cp-admin/product/detail-product':
        require_once './admin/business/product.php';
        detail_product();
        break;
    case 'cp-admin/user/save-update-user':
        require_once './admin/business/user.php';
        save_update_user();
        break;
    case 'cp-admin/user/lock-user':
        require_once './admin/business/user.php';
        lock_user();
        break;
    case 'cp-admin/category/save-creat-new-category':
        require_once './admin/business/category.php';
        save_creat_new_category();
        break;
    case 'cp-admin/category/save-update-category':
        require_once './admin/business/category.php';
        save_update_category();
        break;
    case 'cp-admin/category/del-category':
        require_once './admin/business/category.php';
        del_category();
        break;
    case 'cp-admin/banner':
        require_once './admin/business/banner.php';
        banner_index();
        break;
    case 'cp-admin/banner/creat-new-banner':
        require_once './admin/business/banner.php';
        creat_new_banner();
        break;
    case 'cp-admin/banner/save-creat-new-banner':
        require_once './admin/business/banner.php';
        save_creat_new_banner();
        break;
    case 'cp-admin/banner/update-banner':
        require_once './admin/business/banner.php';
        update_banner();
        break;
    case 'cp-admin/banner/save-update-banner':
        require_once './admin/business/banner.php';
        save_update_banner();
        break;
    case 'cp-admin/banner/del-banner':
        require_once './admin/business/banner.php';
        del_banner();
        break;
    case 'cp-admin/introduce':
        require_once './admin/business/introduce.php';
        introduce_index();
        break;
    case 'cp-admin/introduce/update-introduce':
        require_once './admin/business/introduce.php';
        update_introduce();
        break;
    case 'cp-admin/introduce/save-update-introduce':
        require_once './admin/business/introduce.php';
        save_update_introduce();
        break;
    case 'cp-admin/profile':
        require_once './admin/business/profile.php';
        profile_index();
        break;
    case 'cp-admin/profile/update-profile':
        require_once './admin/business/profile.php';
        update_profile();
        break;
    case 'cp-admin/profile/save-update-profile':
        require_once './admin/business/profile.php';
        save_update_profile();
        break;
    case 'cp-admin/donhang':
        require_once './admin/business/payment.php';
        donhang();
        break;
    case 'cp-admin/donhang-chitiet':
        require_once './admin/business/payment.php';
        detail_invoice();
        break;
    case 'invoice-camon':
        require_once './client/business/payment.php';
        invoice_index();
        break;
    case 'cp-admin/status_invoice':
        require_once './admin/business/payment.php';
        status_invoice();
        break;
    case 'view-invoice';
        require_once './client/business/payment.php';
        view_invoice();
        break;
    case 'view-invoice-detail';
        require_once './client/business/payment.php';
        view_invoice_detail();
        break;
    default:
        require_once './client/business/home.php';
        getProduct();
        break;
}
