<?php
require_once 'pdo.php';

function user_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro)
{
    $sql = "INSERT INTO user(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro) VALUES (?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat == 1, $vai_tro == 1);
}

function user_update($img, $fullname, $password, $email, $phone, $address, $status, $role, $id)
{
    $sql = "UPDATE user SET user_img=?, full_name=?, password=?, email=?, phone=?, address=?, status=?, role=? WHERE id=?";
    pdo_execute($sql, $img, $fullname, $password, $email, $phone, $address, $status, $role, $id);
}

function user_delete($id)
{
    $sql = "DELETE FROM user  WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}

function user_select_all()
{
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

function user_select_by_username($username)
{
    $sql = "SELECT * FROM user WHERE username=?";
    return pdo_query_one($sql, $username);
}

function user_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function user_select_by_role($vai_tro)
{
    $sql = "SELECT * FROM user WHERE vai_tro=?";
    return pdo_query($sql, $vai_tro);
}

function user_change_password($ma_kh, $mat_khau_moi)
{
    $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}

function user_count_all()
{
    $sql = "SELECT count(*) FROM user";
    return pdo_query_value($sql);
}
function user_select_by_id($id)
{
    $sql = "SELECT * FROM user WHERE id=?";
    return pdo_query_one($sql, $id);
}
