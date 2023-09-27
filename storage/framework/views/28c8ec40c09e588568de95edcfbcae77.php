<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('profile')); ?></div>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                <div class="card-body">
                <a class='btn btn-primary' href = "<?php echo e(route('profile.edit',Auth::user()->id)); ?>">Edit Profile</a>
                    <img src="<?php echo e($data1->path_pic_profile); ?>">
               
                    <h4><?php echo e($data1->name); ?></</h4>
                    <h5><?php echo e($data1->email); ?></</h5>

                
                </div>
            </div>
            <br>
            <h4>Mypost:</h4>
            <hr>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h5><?php echo e($post->title); ?></h5>
                    <p><?php echo e($post->content); ?></p>
                    <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myProject/resources/views/profile.blade.php ENDPATH**/ ?>