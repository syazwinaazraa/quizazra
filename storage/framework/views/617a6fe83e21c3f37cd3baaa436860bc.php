
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Tambah Data Pengguna</h3>
        <form action="<?php echo e(url('/users')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Email Pengguna</label>
                <input type="text" name="user_email" class="form-control" placeholder="Email Pengguna">
            </div>
            <div class="mb-3">
                <label for="">Password Pengguna</label>
                <input type="password" name="user_password" class="form-control" placeholder="Password Pengguna">
            </div>
            <div class="mb-3">
                <label for="">Nama Pengguna</label>
                <input type="text" name="user_nama" class="form-control" placeholder="Nama Pengguna">
            </div>
            <div class="mb-3">
                <label for="">Alamat Pengguna</label>
                <input type="text" name="user_alamat" class="form-control" placeholder="Alamat Pengguna">
            </div>
            <div class="mb-3">
                <label for="">HP Pengguna</label>
                <input type="text" name="user_hp" class="form-control" placeholder="HP Pengguna">
            </div>
            <div class="mb-3">
                <label for="">POS Pengguna</label>
                <input type="text" name="user_pos" class="form-control" placeholder="POS Pengguna">
            </div>
            <div class="mb-3">
                <label for="">Akun Pengguna</label>
                <select class= "form-control" name="user_aktif" id="">
                    <option value="">Dipilih Qaqa</option>
                    <option value="Y">Aktif</option>
                    <option value="N">Tidak Aktif</option>
            </td>  
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz_pbwl_azra\resources\views/users/create.blade.php ENDPATH**/ ?>