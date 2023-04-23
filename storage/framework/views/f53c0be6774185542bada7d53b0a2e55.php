

<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Manage My Projects</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
    <tr class="w3-red">
            <th>Title</th>
            <th>Type</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($myprojects as $myproject): ?>
            <tr>
                <td><?php echo e($myproject->title); ?></td>
                <td><?php echo e($myproject->type->title); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($myproject->date)->format('d/m/Y g:i:s A')); ?></td>
                <td><a href="/console/myprojects/image/<?php echo e($myproject->id); ?>">Image</a></td>
                <td><a href="/console/myprojects/edit/<?php echo e($myproject->id); ?>">Edit</a></td>
                <td><a href="/console/myprojects/delete/<?php echo e($myproject->id); ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/myprojects/add" class="w3-button w3-green">New Project</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PHP\Laravelcmsproject\laravel-blade-cms\resources\views/myprojects/list.blade.php ENDPATH**/ ?>