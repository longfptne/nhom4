<?php
    // if(is_array($bill)){
    //     extract($bill);
    //    $idBill = $bill["bill_status"];
    //   //  echo $bill["bill_status"];
    // }
    $arr = [
      "Đơn hàng mới (admin)",
      "Đang xử lý (admin)",
      "Đang giao hàng (admin)",
      "Đã giao hàng (admin)",
      "Đã hủy đơn hàng (admin)",
      "Đã hủy đơn hàng (Khách hàng)",
      "Đã nhận đơn hàng (Khách hàng)"
    ];
    $arrSugar[2000]= "100% đường";
    $arrSugar[1000]= "70% đường";
    $arrSugar[0]= "30% đường";
    // 
    $arrSize[0]= "Size mặc định";
    $arrSize[5000]= "Size M";
    $arrSize[10000]= "Size L";
    // $arrSize[0]= "100% đường";
    // 
    $arrIce[1]= "0% đá";
    $arrIce[2]= "30% đá";
    $arrIce[3]= "50% đá";
    $arrIce[4]= "70% đá";
    $arrIce[5]= "100% đá";
    // 

    $arrTopping[0]= "Không có topping";
    $arrTopping[4000]= "Chân trâu baby";
    $arrTopping[6000]= "Khoai môn";
    $arrTopping[7000]= "Trân châu đen";
    $arrTopping[8000]= "Trân châu cam";
    $arrTopping[10000]= "Trân châu baby ,Khoai môn";
    $arrTopping[11000]= "Trân châu baby,Trân châu đen";
    $arrTopping[12000]= "Trân châu baby,Trân châu cam";
    $arrTopping[15000]= "Trân châu cam,Trân châu đen";
    $arrTopping[14000]= "Trân châu cam,khoai môn";
    $arrTopping[13000]= "Trân châu đen,khoai môn";
    $arrTopping[17000]= "Trân châu baby ,Khoai môn,Trân châu đen";
    $arrTopping[18000]= "Trân châu baby ,Khoai môn,Trân châu cam";
    $arrTopping[19000]= "Trân châu baby ,Trân châu cam,Trân châu đen";
    $arrTopping[21000]= "Trân châu cam,Trân châu đen,Khoai môn";
    $arrTopping[25000]= "Trân châu baby ,Khoai môn,Trân châu đen,Trân châu cam";
    

?>

