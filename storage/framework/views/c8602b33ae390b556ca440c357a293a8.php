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
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-between">
                <div class="col-first">
                    <?php if(\Illuminate\Support\Facades\Auth::user()->KHTT==1): ?>
                        <h3>Bạn là khách hàng thân thiết!</h3>
                    <?php endif; ?>
                </div>
                <div class="col-first">
                    <h1>Thông tin</h1>
                    <nav class="d-flex align-items-center">
                        <a href="/">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="/user/thongTin">Thông tin</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout_area section_gap">
        <?php
            $user=\Illuminate\Support\Facades\Auth::user();
        ?>
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-3">
                        <img style="height: 226.771px; width: 161.181px; object-fit: cover" src="<?php echo e(url('/images/' . $url)); ?>"
                             alt="Vui lòng thêm ảnh đại diện">
                    </div>
                    <div class="col-9">
                        <form class="row contact_form" id="form" action="/user/capNhat/<?php echo e($user->id); ?>" method="post" enctype="multipart/form-data" novalidate="novalidate">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-12 form-group">
                                <label for="f-option">Tên đăng nhập: </label>
                                <input type="text" class="form-control" id="company" name="name"  value="<?php echo e($user->name); ?>">
                                <?php $__errorArgs = ['newName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <input type="text" id="text-input" name="vaiTro"
                                   value="<?php echo e($user->vaiTro); ?>" class="form-control" hidden="">
                            <div class="col-md-12 form-group">
                                <label for="f-option">Họ tên: </label>
                                <input type="text" class="form-control" id="company" name="hoTen" placeholder="Họ tên" value="<?php echo e($user->hoTen); ?>">
                                <?php $__errorArgs = ['hoTen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="f-option3">Điện thoại: </label>
                                <input type="text" class="form-control" id="number" name="sDT" value="<?php echo e($user->sDT); ?>">
                                <?php $__errorArgs = ['sDT'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="f-option3">Email: </label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="f-option3">Ngày sinh: </label>
                                <input type="date" class="form-control" id="add1" name="ngaySinh" value="<?php echo e($user->ngaySinh); ?>">
                                <?php $__errorArgs = ['ngaySinh'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="f-option3">Ảnh đại diện: </label>
                                <input type="file" id="file-input" name="img"
                                       class="form-control-file">
                                <?php $__errorArgs = ['img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-12 form-group">
                                <button style="margin-left: 89%" type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </form>
                        <h5>Đổi mật khẩu</h5>
                        <form method="post" action="/profile/password">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Mật khẩu hiện
                                        tại: </label></div>
                                <div class="col-12 col-md-9"><input type="password" id="password-input current_password"
                                                                    name="current_password" placeholder="Nhập mật khẩu cũ"
                                                                    class="form-control">
                                    <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="form-text"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Mật khẩu
                                        mới: </label></div>
                                <div class="col-12 col-md-9"><input type="password" id="password-input password" name="password"
                                                                    placeholder="Nhập mật khẩu mới" class="form-control">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="form-text"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Xác nhận mật khẩu
                                        mới: </label></div>
                                <div class="col-12 col-md-9"><input type="password" id="password-input password_confirmation"
                                                                    name="password_confirmation" placeholder="Nhập lại mật khẩu cũ"
                                                                    class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-left: 90%;">Thay đổi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make("user.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btlNhom3-main\resources\views/user/thongTin/thongTin.blade.php ENDPATH**/ ?>