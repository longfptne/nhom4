
<main class="w-100 d-f f-d">
          <div class="contain_product_user_cash d-f">
<?php
$sum = 0;
for($i = 0 ; $i < count($sum_total_cash); $i++ ){
    $sum += $sum_total_cash[$i]['tatal'];
}

?>

            <div class="product d-f f-d admin-block-dashboard">
              <div class="parameter d-f">
                <div>
                  <div class="admin_numberProduct"><?= $count_product ?></div>
                  <div class="admin_textProduct">Số lượng sản phẩm</div>
                </div>
                <div class="admin_icon_product">
                  <i class="fa-solid fa-cart-plus"></i>
                </div>
              </div>
              <div class="more-info info_product d-f jf-c al-c">
                More info
                <div class="admin_icon_more-info">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
            </div>

            <!-- ---------------------------------- -->
            
            <div class=" d-f f-d admin-block-dashboard">
                <div class="parameter d-f admin_money">
                  <div>
                    <div class="admin_numberProduct"><?= number_format($sum) ?></div>
                    <div class="admin_textProduct">Tổng doanh thu</div>
                  </div>
                  <div class="admin_icon_product">
                    <i class="fa-solid fa-money-bill"></i>
                  </div>
                </div>
                <div class="more-info d-f jf-c al-c info_money">
                  More info
                  <div class="admin_icon_more-info">
                      <i class="fa-solid fa-arrow-right"></i>
                  </div>
                </div>
              </div>
  
              <!-- ---------------------------------- -->
              
            <div class=" d-f f-d admin-block-dashboard">
                <div class="parameter d-f admin_user">
                  <div>
                    <div class="admin_numberProduct"><?= $count_taikhoan ?></div>
                    <div class="admin_textProduct">Khách hàng</div>
                  </div>
                  <div class="admin_icon_product">
                    <i class="fa-solid fa-user"></i>
                  </div>
                </div>
                <div class="more-info d-f jf-c al-c info_user">
                  More info
                  <div class="admin_icon_more-info">
                      <i class="fa-solid fa-user"></i>
                  </div>
                </div>
              </div>
  
              <!-- ---------------------------------- -->
          </div>
          <!-- ---------------------Biểu đồ----------------------- -->
          <div class="canvas-chart" style="margin-top: 100px;">
            <canvas id="myChart" style="width:100%;max-width: 80%;height: 350px;"></canvas>
          </div>
        </main>
        <script>
        var xValues = [50,60,70,80,90,100,110,120,130,140,150];
        var yValues = [7,8,8,9,9,9,10,11,14,14,15];
        var zValues = [6,6,8,13,9,9,13,16,14,14,15];
        
        new Chart("myChart", {
          type: "line",
          data: {
            labels: xValues,
            datasets: [{
              fill: false,
              lineTension: 0,
              backgroundColor: "rgba(0,0,255,1.0)",
              borderColor: "rgb(53, 208, 247)",
              data: yValues,
              
            }]
          },
          options: {
            legend: {display: false},
            scales: {
              yAxes: [{ticks: {min: 6, max:16}}],
            }
          }
        });
        </script>