<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, sanPham-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                        <div class="col-3">
                            <img style="height: 226.771px; width: 161.181px; object-fit: cover" src="" id="image"
                                 alt="Vui lòng thêm ảnh đại diện">
                        </div>
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
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên: </label></div>
                                    <div class="col-12 col-md-9 " id="name"><input type="text" id="text-input" name="tenSPmoi"
                                                                                   class="form-control ten">
                                        <?php $__errorArgs = ['tenSPmoi'];
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
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hãng: </label></div>
                                    <div class="col-12 col-md-9 " id="name"><input type="text" id="text-input" name="nhaSX"
                                                                                   class="form-control nhaSX">
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
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tồn kho: </label></div>
                                    <div class="col-12 col-md-9 " id="name"><input type="text" id="text-input" name="tonKho"
                                                                                   class="form-control tonKho">
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
                                    <div class="col-3 col-md-3"><label for="text-input" class=" form-control-label">Bảo hành: </label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" class="form-control baoHanh" name="baoHanh">
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
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá nhập: </label></div>
                                    <div class="col-12 col-md-9 " id="name"><input type="text" id="text-input" name="giaNhap"
                                                                                   class="form-control giaNhap">
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
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá bán: </label></div>
                                    <div class="col-12 col-md-9 " id="name"><input type="text" id="text-input" name="giaBan"
                                                                                   class="form-control giaBan">
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
                                        <input type="text" id="text-input" class="form-control namSX" name="namSX">
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
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả:</label></div>
                                    <div class="col-12 col-md-9"><textarea name="moTa" id="textarea-input" rows="9"  class="form-control moTa"></textarea>
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
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh đại diện: </label>
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
                    <strong class="col-2 card-title">Danh sách sản phẩm</strong>
                    <?php if(session('status') !== null): ?>
                        <p class="col-10 text-sm text-success col-8"><?php echo e(session('status')); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-body">
                <form id="searchForm" action="/admins/admin/searchSanPham" method="get">
                    <div class="row form-group">
                        <div class="search-label"><label for="text-input" class=" form-control-label">Tìm kiếm: </label></div>
                        <div class="col-4 " ><input type="text" id="search" name="" class="form-control">
                        </div>
                        <div class="col-4">
                            <select id="selectSearch" onchange="selectName(this);" class="form-control" required>
                                <option id="" value="">Tìm kiếm theo:</option>
                                <option id="" value="id">Id</option>
                                <option id="" value="tenDanhMuc">Danh mục</option>
                                <option id="" value="ten">Tên</option>
                                <option id="" value="tonKho">Tồn kho</option>
                                <option id="" value="giaNhap">Giá nhập</option>
                                <option id="" value="giaBan">Giá bán</option>
                            </select>
                        </div>
                        <div class="col-2"><button type="submit" class="btn btn-primary">Tìm kiếm</button> </div>
                    </div>
                </form>
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered listTable">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Danh mục</th>
                        <th >Tên</th>
                        <th>Tồn kho</th>
                        <th>Giá nhập</th>
                        <th>Giá bán</th>
                        <th>Thêm</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $searchSanPhams = session('searchSanPhams') ?>
                    <?php if($searchSanPhams!=null): ?>
                        <?php
                            $sanPhams =$searchSanPhams;
                        ?>
                    <?php endif; ?>
                    <?php $__currentLoopData = $sanPhams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sanPham): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="max-width: 45px; overflow-x: "><?php echo e($sanPham->id); ?></td>
                            <td><?php echo e($sanPham->tenDanhMuc); ?></td>
                            <td ><?php echo e($sanPham->ten); ?></td>
                            <td ><?php echo e($sanPham->tonKho); ?></td>
                            <td ><?php echo e($sanPham->giaNhap); ?></td>
                            <td ><?php echo e($sanPham->giaBan); ?></td>
                            <td style="max-width: 195px; overflow-x: "> <button type="button" class="btn btn-primary" data-toggle="modal" onclick="detail(<?php echo e(json_encode($sanPham)); ?>)" data-target="#chitiet">
                                    Chi tiết
                                </button>
                                <form id="delete_<?php echo e($sanPham->id); ?>" class="deleteForm" action="/admins/admin/deleteSanPham/<?php echo e($sanPham->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    <a class="nav-link btn btn-danger" href="#" onclick="deletee(<?php echo e($sanPham->id); ?>)"> Xóa</a>
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
        function detail($sanPham){
            let ten= document.querySelector(".ten")
            let nhaSX= document.querySelector(".nhaSX")
            let tonKho= document.querySelector(".tonKho")
            let baoHanh= document.querySelector(".baoHanh")
            let giaNhap= document.querySelector(".giaNhap")
            let giaBan= document.querySelector(".giaBan")
            let namSX= document.querySelector(".namSX")
            let moTa= document.querySelector(".moTa")
            let ids= document.querySelectorAll(".id")
            let image= document.getElementById("image")

            document.getElementById("formEditProfile").action = "/admins/admin/updateSanPham/"+$sanPham.id;
            for (const id of ids) {
                id.value = $sanPham.id
            }
            ten.value= $sanPham.ten
            nhaSX.value = $sanPham.nhaSX
            tonKho.value = $sanPham.tonKho
            baoHanh.value = $sanPham.baoHanh
            giaBan.value = $sanPham.giaBan
            giaNhap.value = $sanPham.giaNhap
            namSX.value = $sanPham.namSX
            moTa.value = $sanPham.moTa

            image.src=""
            getLinkImgPro($sanPham.id)
        }
    </script>
    <?php $__env->stopSection(); ?>
    </body>
    </html>

<?php echo $__env->make("admin.layout.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web\resources\views/admin/sanPham/danhSachSanPham.blade.php ENDPATH**/ ?>