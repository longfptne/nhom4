<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm,$date){
        $sql="insert into sanpham(name,price,img,mota,iddm,date) values('$tensp','$giasp','$hinh','$mota','$iddm','$date')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }   
    
    function loadall_sanpham_top10(){
        $sql="SELECT * FROM sanpham where 1 order by luotxem desc limit 0,10";
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    } 
    function loadall_sanpham_home(){
        $sql="SELECT * FROM sanpham where 1 order by id desc limit 0,8";
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql="SELECT * FROM sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }

    function load_ten_dm($iddm){
        if($iddm>0){
            $sql= "select*from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }
    function loadone_sanpham($id){
        $sql= "select*from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql= "select*from sanpham where iddm=".$iddm." AND id <> ".$id;
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }

    function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
        if($hinh!=""){
            $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        }
        else{
            $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        }
        pdo_execute($sql);
    }
    function loadall_sanpham_price($price1,$price2){
        
        $sql="SELECT * FROM sanpham where 1";
        if($price1!=""&& $price2!=""){
            $sql.=" and price >= '".$price1."' and price <='".$price2."'";
        }
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }
    function loadall_product_page(){
        $sql="SELECT * FROM sanpham where 1 order by id desc ";
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }
    function loadall_product_byProduct($idpro){
        $sql="SELECT iddm FROM sanpham WHERE  id = $idpro";
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }
    function count_productByiddm($iddm){
        $sql="SELECT COUNT(id) AS count FROM sanpham where iddm=".$iddm;

        $countSanphamByiddm=pdo_query($sql);
        return  $countSanphamByiddm;
    }
    function count_product(){
        $sql="SELECT * FROM sanpham ";

        $countSanpham=pdo_query($sql);
        return  sizeof($countSanpham);
    }
   
    
?>