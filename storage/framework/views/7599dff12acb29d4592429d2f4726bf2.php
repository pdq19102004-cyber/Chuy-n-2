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
        .navHD .nav-item{
            margin: 0 10%;
        }
        .navHD .nav-item .nav-link{
            font-size: 17px;
        }
        .navHD .nav-item .nav-link:hover{
            color: #ffa500;
        }
        .order_details nav{
            margin-top: 5%;
        }
    </style>
    <section class="order_details section_gap">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav d-flex flex w-100 justify-content-center navHD">
                        <li class="nav-item ">
                            <a class="nav-link" href="/user/locDon/0">Chờ xác nhận</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/locDon/1">Chờ giao hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/locDon/2">Đã giao</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div id="donHangs">

            <?php $__currentLoopData = $hoaDons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hoaDon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $chiTiets= \Illuminate\Support\Facades\DB::table("chi_tiet_hoa_dons")->where("hoaDon_id","=",$hoaDon->id)->get();
                ?>
                <div class="container">
                    <div class="order_details_table">
                        <h2>Đơn hàng</h2>
                        <div class="table-responsive">
                            <table class="table">
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
                                                <h5>x <?php echo e($chiTiet->soLuong); ?></h5>
                                            </td>
                                            <td>
                                                <p><?php echo e($chiTiet->tienHang); ?>đ</p>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <h4>Giảm giá</h4>
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
                                        <h4>Phí ship</h4>
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
                                        <h4>Tổng tiền</h4>
                                    </td>
                                    <td>
                                        <h5></h5>
                                    </td>
                                    <td>
                                        <p><?php echo e($hoaDon->tongTien); ?>đ</p>
                                    </td>
                                </tr>
                                    <tr>
                                        <td>
                                            <h4>Hình thức thanh toán</h4>
                                        </td>
                                        <td>
                                            <h5></h5>
                                        </td>
                                        <td>
                                            <p><?php echo e($hoaDon->hinhThucThanhToan); ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Tình trạng</h4>
                                        </td>
                                        <td>
                                            <h5></h5>
                                        </td>
                                        <td>
                                            <p><?php echo e($hoaDon->TrangThai); ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a style="float: right; margin-left: 10px" href="/user/chiTietDon/<?php echo e($hoaDon->id); ?>" class="genric-btn info circle">Chi tiết</a>
                            <?php if($hoaDon->danhGia!="đã đánh giá" && $hoaDon->TrangThai=="Đã giao"): ?>
                                <a style="float: right" class="genric-btn success circle arrow" href="/user/danhGia/<?php echo e($chiTiet->tenSanPham); ?>?idHD=<?php echo e($hoaDon->id); ?>" >Đánh giá</a>
                            <?php endif; ?>
                            <?php if($hoaDon->TrangThai!="Đã giao"): ?>
                                <a style="float: right" class="genric-btn danger circle arrow" href="/user/huyDon/<?php echo e($hoaDon->id); ?>" >Hủy đơn</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make("user.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\btlNhom3-main\resources\views/user/donHang/donHangDaDat.blade.php ENDPATH**/ ?>