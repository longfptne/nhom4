<?php
    function loadall_taikhoan($id){
        $sql="SELECT * FROM taikhoan WHERE 1";
        if($id != 0 && $id != ""){
            $sql.=" and id like '%".$id."%'";
        }
        $sql.=" order by id desc";
        $listtaikhoan=pdo_query($sql);
        return  $listtaikhoan;
    }
   
   
   
    function checkUserId($id){
        $sql = "SELECT * FROM taikhoan WHERE id = $id ";
       
        $result = pdo_query_one($sql);
     
        return $result;
    }


    function insert_taikhoan($email,$user,$pass,$avatar){
        $sql = "insert into taikhoan(user,pass,email,avatar) values('$email','$user','$pass','$avatar')";
                pdo_execute($sql);
    }
    function insert_taikhoan2($email,$user,$pass){
        $sql = "insert into taikhoan(user,pass,email) values('$email','$user','$pass')";
                pdo_execute($sql);
    }
    
    function checkuser($user,$pass){
        $sql ="select * from taikhoan where user='".$user."' and pass='".$pass."'"; 
        $sp = pdo_query_one($sql);
        return $sp;
    
    }
    function checkemail($email){
        $sql ="select * from taikhoan where email='".$email."'"; 
        $sp = pdo_query_one($sql);
        return $sp;
    
    }
    function checkUsername($user){
        $sql ="select * from taikhoan where user='".$user."'"; 
        $sp = pdo_query_one($sql);
        return $sp;
    
    }
    
    function update_taikhoan($id,$user,$pass,$email,$img,$address,$tel){
            $sql = "update taikhoan set  user='".$user."', pass='".$pass."', email='".$email."',avatar='".$img."',address='".$address."',tel='".$tel."' where id=".$id;
            pdo_execute($sql);
        
    }
   
    
    function update_taikhoanad($id,$user,$pass,$email,$address,$tel,$rol){
        $sql = "update taikhoan set  user='".$user."', pass='".$pass."', email='".$email."',address='".$address."',tel='".$tel."',role='".$rol."' where id=".$id;
    
    pdo_execute($sql);
    
    }
    function update_taikhoan_ByForgot_password($id,$pass){
        $sql = "update taikhoan set pass='".$pass."' where id=".$id;
    pdo_execute($sql);
}
function update_taikhoan_doimk($id,$pass){
    $sql = "update taikhoan set pass='".$pass."' where id=".$id;
pdo_execute($sql);
}
   
    function loadOne_taikhoan($id){
        $sql ="select *from taikhoan where id=?"; 
        return pdo_query_one($sql,$id);
    }
    function delete_taikhoan($id){
        $sql ="delete from taikhoan where id=".$id;
        pdo_execute($sql);
    }
    function count_taikhoan(){
        $sql="SELECT * FROM taikhoan ";

        $countSanpham=pdo_query($sql);
        return  sizeof($countSanpham);
    }



    
?>