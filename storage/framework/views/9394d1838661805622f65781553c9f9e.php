

<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Add Skill</h2>

    <form method="post" action="/console/skills/add" novalidate class="w3-margin-bottom">

        <?php echo csrf_field(); ?>

        <div class="w3-margin-bottom">
            <label for="title">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" required>
            
            <?php if($errors->first('name')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('name')); ?></span>
            <?php endif; ?>
        </div>

        <button type="submit" class="w3-button w3-green">Add Skill</button>

    </form>

    <a href="/console/skills/list">Back to Skill List</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PHP\Laravelcmsproject\laravel-blade-cms\resources\views/skills/add.blade.php ENDPATH**/ ?>