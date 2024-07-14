<main class="w-100 d-f f-d">
               
               <h1 class="title_product_new">Lịch sử đơn hàng </h1>
               
     
              <!-- ----------------------------------- Form hiển thị giỏ hàng ----v--------------------- -->
              <section class="contain-form-submit-cart w-100 d-f f-d al-c">
              <div class="search_list-product-admin w-100">
              <!-- <form action="" class="d-f form-search" method="post">
              <input
                type="text"
                placeholder="Tìm kiếm theo tên khách hàng..."
                class="input-search"
                name="kyw"
              />
              <input
                type="submit"
                class="submit-search-form"
                value="Tìm kiếm"
                name="listok"
              />
                </form>   -->
              <form action="index.php?act=orderhistory" class="form-submit-cart w-100">         
               <table class="w-100 table_bill-admin">
      
                <thead>
                  <tr>                 
                    <th>ID</th>
                    <th>Khách hàng</th>
                    <th>Địa chỉ nhận hàng</th>
                    <th>Số lượng</th>
                    <th>Thành tiền </th>
                    <th>Tình trạng đơn </th>
                    <th>Ngày đặt hàng</th>
                    <!-- <th>Thao tác</th> -->
                  </tr>
                </thead>
                  <tbody>
                <?php
              
                  
                    foreach($listorder as $bill){
                      extract($bill);
                   
                      
                      $xoaorder="index.php?act=xoabill&id=".$id;
                        $kh=$bill["bill_name"].'
                        <br> '.$bill["bill_address"].'
                        <br>'.$bill["bill_tel"];
                        $ttdh= getStatus($bill["bill_status"],1);
                        $countsp=loadall_cart_count($bill["id"]);
                        if ( $bill["bill_status"]==3) {
                          echo '<tr>                       
                          <td class="td_sp">'.$bill['id'].'</td>
                          <td class="td_sp">'.$bill['bill_name'].'</td>
                          <td class="td_sp">'.$bill['bill_address'].'</td>
                          <td class="td_sp">'.$countsp.'</td>
                          <td class="td_sp"><strong>'.number_format($bill["tatal"]).'</strong> VNĐ</td>
                          <td class="td_sp">'.$ttdh.'</td>
                          <td style="width:70px; padding-right: 10px;" class="td_sp">'.$bill['ngaydathang'].'</td>
                          
                      </tr>';
                        }else{
                          
                        }
                        
                       
                    }
                  

                    // <td class="td_sp"> 
                    //               <a class="url-edit" href="'. $xoaorder.'">
                    //                 <i class="fa-solid fa-trash-can"></i>
                    //               </a> 
                    //     </td>
                
                
                ?>




                </tbody>
      
      
               </table>
              
               
              </form>
            </div>
            <a href="index.php?act=orderhistory" class="upgradeStatusAdmin" href="">Cập nhật trạng thái</a>
              </section>
              </main>