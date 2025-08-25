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
    <form action="/admins/admin/taoDanhMuc" method="post" enctype="multipart/form-data" class="form-horizontal">
        <?php echo csrf_field(); ?>
        <div class="row form-group">
            <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Tên danh mục: </label></div>
            <div class="col-12 col-md-9">
                <input type="text" id="text-input" placeholder="Nhập tên danh mục" class="form-control" name="danhMuc">
                <?php $__errorArgs = ['danhMuc'];
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
        <div class="row form-group" style="margin-left: 93%;">
            <button type="submit" class="btn btn-primary">Tạo danh mục</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make("admin.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web\resources\views/admin/danhMuc/taoDanhMuc.blade.php ENDPATH**/ ?>