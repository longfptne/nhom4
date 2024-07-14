<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    
          $idProduct = $id;
          $nameProduct = $name;
          $priceProduct = floatval($price);
          $imgProduct = $img;
          $motaProduct = $mota;
          
          $hinhpath="../upload/".$imgProduct;
          if(is_file($hinhpath)){
            $hinh=" <img src='".$hinhpath."'  width='60'>";
          }else{
            $hinh="no photo";
          }
?>
<h1>CẬP NHẬP SẢN PHẨM</h1>
<form class="general-form" action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
     
      <input type="hidden" name="id" value="<?=$idProduct?>">
      <div class="block_form d-f f-d">
        <label class="label_addsp" for="">Tên sản phẩm</label>
        <input class="ten_addsp" placeholder="Tên sản phẩm" type="text" name="tensp" value="<?= $name ?>"/>
      </div>

      <div class="block_form d-f f-d">
        <label class="label_addsp" for="">Giá</label>
        <input class="ten_addsp" type="number" name="giasp" value="<?= $priceProduct ?>" placeholder="Giá sản phẩm" />
      </div>

      <div class="block_form d-f f-d">
        <label class="label_addsp" for="">Hình</label>
        <input class="ten_addsp" type="file" name="hinh" />
        <?=$hinh?>
      </div>

      <div class="block_form d-f f-d"> 
        <label class="label_addsp" for="">Mô tả</label>
        <textarea name="mota" id="" cols="30" rows="5" value= "<?= $motaProduct ?>">
          <?= $motaProduct ?>
        </textarea>
      </div> 

      <div class="block_form d-f f-d">

        <label for=""> Danh mục </label>
        <select name="iddm">
        <option value="0" selected>Tất cả</option>
            <?php 
                foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                if($iddm==$id) $s="selected"; else $s="";
                echo ' <option value="'.$id.'" '.$s.'>'.$name.'</option>';
              }
            ?>

        </select>

      </div>


      <div class="block_form d-f g-10 al-c">
        <input class="submit-general-form" type="submit" name="capnhat" value="CẬP NHẬT">
        <input class="input_addsp" type="reset" value="NHẬP LẠI">
        <a href="index.php?act=listsp" style="display:block;border-radius: 4px;padding: 8px 15px;color:var(--white )" class=" cancel-general-form" >Danh sách</a>
      </div>

  
      
    

     


      
      

      <?php
        if(isset($thongbao)&&($thongbao!="")){
          echo $thongbao;
        }
          
      ?>

</form>