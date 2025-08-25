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
<form action="/admins/admin/taoSanPham" method="post" enctype="multipart/form-data" class="form-horizontal">
    <?php echo csrf_field(); ?>

    <div class="row form-group">
        <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Tên: </label></div>
        <div class="col-12 col-md-9">
            <input type="text" id="text-input" class="form-control" name="tenSP">
              <?php $__errorArgs = ['tenSP'];
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
        <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Hãng: </label></div>
        <div class="col-12 col-md-9">
            <input type="text" id="text-input" class="form-control" name="nhaSX">
              <?php $__errorArgs = ['nhaSX'];
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
        <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Số lượng nhập: </label></div>
        <div class="col-12 col-md-9">
            <input type="number" id="text-input" class="form-control" name="tonKho">
              <?php $__errorArgs = ['tonKho'];
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
        <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Giá nhập: </label></div>
        <div class="col-12 col-md-9">
            <input type="number" id="text-input" class="form-control" name="giaNhap">
              <?php $__errorArgs = ['giaNhap'];
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
        <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Giá bán: </label></div>
        <div class="col-12 col-md-9">
            <input type="number" id="text-input" class="form-control" name="giaBan">
              <?php $__errorArgs = ['giaBan'];
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
        <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Năm sản xuất: </label></div>
        <div class="col-12 col-md-9">
            <input type="text" id="text-input" class="form-control" name="namSX">
              <?php $__errorArgs = ['namSX'];
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
        <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Bảo hành: </label></div>
        <div class="col-12 col-md-9">
            <input type="text" id="text-input" class="form-control" name="baoHanh">
              <?php $__errorArgs = ['baoHanh'];
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
        <div class="col col-md-3"><label for="select" class=" form-control-label">Danh mục:</label></div>
        <div class="col-12 col-md-9">
            <select name="danhMuc"  class="form-control">
                <option value="">Chọn danh mục</option>
                <?php $__currentLoopData = $danhMucs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $danhMuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($danhMuc->id); ?>"><?php echo e($danhMuc->ten); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
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
    <div class="row form-group">
        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả:</label></div>
        <div class="col-12 col-md-9"><textarea name="moTa" id="textarea-input" rows="9"  class="form-control"></textarea>
            <?php $__errorArgs = ['moTa'];
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
        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh sản phẩm: </label>
        </div>
        <div class="col-12 col-md-9"><input type="file" id="file-input" name="img"
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
    </div>
    <div class="row form-group" style="margin-left: 93%;">
        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("src"); ?>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make("admin.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btlNhom3-main\resources\views/admin/sanPham/taoSanPham.blade.php ENDPATH**/ ?>