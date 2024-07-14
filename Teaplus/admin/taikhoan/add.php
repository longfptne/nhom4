<main class="w-100 d-f f-d">
          <h3>Thêm tài khoản</h3>
          <div class="search_list-product-admin w-100 d-f jf-c">
            <form action="index.php?act=addtk" class="general-form" method="post" enctype="multipart/form-data">
             
              <div class="block_form d-f f-d">
                <label for=""> TÊN ĐĂNG NHẬP  </label>
                <input type="text" placeholder="Tên đăng nhập" name="tentk" >
              </div>
              <div class="block_form d-f f-d">
                <label for="">Mật khẩu</label>
                <input type="password" placeholder="Mật khẩu" name="matkhau">
              </div>
              <div class="block_form d-f f-d">
                <label for="">Email</label>
                <input type="text" placeholder="Email" name="email">
              </div>
              <div class="block_form d-f g-10 al-c">
                <label class="label_addsp" for="">Avatar</label>
                <input class="ten_addsp" type="file" name="hinh" /> 
              </div>
              <div class="block_form d-f g-10 al-c">
               <input type="submit" value="Thêm Mới" class="submit-general-form" name="themmoi">
               <input type="reset" value="Hủy" class="cancel-general-form" >
               <!-- <a href="index.php?act=listtk"><input type="button" value="Danh Mục"></a> -->
              </div>
             

             
              <?php 
                        if(isset($thongbao)&&($thongbao)){
                            echo $thongbao;
                        }
                        
                    ?>
            </form>
          </div>
</main>