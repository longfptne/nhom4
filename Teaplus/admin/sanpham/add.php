<!-- Form tạo sản phẩm mới -->
<main class="w-100 d-f f-d">
  <h3>Thêm sản phẩm</h3>

  <div class="search_list-product-admin w-100 d-f jf-c">


    <form class="general-form" action="index.php?act=addsp" method="post" enctype="multipart/form-data">



      <div class="block_form d-f f-d">
        <label class="label_addsp" for="">Tên sản phẩm</label>
        <input class="ten_addsp" placeholder="Tên sản phẩm" type="text" name="tensp" />
      </div>

      <div class="block_form d-f f-d">
        <label class="label_addsp" for="">Giá</label>
        <input class="ten_addsp" type="text" name="giasp" placeholder="Giá sản phẩm" />
      </div>

      <div class="block_form d-f f-d">
        <label class="label_addsp" for="">Hình</label>
        <input class="ten_addsp" type="file" name="hinh" />
      </div>

      <div class="block_form d-f f-d">
        <label class="label_addsp" for="">Mô tả</label>
        <textarea name="mota" id="" cols="30" rows="5"></textarea>
      </div>



      

      <div class="block_form d-f f-d">

        <label for=""> Danh mục </label>
        <select name="iddm">
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            echo '<option value="' . $id . '">' . $name . '</option>';
          }
          ?>

        </select>

      </div>

      <div class="block_form d-f g-10 al-c">
        <input class="submit-general-form" type="submit" name="themmoi" value="THÊM MỚI">
        <input class="input_addsp" type="reset" value="NHẬP LẠI">
        <a href="index.php?act=listsp" style="display:block;border-radius: 4px;padding: 8px 15px;color:var(--white )" class=" cancel-general-form" >Danh sách</a>
      </div>
      <div class="block_form d-f f-d" style="color:green">
      <?php
      if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
      ?>
      </div>
    </form>

  </div>


</main>