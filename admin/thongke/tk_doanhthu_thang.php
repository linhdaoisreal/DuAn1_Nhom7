<div class="row flex flex-col flex-1 overflow-y-auto">
    <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Thống kê doanh thu tháng</h3>

    <form action="index.php?act=tk_doanhthu_thang" method="post" class="flex items-center mx-auto justify-center">

        <label for="thang">Tháng:</label>
        <select name="thang" id="thang">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                $selected = ($i == $thang) ? 'selected' : '';
                echo "<option value=\"$i\" $selected> $i</option>";
            }
            ?>
        </select>


        <label for="nam">Năm:</label>
        <select name="nam" id="nam">
            <?php
            $current_year = date("Y");
            for ($i = $current_year; $i >= $current_year - 10; $i--) {
                $selected = ($i == $nam) ? 'selected' : ''; 
                echo "<option value=\"$i\" $selected>$i</option>";
            }
            ?>
        </select>

        <input type="submit" name="baocao" class="text-l bg-orange-300 text-white my-0.5 mt-3.5 rounded-md" value="Xem báo cáo">
        </form>
                    <script src="https://www.gstatic.com/charts/loader.js"></script>

        <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <body>

        <div class="">
            <canvas id="myChart" style="max-width:85%" class="flex items-center mx-auto justify-center"></canvas>
        </div>
        <?php
        $data = array(); // Mảng chứa dữ liệu

        // Lặp qua kết quả truy vấn và lấy dữ liệu

        foreach ($doanh_thu_thang as $row) {
            $data[] = array(
                'label' => $row['ten_tuor'], // Tên danh mục sản phẩm
                'value' => $row['doanh_thu_thang'], // Doanh thu
                'color' => sprintf('#%06X', mt_rand(0, 0xFFFFFF))
            );
        }

        // Sử dụng extract để chuyển các phần tử của mảng thành các biến
        extract($data);
        ?>
        <script>
        const xValues = <?php echo json_encode(array_column($data, 'label')); ?>;
        const yValues = <?php echo json_encode(array_column($data, 'value')); ?>;
        const barColors = <?php echo json_encode(array_column($data, 'color')); ?>;
        <?php
        $tong_doanh_thu = 0;
        foreach ($doanh_thu_thang as $row) {
            $tong_doanh_thu += $row['doanh_thu_thang'];
        }
        $tong_doanh_thu = number_format($tong_doanh_thu, 0, ',', '.') . 'đ';
        ?>

        new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
            display: true,
            text: "Tổng doanh thu: <?=$tong_doanh_thu?>"
            }
        }
        });
    </script>
    <div class="flex items-center mx-auto justify-center">
        <a href="index.php?act=tk_doanhthu"><input type="button" name="" value="Thống Kê Doanh Thu Theo Ngày" class="bg-orange-300 h-8 w-80 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
        <a href="index.php?act=tk_theodm"><input type="button" name="" value="Thống Kê Doanh Thu Theo Danh Mục" class="bg-orange-300 h-8 w-80 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
    </div>
   
</div>