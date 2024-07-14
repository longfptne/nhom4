<?php


// function loadall_bill($iduser){
    
//     $sql= "select*from bill where iduser=".$iduser;
//     $listbill=pdo_query($sql);
//     return $listbill;
// }

// function loadone_bill($id){
//     $sql= "select*from bill where id=".$id;
//     $bill=pdo_query_one($sql);
//     return $bill;
// }
// function select_bill_one($id)
// {
//     $sql = "SELECT * FROM bill WHERE id = $id";
//     $result = pdo_query_one($sql);
//     return $result;
// }

function insert_bill($iduser,$name,$address,$tel,$pttt,$ngaydathang,$tongdonhang,$status,$note){
    $sql="insert into bill(iduser,bill_name,bill_address,bill_tel,bill_pttt,ngaydathang,tatal,bill_status,note) values('$iduser','$name','$address','$tel','$pttt','$ngaydathang','$tongdonhang','$status','$note')";
    return pdo_execute_return_lastInsertId($sql);
}
function select_bill_idUser($id_user){
    $sql="SELECT * FROM bill WHERE iduser = $id_user AND bill_status <> 4 AND bill_status <> 5 order by id desc";
    $listBill=pdo_query($sql);
    return  $listBill;
}
function select_bill_idUser_done($id_user){
    $sql="SELECT * FROM bill WHERE iduser = $id_user AND bill_status = 3  order by id desc";
    $listBill=pdo_query($sql);
    return  $listBill;
}

function update_bill_status($id,$id_user,$idStatus){
    if($idStatus == 5 ){

        $sql="UPDATE bill SET bill_status = $idStatus WHERE id = $id AND iduser = $id_user";
        
    } else if($idStatus == 6){
        
        $sql="UPDATE bill SET bill_status = $idStatus WHERE id = $id AND iduser = $id_user";

    }
    pdo_execute($sql);

}
function select_bill_count($iduser)
{
    $sql = "SELECT * FROM bill WHERE iduser = $iduser AND bill_status <> 4 AND bill_status <> 5";
    $result = pdo_query($sql);
    return sizeof($result);
}


function loadall_bill($iduser){
    $sql= "select*from bill where 1 ";
    if ($iduser) $sql="AND iduser=".$iduser;
    $sql.="order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function loadall_bill_by_day(){
    $sql= "SELECT * FROM  bill WHERE bill_status = 3";
   
    $listbill=pdo_query($sql);
    return $listbill;
}

function loadone_bill($id){
    $sql= "select*from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function select_bill_one($id)
{
    $sql = "SELECT * FROM bill WHERE id = $id";
    $result = pdo_query_one($sql);
    return $result;
}


function select_bill_all(){
    $sql="SELECT * FROM sanpham where 1 order by id desc limit 0,8";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}

function delete_bill($id){
    $sql="delete from bill where id=".$id;
    pdo_execute($sql);
}
function update_bill($id,$ttdh){
    $sql="update bill set bill_status='".$ttdh."' where id=".$id;
    
    pdo_execute($sql);//Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
}
?>