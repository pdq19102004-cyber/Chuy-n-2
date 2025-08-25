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
        p{ color: black; }
    </style>
    <section class="order_details section_gap">
            <div class="container">
                <div class="order_details_table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <a href="/admins/admin/donHang" class="btn btn-info">Quay lại</a>
                            <thead>
                            <tr>
                                <th scope="col">Sản Phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tiền hàng</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $chiTiets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chiTiet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <p><?php echo e($chiTiet->tenSanPham); ?></p>
                                    </td>
                                    <td>
                                        <p>x <?php echo e($chiTiet->soLuong); ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo e($chiTiet->tienHang); ?>đ</p>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <p>Giảm giá</p>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p><?php echo e($hoaDon->giamGia); ?>%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Phí ship</p>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>20000đ</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tổng tiền</p>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <p><?php echo e($hoaDon->tongTien); ?>đ</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Khách hàng</p>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <p><?php echo e($user->hoTen); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Điện thoại</p>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <p><?php echo e($user->sDT); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <p>Địa chỉ:</p>
                                    <p><?php echo e($hoaDon->diaChi); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <p>Ghi chú:</p>
                                    <p><?php echo e($hoaDon->ghiChu); ?></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </section>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make("admin.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web\resources\views/admin/donHang/chiTietDon.blade.php ENDPATH**/ ?>