<main id="listbill" class="w-100 d-f f-d">
               
               <h1 class="title_product_new">Đơn hàng </h1>
               
              <!-- ----------------------------------- Form hiển thị giỏ hàng ----v--------------------- -->
              <section class="contain-form-submit-cart w-100 d-f f-d al-c">
              <div class="search_list-product-admin w-100">

              <!-- <form action="" class="d-f form-search">
              <input
                type="text"
                placeholder="Tìm kiếm theo tên sản phẩm..."
                class="input-search"
              />
              <input
                type="submit"
                class="submit-search-form"
                value="Tìm kiếm"
              />
            </form>   -->
                <!-- <h2>Mã đơn hàng :</h2> -->
              <!-- <form action="index.php?act=listbill" class="form-submit-cart w-100">    -->
                <?php
                    foreach($listbill as $bill){

                      extract($bill);
                     $idBill = $bill["bill_status"];
                     $idBill2 = $bill["id"];
                     echo "<h2>Mã đơn hàng : ".$idBill2."</h2>";
                     $cart_By_idbill = loadall_cart($idBill2);

                    ?>
                    <!-- san phẩm khách hàng  mua -->
                      <div class="thongtin-bill">
                    <table style="text-align: center;">
                      <thead>
                      <tr>
                        <td style="width: 25%; margin: auto; padding: 5px;">Tên sản phẩm</td>
                        <td style="width: 10%; margin: auto;padding: 5px;text-align: center; ">ảnh </td>
                        <td style="width: 25%; margin: auto;padding: 5px;text-align: center;">Chi tiết</td>
                        <td style="width: 20%; margin: auto;padding: 5px;text-align: center;">Topping</td>
                        <td style="width: 8%; margin: auto;padding: 5px;text-align: center;">Số lượng</td>
                      </tr>
                      </thead>
                      <tbody>
                        <!--  -->
                        <?php 
                        foreach($cart_By_idbill as $cart){
                          extract($cart);
                          ?>
                      <tr>
                        <td><?=$name?>
                      
                      </td>
                      
                      <td>
                          <img style="max-width: 90%; max-height: 90%;" src="../<?=$img?>" alt="">
                        </td>
                          <td><?php 
                            $size=  $cart['size'];
                            $sugar=  $cart['sugar'];
                            $ice=  $cart['ice'];
                            // echo $size;
                          echo $arrSize[$size].',<br>';
                          echo $arrSugar[$sugar].',<br>';
                          echo $arrIce[$ice].'<br>';
                          ?></td>
                          <td><?php $number=$cart['topping']; echo $arrTopping[$number];  ?></td>
                          <td><?=$soluong?></td>
                      </tr>
                      <?php } ?>
                    
                      </tbody>
                    </table>
                    </div>
                    
                    <!-- cập nhật trạng thái -->
                    <div class="box-flex">
                  <!-- </div> -->
              <!-- tình trạng đơn hàng  -->
                  <div class="tinhtrang-bill">
                    <!-- <form action="index.php?act=suabill&id=?" class="general-form" method="post" enctype="multipart/form-data"> -->
                      <form action="" class="general-form" method="post" enctype="multipart/form-data">
                <div class="block_form d-f f-d">
                <label style="width: 80%; text-align: center;" id="title-bill" for="">TÌNH TRẠNG ĐƠN HÀNG <b class="tinhtrangdonhang"><?=$arr[$idBill]?></b></label>
                <?php if( $idBill >= 0 &&  $idBill <= 4){ ?>
                  <select name="ttdh" id="" >
                    <?php for($i = 0 ; $i < count($arr);$i++){ ?>
                      <option 
                      <?php if($i == 5 || $i == 6)echo "disabled";?>
                      <?php if($i == $idBill){echo "selected";} ?> 
                        value="<?= $i ?>" >
                        <?= $arr[$i] ;?>
                      </option>
                    <?php } ?>
                    </select>
                    </div>
                    <div class="block_form d-f g-10 al-c">
                    <input type="hidden" name="id" value="<?=$idBill2?>">
                    <input type="submit" value="Cập Nhập" class="submit-general-form" name="capnhap">
                    <input type="reset" value="Hủy" class="cancel-general-form" >
                    <a href="index.php?act=listbill" style="display:block">
                    <input type="button" value="Quay trở lại" style="padding: 8.5px;" class="" >
                    </a>
                    <!-- <a href="index.php?act=lisdm"><input type="button" value="Danh Mục"></a> -->
                    </div>
                  <?php } else if($idBill  == 5){ ?>
                    <select name="ttdh" id="" >
                    <?php for($i = 0 ; $i < count($arr);$i++){ ?>

                      <option disabled
                      <?php if($i === $idBill){echo "selected";}else {echo " ";}  ?> 
                       value="<?= $i ?>"
                       >
                        <?= $arr[$i] ;?>
                      </option>

                   <?php } ?>
                   
                  </select>
                  <!-- </div> -->
          
                  <div class="block_form d-f g-10 al-c">
                  <input type="hidden" name="id" value="<?=$$idBill2?>">
                  <input type="button" onclick="alert('Khách hàng đã hủy đơn hàng, không thể cập nhật')" value="Cập Nhập" class="submit-general-form" name="capnhap">
                  <input type="reset" value="Hủy" class="cancel-general-form" >
                  <a href="index.php?act=listbill" style="display:block">
                  <input type="button" value="Quay trở lại" style="padding: 8.5px;" class="" >
                  </a>
                  <!-- <a href="index.php?act=lisdm"><input type="button" value="Danh Mục"></a> -->
                  </div>

                  <?php } else if($idBill  == 6){ ?>

                    <select name="ttdh" id="">
                    <?php for($i = 0 ; $i < count($arr);$i++){ ?>
                      <option disabled
                      <?php if($i === $idBill){echo "selected";}else {echo " ";}  ?> 
                       value="<?= $i ?>"
                       >
                        <?= $arr[$i] ;?>
                      </option>

                   <?php } ?>
                   
                  </select>
                  <!-- </div> -->
                  <div class="block_form d-f g-10 al-c">
                  <input type="hidden" name="id" value="<? $idBill2 ?>">
                  <input type="button" onclick="alert('Khách hàng đã nhận đơn hàng, không thể cập nhật')" value="Cập Nhập" class="submit-general-form" name="capnhap">
                  <input type="reset" value="Hủy" class="cancel-general-form" >
                  <a href="index.php?act=listbill" style="display:block">
                  <input type="button" value="Quay trở lại" style="padding: 8.5px;" class="" >
                  </a>
                  <!-- <a href="index.php?act=lisdm"><input type="button" value="Danh Mục"></a> -->
                  </div>
                    <?php } ?>
              <?php 
                        if(isset($thongbao)&&($thongbao)){
                            echo $thongbao;
                        }
                        
                    ?>
                    
            </form>
              </div>

                    <div  class="thongtingiaohang-bill">
                      <h3>Thông tin giao hàng</h3>
                      <ul>
                      <li><b>Tên người nhận: </b><?=$bill_name?></li>
                      <li><b>Số điện thoại: </b><?=$bill_tel?></li>
                      <li><b>Địa chỉ : </b><?=$bill_address?></li>
                      <li><b>Tổng thanh toán : </b> <span class="price"> <?=$tatal?>Đ </span></li>
                      <li><b>Ngày đặt: </b><?=$ngaydathang?></li>
                      </ul>
                    </div>
                    <!-- <div class="khachhang-bill"></div> -->
                  </div>

                    <hr style="font-size: 2px ;height: 5px;background-color: gray;">

            <?php 
            }      
                ?>
              
                
              
              
              
            <!-- </tbody>          
      
               </table> -->
              

              <!-- </form> -->
            </div>
            <!-- <a href="index.php?act=listbill" class="upgradeStatusAdmin" href="">Cập nhật trạng thái</a> -->
              </section>
    </main>