<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php $__env->startSection("page"); ?>
    <div>
        <h3>7 ngày gần đây</h3>
        <canvas id="myChart"></canvas>
    </div>
    <?php $__currentLoopData = $ngays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ngay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="date" hidden=""><?php echo e(date('d/m/Y', strtotime($ngay))); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $thongKeNgay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thongKe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="soLuong" hidden=""><?php echo e($thongKe["soLuong"]); ?></div>
        <div class="doanhThu" hidden><?php echo e($thongKe["doanhThu"]); ?></div>
        <div class="tienBan" hidden><?php echo e($thongKe["tienBan"]); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("src"); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var dates = document.querySelectorAll(".date")
        var doanhThus = document.querySelectorAll(".doanhThu")
        var tienBans = document.querySelectorAll(".tienBan")
        var soLuongs = document.querySelectorAll(".soLuong")

        let ngays = [];
        let doanhThu = [];
        let tienBan = [];
        let soLuong = [];
        for (const date of dates) {
            ngays.push(date.innerHTML);
        }
        for (const x of doanhThus) {
            doanhThu.push(x.innerHTML);
        }
        for (const y of tienBans) {
            tienBan.push(y.innerHTML);
        }
        for (const z of soLuongs) {
            soLuong.push(z.innerHTML);
        }

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ngays,
                datasets: [
                    {
                        label: ["Số lượng"],
                        data: soLuong,
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Tiền bán',
                        data: tienBan,
                        backgroundColor: 'rgba(0, 123, 255, 0.5)',
                        borderColor: 'rgba(0, 123, 255, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Doanh thu',
                        data: doanhThu,
                        backgroundColor: 'rgba(0, 255, 0, 0.5)',
                        borderColor: 'rgba(0, 255, 0, 1)',
                        borderWidth: 1
                    },
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                animation: {
                    duration: 1000,
                    easing: 'easeOutQuart'
                }
            }
        });

    </script>
<?php $__env->stopSection(); ?>
</body>
</html>


<?php echo $__env->make("admin.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btlNhom3-main\resources\views/admin/thongKe/thongKeTheoNgay.blade.php ENDPATH**/ ?>