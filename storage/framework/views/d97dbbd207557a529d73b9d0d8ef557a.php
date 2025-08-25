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
    <style>
        .tong{ text-align: right;}
    </style>
    <?php if(count($thongKes)!=0): ?>
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <strong class="card-title">Thống kê tháng <?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $thongKes[0]->updated_at)->format("m/Y")); ?></strong>
                    <a class="btn btn-info" href="/admins/admin/inThongKe/<?php echo e($thongKes[0]->id); ?>">In thống kê</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th scope="col">Tên sản Phẩm</th>
                            <th scope="col">Số lượng nhập</th>
                            <th scope="col">Số lượng bán</th>
                            <th scope="col">Giá nhập</th>
                            <th scope="col">Giá bán</th>
                            <th scope="col">Tổng tiền nhập</th>
                            <th scope="col">Tổng tiền bán</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $x=1 ?>
                        <?php $__currentLoopData = $thongKes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thongKe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($x++); ?></td>
                                <td scope="row"><?php echo e($thongKe->tenSanPham); ?></td>
                                <td><?php echo e($thongKe->soLuongNhap); ?></td>
                                <td><?php echo e($thongKe->soLuongBan); ?></td>
                                <td><?php echo e($thongKe->giaNhap); ?></td>
                                <td><?php echo e($thongKe->giaBan); ?></td>
                                <td><?php echo e($thongKe->tongTienNhapHang); ?></td>
                                <td><?php echo e($thongKe->tongTienBan); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row">Tổng chi</th>
                            <td class="tong" colspan="7"><?php echo e($thongKes[0]->tienChi); ?>đ</td>
                        </tr>
                        <tr>
                            <th scope="row">Tổng thu</th>
                            <td class="tong" colspan="7"><?php echo e($thongKes[0]->tienThu); ?>đ</td>
                        </tr>
                        <tr>
                            <th scope="row">Doanh thu</th>
                            <td class="tong" colspan="7"><?php echo e($thongKes[0]->doanhThu); ?>đ</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php else: ?>
        <h4>Vui lòng thêm sản phẩm trước khi thống kê</h4>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make("admin.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\btlNhom3-main\resources\views/admin/thongKe/thongKe.blade.php ENDPATH**/ ?>