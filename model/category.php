<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $category_name là tên loại
 * @throws PDOException lỗi thêm mới
 */
function category_insert($category_name)
{
    $sql = "INSERT INTO category(name) VALUES(?)";
    pdo_execute($sql, $category_name);
}
/**
 * Cập nhật tên loại
 * @param int $id là mã loại cần cập nhật
 * @param String $category_name là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function category_update($category_id, $category_name)
{
    $sql = "UPDATE category SET name=? WHERE category_id=?";
    pdo_execute($sql, $category_name, $category_id);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $category_id là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function category_delete($category_id)
{
    $sql = "DELETE FROM category WHERE id=?";
    if (is_array($category_id)) {
        foreach ($category_id as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $category_id);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function category_select_all()
{
    $sql = "SELECT * FROM category";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function loai_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function loai_exist($ma_loai)
{
    $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}
