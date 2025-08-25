<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, danhMuc-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php $__env->startSection("page"); ?>
    <div class="modal fade" id="chitiet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-9">
                            <form action="" method="post" id="formEditProfile" enctype="multipart/form-data"
                                  class="form-horizontal" >
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
                                <div class="row form-group d-none">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id: </label></div>
                                    <div class="col-12 col-md-9 " id="name"><input type="text" id="text-input" name="id"
                                                                                   class="form-control id">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên danh mục: </label></div>
                                    <div class="col-12 col-md-9 " id="name"><input type="text" id="text-input" name="danhMucMoi"
                                                                                   class="form-control ten">
                                        <?php $__errorArgs = ['danhMucMoi'];
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
                                <div class="row form-group" style="margin-left: 89%;">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <strong class="col-2 card-title">Danh sách danh mục</strong>
                    <?php if(session('status') !== null): ?>
                        <p class="col-10 text-sm text-success col-8"><?php echo e(session('status')); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-body">
                <form id="searchForm" action="/admins/admin/searchDanhMuc" method="get">
                    <div class="row form-group">
                        <div class="search-label"><label for="text-input" class=" form-control-label">Tìm kiếm: </label></div>
                        <div class="col-4 " ><input type="text" id="search" name="" class="form-control">
                        </div>
                        <div class="col-4">
                            <select id="selectSearch" onchange="selectName(this);" class="form-control" required>
                                <option id="" value="">Tìm kiếm theo:</option>
                                <option id="" value="id">Id</option>
                                <option id="" value="ten">Tên danh mục</option>
                            </select>
                        </div>
                        <div class="col-2"><button type="submit" class="btn btn-primary">Tìm kiếm</button> </div>
                    </div>
                </form>
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered listTable">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th >Tên danh mục</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thêm</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $searchDanhMucs = session('searchDanhMucs') ?>
                    <?php if($searchDanhMucs!=null): ?>
                        <?php
                            $danhMucs =$searchDanhMucs;
                        ?>
                    <?php endif; ?>
                    <?php $__currentLoopData = $danhMucs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $danhMuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($searchDanhMucs!=null): ?>
                            <?php
                                $danhMuc->created_at=\Carbon\Carbon::parse($danhMuc->created_at)->format("d/m/Y");
                                $danhMuc->updated_at=\Carbon\Carbon::parse($danhMuc->updated_at)->format("d/m/Y");
                            ?>
                        <?php endif; ?>
                        <tr>
                            <td style="max-width: 45px; overflow-x: "><?php echo e($danhMuc->id); ?></td>
                            <td ><?php echo e($danhMuc->ten); ?></td>
                            <td style="max-width: 114px; overflow-x: "><?php echo e($danhMuc->created_at); ?></td>
                            <td style="max-width: 114px; overflow-x: "><?php echo e($danhMuc->updated_at); ?></td>
                            <td style="max-width: 195px; overflow-x: "> <button type="button" class="btn btn-primary" data-toggle="modal" onclick="detail(<?php echo e(json_encode($danhMuc)); ?>)" data-target="#chitiet">
                                    Chi tiết
                                </button>
                                <form id="delete_<?php echo e($danhMuc->id); ?>" class="deleteForm" action="/admins/admin/deleteDanhMuc/<?php echo e($danhMuc->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    <a class="nav-link btn btn-danger" href="#" onclick="deletee(<?php echo e($danhMuc->id); ?>)"> Xóa</a>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('src'); ?>
    <script>
        function detail($danhMuc){
            let ten= document.querySelector(".ten")
            let ids= document.querySelectorAll(".id")
            document.getElementById("formEditProfile").action = "/admins/admin/updateDanhMuc/"+$danhMuc.id;
            for (const id of ids) {
                id.value = $danhMuc.id
            }
            ten.value= $danhMuc.ten
        }
    </script>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make("admin.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\btlNhom3-main\resources\views/admin/danhMuc/danhSachDanhMuc.blade.php ENDPATH**/ ?>