<?php if(count($errors) > 0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="w-full mb-2 rounded-md py-2 flex items-center justify-center bg-red-300  flex-col">
                <p class="text-red-600"><?php echo e($error); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?> <?php /**PATH E:\laratodo\laratodo\resources\views/includes/errors.blade.php ENDPATH**/ ?>