

<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Add Education</h2>

    <form method="post" action="/console/education/add" novalidate class="w3-margin-bottom">

        <?php echo csrf_field(); ?>

        <div class="w3-margin-bottom">
            <label for="Degree">Degree:</label>
            <input type="text" name="Degree" id="Degree" value="<?php echo e(old('Degree')); ?>" required>
            
            <?php if($errors->first('Degree')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('Degree')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="Discipline">Discipline:</label>
            <input type="text" name="Discipline" id="Discipline" value="<?php echo e(old('Discipline')); ?>" required>
            
            <?php if($errors->first('Discipline')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('Discipline')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="Institute">Institute:</label>
            <input type="text" name="Institute" id="Institute" value="<?php echo e(old('Institute')); ?>" required>
            
            <?php if($errors->first('Institute')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('Institute')); ?></span>
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
            <label for="Started_at">Started At:</label>
            <input type="date" name="Started_at" id="Started_at" value="<?php echo e(old('Started_at')); ?>" required>
            
            <?php if($errors->first('Started_at')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('Started_at')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="Ended_at">Ended At:</label>
            <input type="date" name="Ended_at" id="Ended_at" value="<?php echo e(old('Ended_at')); ?>" required>
            
            <?php if($errors->first('Ended_at')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('Ended_at')); ?></span>
            <?php endif; ?>
        </div>
        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/education/list">Back to Education List</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PHP\Laravelcmsproject\laravel-blade-cms\resources\views/education/add.blade.php ENDPATH**/ ?>