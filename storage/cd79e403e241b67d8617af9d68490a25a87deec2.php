
<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('main'); ?>
<h2>Chào mừng bạn đến với trang quản trị</h2>
<html>

<head>
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Tên sản phẩm', 'Số lượng'],


            ]);
            var options = {
                title: 'Top 5 sản phẩm bán chạy'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script> -->
</head>

<body>
    <!-- <div id="piechart" style="height: 500px;"> -->
    <!-- </div> -->
    <h3 class="mt-3">Top 5 sản phẩm bán chạy</h3>
    <?php

    use App\Models\Variation;

    $arrTmp = [];
    foreach ($listProduct as $key => $item) {
        // dd($item);
        foreach ($item->billDetail as $subItem) {
            if (array_key_exists($subItem->variation_id, $arrTmp)) {
                $arrTmp[$subItem->variation_id] += $subItem->quantity;
            } else {
                $arrTmp[$subItem->variation_id] = $subItem->quantity;
            }
        }
    }
    arsort($arrTmp);
    // dd($arrTmp);
    $i = 0;
    foreach ($arrTmp as $key => $item) {
        // echo $key . '-' . $item;
        $i++;
        $model = Variation::where('id', $key)
            ->with('products')
            ->with('color')
            ->with('size')
            ->first();
        // dd($model);
        // echo "['" . $model->products->name . '-' . $model->color->name . '-' . $model->size->name . "'" . ', ' . $item . "],";
        echo "<p>" . $model->products->name . '-' . $model->color->name . '-' . $model->size->name  . ' - Số lượng bán được: ' . $item . "</p>" ;
        if ($i == 5) {
            break;
        }
    }
    ?>
    <div>
        <h4>Tổng doanh thu: <?php echo e($tongTien); ?> VNĐ</h4>
    </div>
</body>

</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\da1\app\views/admin/dashboard.blade.php ENDPATH**/ ?>