<?php
include_once('pdo.php');
function news_count_all()
{
  $sql = "SELECT COUNT(*) FROM news";
  return pdo_query_value($sql);
}
function news_insert($title, $img, $short, $content, $date, $hot, $id_user)
{
  $sql = "INSERT INTO news (title, img, short, content, date, hot, id_user) VALUES (?,?,?,?,?,?,?)";
  pdo_execute($sql, $title, $img, $short, $content, $date, $hot, $id_user);
}
function news_update($id, $title, $img, $short, $content, $date, $hot, $id_user)
{
  $sql = "UPDATE news SET title=?, img=?, short=?, content=?, date=?, hot=?, id_user=? WHERE id=?";
  pdo_execute($sql, $title, $img, $short, $content, $date, $hot, $id_user, $id);
}
function news_select_by_id($id)
{
  $sql = "SELECT * FROM news WHERE id=?";
  return pdo_query_one($sql, $id);
}

function news_delete($id)
{
  $sql = "DELETE FROM news WHERE id=?";
  if (is_array($id)) {
    foreach ($id as $ma) {
      pdo_execute($sql, $ma);
    }
  } else {
    pdo_execute($sql, $id);
  }
}
