<?php

function profile_index()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
        // lấy danh sách danh mục
        $sql = "SELECT profile_company.profile_id, profile_company.name_company, profile_company.tel, profile_company.address_company, profile_company.email, profile_company.map

        -- FROM (duan1.profile
        -- INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE name_product like '%$keyword%'
        ";
        $sql = "select * from profile_company where name_company like '%$keyword%'";
        $pro = exeQuery($sql, true);

        // hiển thị view
        admin_render('profile/index.php', compact('pro', 'keyword'), 'admin-assets/custom/category_index.js');
    } else {
        header("location: " . BASE_URL);
    }
}

function update_profile()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $profile_id = $_GET['profile_id'];
        $sql5 = "SELECT * FROM profile_company WHERE profile_id = '$profile_id'";
        $pro = exeQuery($sql5, false);
        admin_render('profile/update-profile.php', compact('pro'), 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}

function save_update_profile()
{
    $profile_id = $_POST['profile_id'];
    $name_company = $_POST['name_company'];
    $tel = $_POST['tel'];
    $address_company = $_POST['address_company'];
    $email = $_POST['email'];
    $map = $_POST['map'];

    $sql9 = " UPDATE profile_company
                        SET name_company = '$name_company',
                            tel ='$tel',
                            address_company = '$address_company',
                            email = '$email',
                            map = '$map'
                        WHERE profile_id= '$profile_id'";
    exeQuery($sql9);
    header("location: " . ADMIN_URL . 'profile?msg=Cập nhật thành công');
}
