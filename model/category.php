<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $category_name là tên loại
 * @throws PDOException lỗi thêm mới
 */
function category_insert($category_name, $hidden)
{
    $sql = "INSERT INTO category(name, hidden) VALUES(?,?)";
    pdo_execute($sql, $category_name, $hidden);
}
/**
 * Cập nhật tên loại
 * @param int $category_id là mã loại cần cập nhật
 * @param String $category_name là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function category_update($category_id, $category_name, $hidden)
{
    $sql = "UPDATE category SET name=?, hidden=? WHERE id=?";
    pdo_execute($sql, $category_id, $category_name, $hidden);
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
 * @param int $category_id là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function category_select_by_id($category_id)
{
    $sql = "SELECT * FROM category WHERE id=?";
    return pdo_query_one($sql, $category_id);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $category_id là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function category_exist($category_id)
{
    $sql = "SELECT count(*) FROM category WHERE id=?";
    return pdo_query_value($sql, $category_id) > 0;
}
