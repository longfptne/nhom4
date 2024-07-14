<main class="w-100 d-f f-d">
          <h3>Thêm loại Hàng</h3>
          <div class="search_list-product-admin w-100 d-f jf-c">
            <form action="index.php?act=adddm" class="general-form" method="post">

              <div class="block_form d-f f-d">
                <label for=""> Mã Loại </label>
                <input type="text" placeholder="Mã Loại" name="maloai" disabled>
              </div>
              <div class="block_form d-f f-d">
                <label for=""> Tên Loại </label>
                <input type="text" placeholder="Tên loại" name="tenloai">
              </div>
              <div class="block_form d-f g-10 al-c">
               <input type="submit" value="Thêm Mới" class="submit-general-form" name="themmoi">
               <input type="reset" value="Hủy" class="cancel-general-form" >
               <!-- <a href="index.php?act=lisdm"><input type="button" value="Danh Mục"></a> -->
              </div>
              <?php 
                        if(isset($thongbao)&&($thongbao)){
                            echo $thongbao;
                        }
                        
                    ?>
            </form>
          </div>
</main>