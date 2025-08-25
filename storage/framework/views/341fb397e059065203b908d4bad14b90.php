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
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Giỏ hàng</h1>
                    <nav class="d-flex align-items-center">
                        <a href="/">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="/category">Giỏ hàng</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Giá tiền</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img style="width: 150px;height: 100px; " src="/images/<?php echo e($cart->url); ?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo e($cart->ten); ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5><?php echo e($cart->giaBan); ?>đ</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                       <form id="updateSL_<?php echo e($cart->id); ?>" action="/user/capNhatGioHang/<?php echo e($cart->id); ?>" method="post">
                                           <?php echo csrf_field(); ?>
                                           <?php echo method_field("patch"); ?>
                                           <input type="number" name="soLuong" id="sst" maxlength="12" value="<?php echo e($cart->soLuong); ?>"
                                                  onkeyup="tien(this.value,<?php echo e($cart->giaBan); ?>,<?php echo e($cart->id); ?>)"

                                                  class="input-text qty">
                                           <input type="number" name="tongTienBan" id="tongTienBan_<?php echo e($cart->id); ?>" hidden="">
                                       </form>
                                    </div>
                                </td>
                                <td>
                                    <h5 id="tien_<?php echo e($cart->id); ?>" class="tien"><?php echo e($cart->tongTien); ?>đ</h5>
                                </td>
                                <td>
                                    <form action="/user/xoaGioHang/<?php echo e($cart->id); ?>" id="form_<?php echo e($cart->id); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field("delete"); ?>
                                        <a href="#" style="cursor: pointer" onclick="xoa(<?php echo e($cart->id); ?>)"> <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5 >Giảm giá:</h5>
                            </td>
                            <td>
                                <?php if(\Illuminate\Support\Facades\Auth::user()->KHTT==1): ?>
                                    <h5 id="giamGia">10%</h5>
                                <?php else: ?>
                                    <h5 id="giamGia">0%</h5>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5 >Tổng tiền:</h5>
                            </td>
                            <td>
                                <h5 id="tongTien"></h5>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="/category">Tiếp tục mua hàng</a>
                                    <a class="primary-btn" href="/user/datHang">Đặt hàng</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection("src"); ?>
    <script>
        function tien(sl,gt,id){
            document.getElementById("tien_"+id).innerHTML = sl*gt+"đ"
            document.getElementById("tongTienBan_"+id).value=sl*gt
            document.getElementById("updateSL_"+id).submit()
             tongTien()
        }
        function tongTien(){
            tong=0
            tiens= document.querySelectorAll(".tien")
            for (const tien of tiens ) {
                tong+=parseInt(tien.innerHTML.slice(0, -1))
            }
            if (document.getElementById("giamGia").innerHTML.slice(0, -1)!=0){
                tong = tong - tong/parseInt(document.getElementById("giamGia").innerHTML.slice(0, -1))
            }
            document.getElementById("tongTien").innerHTML=tong+"đ"
        }
        tongTien()
        function xoa(id) {
            document.getElementById(`form_${id}`).submit();
        }
    </script>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make("user.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web\resources\views/user/gioHang/gioHang.blade.php ENDPATH**/ ?>