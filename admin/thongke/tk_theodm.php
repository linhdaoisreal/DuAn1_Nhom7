<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Thống Kê Doanh Thu Theo Danh Mục
        </h1>
    </div>
    <div class="flex items-center justify-center">
        <div id="tk_mien" style="width:100%; max-width:600px; height:500px;"></div><!-- thống kê danh mục mùa -->
        <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div><!-- thống kê theo danh mục miền -->
    </div>


    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Set Data
            const data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng tuor '],
                <?php
                $tongdm = count($tk_dm_mien);
                $i = 1;
                foreach($tk_dm_mien as $tke){
                    echo "['".$tke['ten_mien']."', ".$tke['so_tuor']."]";
                    if($i < $tongdm) {
                        echo ",";
                    }
                    $i += 1;
                }
                ?>
            ]);

            // Set Options
            const options = {
                title: 'Thống Kê Tour Theo Danh Mục Miền'
            };

            // Draw
            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>

    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Set Data
            const data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng tuor '],
                <?php
                $tongdm = count($tk_dm_mua);
                $i = 1;
                foreach($tk_dm_mua as $tke){
                    echo "['".$tke['ten_mua']."', ".$tke['so_tuor']."]";
                    if($i < $tongdm) {
                        echo ",";
                    }
                    $i += 1;
                }
                ?>
            ]);

            // Set Options
            const options = {
                title: 'Thống Kê Tour Theo Danh Mục Mùa'
            };

            // Draw
            const chart = new google.visualization.PieChart(document.getElementById('tk_mien'));
            chart.draw(data, options);
        }
    </script>
        <div class="flex items-center mx-auto justify-center">
            <a href="index.php?act=tk_doanhthu"><input type="button" name="" value="Thống Kê Doanh Thu Theo Ngày" class="bg-orange-300 h-8 w-80 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
            <a href="index.php?act=tk_doanhthu_thang"><input type="button" name="" value="Thống Kê Doanh Thu Theo Tháng" class="bg-orange-300 h-8 w-80 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
        </div>
         
</div>
