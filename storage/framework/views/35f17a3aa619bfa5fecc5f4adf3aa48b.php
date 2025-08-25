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
        .theA{
            position: relative;
        }
        .theA .soLuong{
            left: 70%;
            position: absolute;
        }
    </style>
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="/">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="/user/datHang">Đặt hàng</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <?php
            $user=\Illuminate\Support\Facades\Auth::user();
        ?>
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-12">
                        <h3>Chi tiết thanh toán</h3>
                        <form class="row contact_form" id="form" action="" method="post" novalidate="novalidate">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-12 form-group">
                                <label for="f-option">Họ tên: </label>
                                <input type="text" class="form-control" id="company" name="ten" placeholder="Họ tên" value="<?php echo e($user->hoTen); ?>" disabled>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label for="f-option3">Điện thoại: </label>
                                <input type="text" class="form-control" id="number" name="sDT" value="<?php echo e($user->sDT); ?>" disabled>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label for="f-option3">Email: </label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>" disabled>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="f-option3">Địa chỉ: </label>
                                <input type="text" class="form-control" id="add1" name="diaChi" >
                                <small class="form-text" id="adder" hidden="">Vui lòng nhập địa chỉ</small>
                            </div>
                            <input hidden="" name="redirect">
                            <input  name="hinhThucThanhToan" id="hinhThucThanhToan" hidden="">
                            <div class="col-md-12 form-group">
                                <label for="f-option3">Ghi chú: </label>
                                <textarea class="form-control" id="des" name="ghiChu" id="message" rows="1" ></textarea>
                                <small class="form-text" id="deser" hidden>Vui lòng nhập ghi chú</small>
                            </div>
                            <?php if(\Illuminate\Support\Facades\Auth::user()->KHTT==1): ?>
                                <input type="text" class="form-control" hidden value="10" name="giamGia" >
                            <?php endif; ?>
                            <input type="number" class="d-none" id="tongTien1" value="" name="tongTien">
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="order_box">
                            <h2>Đơn hàng của bạn</h2>
                            <ul class="list">
                                <li><a href="#">Sản phẩm </a></li>
                                <?php $__currentLoopData = $gioHangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gioHang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a class="theA" href="#"><?php echo e($gioHang->ten); ?> <span class="middle soLuong">x <?php echo e($gioHang->soLuong); ?></span> <span class="last tien"><?php echo e($gioHang->tongTien); ?>đ</span></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Tiền hàng <span id="tienHang"></span></a></li>
                                <li><a href="#">Giảm giá
                                            <?php if(\Illuminate\Support\Facades\Auth::user()->KHTT==1): ?>
                                                <span id="giamGia">10%</span>
                                            <?php else: ?>
                                            <span id="giamGia">0%</span>
                                            <?php endif; ?>
                                        </a></li>
                                <li><a href="#">Phí ship <span id="ship">20000đ</span></a></li>
                                <li><a href="#">Tổng tiền <span id="tongTien"></span></a></li>
                            </ul>
                            <div class="payment_item active">
                                <div class="radion_btn paypal">
                                    <input type="radio" id="f-option6" name="selector" onclick="hinhThucThanhToan('VNpay')">
                                    <label for="f-option6">Thanh toan qua VNpay </label>
                                    <img style="width: 287px; height: 31px" src="img/product/card.png" alt="">
                                    <div class="check"></div>
                                </div>
                            </div>
                            <div class="payment_item">
                                <div class="radion_btn paypal">
                                    <input type="radio" id="f-option5" name="selector" onclick="hinhThucThanhToan('Thanh toán khi nhận hàng')">
                                    <label for="f-option5">Thanh toán khi nhận hàng </label>
                                    <div class="check"></div>
                                </div>
                            </div>
                            <a class="primary-btn" href="#" onclick="themHD()">Xác nhận thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection("src"); ?>
    <script>
        let ship = parseInt(document.getElementById("ship").innerHTML.slice(0,-1))
        function tongTien(){
            tong=0
            tiens= document.querySelectorAll(".tien")
            for (const tien of tiens ) {
                tong+=parseInt(tien.innerHTML.slice(0, -1))
            }
            document.getElementById("tienHang").innerHTML=tong+"đ"
            if (document.getElementById("giamGia").innerHTML.slice(0, -1)!=0){
                tong = tong-tong/parseInt(document.getElementById("giamGia").innerHTML.slice(0, -1))
            }
            document.getElementById("tongTien").innerHTML=tong+ship+"đ"
            document.getElementById("tongTien1").value=tong+ship
        }
        tongTien()
        let diachi = document.getElementById("add1")
        let ghichu = document.getElementById("des")
        function themHD() {
            if(diachi.value== ""){
                document.getElementById("adder").removeAttribute("hidden")
            }else if(ghichu.value == ""){
                document.getElementById("deser").removeAttribute("hidden")
            }else {
                document.getElementById('form').submit();
            }
        }
        function hinhThucThanhToan(value){
            document.getElementById("hinhThucThanhToan").value = value
            if(value=="Thanh toán khi nhận hàng"){
                document.getElementById('form').action = "/user/themHoaDon"
                document.getElementById('form').method = "get"
            }else {
                document.getElementById('form').action = "/user/"+value
            }
        }
    </script>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make("user.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\btlNhom3-main\resources\views/user/thanhToan/datHang.blade.php ENDPATH**/ ?>