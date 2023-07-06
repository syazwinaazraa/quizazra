
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Data Pengguna</h3>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session ('success')); ?>

        </div>
        <?php endif; ?>
        <a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('users/create')); ?>">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Email Pengguna</th>
                <th>Password Pengguna</th>
                <th>Nama Pengguna</th>
                <th>Alamat Pengguna</th>
                <th>HP Pengguna</th>
                <th>POS Pengguna</th>
                <th>Akun Pengguna</th>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->user_id); ?></td>
                <td><?php echo e($row->user_email); ?></td>
                <td><?php echo e($row->user_password); ?></td>
                <td><?php echo e($row->user_nama); ?></td>
                <td><?php echo e($row->user_alamat); ?></td>
                <td><?php echo e($row->user_hp); ?></td>
                <td><?php echo e($row->user_pos); ?></td>
                <td><?php echo e(($row['user_aktif'] == 0)? 'Tidak Aktif':'Aktif'); ?></td>
                <td><a class="btn btn-info btn-sm float" href="<?php echo e(url('users/' .$row->user_id. '/edit')); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('users/' .$row->user_id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz_pbwl_azra\resources\views/users/index.blade.php ENDPATH**/ ?>