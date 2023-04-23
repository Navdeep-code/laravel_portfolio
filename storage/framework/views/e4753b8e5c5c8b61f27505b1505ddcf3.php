

<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Add Experience</h2>

    <form method="post" action="/console/experience/add" novalidate class="w3-margin-bottom">

        <?php echo csrf_field(); ?>

        <div class="w3-margin-bottom">
            <label for="Company">Company:</label>
            <input type="text" name="Company" id="Company" value="<?php echo e(old('Company')); ?>" required>
            
            <?php if($errors->first('Company')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('Company')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="Title">Title:</label>
            <input type="text" name="Title" id="Title" value="<?php echo e(old('Title')); ?>" required>
            
            <?php if($errors->first('Title')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('Title')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="Start">Start:</label>
            <input type="date" name="Start" id="Start" value="<?php echo e(old('Start')); ?>" required>
            
            <?php if($errors->first('Start')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('Start')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="End">End:</label>
            <input type="date" name="End" id="End" value="<?php echo e(old('End')); ?>" required>
            
            <?php if($errors->first('End')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('End')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="Location">Location:</label>
            <input type="text" name="Location" id="Location" value="<?php echo e(old('Location')); ?>" required>
            
            <?php if($errors->first('Location')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('Location')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="Description">Description:</label>
            <input type="text" name="Description" id="Description" value="<?php echo e(old('Description')); ?>" required>
            
            <?php if($errors->first('Description')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('Description')); ?></span>
            <?php endif; ?>
        </div>
        <button type="submit" class="w3-button w3-green">Add Experience</button>

    </form>

    <a href="/console/experience/list">Back to Experience List</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PHP\Laravelcmsproject\laravel-blade-cms\resources\views/experience/add.blade.php ENDPATH**/ ?>