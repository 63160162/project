<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--<div class="card-header"><?php echo e(__('Create Post')); ?></div>-->
                    <div class="container">
                        <h3>Create Post</h3><hr>
                       
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <form method='POST' action="<?php echo e(route('profile.update',Auth::user()->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("PUT"); ?>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="form-floating mb-3 ">
                                    <input type="text" class="form-control w-50 " id="floatingInput"  name="name" placeholder="" value="<?php echo e($data1->name); ?>">
                                    <label for="floatingInput">name</label>
                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <br>
                                
                                <?php $__errorArgs = ['image_profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">&nbsp;Input Profile Pic.</label>
                                    <input class="form-control" type="file" id="formFile" name="image_profile">
                                    
                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <!-- <button class="btn btn-danger" type='reset'>ยกเลิก</button>&nbsp;&nbsp;<button class="btn btn-success" type='บันทึก'>ยกเลิก</button>-->
                                <input class="btn btn-danger btn-lg " type='reset' value="ยกเลิก">&nbsp;&nbsp;
                                <input class="btn btn-success btn-lg " type='submit' value="บันทึก">
                            </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myProject/resources/views/edit_profile.blade.php ENDPATH**/ ?>