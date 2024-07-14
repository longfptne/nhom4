<?php
function loadall_thongke($kyw = "") {
  
  // Build SQL query to select data from 'sanpham' and 'danhmuc' tables
  $sql = "SELECT danhmuc.id AS madm, danhmuc.name AS tendm, COUNT(sanpham.id) AS countsp, MIN(sanpham.price) AS minprice, MAX(sanpham.price) AS maxprice, AVG(sanpham.price) AS avgprice, SUM(sanpham.price) AS sumprice";
  
  $sql .= " FROM sanpham";
  $sql .= " LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm";
  $sql .= " WHERE 1";
  if($kyw!=""){
    $sql.=" and danhmuc.name like '%".$kyw."%'";
  }
  $sql .= " GROUP BY danhmuc.id";
  $sql .= " ORDER BY danhmuc.id DESC";

  // Execute SQL query and return the result set
  $listtk = pdo_query($sql);
  return $listtk;
}

?>