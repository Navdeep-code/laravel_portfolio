

<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Manage Skills</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($skills as $skill): ?>
            <tr>
                <td><?php echo e($skill->Name); ?></td>
                <td><a href="/console/skills/edit/<?php echo e($skill->id); ?>">Edit</a></td>
                <td><a href="/console/skills/delete/<?php echo e($skill->id); ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/skills/add" class="w3-button w3-green">New Skill</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PHP\Laravelcmsproject\laravel-blade-cms\resources\views/skills/list.blade.php ENDPATH**/ ?>