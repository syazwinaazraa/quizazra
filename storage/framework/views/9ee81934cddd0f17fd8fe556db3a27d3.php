
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Edit Data Pelanggan</h3>
        <form action="<?php echo e(url('/pelanggan/' .$row->pel_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Nomor Pelanggan</label>
                <input type="text" name="pel_no" class="form-control" value="<?php echo e($row->pel_no); ?>">
            </div>
            <div class="mb-3">
                <label for="">Golongan Pelanggan</label>
                <select name="pel_id_gol" id="" class="form-control">
                    <option value="">Dipilih Qaqa</option>
                    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($gol->gol_id); ?>"><?php echo e($gol->gol_nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
            </div>
            <div class="mb-3">
                <label for="">Akun Pelanggan</label>
                <select name="pel_id_user" id="" class="form-control">
                    <option value="">Dipilih Qaqa</option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->user_id); ?>"><?php echo e($user->user_nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
            </div>
            <div class="mb-3">
                <label for="">Nama Pelanggan</label>
                <input type="text" name="pel_nama" class="form-control" value="<?php echo e($row->pel_nama); ?>">
            </div>
            <div class="mb-3">
                <label for="">Alamat Pelanggan</label>
                <input type="text" name="pel_alamat" class="form-control" value="<?php echo e($row->pel_alamat); ?>">
            </div>
            <div class="mb-3">
                <label for="">HP Pelanggan</label>
                <input type="text" name="pel_hp" class="form-control" value="<?php echo e($row->pel_hp); ?>">
            </div>
            <div class="mb-3">
                <label for="">KTP Pelanggan</label>
                <input type="text" name="pel_ktp" class="form-control" value="<?php echo e($row->pel_ktp); ?>">
            </div>
            <div class="mb-3">
                <label for="">Seri Pelanggan</label>
                <input type="text" name="pel_seri" class="form-control" value="<?php echo e($row->pel_seri); ?>">
            </div>
            <div class="mb-3">
                <label for="">Meteran Pelanggan</label>
                <input type="text" name="pel_meteran" class="form-control" value="<?php echo e($row->pel_meteran); ?>">
            </div>
            <div class="mb-3">
                <label for="">Keterangan Pelanggan</label>
                <select class= "form-control" name="pel_aktif" id="">
                    <option value="">Dipilih Qaqa</option>
                    <option value="Y">Aktif</option>
                    <option value="N">Tidak Aktif</option>
            </td>    
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-laravel-quiz-azra\resources\views/pelanggan/edit.blade.php ENDPATH**/ ?>