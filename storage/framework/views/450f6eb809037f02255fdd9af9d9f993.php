

<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Manage Experience</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Company</th>
            <th>Title</th>
            <th>Description</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($experience as $experiences): ?>
            <tr>
                <td><?php echo e($experiences->Company); ?></td>
                <td><?php echo e($experiences->Title); ?></td>
                <td><?php echo e($experiences->Description); ?></td>
                <td><a href="/console/experience/edit/<?php echo e($experiences->id); ?>">Edit</a></td>
                <td><a href="/console/experience/delete/<?php echo e($experiences->id); ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/experience/add" class="w3-button w3-green">New Experience</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PHP\Laravelcmsproject\laravel-blade-cms\resources\views/experience/list.blade.php ENDPATH**/ ?>