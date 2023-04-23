

<?php $__env->startSection('content'); ?>

<section class="w3-padding">
        
    <h2 class="w3-text-blue">About Me!</h2>

    <p>
        Quisque felis ex, pellentesque vel elementum eu, bibendum vel massa. Donec id feugiat 
        erat. Aliquam commodo rutrum velit, vitae vestibulum purus ullamcorper vestibulum. Orci 
        varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </p>

    <h3>My Skills</h3>

    <ul>
        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($skill->Name); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    <?php $__currentLoopData = $myprojects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myproject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3><?php echo e($myproject->title); ?></h3>

            </div>
            
            <?php if($myproject->image): ?>
                <div class="w3-container w3-margin-top">
                    <img src="<?php echo e(asset('storage/'.$myproject->image)); ?>" width="200">
                </div>
            <?php endif; ?>

            <div class="w3-container w3-padding">

                <?php if($myproject->url): ?>
                    View Project: <a href="<?php echo e($myproject->url); ?>"><?php echo e($myproject->url); ?></a>
                <?php endif; ?>

                <p>
                    Posted: <?php echo e($myproject->date); ?>

                    <br>
                    Type: <?php echo e($myproject->type->title); ?>

                </p>

                <a href="/myprojects/<?php echo e($myproject->id); ?>" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 111.222.3333
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.frontend', ['title' => 'Home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PHP\Laravelcmsproject\laravel-blade-cms\resources\views/welcome.blade.php ENDPATH**/ ?>