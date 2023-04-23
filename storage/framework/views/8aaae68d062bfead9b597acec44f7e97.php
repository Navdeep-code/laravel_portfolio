

<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Degree</th>
            <th>Discipline</th>
            <th>Insitute</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($education as $educations): ?>
            <tr>
                <td><?php echo e($educations->Degree); ?></td>
                <td><?php echo e($educations->Discipline); ?></td>
                <td><?php echo e($educations->Institute); ?></td>
                <td><a href="/console/education/edit/<?php echo e($educations->id); ?>">Edit</a></td>
                <td><a href="/console/education/delete/<?php echo e($educations->id); ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/education/add" class="w3-button w3-green">New Education</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PHP\Laravelcmsproject\laravel-blade-cms\resources\views/education/list.blade.php ENDPATH**/ ?>