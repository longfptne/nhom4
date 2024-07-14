<main class="w-100 d-f f-d">

<div class="row">
    <div class="row formtitle ">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>
    
    <div class="search_list-product-admin w-100">
    <form action="" class="d-f form-search" method="post">
              <input
                type="text"
                placeholder="Tìm kiếm theo tên danh mục..."
                class="input-search"
                name="kyw"
              />
              <input
                type="submit"
                class="submit-search-form"
                value="Tìm kiếm"
                name="listok"
              />
            </form>  
            <table class="w-100 table_bill-admin">
                <thead>
                <tr class="maloai">
                    <th class="th_sp">MÃ DANH MỤC</th>
                    <th class="th_sp">TÊN DANH MỤC</th>
                    <th class="th_sp">SỐ LƯỢNG</th>
                    <th class="th_sp">GIÁ CAO NHẤT</th>
                    <th class="th_sp">GIÁ THẤP NHẤT</th>
                    <th class="th_sp">GIÁ TRUNG BÌNH</th>
                    <th class="th_sp">TỔNG TIỀN</th>
                </tr>
                </thead>
                <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '<tr>
                                <td class="td_sp">'.$madm.'</td>
                                <td class="td_sp">'.$tendm.'</td>
                                <td class="td_sp">'.$countsp.'</td>
                                <td class="td_sp">'.number_format($maxprice).'</td>
                                <td class="td_sp">'.number_format($minprice).'</td>
                                <td class="td_sp">'.number_format($avgprice).'</td>
                                <td class="td_sp">'.number_format($sumprice).'</td>
                            </tr>';
                    }

                ?>    

                
               
            </table>
        </div>
        
    <!-- </div> -->
</div> 
</main>
