

<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Manage Users</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo e($user->first); ?> <?php echo e($user->last); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->created_at->format('M j, Y')); ?></td>
                <td><a href="/console/users/edit/<?php echo e($user->id); ?>">Edit</a></td>
                <td><a href="/console/users/delete/<?php echo e($user->id); ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/users/add" class="w3-button w3-green">New User</a>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PHP\Laravelcmsproject\laravel-blade-cms\resources\views/users/list.blade.php ENDPATH**/ ?>