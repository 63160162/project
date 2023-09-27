<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('New Post Today')); ?></div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if($message = Session::get('success')): ?>  
                        <div class="alert alert-success alert-block">  
                             
                            <strong><?php echo e($message); ?></strong>  
                        </div>  
                    <?php endif; ?>  

                    <?php echo e(__('You are logged in!')); ?>


                    You are nomal user.

                    </br>
                    <a class='btn btn-primary' href = "<?php echo e(route('home.create')); ?>">Create New Post</a>
                    </br>


                    <?php $__currentLoopData = $new_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card-body">
                        <h5><?php echo e($post->title); ?></h5>
                        <p><?php echo e($post->content); ?></p>
                    <hr>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myProject/resources/views/home.blade.php ENDPATH**/ ?>