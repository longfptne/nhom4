<main class="w-100 d-f f-d">
          <h3>Quản Lý Tài Khoản</h3>
          <div class="search_list-product-admin w-100">
          <form action="index.php?act=listtk" method="POST" class="d-f form-search">
              <input
                type="text"
                placeholder="Tìm kiếm theo ID tài khoản..."
                class="input-search"
                name="findAcc"
              />
              <input
                type="submit"
                class="submit-search-form"
                value="Tìm kiếm"
                name="findAccSubmit"
              />
            </form>  
            <form action="" class="d-f " >
                <table class="w-100 table_bill-admin">
                    <thead>  
                        <th>Check</th>                      
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Vai trò</th>
                        <th>Chức Năng </th>

                    </thead>
                    <?php foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk="index.php?act=suatk&id=".$id;
                        $xoatk="index.php?act=xoatk&id=".$id;
                        $img = "../upload/" .$avatar;
                        $address = isset($address) ? $address : "null";
                        $tel = isset($tel) ? $tel : "null";
                     ?>
                        <tr>
                                <td><input type="checkbox"></td>                        
                                <td style="width:40px;" > <?= $id ?> </td>
                                <td> 
                                  <div class="border-avatar">
                                    <img style="width:40px;" src="<?= $img ?> " alt="">
                                  </div>
                                </td>
                                <td style="width:140px;"> <?= $user ?>  </td>
                                <td> <?= $pass ?>  </td>
                                <td> <?= $email ?>  </td>
                                <td style="width:180px;"> <?= $address ?>  </td>
                                <td> <?= $tel ?>  </td>
                                <td> <?= $role ?>  </td>
                                <td> 
                                  <a class="url-edit" href="<?= $suatk ?>">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                  </a> 
                                  <a  class="url-delete" href="<?= $xoatk ?>" onclick='return confirm("Delete entry?")'>
                                    <i class="fa-solid fa-trash"></i>
                                  </a> 
                                </td>
                            </tr>
                   <?php } ?>
                  </table>
            </form>
                 
          </div>
        </main>