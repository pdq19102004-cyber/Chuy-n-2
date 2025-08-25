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
    <form action="/admins/admin/create" method="post" enctype="multipart/form-data" class="form-horizontal">
        <?php echo csrf_field(); ?>
        <div class="row form-group">
            <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Tên đăng nhập: </label></div>
            <div class="col-12 col-md-9">
                <input type="text" id="text-input" placeholder="Nhập tên đăng nhập" class="form-control" name="name">
                <?php $__errorArgs = ['name'];
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
            <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Họ tên: </label></div>
            <div class="col-12 col-md-9">
                <input type="text" id="text-input" placeholder="Nhập họ tên" class="form-control" name="hoTen">
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
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email: </label></div>
            <div class="col-12 col-md-9">
                <input type="email" id="email-input" name="newEmail" placeholder="Nhập email" class="form-control">
                <?php $__errorArgs = ['newEmail'];
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
            <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Điện thoại: </label></div>
            <div class="col-12 col-md-9">
                <input type="number" id="text-input" placeholder="Nhập điện thoại" class="form-control" name="sDT">
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
        </div>
        <div class="row form-group">
            <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Ngày sinh: </label></div>
            <div class="col-12 col-md-9">
                <input type="date" id="text-input" placeholder="Nhập ngày sinh" class="form-control" name="ngaySinh">
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
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Mật khẩu: </label></div>
            <div class="col-12 col-md-9"><input type="password" id="password-input" name="password" placeholder="Nhập mật khẩu" class="form-control">
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
            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Nhập lại mật khẩu: </label></div>
            <div class="col-12 col-md-9"><input type="password" id="password-input" name="password_confirmation" placeholder="Nhập lại mật khẩu" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Vai trò: </label></div>
            <div class="col-12 col-md-9">
                <select name="vaiTro" class="form-control">
                    <option value="">Chọn vai trò</option>
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
                <?php $__errorArgs = ['vaiTro'];
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
            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh</label></div>
            <div class="col-12 col-md-9"><input type="file" id="file-input" name="img" class="form-control-file">
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
        </div>
        <div class="row form-group" style="float: right">
            <button type="submit" class="btn btn-primary">Tạo tài khoản</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make("admin.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btlNhom3-main\resources\views/admin/acc/create.blade.php ENDPATH**/ ?>