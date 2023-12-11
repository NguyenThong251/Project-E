<?php
include_once('../model/pdo.php');

function order_count_all()
{
  $sql = "SELECT count(*) FROM `order`";
  return pdo_query_value($sql);
}

function order_detail($id)
{
  $sql = "SELECT * FROM `order` WHERE `id` = ?";
  return pdo_query_one($sql, $id);
}

function order_update($id, $status, $full_name, $fullname_receiver, $email, $email_receiver, $phone, $phone_receiver, $address, $address_receiver, $note)
{
  $sql = "UPDATE `order` SET `status` = ?, `full_name` = ?, `fullname_receiver` = ?, `email` = ?, `email_receiver` = ?, `phone` = ?, `phone_receiver` = ?, `address` = ?, `address_receiver` = ?, `note` = ? WHERE `id` = ?";
  pdo_execute($sql, $status, $full_name, $fullname_receiver, $email, $email_receiver, $phone, $phone_receiver, $address, $address_receiver, $note, $id);
}
