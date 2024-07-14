<main class="w-100 d-f f-d">
          <h3>Quản Lý Loại Hàng</h3>
          <div class="search_list-product-admin w-100">
          <form action="index.php?act=listdm" method="POST" class="d-f form-search">
              <input
                type="text"
                placeholder="Tìm kiếm theo mã danh mục..."
                class="input-search"
                name="findCate"
              />
              <input
                type="submit"
                class="submit-search-form"
                value="Tìm kiếm"
                name="SubmitFindCate"
              />
            </form>  
            <form action="" class="d-f ">
                <table class="w-100 table">
                    <thead>  
                       <th> <h1> Mã Loại </h1></th>
                        <th> <h1>Tên Loại </h1></th>
                        <th> <h1> Chức Năng</h1></th>

                    </thead>
                             <!-- php -->
                    <?php 
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                        echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td> 
                                <a class="url-edit" href="'. $suadm.'"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="url-delete" href="'. $xoadm.'"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>';
                    }
                    ?>
                  </table>
            </form>
                 
          </div>
        </main>